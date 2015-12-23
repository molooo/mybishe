<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>注册</title>
		<link rel="stylesheet" href="/ag_bishe/Application/Public/css/Index/reset.css" />
		<link rel="stylesheet" href="/ag_bishe/Application/Public/css/Index/common.css" />
	</head>
	<body>
		<div class="wrap login_wrap">
			<div class="content">
				
				<div class="logo"></div>
				
				<div class="login_box">	
					
					<div class="login_form">
						<div class="login_title">
							注&nbsp;&nbsp;&nbsp;&nbsp;册
						</div>
						<form id="reg_form" action="/ag_bishe/Application/index.php/Home/Index/Reg_save" method="post">
							
							<div class="form_text_ipt">
								<input id="username" name="username" type="text" placeholder="用户名" easyform="null;length:4-16;char-normal;real-time;ajax:easyinput_ajax();" message="用户名必须为4—16位的英文字母或数字"
									   easytip="disappear:lost-focus;theme:blue;" ajax-message="用户名已存在!">
							</div>

							<div class="form_text_ipt">
								<input name="password" id="pwd1" type="password" placeholder="密码" easyform="null;length:6-16;" message=
										"密码必须为6—16位" easytip="disappear:lost-focus;theme:blue;">
							</div>

							<div class="form_text_ipt">
								<input name="repassword" id="pwd2" type="password" placeholder="重复密码" easyform="null;length:6-16;equal:#pwd1;" message=
										"两次密码输入要一致" easytip="disappear:lost-focus;theme:blue;">
							</div>

							<div class="form_text_ipt">
								<input id="email" name="email" type="text" placeholder="邮箱" easyform="null;email;real-time;ajax:easyinput_ajax1();" message="Email格式要正确" easytip=
										"disappear:lost-focus;theme:blue;" ajax-message="这个Email地址已经被注册过，请换一个吧!">
							</div>
							<div class="form_btn">
								<input type="submit" value="注册">
							</div>
							<div class="form_reg_btn">
								<span>已有帐号？</span><a href="/ag_bishe/Application/index.php/Home/Index/login">马上登录</a>
							</div>
						</form>
						<div class="other_login">
							<div class="left other_left">
								<span>其它登录方式</span>
							</div>
							<div class="right other_right">
								<a ><img src="/ag_bishe/Application/Public/img/Index/qqico.png" alt="QQ登录" title="QQ登录"></a>
								<a ><img src="/ag_bishe/Application/Public/img/Index/weixinico.png" alt="微信登录" title="微信登录"></a>
								<a ><img src="/ag_bishe/Application/Public/img/Index/weiboico.png" alt="微博登录" title="微博登录"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>

		</script>
		<script type="text/javascript" src="/ag_bishe/Application/Public/js/jquery-1.11.1.js" ></script>
		<script type="text/javascript" src="/ag_bishe/Application/Public/js/easyform.js"></script>

		<script>

			function easyinput_ajax(){
				var name = $("#username").val();
				$.ajax({
					url:"/ag_bishe/Application/index.php/Home/Index/Check_User",    //请求的url地址
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
					url:"/ag_bishe/Application/index.php/Home/Index/Check_Email",    //请求的url地址
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
		</script>
	</body>
</html>