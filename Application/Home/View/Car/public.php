<html>
<head> 
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="__PUBLIC__/img/favicon.ico">
	<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Welcome</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="__PUBLIC__/prettyphoto/css/prettyPhoto.css" type="text/css" media="screen" />
<link rel="stylesheet" href="__PUBLIC__/css/Index/flexslider.css" type="text/css" media="screen" /> <!-- Slider Stylesheet -->
<link rel="stylesheet" href="__PUBLIC__/css/Index/reset.css">
<link rel="stylesheet" href="__PUBLIC__/css/Index/style1.css">
<link href='http://fonts.useso.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
<link href='__PUBLIC__/css/House/houselist1.css' rel='stylesheet' type='text/css' />
</head>

<body>

	<!-- Logo Starts Here 
==================================================== -->
<div id="top"> <!-- Top Div Open -->
<div style="float:right;padding:10px;margin:10px;"> <!-- Logo Div -->
	<?php if(($_SESSION['LoginName'])&&($_SESSION['is_login'])){?>
		欢迎您：<?php echo $_SESSION['LoginName'];?>
	<ul>
		<li><a href="__APP__/home/index/loginout">退出</a></li>
		</ul>
	   <?php }else{?>
		<ul>
			<li><a href="__APP__/home/index/login">登录</a></li>
			<li><a href="__APP__/home/index/reg">注册</a></li>
		</ul>
	<?php }?>
	</div> <!-- Closes Logo Div -->
<div id="topband">

	<div id="logo"> <!-- Logo Div -->
			<img src="__PUBLIC__/img/Index/logofooter.png" alt="logo">
	</div> <!-- Closes Logo Div -->
	
</div>

<div id="menuband">

	<ul id="menu1">
			<li><a href="__APP__/Home/House/" class="smoothScroll">首页</a></li> <!-- menu item -->
			
			<li><a href="__APP__/Home/House/house_list?leixing=3" class="smoothScroll">新房</a></li> <!-- menu item -->
			
			<li><a href="__APP__/Home/House/house_list?leixing=2">二手房</a></li> <!-- menu item -->
			
			<li><a href="__APP__/Home/House/house_list?leixing=1">租房</a></li> <!-- menu item -->

			<li><a href="#team" class="smoothScroll">论坛</a></li> <!-- menu item -->

			<li><a href="__APP__/Home/House/fabu" class="smoothScroll">发布</a></li> <!-- menu item -->

			<li><a href="#team" class="smoothScroll">看房团预约</a></li> <!-- menu item -->

			<li><a href="#contactus" class="smoothScroll">会员中心</a></li> <!-- menu item -->

	</ul>

		<select onchange="MobilescrollToThis(this.value)" name="dropdpown">
				<option selected="selected" value>Menu</option> 			    
			    <option value="#top" >TOP</option> 
			    <option value="#work">WORK</option> 
			    <option value="#services">SERVICES</option> 
			    <option value="#about">ABOUT</option> 
			    <option value="#team">TEAM</option> 
			    <option value="#contactus">CONTACT</option> 
  		</select> 
</div>

<div id="menuband1">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwULLTExMDE2MzcyNDVkZA==" />
</div>
<input type="hidden" id="js_ismonitor400" value="True" />
 <div class="centmain-wraper">
            <div class="centmain-inner">
                
                <!-- 主体内容 -->
                <div class="result-lists">
                    <div class="select-bar clearfix">
                        <ul class="sort-rule fl">
                            <li style="margin-left:550px;font-size:21px;"><span><a href="__APP__/Home/House/fabu">发布房屋信息</a><a href="__APP__/Home/House/newfabu" style="font-size: 18px;margin-right:10px;">发布新楼盘</a></span></li>
                       </ul>
                </div>

