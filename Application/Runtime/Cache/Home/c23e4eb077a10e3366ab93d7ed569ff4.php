<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>登录</title>
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
							登&nbsp;&nbsp;&nbsp;&nbsp;录
						</div>
						<form id="login_form" action="" method="post">
							
							<div class="form_text_ipt">
								<input name="username" type="text" placeholder="用户名" easyform="char-normal;real-time;" message="请输入用户名"
									   easytip="disappear:lost-focus;theme:blue;">
							</div>

							<div class="form_text_ipt">
								<input name="password"type="password" placeholder="密码" easyform="length:4-16" message=
										"请输入密码" easytip="disappear:lost-focus;theme:blue;">
							</div>

							<div class="form_check_ipt">
								<div class="left check_left">
									<label><input name="" type="checkbox"> 下次自动登录</label>
								</div>
								<div class="right check_right">
									<a >忘记密码</a>
								</div>
							</div>
							<div class="form_btn">
								<input type="submit" value="登录">
							</div>
							<div class="form_reg_btn">
								<span>还没有帐号？</span><a href="register.html">马上注册</a>
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
		<script type="text/javascript" src="/ag_bishe/Application/Public/js/jquery-1.11.1.js" ></script>
		<script type="text/javascript" src="/ag_bishe/Application/Public/js/easyform.js"></script>
		<script>
			$(function() {

				$('#login_form').easyform();
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