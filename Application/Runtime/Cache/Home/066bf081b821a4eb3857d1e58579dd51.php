<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->



<head> 

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="/ag_bishe/Application/Public/img/favicon.ico">

	<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Welcome</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="/ag_bishe/Application/Public/prettyphoto/css/prettyPhoto.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/ag_bishe/Application/Public/css/Index/flexslider.css" type="text/css" media="screen" /> <!-- Slider Stylesheet -->
<link rel="stylesheet" href="/ag_bishe/Application/Public/css/Index/reset.css">

	

<link href="/ag_bishe/Application/Public/css/car/css/index.css" rel="stylesheet" type="text/css"/>

		<script type="text/javascript" src="/ag_bishe/Application/Public/js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="/ag_bishe/Application/Public/js/jcarousellite_1.0.1.min.js"></script>
		<script type="text/javascript" src="/ag_bishe/Application/Public/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="/ag_bishe/Application/Public/js/Validform_v5.3.2_min.js"></script>
		<script language="JavaScript">
			$(function() {
				//品牌选择
				$("#brand").change(function(){
					$.get("/index.php?m=ajax&ajax=1", { 
						bid :  $("#brand").val() 
					}, function (data, textStatus){
						   $("#subbrand").html(data); // 把返回的数据添加到页面上
						}
					);
				});

				$("#brand2").change(function(){
					$.get("/index.php?m=ajax&ajax=1", { 
						brandid :  $("#brand2").val() 
					}, function (data, textStatus){
						   $("#subbrand2").html(data); // 把返回的数据添加到页面上
						}
					);
				});
				
				$div_li = $("div.car_tab ul li a");
				$div_li.mouseover(function() {
					$(this).addClass("here").parent().siblings().children().removeClass("here");
					var index = $div_li.index(this);
					$("div.cartab_box > div").eq(index).show().siblings().hide();
				});

				//表单验证
				$(".carform").Validform({
					tiptype:1
				});
			})
		</script>
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

</style>
</head>

<body>

	<!-- Logo Starts Here 
==================================================== -->
<div id="top"> <!-- Top Div Open -->
<div style="float:right;padding:10px;margin:0px;color:#525252"> <!-- Logo Div -->
	<ul class="login"><?php if(($_SESSION['LoginName'])&&($_SESSION['is_login'])){?>
		欢迎您：<?php echo $_SESSION['LoginName'];?>
	
		<li style="display:inline"><a href="/ag_bishe/Application/index.php/home/index/loginout">退出</a></li>
		</ul>
	   <?php }else{?>
		<ul >
			<li style="display:inline" ><a href="/ag_bishe/Application/index.php/home/index/login">登录</a></li>
			<li style="display:inline" ><a href="/ag_bishe/Application/index.php/home/index/reg">注册</a></li>
		</ul>
	<?php }?>
	</div> <!-- Closes Logo Div -->


<div id="hiddenmenu"> <!-- Hidden Menu bar div open -->
		<ul id="menu" style="margin-left:150px">
			<li><a href="/ag_bishe/Application/index.php/Home/Car" class="smoothScroll">首页</a></li> <!-- menu item -->
			
			<li><a href="/ag_bishe/Application/index.php/Home/Car/buy" class="smoothScroll">买车</a></li> <!-- menu item -->
			
			<li><a href="/ag_bishe/Application/index.php/Home/Car/sell01" class="smoothScroll">卖车</a></li> <!-- menu item -->

			<li><a href="/ag_bishe/Application/index.php/Home/Car/discuss" class="smoothScroll">车友论坛</a></li> <!-- menu item -->

			<li><a href="/ag_bishe/Application/index.php/Home/car" class="smoothScroll">返回</a></li> <!-- menu item -->
		</ul>


	</div> 


<!--头部end -->
<div class="main clearfix mt15">
	<div class="main_left">
		<div class="index_search">
			<div class="index_search_box">
				<form method="get" action="/index.php">
				<p class="brand">
					品 牌：
					<select id="brand" name="c">
						<option value=''>请选择品牌</option>
