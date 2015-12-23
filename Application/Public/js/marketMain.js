/**
 * 
 */

var registerFlag = 0;

function faceControl(){
    $('body').css('width',document.documentElement.clientWidth);
    $('body').css('height',document.documentElement.clientHeight);
    $('menu').css('left',(document.documentElement.clientWidth-1200) / 2);
    //$('menu').css('height',document.documentElement.clientHeight);
    $('top_menu').css('width',document.documentElement.clientWidth - 272);
    $('content').css('width',document.documentElement.clientWidth - 262);
    $('content').css('height',document.documentElement.clientHeight - 40);
    $('content unit2 detail').css('width',document.documentElement.clientWidth - 475);
    $('menu_ex').css('height',document.documentElement.clientHeight);
    $('detailinfo').css('left',(document.documentElement.clientWidth - 1050) / 2);
    $('publishinfo').css('left',(document.documentElement.clientWidth - 550) / 2);
    $('personinfo').css('left',(document.documentElement.clientWidth - 550) / 2);    
    $('alert').css('top',(document.documentElement.clientHeight - 75) / 2);
    $('alert').css('left',(document.documentElement.clientWidth - 450) / 2);
    
}

function registerEmptyVer(){
	if($('#registername').val() == "" && !$('#registername').hasClass('redBorder')){
		$('#registername').addClass('redBorder');
		registerFlag += 1;
	}
	if($('#registerloginname').val() == "" && !$('#registerloginname').hasClass('redBorder')){
		$('#registerloginname').addClass('redBorder');
		registerFlag += 1;
	}
	if($('#registerpsdag').val() == "" && !$('#registerpsdag').hasClass('redBorder')){
		$('#registerpsdag').addClass('redBorder');
		registerFlag += 1;
	}
	if($('#registeremail').val() == "" && !$('#registeremail').hasClass('redBorder')){
		$('#registeremail').addClass('redBorder');
		registerFlag += 1;
	}
}

/**
 * 搜索公共方法 START
 */
//地区设置
function set_area($level){
	switch($level){
		case '1':
			select_area = area1_val;break;
		case '2':
			select_area = area2_val != 0?area2_val:area1_val;break;
		case '3':
			select_area = area3_val != 0?area3_val:area2_val;break;
	}
	select_arrange();
}

//类别设置
function set_class($level){
	switch($level){
		case '1':
			select_class = class1_val;break;
		case '2':
			select_class = class2_val != 0?class2_val:class1_val;break;
	}
	select_arrange();
}

function select_arrange(){
	offset = -20;
	page = 1;
	$('content').empty();
	select_apply();
}

//申请刷新
function select_apply(){    
	offset += 20;
	if(content_state == 1){
		$.ajax({
			type:'post',
			url:APP + "?m=Home&&c=Market&&a=ajaxGetMarketInfo",
			data:{
				offset:offset,
				select_area:select_area,
				select_older:select_older,
				select_class:select_class,
				pricearea1:pricearea1,
				pricearea2:pricearea2,
				ordertype:ordertype,
				key:key
				},
			dataType:'json',
			success:function(result){
				if(result){
					tag_text_Flash();
					var info = eval(result);
					var content = "";
					content = '<tag>第' + page + '页——' + tag_text + '</tag>';
					for(var i in info){
						content += '<unit bs_type=' + info[i]['id'] + '><img src="' + PUBLIC + '/img/' + info[i]['img'] + '" width="200" height="200"/><info><title>' + info[i]['title'] + '</title><detail><text>' + info[i]['content'] + '</text><price>￥' + info[i]['price'] + '</price><collect>加入收藏</collect></detail></info></unit>';
					}
					page++;
					$('content').append(content);
				}
			}
		})
	}else if(content_state == 2){
    	$.ajax({
			type:'post',
			url:APP + "?m=Home&&c=Market&&a=ajaxGetCheckInfo",
			data:{
				offset:offset,
				select_area:select_area,
				select_older:select_older,
				select_class:select_class,
				pricearea1:pricearea1,
				pricearea2:pricearea2,
				ordertype:ordertype,
				key:key
				},
			dataType:'json',
			success:function(result){
				if(result){
					$('content').append('<tag>查看信息——第' + page + '页</tag>');
					for(var i in result)
					{
						$('content').append('<unit2 uid="' + result[i]['id'] + '"><uid>' + result[i]['id'] + '</uid><img src="' + PUBLIC + '/img/' + result[i]['img'] + '"/><detail><title>' + result[i]['title'] + '</title><text>' + result[i]['content'] + '</text><price>' + result[i]['price'] + '</price><area_name>' + result[i]['area_name'] + '</area_name></detail><edit>编辑</edit><delete>删除</delete></unit2>');
					}
					page++;
					faceControl();
				}
			}
    	})
	}else if(content_state == 3){
    	$.ajax({
			type:'post',
			url:APP + "?m=Home&&c=Market&&a=ajaxGetCollect",
			data:{
				offset:offset,
				select_area:select_area,
				select_older:select_older,
				select_class:select_class,
				pricearea1:pricearea1,
				pricearea2:pricearea2,
				ordertype:ordertype,
				key:key
				},
			dataType:'json',
			success:function(result){
				if(result){
					$('content').append('<tag>查看收藏——第' + page + '页</tag>');
					for(var i in result)
					{
						$('content').append('<unit bs_type=' + result[i]['id'] + '><img src="' + PUBLIC + '/img/' + result[i]['img'] + '" width="200" height="200"/><info><title>' + result[i]['title'] + '</title><detail><text>' + result[i]['content'] + '</text><price>￥' + result[i]['price'] + '</price><delcollect>删除收藏</delcollect></detail></info></unit>');
					}
					page++;
					//调整宽度
					faceControl();
				}
			}
    	})
	}
}

