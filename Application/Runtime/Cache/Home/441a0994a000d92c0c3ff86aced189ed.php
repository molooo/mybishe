<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>登录</title>
		<link rel="stylesheet" href="/ag_bishe/Application/Public/css/Index/resetlogin.css" />
		<link rel="stylesheet" href="/ag_bishe/Application/Public/css/Index/stylelogin.css" />
		<link rel="stylesheet" href="/ag_bishe/Application/Public/css/Index/supersized.css" />
	</head>
    <body oncontextmenu="return false">
        <div class="page-container">
            <h1>Login</h1>
						<form id="login_form" action="/ag_bishe/Application/index.php/Home/Index/LoginSave" method="post">
							
							<div>
								<input name="username" type="text" class="username" autocomplete="off" placeholder="用户名" easyform="char-normal;real-time;" message="请输入用户名"
									   easytip="disappear:lost-focus;theme:blue;"/>
							</div>

							<div>
								<input name="password" type="password" class="username" placeholder="密码" easyform="length:4-16" message="请输入密码" easytip="disappear:lost-focus;theme:blue;" oncontextmenu="return false" onpaste="return false"/>
							</div>

							<button id="submit" type="submit">Sign in</button>
            </form>
        <div class="connect">
                <p>If we can only encounter each other rather than stay with each other,then I wish we had never encountered.</p>
				<p style="margin-top:20px;">如果只是遇见，不能停留，不如不遇见。</p>
            </div>
        </div>
							
					
		<script type="text/javascript" src="/ag_bishe/Application/Public/js/jquery-1.11.1.js" ></script>
		<script type="text/javascript" src="/ag_bishe/Application/Public/js/easyform.js"></script>
		<script src="/ag_bishe/Application/Public/js/supersized.3.2.7.min.js"></script>
        <script src="/ag_bishe/Application/Public/js/supersized-init.js"></script>
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