<option value='b_1' >A 奥迪</option>
<option value='b_462' >A 阿尔法·罗米欧</option>
<option value='b_190' >B 保时捷</option>
<option value='b_302' >B 宝龙</option>
<option value='b_469' >B 宾利</option>
<option value='b_144' >B 标致</option>
<option value='b_105' >B 比亚迪</option>
<option value='b_99' >B 奔驰</option>
<option value='b_773' >B 奔腾</option>
<option value='b_78' >B 本田</option>
<option value='b_5' >B 宝马</option>
<option value='b_34' >B 别克</option>
<option value='b_116' >C 长城</option>
<option value='b_254' >C 长丰</option>
<option value='b_258' >C 昌河</option>
<option value='b_186' >C 长安</option>
<option value='b_310' >D 大迪</option>
<option value='b_15' >D 大众</option>
<option value='b_192' >D 大宇</option>
<option value='b_669' >D 东南</option>
<option value='b_224' >D 东风</option>
<option value='b_841' >D 帝豪</option>
<option value='b_658' >D 大发</option>
<option value='b_424' >D 道奇</option>
<option value='b_64' >F 丰田</option>
<option value='b_360' >F 飞碟</option>
<option value='b_244' >F 福田</option>
<option value='b_408' >F 福迪</option>
<option value='b_53' >F 福特</option>
<option value='b_160' >F 菲亚特</option>
<option value='b_484' >F 法拉利</option>
<option value='b_769' >G GMC吉姆西</option>
<option value='b_385' >H 黑豹</option>
<option value='b_443' >H 汇众</option>
<option value='b_363' >H 海马</option>
<option value='b_485' >H 悍马</option>
<option value='b_685' >H 华泰</option>
<option value='b_147' >H 哈飞</option>
<option value='b_645' >H 红旗</option>
<option value='b_170' >H 华普</option>
<option value='b_771' >J 精灵Smart</option>
<option value='b_691' >J 金龙</option>
<option value='b_153' >J 吉利</option>
<option value='b_289' >J 江淮</option>
<option value='b_194' >J 吉普</option>
<option value='b_233' >J 江铃</option>
<option value='b_535' >J 捷豹</option>
<option value='b_654' >J 金杯</option>
<option value='b_393' >J 吉奥</option>
<option value='b_196' >K 克莱斯勒</option>
<option value='b_774' >K 开瑞</option>
<option value='b_632' >K 凯迪拉克</option>
<option value='b_547' >L 路虎</option>
<option value='b_405' >L 力帆</option>
<option value='b_724' >L 铃木</option>
<option value='b_374' >L 莲花</option>
<option value='b_554' >L 兰博基尼</option>
<option value='b_543' >L 林肯</option>
<option value='b_770' >L 劳斯莱斯</option>
<option value='b_198' >L 雷克萨斯</option>
<option value='b_648' >L 陆风</option>
<option value='b_213' >L 雷诺</option>
<option value='b_776' >M 迈巴赫</option>
<option value='b_355' >M 名爵</option>
<option value='b_572' >M 玛莎拉蒂</option>
<option value='b_779' >M 迷你</option>
<option value='b_57' >M 马自达</option>
<option value='b_85' >N 尼桑</option>
<option value='b_576' >O o讴歌</option>
<option value='b_580' >O 欧宝</option>
<option value='b_131' >Q 起亚</option>
<option value='b_165' >Q 奇瑞</option>
<option value='b_216' >R 荣威</option>
<option value='b_863' >R 瑞麒</option>
<option value='b_376' >S 曙光</option>
<option value='b_597' >S 双龙</option>
<option value='b_203' >S 萨博</option>
<option value='b_206' >S 斯巴鲁</option>
<option value='b_665' >S 双环</option>
<option value='b_217' >S 斯柯达</option>
<option value='b_723' >S 上海英伦</option>
<option value='b_138' >S 三菱</option>
<option value='b_346' >T 天津一汽</option>
<option value='b_615' >W 五十铃</option>
<option value='b_182' >W 五菱</option>
<option value='b_341' >W 万丰</option>
<option value='b_370' >W 威麟</option>
<option value='b_209' >W 沃尔沃</option>
<option value='b_47' >X 现代</option>
<option value='b_501' >X 雪佛兰</option>
<option value='b_123' >X 雪铁龙</option>
<option value='b_175' >y 一汽</option>
<option value='b_329' >y 跃进</option>
<option value='b_111' >y 野马</option>
<option value='b_452' >y 宇通</option>
<option value='b_389' >y 依维柯</option>
<option value='b_607' >y 英菲尼迪</option>
<option value='b_331' >Z 中兴</option>
<option value='b_226' >Z 中华</option>
<option value='b_327' >Z 众泰</option>
<option value='b_454' >Z 阿斯顿·马丁</option>
<option value='b_325' >Z 中顺</option>

					</select>
					
					<input type="hidden" name="m" value="search">
					<input type="submit" value="搜 索" class="cbutton">
				</p>
				</form>
				<ul class="search_list">
					<li class="bg01">车 型： <a href="/index.php?m=search&c=m_1" >微型车</a><a href="/index.php?m=search&c=m_2" >小型车</a><a href="/index.php?m=search&c=m_3" >紧凑型车</a><a href="/index.php?m=search&c=m_4" >中型车</a><a href="/index.php?m=search&c=m_5" >中大型车</a><a href="/index.php?m=search&c=m_6" >豪华车</a><a href="/index.php?m=search&c=m_7" >MPV</a><a href="/index.php?m=search&c=m_8" >SUV</a><a href="/index.php?m=search&c=m_9" >跑车</a><a href="/index.php?m=search&c=m_38" >皮卡</a><a href="/index.php?m=search&c=m_39" >面包车</a></li>
					<li>价 格： <a href="/index.php?m=search&c=p_1">3万以下</a><a href="/index.php?m=search&c=p_2">3-5万</a><a href="/index.php?m=search&c=p_3">5-8万</a><a href="/index.php?m=search&c=p_4">8-12万</a><a href="/index.php?m=search&c=p_5">12-18万</a><a href="/index.php?m=search&c=p_6">18-24万</a><a href="/index.php?m=search&c=p_7">24-35万</a><a href="/index.php?m=search&c=p_8">35-50万</a><a href="/index.php?m=search&c=p_9">50-100万</a><a href="/index.php?m=search&c=p_10">100万以上</a></li>
					<li class="bg01">车 龄： <a href="/index.php?m=search&c=a_1" >1年以内</a><a href="/index.php?m=search&c=a_2" >2年以内</a><a href="/index.php?m=search&c=a_3" >3年以内</a><a href="/index.php?m=search&c=a_4" >4年以内</a><a href="/index.php?m=search&c=a_5" >5年以内</a><a href="/index.php?m=search&c=a_6" >6年以内</a><a href="/index.php?m=search&c=a_7" >6年以上</a></li>
					<li>排 量： <a href="/index.php?m=search&c=g_1" >1.0L</a><a href="/index.php?m=search&c=g_2" >2.0L</a><a href="/index.php?m=search&c=g_3" >3.0L</a><a href="/index.php?m=search&c=g_4" >4.0L</a><a href="/index.php?m=search&c=g_5" >5.0L及以上</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="main_right">
		<div class="tool_box">
			<ul class="clearfix">
				<li class="bg01"><a href="/ag_bishe/Application/index.php/Home/Car/sell01">卖车</a></li>
				<li><a href="/ag_bishe/Application/index.php/Home/Car/buy">买车</a></li>
			</ul>
		</div>
		<div class="tool_box02">
			<ul class="clearfix">
				<li><a href="/index.php?m=news&a=list&catid=64" class="bg01">交易过户</a></li>
				<li class="ml10"><a href="/index.php?m=news&a=list&catid=65" class="bg02">车险理赔</a></li>
				<li><a href="/index.php?m=news&a=list&catid=66" class="bg03">车辆检查</a></li>
				<li class="ml10"><a href="/index.php?m=news&a=list&catid=67" class="bg04">驾驶技巧</a></li>
				<li><a href="/index.php?m=news&a=list&catid=68" class="bg05">汽车养护</a></li>
				<li class="ml10"><a href="/index.php?m=news&a=list&catid=69" class="bg06">交通法规</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="main clearfix mt15">
	<div class="main_left">
		<div class="commonbox01">
			<h3>推荐二手车</h3>
			<div class="box">
				<ul class="scar_list clearfix">
										<li><a href="/buycars/2014/03/19/31.html"  target="_blank"><img src="" class="vt"></a>
						<p><span class="carname"><a href="/buycars/2014/03/19/31.html"  target="_blank" class="f12">奥迪A4</a></span></p>
						<p><span class="orange01 f14 fb fr">￥30.00万</span><span class="gray01">0年</span></p>
					</li>
										<li><a href="/buycars/2013/09/30/29.html"  target="_blank"><img src="/ag_bishe/Application/Public/img/car/408.jpg" class="vt"></a>
						<p><span class="carname"><a href="/buycars/2013/09/30/29.html"  target="_blank" class="f12">标致408郑州  - 标</a></span></p>
						<p><span class="orange01 f14 fb fr">￥9.88万</span><span class="gray01">0年</span></p>
					</li>
										<li><a href="/buycars/2013/09/30/28.html"  target="_blank"><img src="/ag_bishe/Application/Public/img/car/30.jpg" class="vt"></a>
						<p><span class="carname"><a href="/buycars/2013/09/30/28.html"  target="_blank" class="f12">标致郑州  - 标致30</a></span></p>
						<p><span class="orange01 f14 fb fr">￥9.80万</span><span class="gray01">0年</span></p>
					</li>
										<li><a href="/buycars/2013/09/30/27.html"  target="_blank"><img src="/ag_bishe/Application/Public/img/car/A3.jpg" class="vt"></a>
						<p><span class="carname"><a href="/buycars/2013/09/30/27.html"  target="_blank" class="f12">奇瑞郑州  - 奇瑞A3</a></span></p>
						<p><span class="orange01 f14 fb fr">￥5.78万</span><span class="gray01">0年</span></p>
					</li>
										<li><a href="/buycars/2013/09/30/26.html"  target="_blank"><img src="/ag_bishe/Application/Public/img/car/XK.jpg" class="vt"></a>
						<p><span class="carname"><a href="/buycars/2013/09/30/26.html"  target="_blank" class="f12">郑州  - 逍客 2012款</a></span></p>
						<p><span class="orange01 f14 fb fr">￥14.98万</span><span class="gray01">0年</span></p>
					</li>
									</ul>
			</div>
		</div>
	</div>
	<div class="main_right">
		<div class="commonbox02">
			<h3>快速评估</h3>
			<div class="box">
				<form name="carform" class="carform" method="post" action="/index.php?m=assesscar">
				<table cellspacing="0" cellpadding="0" width="100%"  class="assess_table">
					<tr>
						<th>车型：</th>
						<td><select name="p_model">
								<option value='1' >微型车</option>