//标题刷新
function tag_text_Flash(){
	var flag = true;
	tag_text = '';
	if(select_area != 0){
		switch(area_level){
			case '1':
				tag_text += ' 地区：' + area1_name;break;
			case '2':
				tag_text += ' 地区：' + area1_name + ' ' + area2_name;break;
			case '3':
				tag_text += ' 地区：' + area1_name + ' ' + area2_name + ' ' + area3_name;break;
		}
		flag = false;
	}
	if(select_class != 0){
		switch(area_level){
			case '1':
				tag_text += ' 类别：' + class1_name;break;
			case '2':
				tag_text += ' 类别：' + class1_name + ' ' + class3_name;break;
		}
		flag = false;
	}
	if(select_older != 0){
		tag_text += ' 新旧：' + older_name ;
		flag = false;
	}
	
	if(flag){
		tag_text = '首页随机信息';
	}
}
//发布验证
function publish_ver(){
	var flag = true;
	if($('#publish_title').val() == ''){
		$('#publish_title').addClass('redBorder');
		flag = false;
	}else{
		$('#publish_title').removeClass('redBorder');
	}
	
	if($('#publish_phone').val() == ''){
		$('#publish_phone').addClass('redBorder');
		flag = false;
	}else{
		$('#publish_phone').removeClass('redBorder');
	}
	
	if($('#publish_price').val() == ''){
		$('#publish_price').addClass('redBorder');
		flag = false;
	}else{
		$('#publish_price').removeClass('redBorder');
	}
	
	return flag;
}
//alert公共设置方法
function alertOn(text,time){	
	swal({   title: text,  timer: time });
}
//alert框定时消失
function alertFadeOut(){
	$('alert').fadeOut(500);
}
function detailinfoClear(){
	$('detailinfo').empty().append('<img/><title></title><text></text><detail><unit>类别：<classes_name></classes_name></unit><unit>地区：<area_name></area_name></unit><unit>联系人称呼：<name></name></unit><unit>新旧：<older></older></unit><unit>联系电话：<phone></phone></unit><unit>状态：<state></state></unit><unit>发布时间：<starttime></starttime></unit><unit>结束时间：<endtime></endtime></unit><unit>价格：￥<price></price></unit><unit><collect>加入收藏</collect></unit></detail>');
}
function publishinfoClear(){
	$('publishinfo').attr('uid','');
	$('publishinfo img').attr('src','');
	$('publishinfo #publish_title').val('');
	$('publishinfo #publish_class1').val(0);
	$('publishinfo #publish_class2').hide();
	$('publishinfo #publish_area1').val(0);
	$('publishinfo #publish_area2').hide();
	$('publishinfo #publish_area3').hide();
	$('publishinfo #publish_name').val('');
	$('publishinfo #publish_older').val('');
	$('publishinfo #publish_phone').val('');
	$('publishinfo #publish_price').val('');
	$('publishinfo #publish_content').val('');
}
//类别设置
function publish_class1_set(){
	var parea1 = $('#publish_class1 option:selected').val();
	$('#publish_class2').empty();
	for(i in classes_arr[parea1]) {
        if (i > 2) {
            $('#publish_class2').append('<option value="' + classes_arr[parea1][i]['id'] + '" parent_id="' + classes_arr[parea1][i]['parent_id'] + '">' + classes_arr[parea1][i]['name'] + '</option>');
        }
    }
	$('#publish_class2').show();
}
//区域设置
function publish_area1_set(){

	var parea1 = $('#publish_area1 option:selected').val();
	$('#publish_area2').empty();
	$('#publish_area2').append('<option value=""></option>');
	for(i in area_arr[parea1]) {
        if (i > 2) {
            $('#publish_area2').append('<option value="' + area_arr[parea1][i]['area_id'] + '" parent_id="' + area_arr[parea1][i]['area_parent_id'] + '">' + area_arr[parea1][i]['area_name'] + '</option>');
        }
    }    	
	$('#publish_area2').show();
	$('#publish_area3').hide();
}
function publish_area2_set(){
	var parea1 = $('#publish_area1 option:selected').val();
	var parea2 = $('#publish_area2 option:selected').val();
	$('#publish_area3').empty();
	for(i in area_arr[parea1][parea2]) {
	    if (i > 2) {
	        $('#publish_area3').append('<option value="' + area_arr[parea1][parea2][i]['area_id'] + '" parent_id="' + area_arr[parea1][parea2][i]['area_parent_id'] + '">' + area_arr[parea1][parea2][i]['area_name'] + '</option>');
	    }
	}
	$('#publish_area3').show();
}