<div class="house-main">
<!-- Intro Text -->
<div class="middle-layout" >
  <div class="tabs-panel middle-goods-list tabs-hide">
  <form method="POST" id="house_form" action="__APP__/home/house/fabuadd" enctype=”multipart/form-data">
    <?php if ($leixing==3){?>
    <div id="37ca7c51-d300-c49d-c237-08d2fa19a5d1" class="house-item1 clearfix">
    <div class="item-info fl">                    
                <p class="f14 f000 mb_10">
                新楼盘名称：                  <INPUT type="text" name = "housename" id="housename" >
      </p>
      </div>
     </div>
    <div id="37ca7c51-d300-c49d-c237-08d2fa19a5d1" class="house-item1 clearfix">
    <div class="item-info fl">                    
                <p class="f14 f000 mb_10">
              新楼盘价格（每套）：<INPUT type="text" name = "amountprice" id="amountprice" >万
      </p>
      </div>
     </div>
     <div id="37ca7c51-d300-c49d-c237-08d2fa19a5d1" class="house-item1 clearfix">
    <div class="item-info fl">                    
                <p class="f14 f000 mb_10">
                新楼房地址：<INPUT type="text" name = "houseaddress" id="houseaddress" >
      </p>
      </div>
     </div>
     <div id="37ca7c51-d300-c49d-c237-08d2fa19a5d1" class="house-item1 clearfix">
    <div class="item-info fl">                    
                <p class="f14 f000 mb_10">
                新房属性：<INPUT type="text" name = "shi" id="shi" >室<INPUT type="text" name = "ting" id="ting" >厅<INPUT type="text" name = "wei" id="wei" >卫
      </p>
      </div>
     </div>
     <div id="37ca7c51-d300-c49d-c237-08d2fa19a5d1" class="house-item1 clearfix">
    <div class="item-info fl">                    
                <p class="f14 f000 mb_10">
                新房尺寸：<INPUT type="text" name = "chicun" id="chicun" >平米
      </p>
      </div>
     </div>
     <div id="37ca7c51-d300-c49d-c237-08d2fa19a5d1" class="house-item1 clearfix">
    <div class="item-info fl">                    
                <p class="f14 f000 mb_10">
上传房屋图片： <ul class="goods-pic-list" nctype="">
          <li class="ncsc-goodspic-upload">
          <div class="ncsc-upload-btn"><a href="javascript:void(0);"><span><input type="file" hidefocus="true" size="1" class="input-file" name="image1" id="image1"></span></a></div>            
          </li>
        </ul>      </p>
      </div>
     </div>
     <div id="37ca7c51-d300-c49d-c237-08d2fa19a5d1" class="house-item1 clearfix">
    <div class="item-info fl">                    
                <p class="f14 f000 mb_10">
                新楼盘联系人：<INPUT type="text" name = "lianxirenname" id="lianxirenname" >
      </p>
      </div>
     </div>
     <div id="37ca7c51-d300-c49d-c237-08d2fa19a5d1" class="house-item1 clearfix">
    <div class="item-info fl">                    
                <p class="f14 f000 mb_10">
                售楼处联系电话：<INPUT type="text" name = "phone" id="phone" >
      </p>
      </div>
     </div>
      <div id="37ca7c51-d300-c49d-c237-08d2fa19a5d1" class="house-item1 clearfix">
    <div class="item-info fl">                    
                 <p class="labeltag">
<span class='tag_orange'><INPUT type="submit" value="发布房屋"></span>      </p>
      </div>
     </div>
     <?php }else{?>
     <div id="37ca7c51-d300-c49d-c237-08d2fa19a5d1" class="house-item1 clearfix">
    <div class="item-info fl">                    
                <p class="f14 f000 mb_10">
                    类型：<select  name="leixing">
				<option selected="selected" value="1">租房</option> 			    
			    <option selected="selected" value="2">二手房</option> 
  		</select> 
      </p>
      </div>
     </div>
    <div id="37ca7c51-d300-c49d-c237-08d2fa19a5d1" class="house-item1 clearfix">
    <div class="item-info fl">                    
                <p class="f14 f000 mb_10">
                房屋名称：                  <INPUT type="text" name = "housename" id="housename" >
      </p>
      </div>
     </div>
    <div id="37ca7c51-d300-c49d-c237-08d2fa19a5d1" class="house-item1 clearfix">
    <div class="item-info fl">                    
                <p class="f14 f000 mb_10">
              房屋价格/每平米(二手房)/每月(租房)：<INPUT type="text" name = "houseprice" id="houseprice" >
      </p>
      </div>
     </div>
     <div id="37ca7c51-d300-c49d-c237-08d2fa19a5d1" class="house-item1 clearfix">
    <div class="item-info fl">                    
                <p class="f14 f000 mb_10">
              房屋总价格（二手房）：<INPUT type="text" name = "amountprice" id="amountprice" >万
      </p>
      </div>
     </div>
     <div id="37ca7c51-d300-c49d-c237-08d2fa19a5d1" class="house-item1 clearfix">
    <div class="item-info fl">                    
                <p class="f14 f000 mb_10">
                房屋地址：<INPUT type="text" name = "houseaddress" id="houseaddress" >
      </p>
      </div>
     </div>
     <div id="37ca7c51-d300-c49d-c237-08d2fa19a5d1" class="house-item1 clearfix">
    <div class="item-info fl">                    
                <p class="f14 f000 mb_10">
                房屋属性：<INPUT type="text" name = "shi" id="shi" >室<INPUT type="text" name = "ting" id="ting" >厅<INPUT type="text" name = "wei" id="wei" >卫
      </p>
      </div>
     </div>
     <div id="37ca7c51-d300-c49d-c237-08d2fa19a5d1" class="house-item1 clearfix">
    <div class="item-info fl">                    
                <p class="f14 f000 mb_10">
                房屋尺寸：<INPUT type="text" name = "chicun" id="chicun" >平米
      </p>
      </div>
     </div>
     <div id="37ca7c51-d300-c49d-c237-08d2fa19a5d1" class="house-item1 clearfix">
    <div class="item-info fl">                    
                <p class="f14 f000 mb_10">
上传房屋图片： <ul class="goods-pic-list" nctype="">
          <li class="ncsc-goodspic-upload">
          <div class="ncsc-upload-btn"><a href="javascript:void(0);"><span><input type="file" hidefocus="true" size="1" class="input-file" name="image1" id="image1"></span></a></div>            
          </li>
        </ul>      </p>
      </div>
     </div>
     <div id="37ca7c51-d300-c49d-c237-08d2fa19a5d1" class="house-item1 clearfix">
    <div class="item-info fl">                    
                <p class="f14 f000 mb_10">
                联系人名称：<INPUT type="text" name = "lianxirenname" id="lianxirenname" >
      </p>
      </div>
     </div>
     <div id="37ca7c51-d300-c49d-c237-08d2fa19a5d1" class="house-item1 clearfix">
    <div class="item-info fl">                    
                <p class="f14 f000 mb_10">
                联系人电话：<INPUT type="text" name = "phone" id="phone" >
      </p>
      </div>
     </div>
      <div id="37ca7c51-d300-c49d-c237-08d2fa19a5d1" class="house-item1 clearfix">
    <div class="item-info fl">                    
                 <p class="labeltag">
<span class='tag_orange'><INPUT type="submit" value="发布房屋"></span>      </p>
      </div>
     </div>
     <?php }?>
    </form>
    </div>
