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
							登录
						</div>
						<form action="" method="post">
							
							<div class="form_text_ipt">
								<input name="username" type="text" placeholder="用户名">
							</div>

							<div class="form_text_ipt">
								<input name="password" type="password" placeholder="密码">
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
								<button type="button">登录</button>
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
								<a >QQ登录</a>
								<a >微信登录</a>
								<a >微博登录</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="/ag_bishe/Application/Public/js/jquery.js" ></script>

		<script>
			$(function() {

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