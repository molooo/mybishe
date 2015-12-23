<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>注册</title>
		<link rel="stylesheet" href="__PUBLIC__/css/Index/resetlogin.css" />
		<link rel="stylesheet" href="__PUBLIC__/css/Index/stylelogin.css" />
		<link rel="stylesheet" href="__PUBLIC__/css/Index/supersized.css" />
		<script type="text/javascript" src="__PUBLIC__/js/jquery-1.11.1.js" ></script>
		<script type="text/javascript" src="__PUBLIC__/js/easyform.js"></script>
		<script src="__PUBLIC__/js/supersized.3.2.7.min.js"></script>
		<script src="__PUBLIC__/js/supersized-init.js"></script>
	</head>
    <body oncontextmenu="return false">
        <div class="page-containerre">
            <h1>Register</h1>
						<form id="reg_form" action="__APP__/Home/Index/Reg_save" method="post">
							
							<div>
								<input id="username" name="username" type="text" placeholder="用户名" easyform="null;length:4-16;char-normal;real-time;ajax:easyinput_ajax();" message="用户名必须为4—16位的英文字母或数字"   easytip="disappear:lost-focus;theme:blue;" ajax-message="用户名已存在!">
							</div>

							<div>
								<input name="password" id="pwd1" type="password" placeholder="密码" easyform="null;length:6-16;" message="密码必须为6—16位" easytip="disappear:lost-focus;theme:blue;">
							</div>

							<div>
								<input name="repassword" id="pwd2" type="password" placeholder="重复密码" easyform="null;length:6-16;equal:#pwd1;" message="两次密码输入要一致" easytip="disappear:lost-focus;theme:blue;">
							</div>

							<div>
								<input id="email" name="email" type="text" placeholder="邮箱" easyform="null;email;real-time;ajax:easyinput_ajax1();" message="Email格式要正确" easytip="disappear:lost-focus;theme:blue;" ajax-message="这个Email地址已经被注册过，请换一个吧!">
							</div>
						

							<input class="button" type="submit" value="Register in">
						 </form>
		<div class="connect">
                <p>If we can only encounter each other rather than stay with each other,then I wish we had never encountered.</p>
				<p style="margin-top:20px;">如果只是遇见，不能停留，不如不遇见。</p>
            </div>
        </div>
	
		<script>

			function easyinput_ajax(){
				var name = $("#username").val();
				$.ajax({
					url:"__APP__/Home/Index/Check_User",    //请求的url地址
					dataType:"json",   //返回格式为json
					async:true,//请求是否异步，默认为异步，这也是ajax重要特性
					data:{"LoginName":name},    //参数值
					type:"GET",   //请求方式
					success:function(res){
						if(res == true) {
							$("#username").trigger("easyinput-ajax", false);
						}else if(res == false){
							$("#username").trigger("easyinput-ajax", true);
						}
					}
				});
			}
			function easyinput_ajax1(){
				var email = $("#email").val();
				$.ajax({
					url:"__APP__/Home/Index/Check_Email",    //请求的url地址
					dataType:"json",   //返回格式为json
					async:true,//请求是否异步，默认为异步，这也是ajax重要特性
					data:{"email":email},    //参数值
					type:"GET",   //请求方式
					success:function(res){
						if(res == true) {
							$("#email").trigger("easyinput-ajax", false);
						}else if(res == false){
							$("#email").trigger("easyinput-ajax", true);
						}
					}
				});
			}

		</script>
			<script>
			$(function() {
				$('#reg_form').easyform();
				//登录输入框效果
				$('.form_text_ipt input').focus(function () {
					$(this).parent().css({
						'box-shadow': '0 0 3px #bbb',
					});
				});
				$('.form_text_ipt input').blur(function () {
					$(this).parent().css({
						'box-shadow': 'none',
					});
					//$(this).parent().next().hide();
				});
			})
			window.onload = function()
			{
			$(".connect p").eq(0).animate({"left":"0%"}, 600);
			$(".connect p").eq(1).animate({"left":"0%"}, 400);
			}
			function is_hide(){ $(".alert").animate({"top":"-40%"}, 300) }
			function is_show(){ $(".alert").show().animate({"top":"45%"}, 300) }
			
		</script>
	</body>
</html>