<option value='2' >小型车</option>
<option value='3' >紧凑型车</option>
<option value='4' >中型车</option>
<option value='5' >中大型车</option>
<option value='6' >豪华车</option>
<option value='7' >MPV</option>
<option value='8' >SUV</option>
<option value='9' >跑车</option>
<option value='38' >皮卡</option>
<option value='39' >面包车</option>

							</select>
						</td>
					</tr>
					<tr>
						<th>品牌：</th>
						<td colspan="3"><select name="p_brand" id="brand2" datatype="n" nullmsg="请选择品牌！">
								<option value=''>请选择品牌</option>
<option value='1' >A 奥迪</option>
<option value='462' >A 阿尔法·罗米欧</option>
<option value='190' >B 保时捷</option>
<option value='302' >B 宝龙</option>
<option value='469' >B 宾利</option>
<option value='144' >B 标致</option>
<option value='105' >B 比亚迪</option>
<option value='99' >B 奔驰</option>
<option value='773' >B 奔腾</option>
<option value='78' >B 本田</option>
<option value='5' >B 宝马</option>
<option value='34' >B 别克</option>
<option value='116' >C 长城</option>
<option value='254' >C 长丰</option>
<option value='258' >C 昌河</option>
<option value='186' >C 长安</option>
<option value='310' >D 大迪</option>
<option value='15' >D 大众</option>
<option value='192' >D 大宇</option>
<option value='669' >D 东南</option>
<option value='224' >D 东风</option>
<option value='841' >D 帝豪</option>
<option value='658' >D 大发</option>
<option value='424' >D 道奇</option>
<option value='64' >F 丰田</option>
<option value='360' >F 飞碟</option>
<option value='244' >F 福田</option>
<option value='408' >F 福迪</option>
<option value='53' >F 福特</option>
<option value='160' >F 菲亚特</option>
<option value='484' >F 法拉利</option>
<option value='769' >G GMC吉姆西</option>
<option value='385' >H 黑豹</option>
<option value='443' >H 汇众</option>
<option value='363' >H 海马</option>
<option value='485' >H 悍马</option>
<option value='685' >H 华泰</option>
<option value='147' >H 哈飞</option>
<option value='645' >H 红旗</option>
<option value='170' >H 华普</option>
<option value='771' >J 精灵Smart</option>
<option value='691' >J 金龙</option>
<option value='153' >J 吉利</option>
<option value='289' >J 江淮</option>
<option value='194' >J 吉普</option>
<option value='233' >J 江铃</option>
<option value='535' >J 捷豹</option>
<option value='654' >J 金杯</option>
<option value='393' >J 吉奥</option>
<option value='196' >K 克莱斯勒</option>
<option value='774' >K 开瑞</option>
<option value='632' >K 凯迪拉克</option>
<option value='547' >L 路虎</option>
<option value='405' >L 力帆</option>
<option value='724' >L 铃木</option>
<option value='374' >L 莲花</option>
<option value='554' >L 兰博基尼</option>
<option value='543' >L 林肯</option>
<option value='770' >L 劳斯莱斯</option>
<option value='198' >L 雷克萨斯</option>
<option value='648' >L 陆风</option>
<option value='213' >L 雷诺</option>
<option value='776' >M 迈巴赫</option>
<option value='355' >M 名爵</option>
<option value='572' >M 玛莎拉蒂</option>
<option value='779' >M 迷你</option>
<option value='57' >M 马自达</option>
<option value='85' >N 尼桑</option>
<option value='576' >O o讴歌</option>
<option value='580' >O 欧宝</option>
<option value='131' >Q 起亚</option>
<option value='165' >Q 奇瑞</option>
<option value='216' >R 荣威</option>
<option value='863' >R 瑞麒</option>
<option value='376' >S 曙光</option>
<option value='597' >S 双龙</option>
<option value='203' >S 萨博</option>
<option value='206' >S 斯巴鲁</option>
<option value='665' >S 双环</option>
<option value='217' >S 斯柯达</option>
<option value='723' >S 上海英伦</option>
<option value='138' >S 三菱</option>
<option value='346' >T 天津一汽</option>
<option value='615' >W 五十铃</option>
<option value='182' >W 五菱</option>
<option value='341' >W 万丰</option>
<option value='370' >W 威麟</option>
<option value='209' >W 沃尔沃</option>
<option value='47' >X 现代</option>
<option value='501' >X 雪佛兰</option>
<option value='123' >X 雪铁龙</option>
<option value='175' >y 一汽</option>
<option value='329' >y 跃进</option>
<option value='111' >y 野马</option>
<option value='452' >y 宇通</option>
<option value='389' >y 依维柯</option>
<option value='607' >y 英菲尼迪</option>
<option value='331' >Z 中兴</option>
<option value='226' >Z 中华</option>
<option value='327' >Z 众泰</option>
<option value='454' >Z 阿斯顿·马丁</option>
<option value='325' >Z 中顺</option>

							</select>
						</td>
					</tr>
					<tr>
						<th>车系：</th>
						<td><select class="subbrand" id="subbrand2" name="p_subbrand" datatype="n" nullmsg="请选择车系！">
								<option value="" selected>请选择车系</option>
							</select>
						</td>
					</tr>
					<tr>
						<th>上牌：</th>
						<td><select name="p_year" id="p_year">
								<option value=''>年份</option>