</div>

            </div>
        </div>
        <div  id="scrollSid">
	    <a title="返回顶部" id="topBtn" class="topBtn"></a>
    </div>
   <div class="popupmap none" style="width: 665px; height: 404px; background: white; padding-top: 4px;">
        <iframe id="imap" src='/page/v1/common/empty.htm' width="660px" height="400px"
            marginwidth='5' marginheight='0' scrolling='no' frameborder='no'></iframe>
    </div>
    <div class="popupbg">
    </div>
        <script type="text/javascript" src="http://static.centanet.com/resource/modulescript/require.js?v2015112610561"></script>
 <div style="display: none">
 </div>

     <div  id="scrollSid">
	    <a title="返回顶部" id="topBtn" class="topBtn"></a>
    </div>
   <div class="popupmap none" style="width: 665px; height: 404px; background: white; padding-top: 4px;">
        <iframe id="imap" src='/page/v1/common/empty.htm' width="660px" height="400px"
            marginwidth='5' marginheight='0' scrolling='no' frameborder='no'></iframe>
    </div>
    <div class="popupbg">
    </div>
	<!-- JS
================================================== -->
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/publichouse.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.ez-bg-resize.js"></script>
<script type="text/javascript" src="__PUBLIC__/prettyphoto/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/smoothscrolling.js"></script>
<script src="__PUBLIC__/js/jquery.sticky.js" type="text/javascript"></script>
<script src="__PUBLIC__/js/css_browser_selector.js" type="text/javascript"></script> 
<script src="__PUBLIC__/js/formsubmit.js"></script>
<script type="text/javascript">
var SITEURL = "<?php echo SHOP_SITE_URL; ?>";
//裁剪图片后返回接收函数
function call_back(picname){
	$('#store_avatar').val(picname);
	$('img[nc_type="store_avatar"]').attr('src','<?php echo UPLOAD_SITE_URL.'/'.ATTACH_STORE;?>/'+picname);
	$('#_pic').val('');
}
$(function(){
	$('#_pic').change(uploadChange);
	function uploadChange(){
		var filepath=$(this).val();
		var extStart=filepath.lastIndexOf(".");
		var ext=filepath.substring(extStart,filepath.length).toUpperCase();
		if(ext!=".PNG"&&ext!=".GIF"&&ext!=".JPG"&&ext!=".JPEG"){
			alert("file type error");
			$(this).attr('value','');
			return false;
		}
		if ($(this).val() == '') return false;
		ajaxFileUpload();
	}
	function ajaxFileUpload()
	{
		$.ajaxFileUpload
		(
			{
				url:'index.php?act=cut&op=pic_upload&form_submit=ok&uploadpath=<?php echo ATTACH_STORE;?>',
				secureuri:false,
				fileElementId:'_pic',
				dataType: 'json',
				success: function (data, status)
				{
					if (data.status == 1){
						ajax_form('cutpic','<?php echo $lang['nc_cut'];?>','index.php?act=cut&op=pic_cut&x=100&y=100&resize=1&url='+data.url,680);
					}else{
						alert(data.msg);$('#_pic').bind('change',uploadChange);
					}
				},
				error: function (data, status, e)
				{
					alert('上传失败');$('#_pic').bind('change',uploadChange);
				}
			}
		)
	};
	$('input[nc_type="change_store_banner"]').change(function(){
		var src = getFullPath($(this)[0]);
		$('div[nctype="store_banner"]').find('p').html('<img src="'+src+'">');
	});
	$('input[nc_type="change_store_label"]').change(function(){
		var src = getFullPath($(this)[0]);
		$('div[nctype="store_label"]').find('p').html('<img src="'+src+'">');
	});
	jQuery.validator.addMethod("domain", function(value, element) {
			return this.optional(element) || /^[\w\-]+$/i.test(value);
		}, "");
	$('#my_store_form').validate({
    	submitHandler:function(form){
    		ajaxpost('my_store_form', '', '', 'onerror')
    	},
		rules : {
        	<?php if(($output['subdomain'] == '1') && ($output['subdomain_edit'] == '1' || empty($output['store_info']['store_domain']))){?>
					store_domain: {
						domain: true,
		        rangelength:[<?php echo $output['subdomain_length'][0];?>, <?php echo $output['subdomain_length'][1];?>]
					}
          <?php }?>
        },
        messages : {
        	<?php if(($output['subdomain'] == '1') && ($output['subdomain_edit'] == '1' || empty($output['store_info']['store_domain']))){?>
					store_domain: {
						domain: '<?php echo $lang['store_setting_domain_valid'];?>',
		        rangelength:'<?php echo $lang['store_setting_domain_rangelength'];?>'
					}
          <?php }?>
        }
    });

    // ajax 修改店铺二维码
    $('#a_store_code').click(function(){
    	$('#img_store_code').attr('src','');
		$.getJSON($(this).attr('href'),function(data){
			$('#img_store_code').attr('src','<?php echo UPLOAD_SITE_URL.'/'.ATTACH_STORE.DS;?>'+data);
		});
		return false;
    });

});
</script>
 
<!-- Sticky nav2 initiation 
==================================================== -->
	<script>
		$(document).ready(function(){
			$("#hiddenmenu").sticky({topSpacing:0});
		});
	</script>

<!-- Initiate PrettyPhoto Plugin
==================================================== -->
<script type="text/javascript" charset="utf-8">

		$(document).ready(function(){
			$("a[rel^='prettyPhoto']").prettyPhoto({
				social_tools: false,
				theme: 'light_square'
			});
		});
</script>

	<!-- FlexSlider 
==================================================== -->
  <script defer src="__PUBLIC__/js/jquery.flexslider.js"></script>
  
  <script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        smoothHeight: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>

<!-- Mobile Menu Smooth Scroll Funtion 
==================================================== -->
<script type="text/javascript"> 
    function MobilescrollToThis(target){
          var theArray = target.split('#');
          var desiredElement = jQuery('#' + theArray[1]).offset().top;
          jQuery('html,body').animate({ scrollTop: desiredElement}, 'slow');
        }
    
</script>
  
<!-- End Document
================================================== -->
</div>
</body>
</html>