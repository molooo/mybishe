$(function(){
	
	//添加新商家、取消按钮
    $('#addSJBtn, #cancleBtn').on('click',function(){
    	//页面内容切换
        $('#addSJBtn').toggle();
        $('#selectSJ').toggle();
        $('#add_form').toggle();
    });
    
    //保存新商家信息
    $('#saveInfoBtn').on('click',function(){
        var linkSJName = $('#linkSJName').val();
    	var linkAddress = $('#linkAddress').val();
    	var linkMan = $('#linkMan').val();
    	var linkPhone = $('#linkPhone').val();

        //校验
        if(!linkSJName){
            alert("请填写商家名！");
            return false;
        }
        if(!linkAddress){
            alert("请填写商家详细地址！");
            return false;
        }
        if(!linkMan){
            alert("请填写联系人！");
            return false;
        }
        if(!linkPhone){
            alert("请填写联系电话！");
            return false;
        }

    	var sjInfo = {'linkSJName':linkSJName, 'linkAddress':linkAddress, 'linkMan':linkMan, 'linkPhone':linkPhone};
    	console.log("sjInfo", sjInfo);
    	
    	$.ajax({
    		url: "addsj",
		    data: sjInfo,
		    type: 'post',
		    cache: false,
		    dataType: 'json',
		    success: function(data){
		    	console.log("保存成功！",data);
		    	//商家选择下拉菜单中 动态添加option项
		    	var newOption = "<option value="+data+">"+linkSJName+"</option>";
		    	$('#training_select').append(newOption);
		    },
		    error: function(ret){
		    	console.log("保存失败！", ret);
		    }
		});
    	
    	//页面内容切换
        $('#addSJBtn').toggle();
        $('#selectSJ').toggle();
        $('#add_form').toggle();
    });
    
    //发布信息
    $('#fabuBtn').on('click', function(){
    	swal("发布成功!", "You clicked the button!", "success");
    });




});