<option value='2003' >2003年</option>
<option value='2004' >2004年</option>
<option value='2005' >2005年</option>
<option value='2006' >2006年</option>
<option value='2007' >2007年</option>
<option value='2008' >2008年</option>
<option value='2009' >2009年</option>
<option value='2010' >2010年</option>
<option value='2011' >2011年</option>
<option value='2012' >2012年</option>
<option value='2013' >2013年</option>
<option value='2014' >2014年</option>
<option value='2015' >2015年</option>
<option value='2016' >2016年</option>


							</select>
							<select name="p_month" id="p_month">
								<option value=''>月份</option>
<option value='01' >01月</option>
<option value='02' >02月</option>
<option value='03' >03月</option>
<option value='04' >04月</option>
<option value='05' >05月</option>
<option value='06' >06月</option>
<option value='07' >07月</option>
<option value='08' >08月</option>
<option value='09' >09月</option>
<option value='10' >10月</option>
<option value='11' >11月</option>
<option value='12' >12月</option>

							</select>
						</td>
					</tr>
					<tr>
						<th>变速：</th>
						<td><select name="p_transmission">
							<option value=''>请选择变速箱</option>
<option value='手动' >手动</option>
<option value='自动' >自动</option>
<option value='手自一体' >手自一体</option>

							</select>
						</td>
					</tr>
					<tr>
						<th width="50">排量：</th>
						<td><select name="p_gas">
							<option value=''>请选择排量</option>
