
<style type="text/css">
#hiddenmenu ul li {
	display: inline;
	text-decoration: none;
	color: #000;
	/**padding-right: 45px;**/
	display: inline-block;
	cursor: pointer;
	margin-left: 45px;
}
#hiddenmenu {
	width: 100%;
	padding-top: 10px;
	padding-right: 0px;
	padding-bottom: 10px;
	/**padding left: 0px;**/
	margin: 0 auto;
	color: #000;
	font-size: 10px;
	text-transform: uppercase;
	font-style: normal;
	font-family: 'arial', sans-serif;
	font-weight: 900;
	letter-spacing: 0.3em;
	box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.5);
	background-color: #fff;
    z-index:999;
    background: #fff url('../../img/Index/diagonal-lines.png') repeat left top;
}

#hiddenmenu a {
	text-decoration: none;
	color: #4d4d4d;
	/**padding-right: 45px;**/
	display: inline-block;
	cursor: pointer;
}

#hiddenmenu a:last-child {
	padding-right: 0px;
	margin-right: 0px;
}

#hiddennavenclosure {
	width: 100%;
	margin-top: 49px;
	background-color: #fff;

}

#hiddenmenu select {
	display: none;
}

.login { font-size: 13px;  text-shadow:#f3f3f3 1px 1px 0px, #b2b2b2 1px 2px 0;text-decoration: none; color: #8C8C8C; font-family:黑体;  font-style: normal;  -webkit-tap-highlight-color: transparent;}

</style>
<div id="top"> <!-- Top Div Open -->
<div style="float:right;padding:10px;margin:0px;color:#525252"> <!-- Logo Div -->
	<ul class="login"><?php if(($_SESSION['LoginName'])&&($_SESSION['is_login'])){?>
		欢迎您：<?php echo $_SESSION['LoginName'];?>
	
		<li style="display:inline"><a href="__APP__/home/index/loginout">退出</a></li>
		</ul>
	   <?php }else{?>
		<ul >
			<li style="display:inline" ><a href="__APP__/home/index/login">登录</a></li>
			<li style="display:inline" ><a href="__APP__/home/index/reg">注册</a></li>
		</ul>
	<?php }?>
	</div> <!-- Closes Logo Div -->


<div id="hiddenmenu"> <!-- Hidden Menu bar div open -->
		<ul id="menu" style="margin-left:150px">
			<li><a href="index" class="smoothScroll">首页</a></li> <!-- menu item -->
			
			<li><a href="buy" class="smoothScroll">买车</a></li> <!-- menu item -->
			
			<li><a href="__APP__/Home/Car/sell01" class="smoothScroll">卖车</a></li> <!-- menu item -->

			<li><a href="__APP__/Home/Car/discuss" class="smoothScroll">车友论坛</a></li> <!-- menu item -->

			<li><a href="<?php echo $backurl;?>" class="smoothScroll">返回</a></li> <!-- menu item -->
		</ul>


	</div> 
<br>