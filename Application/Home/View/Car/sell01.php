<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>卖车</title>
		<meta content="<{$setting.keywords}>"  name="keywords"/>
		<meta content="<{$setting.description}>" name="description"/>
		<script type="text/javascript" src="<{$weburl}>/static/js/jquery-1.7.1.min.js"></script>
		<link href="__PUBLIC__/css/car/css/page.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<!--内容-->
		<?php include "/Home/View/Car/head.php" ?>
		<div class="nav">您当前的位置：<a href="<{$weburl}>/">首页</a> <span>></span> 卖车</div>
		<div class="main mt10 clearfix">
			<div class="sellbox">
				<h3>填写前您需要准备：</h3>
				<div class="box">
					<p class="f14 fb">行驶证，车辆保险单</p>
					<p class="f14 gray01 mt5">用于填写首次上牌日期</p>
					<p class="f14 fb mt30">汽车多角度照片</p>
					<ul class="showcar_pic_list mt5 clearfix">
						<li><img src="__PUBLIC__/img/car/showcar_pic1.jpg"/><p>左前方</p></li>
						<li><img src="__PUBLIC__/img/car/showcar_pic2.jpg"/><p>左后方</p></li>
						<li><img src="__PUBLIC__/img/car/showcar_pic3.jpg"/><p>侧面</p></li>
						<li><img src="__PUBLIC__/img/car/showcar_pic4.jpg"/><p>发动机舱</p></li>
						<li><img src="__PUBLIC__/img/car/showcar_pic5.jpg"/><p>内饰</p></li>
					</ul>
					<p class="mt30"><a href="__APP__/Home/Car/sell02" class="sell_but01">填写爱车信息</a></p>
				</div>
				
			</div>
		</div>
		<!--版权-->
		<?php include "/Home/View/Car/foot.php" ?>
	</body>
</html>