<option value='1.0' >1.0</option>
<option value='2.0' >2.0</option>

							</select>
						</td>
					</tr>
					<tr>
						<th>里程：</th>
						<td ><input name="p_kilometre" type="text" id="p_kilometre" size="5" />
							<span class="gray">(万公里)</span></td>
						</td>
					</tr>
					<tr>
						<th>车主姓名：</th>
						<td colspan="5"><input name="l_name" type="text" size="10" class="inp01" value="" datatype="s" nullmsg="请填写车主姓名！"/></td>
					</tr>
					<tr>
						<th>手机：</th>
						<td colspan="5"><input name="l_tel" id="l_tel" type="text" size="10" class="inp01" value="" datatype="s" nullmsg="请填写手机！"/></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="提交评估" class="but01">
							<input type="hidden" name="action" value="sellcar"></td>
					</tr>
				</table>
			</form>
			</div>
		</div>	
	</div>
</div>
<div class="main mt15 clearfix">
	<div class="main_left">
		<script language="javascript" src="index.php?m=ad&id=51"></script>
	</div>
	<div class="main_right">
		<script language="javascript" src="index.php?m=ad&id=52"></script>
	</div>
</div>
<div class="main mt15 clearfix">
	<div class="main_left">
		<div class="commonbox01">
			<div class="car_tab">
				<ul class="fl">
					<li><a href="#" class="here">高档二手车</a></li>
					<li><a href="#">中档二手车</a></li>
					<li><a href="#">经济二手车</a></li>
				</ul>
			</div>
			<div class="box cartab_box">
				<div>
					<ul class="scar_list clearfix">
												<li><a href="/buycars/2013/09/30/23.html" target="_blank"><img src="upload/image/20130930/02130cwxng_small.jpg" class="vt"></a>
							<p><span class="carname"><a href="/buycars/2013/09/30/23.html" target="_blank" class="f12">郑州  - 雷克萨斯ES</a></span></p>
							<p><span class="orange01 f14 fb fr">￥35.80万</span><span class="gray01">6年</span></p>
						</li>
												<li><a href="/buycars/2013/09/30/17.html" target="_blank"><img src="upload/image/20130930/021308phhs_small.jpg" class="vt"></a>
							<p><span class="carname"><a href="/buycars/2013/09/30/17.html" target="_blank" class="f12">郑州  - 奥迪Q7(进</a></span></p>
							<p><span class="orange01 f14 fb fr">￥43.50万</span><span class="gray01">5年</span></p>
						</li>
												<li><a href="/buycars/2013/09/30/8.html" target="_blank"><img src="upload/image/20130930/02130cnzwm_small.jpg" class="vt"></a>
							<p><span class="carname"><a href="/buycars/2013/09/30/8.html" target="_blank" class="f12">郑州  - 辉腾(进口)</a></span></p>
							<p><span class="orange01 f14 fb fr">￥59.37万</span><span class="gray01">1年</span></p>
						</li>
											</ul>
				</div>
				<div class="hide">
					<ul class="scar_list clearfix">
												<li><a href="/buycars/2013/09/30/26.html" target="_blank"><img src="upload/image/20130930/02130dja58_small.jpg" class="vt"></a>
							<p><span class="carname"><a href="/buycars/2013/09/30/26.html" target="_blank" class="f12">郑州  - 逍客 2012款</a></span></p>
							<p><span class="orange01 f14 fb fr">￥14.98万</span><span class="gray01">0年</span></p>
						</li>
												<li><a href="/buycars/2013/09/30/25.html" target="_blank"><img src="upload/image/20130930/02130djb3u_small.jpg" class="vt"></a>
							<p><span class="carname"><a href="/buycars/2013/09/30/25.html" target="_blank" class="f12">郑州  - 别克GL8 2013</a></span></p>
							<p><span class="orange01 f14 fb fr">￥27.38万</span><span class="gray01">8年</span></p>
						</li>
												<li><a href="/buycars/2013/09/30/22.html" target="_blank"><img src="upload/image/20130930/02130cp8nq_small.jpg" class="vt"></a>
							<p><span class="carname"><a href="/buycars/2013/09/30/22.html" target="_blank" class="f12">郑州  - 夏朗(进口)</a></span></p>
							<p><span class="orange01 f14 fb fr">￥27.00万</span><span class="gray01">1年</span></p>
						</li>
												<li><a href="/buycars/2013/09/30/20.html" target="_blank"><img src="upload/image/20130930/021304pzhe_small.jpg" class="vt"></a>
							<p><span class="carname"><a href="/buycars/2013/09/30/20.html" target="_blank" class="f12">郑州  - 迈腾 2012款</a></span></p>
							<p><span class="orange01 f14 fb fr">￥21.50万</span><span class="gray01">1年</span></p>
						</li>
												<li><a href="/buycars/2013/09/30/14.html" target="_blank"><img src="upload/image/20130930/02130djwey_small.jpg" class="vt"></a>
							<p><span class="carname"><a href="/buycars/2013/09/30/14.html" target="_blank" class="f12">郑州  - 本田CR-V 200</a></span></p>
							<p><span class="orange01 f14 fb fr">￥12.80万</span><span class="gray01">6年</span></p>
						</li>
												<li><a href="/buycars/2013/09/30/11.html" target="_blank"><img src="upload/image/20130930/02130cyjw8_small.jpg" class="vt"></a>
							<p><span class="carname"><a href="/buycars/2013/09/30/11.html" target="_blank" class="f12">郑州  - 奥迪A4L 2012</a></span></p>
							<p><span class="orange01 f14 fb fr">￥26.58万</span><span class="gray01">1年</span></p>
						</li>
												<li><a href="/buycars/2013/09/30/9.html" target="_blank"><img src="upload/image/20130930/021309lkzm_small.jpg" class="vt"></a>
							<p><span class="carname"><a href="/buycars/2013/09/30/9.html" target="_blank" class="f12">郑州  - 奥迪A3(进</a></span></p>
							<p><span class="orange01 f14 fb fr">￥21.98万</span><span class="gray01">8年</span></p>
						</li>
												<li><a href="/buycars/2013/09/30/7.html" target="_blank"><img src="upload/image/20130930/021309z55k_small.jpg" class="vt"></a>
							<p><span class="carname"><a href="/buycars/2013/09/30/7.html" target="_blank" class="f12">郑州  - 途观 2012款</a></span></p>
							<p><span class="orange01 f14 fb fr">￥21.78万</span><span class="gray01">1年</span></p>
						</li>
												<li><a href="/buycars/2013/09/30/4.html" target="_blank"><img src="upload/image/20130930/02130cpxc2_small.jpg" class="vt"></a>
							<p><span class="carname"><a href="/buycars/2013/09/30/4.html" target="_blank" class="f12">郑州  - 奔驰C级 201</a></span></p>
							<p><span class="orange01 f14 fb fr">￥20.98万</span><span class="gray01">2年</span></p>
						</li>
												<li><a href="/buycars/2013/09/30/3.html" target="_blank"><img src="upload/image/20130930/02130cp1de_small.jpg" class="vt"></a>
							<p><span class="carname"><a href="/buycars/2013/09/30/3.html" target="_blank" class="f12">郑州  - 帕杰罗 2011</a></span></p>
							<p><span class="orange01 f14 fb fr">￥26.20万</span><span class="gray01">2年</span></p>
						</li>
											</ul>
				</div>
				<div class="hide">
					<ul class="scar_list clearfix">
												<li><a href="/buycars/2013/09/30/29.html" target="_blank"><img src="upload/image/20130930/02130dj3yo_small.jpg" class="vt"></a>
							<p><span class="carname"><a href="/buycars/2013/09/30/29.html" target="_blank" class="f12">标致408郑州  - 标</a></span></p>
							<p><span class="orange01 f14 fb fr">￥9.88万</span><span class="gray01">0年</span></p>
						</li>
												<li><a href="/buycars/2013/09/30/28.html" target="_blank"><img src="upload/image/20130930/02130dj540_small.jpg" class="vt"></a>
							<p><span class="carname"><a href="/buycars/2013/09/30/28.html" target="_blank" class="f12">标致郑州  - 标致30</a></span></p>
							<p><span class="orange01 f14 fb fr">￥9.80万</span><span class="gray01">0年</span></p>
						</li>
												<li><a href="/buycars/2013/09/30/27.html" target="_blank"><img src="upload/image/20130930/02130dj9ug_small.jpg" class="vt"></a>
							<p><span class="carname"><a href="/buycars/2013/09/30/27.html" target="_blank" class="f12">奇瑞郑州  - 奇瑞A3</a></span></p>
							<p><span class="orange01 f14 fb fr">￥5.78万</span><span class="gray01">0年</span></p>
						</li>
												<li><a href="/buycars/2013/09/30/24.html" target="_blank"><img src="upload/image/20130930/02130djbfi_small.jpg" class="vt"></a>
							<p><span class="carname"><a href="/buycars/2013/09/30/24.html" target="_blank" class="f12">郑州  - 207三厢 2011</a></span></p>
							<p><span class="orange01 f14 fb fr">￥5.30万</span><span class="gray01">1年</span></p>
						</li>
												<li><a href="/buycars/2013/09/30/21.html" target="_blank"><img src="upload/image/20130930/021309p3re_small.jpg" class="vt"></a>
							<p><span class="carname"><a href="/buycars/2013/09/30/21.html" target="_blank" class="f12">郑州  - 福克斯两</a></span></p>
							<p><span class="orange01 f14 fb fr">￥8.50万</span><span class="gray01">3年</span></p>
						</li>
												<li><a href="/buycars/2013/09/30/19.html" target="_blank"><img src="upload/image/20130930/021309z2bg_small.jpg" class="vt"></a>
							<p><span class="carname"><a href="/buycars/2013/09/30/19.html" target="_blank" class="f12">郑州  - 爱唯欧两</a></span></p>
							<p><span class="orange01 f14 fb fr">￥6.98万</span><span class="gray01">3年</span></p>
						</li>
												<li><a href="/buycars/2013/09/30/18.html" target="_blank"><img src="upload/image/20130930/02130a4tzw_small.jpg" class="vt"></a>
							<p><span class="carname"><a href="/buycars/2013/09/30/18.html" target="_blank" class="f12">郑州  - 赛欧三厢 2</a></span></p>
							<p><span class="orange01 f14 fb fr">￥6.58万</span><span class="gray01">3年</span></p>
						</li>
												<li><a href="/buycars/2013/09/30/16.html" target="_blank"><img src="upload/image/20130930/02130bei4m_small.jpg" class="vt"></a>
							<p><span class="carname"><a href="/buycars/2013/09/30/16.html" target="_blank" class="f12">郑州  - 众泰5008 201</a></span></p>
							<p><span class="orange01 f14 fb fr">￥4.68万</span><span class="gray01">1年</span></p>
						</li>
												<li><a href="/buycars/2013/09/30/15.html" target="_blank"><img src="upload/image/20130930/02130bejfy_small.jpg" class="vt"></a>
							<p><span class="carname"><a href="/buycars/2013/09/30/15.html" target="_blank" class="f12">郑州  - 科鲁兹三</a></span></p>
							<p><span class="orange01 f14 fb fr">￥8.58万</span><span class="gray01">2年</span></p>
						</li>
												<li><a href="/buycars/2013/09/30/13.html" target="_blank"><img src="upload/image/20130930/02130dk2fu_small.jpg" class="vt"></a>
							<p><span class="carname"><a href="/buycars/2013/09/30/13.html" target="_blank" class="f12">郑州  - 长城C30 2010</a></span></p>
							<p><span class="orange01 f14 fb fr">￥4.78万</span><span class="gray01">2年</span></p>
						</li>
											</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="main_right">
		<div class="commonbox02">
			<h3>热门车源排行</h3>
			<div class="box">
				<div class="hotcarlist" style="height:170px">
										<p class="clearfix" style="height:28px"><span class="orange01 fb fr">￥14.98万</span><span class="num01">1</span><a href="/buycars/2013/09/30/26.html" target="_blank" class="fl pl10">郑州  - 逍客 2012款 2.0 XV 雷 CVT 2W</a></p>
										<p class="clearfix" style="height:28px"><span class="orange01 fb fr">￥5.78万</span><span class="num01">2</span><a href="/buycars/2013/09/30/27.html" target="_blank" class="fl pl10">奇瑞郑州  - 奇瑞A3两厢 2010款 1.6—MT 进取型</a></p>
										<p class="clearfix" style="height:28px"><span class="orange01 fb fr">￥9.80万</span><span class="num01">3</span><a href="/buycars/2013/09/30/28.html" target="_blank" class="fl pl10">标致郑州  - 标致308 2012款 1.6L 自动 优尚型</a></p>
										<p class="clearfix" style="height:28px"><span class="orange01 fb fr">￥9.88万</span><span class="num02">4</span><a href="/buycars/2013/09/30/29.html" target="_blank" class="fl pl10">标致408郑州  - 标致408 2011款 1.6L 手动 舒适版</a></p>
									</div>
			</div>
		</div>
	</div>
</div>
<div class="main mt15 clearfix">
	<div class="main_left">
		<script language="javascript" src="index.php?m=ad&id=54"></script>
	</div>
	<div class="main_right">
		<script language="javascript" src="index.php?m=ad&id=55"></script>
	</div>
</div>
<div class="main mt15">
	<div class="indexbox clearfix">
		<div class="left">
			<h3>推荐商家</h3>
			<div class="box">
				<ul class="dealerlist">
									</ul>
				<div class="indexbut01 mt10"><a href="/index.php?m=dealer">查看更多商家信息</a></div>
			</div>
		</div>
		<div class="center">
			<h3>最新求购信息</h3>
			<div class="box">
				<ul class="newslist">
										<li>老**&nbsp;&nbsp;&nbsp;155********&nbsp;&nbsp;&nbsp;求购：奥迪</li>
										<li>东**&nbsp;&nbsp;&nbsp;130********&nbsp;&nbsp;&nbsp;求购：别克</li>
										<li>东**&nbsp;&nbsp;&nbsp;130********&nbsp;&nbsp;&nbsp;求购：保时捷</li>
									</ul>
				<div class="indexbut02 mt10"><a href="/index.php?m=buycar">提交求购信息</a></div>
			</div>
		</div>
		<div class="right">
			<h3>二手车行情</h3>
			<div class="box">
				<ul class="newslist">
										<li><a href="/news/201210/218.html" target="_blank">传亚马逊中国总裁王汉华离职 官方</a></li>
										<li><a href="/news/201210/178.html" target="_blank">详谈Global.asa清除及百度快照的更新</a></li>
										<li><a href="/news/201210/179.html" target="_blank">隐藏淘宝客网站链接的3种形式</a></li>
										<li><a href="/news/201210/180.html" target="_blank">深度分析网站收录大幅度下降原因</a></li>
										<li><a href="/news/201210/181.html" target="_blank">百度大面积k站 到底是站长问题还</a></li>
										<li><a href="/news/201210/182.html" target="_blank">外链资源积累要注意什么？</a></li>
									</ul>
				<div class="indexbut01 mt10"><a href="/index.php?m=news&a=list&catid=53">查看更多二手车行情</a></div>
			</div>
		</div>
	</div>
</div>

<!--底部导航-->
<div class="footer" id="foot">
	<p class="tc">
				<a href="/index.php" title="首页" >首页</a> | 
				<a href="/index.php?m=search" title="买车" >买车</a> | 
				<a href="/index.php?m=sellinfo" title="卖车" >卖车</a> | 
				<a href="/index.php?m=buycar" title="求购" >求购</a> | 
				<a href="/index.php?m=assesscar" title="评估" >评估</a> | 
				<a href="/index.php?m=dealer" title="商家" >商家</a> | 
			</p>
	<p class="mt10"> &#169; Graduation Design 2016. Copyright by tj-edu  </p>
 </div>
<!-- 版权 结束 -->



<!-- JS
================================================== -->
<script type="text/javascript" src="/ag_bishe/Application/Public/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/ag_bishe/Application/Public/js/scriptcar.js"></script>
<script type="text/javascript" src="/ag_bishe/Application/Public/js/jquery.ez-bg-resize.js"></script>
<script type="text/javascript" src="/ag_bishe/Application/Public/prettyphoto/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="/ag_bishe/Application/Public/js/smoothscrolling.js"></script>
<script src="/ag_bishe/Application/Public/js/jquery.sticky.js" type="text/javascript"></script>
<script src="/ag_bishe/Application/Public/js/css_browser_selector.js" type="text/javascript"></script> 
<script src="/ag_bishe/Application/Public/js/formsubmit.js"></script>
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
  <script defer src="/ag_bishe/Application/Public/js/jquery.flexslider.js"></script>
  
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
</body> <!-- close body -->
</html> <!-- close html -->