//日期格式化
function getLocalTime(nS) { return new Date(parseInt(nS) * 1000).toLocaleString().replace(/:d{1,2}$/,' '); } 
/**
 * 搜索公共方法 END
 */


window.onresize = function(){
    faceControl();
}




$().ready(function() {
    //界面调整
    faceControl();
    $('menu').click(function(){
    	$('layer').show();
    })
    //第一页标题
    $('tag').html('第' + page + '页——' + tag_text);
    
    /**
     * 登陆注册 START
     */
    if(is_login == 1){
    	$.ajax({
			type:'post',
			url:APP + "?m=Home&&c=Market&&a=ajaxLogin2",
			data:{LoginName:LoginName},
			dataType:'json',
			success:function(result){
				if(result){
					$('user').empty();
					var content = '<unithead><img src="' + PUBLIC + '/img/' + result.photo + '" width="100" height="100" /></unithead><unitinfo>' + result.name + ',欢迎您</unitinfo><backindex>首页</backindex><persondata>个人资料</persondata><release>发布信息</release><checkinfo>查看信息</checkinfo><checkcollect>查看收藏</checkcollect><loginout>注销</loginout>';
					$('user').append($(content));
					Loginid = result.id;
				}
			}
		})
    }
    
    $('logo').click(function(){
    	window.location = APP;
    })
    
    //登录窗
    $('user').on('click','loginbtn',function(){
    	if(!$('registerbtn').hasClass('despise')){
    		$('registerunit').remove();
    		$('registerbtn').addClass('despise');
    		$('loginbtn').removeClass('despise');
    		$(this).insertBefore('registerbtn');
    		$('<loginunit>用户名:<input type="text" id="loginname"/></loginunit><loginunit>密码:<input type="password" id="loginpsd"/></loginunit>').hide().insertBefore(this).fadeIn();
    	}else{
    		$.ajax({
    			type:'post',
    			url:APP + "?m=Home&&c=Market&&a=ajaxLogin",
    			data:{username:$('#loginname').val(),password:$('#loginpsd').val()},
    			dataType:'json',
    			success:function(result){
    				if(result){
    					is_login = true;
    					LoginName = result.LoginName;
    					$('user').empty();
    					var content = '<unithead><img src="' + PUBLIC + '/img/' + result.photo + '" width="100" height="100" /></unithead><unitinfo>' + result.name + ',欢迎您</unitinfo><backindex>返回首页</backindex><persondata>个人资料</persondata><release>发布信息</release><checkinfo>查看信息</checkinfo><checkcollect>查看收藏</checkcollect><loginout>注销</loginout>';
    					$('user').append(content);
    					Loginid = result.id;
    				}
    			}
    		})
    	}
    });
    //注销
    $('user').on('click','loginout',function(){
    	swal({
    		title: "删除注销?",
    		type: "warning",
    		showCancelButton: true,
    		confirmButtonColor: "#DD6B55",
    		confirmButtonText: "确认",
    		cancelButtonText:"取消",
    		closeOnConfirm: false },
    		function(){
		    	$.ajax({
					type:'post',
					url:APP + "?m=Home&&c=Market&&a=ajaxLoginOut",
					dataType:'json',
					success:function(result){
						if(result){
					    	var content = '<loginbtn>登录</loginbtn><registerbtn>注册</registerbtn>';
					    	$('user').empty();
					    	$('user').append(content);
						}
					}
				})
    		}
    	)
    })
    //
    $('user').on('click','registerbtn',function(){
    	if(!$('loginbtn').hasClass('despise')){
    		$('loginunit').remove();
    		$('loginbtn').addClass('despise');
    		$('registerbtn').removeClass('despise');
    		$(this).insertBefore('loginbtn');
    		$('<registerunit>昵称:<input type="text" id="registername"/></registerunit><registerunit>登陆名:<input type="text" id="registerloginname"/></registerunit><registerunit>密码:<input type="password" id="registerpsd"/></registerunit><registerunit>确认密码:<input type="password" id="registerpsdag"/></registerunit><registerunit>邮箱:<input type="text" id="registeremail"/></registerunit>').hide().insertBefore(this).fadeIn();
    	}else{
    		registerEmptyVer();
    		if(registerFlag == 0){
    			$.ajax({
        			type:'post',
        			url:APP + "?m=Home&&c=Market&&a=ajaxRegister",
        			data:{username:$('#registername').val(),name:$('#registerloginname').val(),password:$('#registerpsd').val(),email:$('#registeremail').val()},
        			dataType:'json',
        			success:function(result){
        				if(result){
        					is_login = true;
        					UserID = result.Id;
        					$('user').empty();
        					var content = '<unithead><img src="' + PUBLIC + '/img/' + result.photo + '" width="100" height="100" /></unithead><unitinfo>' + result.name + ',欢迎您</unitinfo><backindex>返回首页</backindex><persondata>个人资料</persondata><release>发布信息</release><checkinfo>查看信息</checkinfo><checkcollect>查看收藏</checkcollect><loginout>注销</loginout>';
        					$('user').append(content);
        				}
        			}
        		})
    		}
    	}
    });
    
    $('user').on('blur','#registerloginname',function(){
    	$.ajax({
    			type:'post',
    			url:APP + "?m=Home&&c=Market&&a=ajaxVerUserName",
    			data:{username:this.value},
    			dataType:'json',
    			success:function(result){
    				if(result && !$(this).hasClass('redBorder')){
    					$('<usernameAlert>此用户名已存在</usernameAlert>').hide().insertAfter($(this).parent()).fadeIn();
    					$(this).addClass('redBorder');
    					registerFlag += 1;
    				}else if(!result && $(this).hasClass('redBorder')){
        				$('usernameAlert').remove();
        				$(this).removeClass('redBorder');
    					registerFlag -= 1;
    				}
    			}
    		})
    })
    
    $('user').on('blur','#registername',function(){
    	if($('#registerpsd').val() != "" && $(this).hasClass('redBorder')){
				$(this).removeClass('redBorder');
				registerFlag -= 1;
    	}
    })
    
    $('user').on('blur','#registerpsdag',function(){
    	if($('#registerpsd').val() != ""){
    		if($('#registerpsd').val() != $(this).val() &&  !$(this).hasClass('redBorder')){
				$('<passwordAlert>两次密码输入不一致</passwordAlert>').hide().insertAfter($(this).parent()).fadeIn();
				$(this).addClass('redBorder');
				registerFlag += 1;
			}else if(!$('#registerpsd').val() != $(this).val() && $(this).hasClass('redBorder')){
				$('passwordAlert').remove();
				$(this).removeClass('redBorder');
				registerFlag -= 1;
			}
    	}
    })
    //验证重复密码输入是否一致
    $('user').on('blur','#registerpsd',function(){
    	if($('#registerpsdag').val() != ""){
    		if($(this).val() != $('#registerpsdag').val() &&  !$('#registerpsdag').hasClass('redBorder')){
				$('<passwordAlert>两次密码输入不一致</passwordAlert>').hide().insertAfter($('#registerpsdag').parent()).fadeIn();
				$('#registerpsdag').addClass('redBorder');
				registerFlag += 1;
			}else if(!$(this).val() != $('#registerpsdag').val() && $('#registerpsdag').hasClass('redBorder')){
				$('passwordAlert').remove();
				$('#registerpsdag').removeClass('redBorder');
				registerFlag -= 1;
			}
    	}
    })
    //验证邮箱
    $('user').on('blur','#registeremail',function(){
    	if($('#registeremail').val() != ""){
    		var reg = /^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/;    		
    		if(!$(this).val().match(reg) &&  !$(this).hasClass('redBorder')){
				$('<emailAlert>邮箱格式不正确</emailAlert>').hide().insertAfter($(this).parent()).fadeIn();
				$(this).addClass('redBorder');
				registerFlag += 1;
			}else if($(this).val().match(reg) && $(this).hasClass('redBorder')){
				$('emailAlert').remove();
				$(this).removeClass('redBorder');
				registerFlag -= 1;
			}
    	}
    })
    /**
     * 登陆注册 END
     */
    
    /**
     * 新旧设置 START
     */
    
    for(i in older_arr){
    	older_str += '<option value="' + older_arr[i]['id'] + '">' + older_arr[i]['name'] + '成新</option>';
    }
    $('#publish_older').append(older_str);
    
    //搜索栏部分JS
    $('search unit[bs_type="older"]').click(function(){
    	menu_type = 'older';
        $('menu_ex').empty();
        $('menu_ex[level="1"]').css('display','block');
        $('shade').css('display','block');
        $('menu_ex[level="1"]').append('<unit value="0">全部</unit>');
        for(i in older_arr){
             $('menu_ex[level="1"]').append('<unit value="' + older_arr[i]['id']+'">'+ older_arr[i]['name'] +'成新</unit>');
        }
    })
    
    /**
     * 新旧设置 END
     */
    /**
     * 类别设置START
     */
    for(i in classes_arr){
    	class1_str += '<option value="' + classes_arr[i]['id']+'" parent_id="'+ classes_arr[i]['parent_id']+'">'+ classes_arr[i]['name'] +'</option>';
    }
    $('#publish_class1').append(class1_str);
    
    
    //搜索栏部分JS
    $('search unit[bs_type="kind"]').click(function(){
    	menu_type = 'class';
        $('menu_ex').empty();
        $('menu_ex[level="1"]').css('display','block');
        $('shade').css('display','block');
        $('menu_ex[level="1"]').append('<unit value="0">全部</unit>');
        for(i in area_arr){
             $('menu_ex[level="1"]').append('<unit value="' + classes_arr[i]['id']+'" parent_id="'+ classes_arr[i]['parent_id']+'">'+ classes_arr[i]['name'] +'</unit>');
        }
    })
    
    //发布商品部分JS
    $('publishinfo #publish_class1').change(function(){
    	publish_class1_set();
    })
    /**
     * 类别设置END
     */
    /**
     * 地区设置 START
     */
    
    for(i in area_arr){
    	area1_str += '<option value="' + area_arr[i]['area_id']+'" parent_id="'+ area_arr[i]['area_parent_id']+'">'+ area_arr[i]['area_name']+'</option>';
    }
    $('#publish_area1').append(area1_str);
    
    //搜索栏部分JS
    $('search unit[bs_type="area"]').click(function(){
    	menu_type = 'area';
        $('menu_ex').empty();
        $('menu_ex[level="1"]').css('display','block');
        $('shade').css('display','block');
        $('menu_ex[level="1"]').append('<unit value="0">全部</unit>');
        for(i in area_arr){
             $('menu_ex[level="1"]').append('<unit value="'+ area_arr[i]['area_id']+'" parent_id="'+ area_arr[i]['area_parent_id']+'">'+ area_arr[i]['area_name']+'</unit>');
        }
    })
    
    //发布商品部分JS
    $('publishinfo #publish_area1').change(function(){
    	publish_area1_set();
    })
    $('publishinfo #publish_area2').change(function(){
    	publish_area2_set();
    })


    /**
     * 地区设置 END
     */
    
    /**
     * 搜索栏 START
     */
    
    $('search #search').blur(function(){
    	key = $(this).val();
    	select_arrange();
    })
    
    /**
     * 搜索栏 END
     */
    /**
     * 搜索价格栏 START
     */
    
    $('search unit[bs_type="price"]').click(function(){
    	if(!lock_flag){
    		if($('search #price1').length == 0){
		    	var price1 = '';
		    	var price2 = '';
		    	if($('search price1').length > 0){
		    		price1 = $('search price1').html();
		    		price2 = $('search price2').html();
		    	}
		    	$(this).html('<input type="text" id="price1" value="' + price1 + '" size="6"/>-<input type="text" id="price2" value="' + price2 + '" size="6"/><input type="button" id="checkprice" value="确认"/>');
    		}
    	}else{
    		lock_flag = false;
    	}
    })
    $('search unit[bs_type="price"]').on('click','#checkprice',function(){
    	lock_flag = true;
    	pricearea1 = $('search #price1').val();
    	pricearea2 = $('search #price2').val();
    	if(!pricearea1 && !pricearea2){
    		$('search unit[bs_type="price"]').html('价格');        	
    	}else if(pricearea1 && !pricearea2){
    		$('search unit[bs_type="price"]').html('大于<price1>' + pricearea1 + '</price1><price2></price2>')
    	}else if(!pricearea1 && pricearea2){
    		$('search unit[bs_type="price"]').html('<price1></price1>小于<price2>' + pricearea2 + '</price2>')
    	}else{
    		$('search unit[bs_type="price"]').html('<price1>' + pricearea1 + '</price1>-<price2>' + pricearea2 + '</price2>')
    	}
    	
    	select_arrange();
    })
    /**
     * 搜索价格栏 END
     */
    /**
     * 搜索栏三级菜单选择 START
     */
    
    $('body').on('mouseenter','menu_ex[level="1"] unit',function(){
    	if(menu_type == 'area'){
	        $('menu_ex[level="2"]').empty();
	        $('menu_ex[level="3"]').empty();
	        $('menu_ex[level="1"] unit').removeClass('is_select');
	        $(this).addClass('is_select');
	        area1_val = $(this).attr('value');
	        area1_name = $(this).html();
	        $('menu_ex[level="2"]').css('display','block');
	        $('menu_ex[level="2"]').append('<unit value="0">全部</unit>');
	        for(i in area_arr[area1_val]) {
	            if (i > 2) {
	                $('menu_ex[level="2"]').append('<unit value="' + area_arr[area1_val][i]['area_id'] + '" parent_id="' + area_arr[area1_val][i]['area_parent_id'] + '">' + area_arr[area1_val][i]['area_name'] + '</unit>');
	            }
	        }
    	}else if(menu_type == 'class'){
	        $('menu_ex[level="2"]').empty();
	        $('menu_ex[level="1"] unit').removeClass('is_select');
	        $(this).addClass('is_select');
	        class1_val = $(this).attr('value');
	        class1_name = $(this).html();
	        $('menu_ex[level="2"]').css('display','block');
	        $('menu_ex[level="2"]').append('<unit value="0">全部</unit>');
	        for(i in classes_arr[class1_val]) {
	            if (i > 2) {
	                $('menu_ex[level="2"]').append('<unit value="' + classes_arr[class1_val][i]['id'] + '" parent_id="' + classes_arr[class1_val][i]['parent_id'] + '">' + classes_arr[class1_val][i]['name'] + '</unit>');
	            }
	        }
    	}
    });
    $('body').on('mouseenter','menu_ex[level="2"] unit',function(){
        $('menu_ex[level="2"] unit').removeClass('is_select');
        $(this).addClass('is_select');
    	if(menu_type == 'area'){
	        $('menu_ex[level="3"]').empty();
	        area2_val = $(this).attr('value');
	        area2_name = $(this).html();
	        $('menu_ex[level="3"]').css('display','block');
	        $('menu_ex[level="3"]').append('<unit value="0">全部</unit>');
	        for(i in area_arr[area1_val][area2_val]) {
	            if (i > 2) {
	                $('menu_ex[level="3"]').append('<unit value="' + area_arr[area1_val][area2_val][i]['area_id'] + '" parent_id="' + area_arr[area1_val][area2_val][i]['area_parent_id'] + '">' + area_arr[area1_val][area2_val][i]['area_name'] + '</unit>');
	            }
	        }
    	}
    });
    $('body').on('mouseenter','menu_ex[level="3"] unit',function(){
        $('menu_ex[level="3"] unit').removeClass('is_select');
        $(this).addClass('is_select');
    });
    $('body').on('click','menu_ex unit',function(){
    	
    	if(menu_type == 'area'){
    		area_level = $(this).parent().attr('level');
	        switch(area_level) {
	            case '1':
	                area1_name = $(this).html();
	                area2_name = "";
	                area3_name = "";
	                area1_val = $(this).attr('value');
	                area2_val = '';
	                area3_val = '';
	                break;
	            case '2':
	                area2_name = $(this).html();
	                area3_name = "";
	                area2_val = $(this).attr('value');
	                area3_val = '';
	                break;
	            case '3':
	                area3_name = $(this).html();
	                area3_val = $(this).attr('value');
	                break;
	        }	        
	        $('search unit[bs_type="area"]').html(area1_name+' '+area2_name+' '+area3_name);
	        set_area(area_level);
    	}else if(menu_type == 'class'){
    		class_level = $(this).parent().attr('level');
    		switch(class_level) {
	            case '1':
	                class1_name = $(this).html();
	                class2_name = "";
	                class1_val = $(this).attr('value');
	                class2_val = '';
	                break;
	            case '2':
	            	class2_name = $(this).html();
	            	class2_val = $(this).attr('value');
	                break;
	        }	        
	        $('search unit[bs_type="kind"]').html(class1_name+' '+class2_name);
	        set_class(class_level);
    	}else if(menu_type == 'older'){
	        older_name = $(this).html();
	        older_val = $(this).attr('value');
	        select_older = older_val;
	        $('search unit[bs_type="older"]').html(older_name);
	        select_arrange();
    	}
        $('menu_ex').empty();
        $('shade').css('display','none');
    })
    
    /**
     * 搜索栏三级菜单 END
     */
    
    /**
     * 图片上传部分 START
     */
    
    // 创建一个上传参数
       var uploadOption =
       {
           // 提交目标
           action: APP + "?m=Home&&c=Market&&a=ajaxImgUpload",
			// 服务端接收的名称
			name: "file",
           // 自动提交
           autoSubmit: false,
           // 选择文件之后…
           onChange: function (file, extension) {
               if (new RegExp(/(jpg)|(jpeg)|(bmp)|(gif)|(png)/i).test(extension)) {
                   $("#imgupload").val(file);
               } else {
            	   $("#imgupload").val("只限上传图片文件，请重新选择！");
               }
               oAjaxUpload.submit();
           },
           // 开始上传文件
           onSubmit: function (file, extension) {
               $("#imgupload").val("正在上传" + file + "..");
           },
           // 上传完成之后
           onComplete: function (file, response) {
        	   var result = eval(response);
               if (result[0] == "success") {
            	   $("#imgupload").val("上传完成！");
            	   $('publishinfo img').attr('src',result[1]);
            	   $('publishinfo #selector').val(result[2]);
               }
               else {
            	   $("#imgupload").val(response);
               }
           }
       }

       // 初始化图片上传框
       var oAjaxUpload = new AjaxUpload('#selector', uploadOption);
    
    /**
     * 图片上传部分 END
     */
    
    /**
     * 发布信息 START
     */
   $('user').on('click','release',function(){
	   publishinfoClear();
	   $('publishinfo').fadeIn();	
   })

   $('publishinfo #imgupload').click(function(){
	   	$('#absFileInput').click();
   })
   
   $('publishinfo exit').click(function(){
	   $('publishinfo').hide();
       $('shade').hide();
   })
   
   $('publishinfo submit').click(function(){
	   var uid = $('publishinfo').attr('uid');
	   if(publish_ver()){
		   $.ajax({
				type:'post',
				url:APP + "?m=Home&&c=Market&&a=ajaxPublishInfo",
				data:{
					publish_uid:uid,
					publish_title:$('#publish_title').val(),
					publish_classes:',' + $('#publish_class1').val() + ',' + $('#publish_class2').val() + ',',
					publish_classes_name:$('#publish_class1 option:selected').text() + ',' + $('#publish_class2 option:selected').text(),
					publish_area:',' + $('#publish_area1').val() + ',' + $('#publish_area2').val() + ',' + $('#publish_area3').val() + ',',
					publish_area_name:$('#publish_area1 option:selected').text() + ',' + $('#publish_area2 option:selected').text() + ',' + $('#publish_area3 option:selected').text(),
					publish_name:$('#publish_name').val(),
					publish_older:$('#publish_older').val(),
					publish_userid:Loginid,
					publish_older_name:$('#publish_older option:selected').text(),
					publish_phone:$('#publish_phone').val(),
					publish_price:$('#publish_price').val(),
					publish_content:$('#publish_content').val(),
					publish_img:$('#selector').val()
				},
				dataType:'json',
				success:function(result){
					if(result.state){
						$('content unit2[uid = "' + uid + '"] img').attr('src',PUBLIC + "/img/" + result.img);
						$('content unit2[uid = "' + uid + '"] title').html(result.title);
						$('content unit2[uid = "' + uid + '"] text').html(result.content);
						$('content unit2[uid = "' + uid + '"] price').html(result.price);
						$('content unit2[uid = "' + uid + '"] area_name').html(result.area_name);
						$('publishinfo').hide();
						$('shade').hide();
						alertOn('发布成功',2000);
					}else{
						alertOn('发布失败',3000);
					}
				}
			})    	
	   }
   })
    
    /**
     * 发布信息 END
     */
    
    /**
     * 信息 显示 START
     */
    $('body').on('mouseenter','content unit',function() {
        $(this).find('detail').css('display','block');
    });
    $('body').on('mouseleave','content unit',function() {
        $(this).find('detail').css('display','none');
    });
    
    $('content').scroll(function(){
        if($('content').get(0).scrollHeight<$('content').scrollTop()+$('content').height()+20)
        {
        	select_apply();
        } 
    });
    
    $('content').on('click','unit',function(){
    	if(!lock_flag){
	    	detailinfoClear();
	    	var id = $(this).attr('bs_type');
	    	$.ajax({
				type:'post',
				url:APP + "?m=Home&&c=Market&&a=ajaxGetDetailInfo",
				data:{id:id},
				dataType:'json',
				success:function(result){
					$('detailinfo img').attr('src',PUBLIC + '/img/' + result.img);
					$('detailinfo title').html(result.title);
					$('detailinfo text').html(result.content);
					$('detailinfo classes_name').html(result.classes_name);
					$('detailinfo area_name').html(result.area_name);
					$('detailinfo name').html(result.name);
					$('detailinfo older').html(result.older);
					$('detailinfo phone').html(result.phone);
					$('detailinfo state').html(result.state);
					$('detailinfo starttime').html(getLocalTime(result.starttime));
					$('detailinfo endtime').html(result.endtime);
					$('detailinfo price').html(result.price);
					$('shade').show();
					$('detailinfo').fadeIn();	
				}
			})    	
    	}else{
    		lock_flag = false;
    	}
    })
    
    $('content').on('click','collect',function(){
    	var id = $(this).closest('unit').attr('bs_type');
    	lock_flag = true;
    	$.ajax({
			type:'post',
			url:APP + "?m=Home&&c=Market&&a=ajaxCollect",
			data:{id:id},
			dataType:'json',
			success:function(result){
				if(result){
					alertOn('收藏成功',1000);
				}else{
					alertOn('您已收藏过此信息',2000);
				}
			}
    	})
    })
    /**
     * 信息 显示 END
     */
    
    /**
     * 个人信息 START
     */
    $('user').on('click','persondata',function(){
    	$.ajax({
			type:'post',
			url:APP + "?m=Home&&c=Market&&a=ajaxGetPersonInfo",
			dataType:'json',
			success:function(result){
				$('personinfo UID').html(result.id);
				$('personinfo Name').html(result.name);
				$('personinfo LoginName').html(result.loginname);
				$('personinfo EXP').html(result.level);
				$('personinfo PHONE').html(result.phone);
				$('personinfo EMAIL').html(result.email);
				$('shade').show();
		    	$('personinfo').fadeIn();	
			}
    	})
    })
    
    /**
     * 个人信息END
     */
    /**
     * 查看信息 START
     */
    
    $('user').on('click','checkinfo',function(){
    	content_state = 2;
    	select_arrange();
    })
    
    $('content').on('click','detail',function(){
    	detailinfoClear();
    	var id = $(this).closest('unit2').attr('uid');
    	$.ajax({
			type:'post',
			url:APP + "?m=Home&&c=Market&&a=ajaxGetDetailInfo",
			data:{id:id},
			dataType:'json',
			success:function(result){
				$('detailinfo img').attr('src',PUBLIC + '/img/' + result.img);
				$('detailinfo title').html(result.title);
				$('detailinfo text').html(result.content);
				$('detailinfo classes_name').html(result.classes_name);
				$('detailinfo area_name').html(result.area_name);
				$('detailinfo name').html(result.name);
				$('detailinfo older').html(result.older);
				$('detailinfo phone').html(result.phone);
				$('detailinfo state').html(result.state);
				$('detailinfo starttime').html((result.starttime));
				if(result.endtime){
					$('detailinfo endtime').html(result.endtime);
				}else{
					$('detailinfo endtime').remove();
				}
				$('detailinfo price').html(result.price);
				$('shade').show();
				$('detailinfo').fadeIn();	
			}
		})    	
    })
    //编辑
    $('content').on('click','edit',function(){
    	publishinfoClear();
    	var id = $(this).closest('unit2').attr('uid');
    	$.ajax({
			type:'post',
			url:APP + "?m=Home&&c=Market&&a=ajaxGetDetailInfo",
			data:{id:id},
			dataType:'json',
			success:function(result){
				var classval = result.classes.split(',');
				var areaval = result.area.split(',');
				$('publishinfo').attr('uid',result.id);
				$('publishinfo img').attr('src',PUBLIC + '/img/' + result.img);
				$('publishinfo #publish_title').val(result.title);
				$('publishinfo #publish_content').val(result.content);
				$('publishinfo #publish_class1').val(classval[1]);
				if(classval[2]){
					publish_class1_set();
					$('publishinfo #publish_class2').val(classval[2]);
				}
				$('publishinfo #publish_area1').val(areaval[1]);
				if(areaval[2]){
					publish_area1_set();
					$('publishinfo #publish_area2').val(areaval[2]);
				}
				if(areaval[3]){
					publish_area2_set();
					$('publishinfo #publish_area3').val(areaval[3]);
				}
				$('publishinfo #publish_name').val(result.name);
				$('publishinfo #publish_older').val(result.older);
				$('publishinfo #publish_phone').val(result.phone);
				$('publishinfo #publish_price').val(result.price);
				$('publishinfo #publish_class2').show();
				$('publishinfo #selector').val(result.img);
				$('shade').show();
				$('publishinfo').fadeIn();	
			}
		})    	
    })
    //删除
    $('content').on('click','delete',function(){
    	var id = $(this).closest('unit2').attr('uid');
    	swal({
    		title: "删除确认?",
    		text: "确定要删除id为" + id + "的信息吗!",
    		type: "warning",
    		showCancelButton: true,
    		confirmButtonColor: "#DD6B55",
    		confirmButtonText: "删除",
    		cancelButtonText:"取消",
    		closeOnConfirm: false },
    		function(){
    	    	$.ajax({
    				type:'post',
    				url:APP + "?m=Home&&c=Market&&a=ajaxDeleteInfo",
    				data:{id:id},
    				dataType:'json',
    				success:function(result){
    					if(result != 0){
    						$('unit2[uid="' + id + '"]').remove();
    						alertOn('成功删除',1000);					
    					}else{
    						alertOn('删除失败',1500);
    					}
    				}
    	    	})
    		}
    	);
    })
    /**
     * 查看信息 END
     */
    
    /**
     * 查看收藏 START
     */
    $('user').on('click','checkcollect',function(){
    	content_state = 3;
    	select_arrange();
    })
    
    /**
     * 查看收藏 END
     */
    
    /**
     * 返回主页 START
     */
    
    $('user').on('click','backindex',function(){
    	content_state = 1;
    	select_arrange();
    })
    
    /**
     * 返回主页 END
     */
    /**
     * shade START
     */
    $('body').on('click','shade',function(){
    	$('menu_ex').empty();
    	$('detailinfo').hide();	
    	$('personinfo').hide();
    	$('publishinfo').hide();	
        $('shade').hide();
    })
    
    
    /**
     * shade END
     */
});