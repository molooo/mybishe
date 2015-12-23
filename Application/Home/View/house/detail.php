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
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
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
<link type="text/css" rel="stylesheet" href="__PUBLIC__/css/House/sharedetail.css">
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
<!-- Closes Logo Div -->
<div id="topband">

	<div id="logo"> <!-- Logo Div -->
			<img src="__PUBLIC__/img/Index/logofooter.png" alt="logo">
	</div> <!-- Closes Logo Div -->
	
</div>
<div id="menuband">

	<ul id="menu1">
			<li><a href="__APP__/Home/House/" class="smoothScroll">首页</a></li> <!-- menu item -->
			
			<li><a href="__APP__/Home/House/house_list?leixing=3" class="smoothScroll">新房</a></li> <!-- menu item -->
			
			<li><a href="__APP__/Home/House/house_list?leixing=2" class="smoothScroll">二手房</a></li> <!-- menu item -->
			
			<li><a href="__APP__/Home/House/house_list?leixing=1" class="smoothScroll">租房</a></li> <!-- menu item -->
			<li><a href="__APP__/Home/House/fabu" class="smoothScroll">发布</a></li> <!-- menu item -->

			<li><a href="__APP__/Home/House/tuan" class="smoothScroll">看房团预约</a></li> <!-- menu item -->

			<li><a href="__APP__/Home/House/hyzx" class="smoothScroll">会员中心</a></li> <!-- menu item -->
	
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
</div >
<div id="menuband1">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwULLTExMDE2MzcyNDVkZA==" />
</div>
<input type="hidden" id="js_ismonitor400" value="True" />
<div class="search-bar" id="menuband1">
    <div class="search-barinner clearfix">
        <div class="t-search fl">
            <div class="nsearch_type fl" id="J_searchtype">
                <p><span data-url="/ershoufang/"  id="menuband2"><?php if ($detail_list[0]['leixing'] ==1){echo '租房';}elseif ($detail_list[0]['leixing'] == 2){echo '二手房';}else {echo'新房';}?></span></p>
            </div>
            <input id="guidKey" type="text" class="search_ipt"
                onblur="if($.trim(this.value)==''){this.value=this.title;this.style.color='#a9a9a9'}"
                onfocus="if(this.value==this.title){this.value='';this.style.color='#000000'}"
                title="请输入小区名称/学校/区域" value="请输入小区名称/学校/区域" class="txt autoSuggest fl" autocomplete="off" style="color: #a9a9a9" />
            <input type="button" class="search_btn" id="J_Search" value="搜索" />
        </div>
        <dl class="b-search fl"></dl>
    </div>
</div>
 <div class="centmain-wraper">
            <div class="centmain-inner">
<!-- 主体内容 -->
 <div class="result-lists">
<div class="house-main">
<!-- S;houseinfo --><div class="roomDetail clearfix"><dl class="fl roominfor"><dd><h5 class="f18"><?php echo $detail_list[0]['housename']?></h5><p class="labeltag"><span class="tag_red">独家</span><span class="tag_orange">随时看房</span></p></dd></dl><ul class="rDetail fr"><li class="collect"><a id="js_detail_collect" class="f999 collectbtn" href="javascript:void(0);" para="{random:'62',postid:'37ca7c51-d300-c49d-c237-08d2fa19a5d1',type:'ershoufang'}" style="cursor: pointer; margin-right:20px;">收藏</a></li><input id="js_deatil_collect_id" value="" type="hidden"><input id="js_deatil_postid" value="37ca7c51-d300-c49d-c237-08d2fa19a5d1" type="hidden"></ul><div class="share-dropDown" style="display: none;"><a title="分享到微信" class="jiathis_button_weixin f333" style="cursor: pointer"><span class="jiathis_txt jiathis_separator jtico jtico_weixin">微信</span></a><a title="分享到新浪微博" class="jiathis_button_tsina f333" style="cursor: pointer"><span class="jiathis_txt jiathis_separator jtico jtico_tsina">微博</span></a><a title="分享到腾讯微博" class="jiathis_button_tqq f333" style="cursor: pointer"><span class="jiathis_txt jiathis_separator jtico jtico_tqq">QQ</span></a><a title="分享到QQ空间" class="jiathis_button_qzone f333" style="cursor: pointer"><span class="jiathis_txt jiathis_separator jtico jtico_qzone">QQ空间</span></a></div></div><div class="roombase-box clearfix"><div class="roombase-photo fl"><div class="bigpicmode" style="text-align: center;" id="js_detail_bigimg" data-para="{postid:'37ca7c51-d300-c49d-c237-08d2fa19a5d1',cestcode:'PEWPWWWYDE',posttype:'S',ishot:'False',defaultimg:'http://tjstatic.centaline.com.cn/images/20151031/053735_aee55397-7c0d-4a7d-a53b-fd12e7a41d19.jpg',defaultimgext:'.jpg'}">
<span id="prev" class="btn prev"></span>
<span id="next" class="btn next"></span>
<a id="prevTop" class="btn prev"><i class="icon-arr"></i></a>
<a id="nextTop" class="btn next"><i class="icon-arr"></i></a>
<div id="picBox" class="picBox">
    <ul style="width: 8160px; left: -2720px;" class="cf">
        
        <li>
            
            <i></i><a style="cursor:pointer">
                <img class="js_lazy_img_big" data-index="0" lazysrc="http://tjstatic.centaline.com.cn/images/20151031/053735_aee55397-7c0d-4a7d-a53b-fd12e7a41d19.jpg?width=640&amp;height=450&amp;watermark=smallgroup_center&amp;mode=stretch" src="http://tjstatic.centaline.com.cn/images/20151031/053735_aee55397-7c0d-4a7d-a53b-fd12e7a41d19.jpg?width=640&amp;height=450&amp;watermark=smallgroup_center&amp;mode=stretch" onerror="this.src='/resource/images/housephoto/none.jpg'"></a>
        </li>
        
        <li>
            
            <i></i><a style="cursor:pointer">
                <img class="js_lazy_img_big" data-index="1" lazysrc="http://tjstatic.centaline.com.cn/images/20151031/053650_7c318a33-bb44-4f8f-85cb-666d5f9664e6.jpg?width=640&amp;height=450&amp;watermark=smallgroup_center&amp;mode=stretch" src="http://tjstatic.centaline.com.cn/images/20151031/053650_7c318a33-bb44-4f8f-85cb-666d5f9664e6.jpg?width=640&amp;height=450&amp;watermark=smallgroup_center&amp;mode=stretch" onerror="this.src='/resource/images/housephoto/none.jpg'"></a>
        </li>
        
        <li>
            
            <i></i><a style="cursor:pointer">
                <img class="js_lazy_img_big" data-index="2" lazysrc="http://tjstatic.centaline.com.cn/images/20151031/052520_49900a08-a7b3-4c4a-9e4f-2e6b1ff18db7.jpg?width=640&amp;height=450&amp;watermark=smallgroup_center&amp;mode=stretch" src="http://tjstatic.centaline.com.cn/images/20151031/052520_49900a08-a7b3-4c4a-9e4f-2e6b1ff18db7.jpg?width=640&amp;height=450&amp;watermark=smallgroup_center&amp;mode=stretch" onerror="this.src='/resource/images/housephoto/none.jpg'"></a>
        </li>
        
        <li>
            
            <i></i><a style="cursor:pointer">
                <img class="js_lazy_img_big" data-index="3" lazysrc="http://tjstatic.centaline.com.cn/images/20151031/053712_acc33b99-8a48-4d14-9c8a-67d687fb5058.jpg?width=640&amp;height=450&amp;watermark=smallgroup_center&amp;mode=stretch" src="http://tjstatic.centaline.com.cn/images/20151031/053712_acc33b99-8a48-4d14-9c8a-67d687fb5058.jpg?width=640&amp;height=450&amp;watermark=smallgroup_center&amp;mode=stretch" onerror="this.src='/resource/images/housephoto/none.jpg'"></a>
        </li>
        
        <li>
            
            <i></i><a style="cursor:pointer">
                <img class="js_lazy_img_big" data-index="4" lazysrc="http://tjstatic.centaline.com.cn/images/20151031/053708_5a76087f-ee81-49f0-8143-747db23c6405.jpg?width=640&amp;height=450&amp;watermark=smallgroup_center&amp;mode=stretch" src="http://tjstatic.centaline.com.cn/images/20151031/053708_5a76087f-ee81-49f0-8143-747db23c6405.jpg?width=640&amp;height=450&amp;watermark=smallgroup_center&amp;mode=stretch" onerror="this.src='/resource/images/housephoto/none.jpg'"></a>
        </li>
        
        <li>
            
            <i></i><a style="cursor:pointer">
                <img class="js_lazy_img_big" data-index="5" lazysrc="http://tjstatic.centaline.com.cn/images/20151031/053726_ccfdef5e-36b0-47dd-80a0-2a82ecb4e344.jpg?width=640&amp;height=450&amp;watermark=smallgroup_center&amp;mode=stretch" src="http://static.centanet.com/resource/images/v1/loadIndicator_660X480.gif" onerror="this.src='/resource/images/housephoto/none.jpg'"></a>
        </li>
        
        <li>
            
            <i></i><a style="cursor:pointer">
                <img class="js_lazy_img_big" data-index="6" lazysrc="http://tjstatic.centaline.com.cn/images/20151031/053705_5eceb4c4-0fce-4ad0-a849-7d9ff692186e.jpg?width=640&amp;height=450&amp;watermark=smallgroup_center&amp;mode=stretch" src="http://static.centanet.com/resource/images/v1/loadIndicator_660X480.gif" onerror="this.src='/resource/images/housephoto/none.jpg'"></a>
        </li>
        
        <li>
            
            <i></i><a style="cursor:pointer">
                <img class="js_lazy_img_big" data-index="7" lazysrc="http://tjstatic.centaline.com.cn/images/20151031/053717_6ab6a43c-23d3-4837-9c43-12db9fb5868a.jpg?width=640&amp;height=450&amp;watermark=smallgroup_center&amp;mode=stretch" src="http://static.centanet.com/resource/images/v1/loadIndicator_660X480.gif" onerror="this.src='/resource/images/housephoto/none.jpg'"></a>
        </li>
        
        <li>
            
            <i></i><a style="cursor:pointer">
                <img class="js_lazy_img_big" data-index="8" lazysrc="http://tjstatic.centaline.com.cn/images/20151031/053731_33a0bd73-710b-4b3f-b99f-446030e509db.jpg?width=640&amp;height=450&amp;watermark=smallgroup_center&amp;mode=stretch" src="http://static.centanet.com/resource/images/v1/loadIndicator_660X480.gif" onerror="this.src='/resource/images/housephoto/none.jpg'"></a>
        </li>
        
        <li>
            
            <i></i><a style="cursor:pointer">
                <img class="js_lazy_img_big" data-index="9" lazysrc="http://tjstatic.centaline.com.cn/images/20151031/053721_b24c8e9c-da79-47e7-9756-637f5738f1a3.jpg?width=640&amp;height=450&amp;watermark=smallgroup_center&amp;mode=stretch" src="http://static.centanet.com/resource/images/v1/loadIndicator_660X480.gif" onerror="this.src='/resource/images/housephoto/none.jpg'"></a>
        </li>
        
        <li>
            
            <i></i><a style="cursor:pointer">
                <img class="js_lazy_img_big" data-index="10" lazysrc="http://tjstatic.centaline.com.cn/images/20151031/052520_7256cd9e-8b44-4402-8281-18ae312e1922.jpg?width=640&amp;height=450&amp;watermark=smallgroup_center&amp;mode=stretch" src="http://static.centanet.com/resource/images/v1/loadIndicator_660X480.gif" onerror="this.src='/resource/images/housephoto/none.jpg'"></a>
        </li>
        
        <li>
            
            <i></i><a style="cursor:pointer">
                <img class="js_lazy_img_big" data-index="11" lazysrc="http://tjstatic.centaline.com.cn/images/20151031/053659_611b9e95-e9d3-4221-afdb-1968857a6bcb.jpg?width=640&amp;height=450&amp;watermark=smallgroup_center&amp;mode=stretch" src="http://static.centanet.com/resource/images/v1/loadIndicator_660X480.gif" onerror="this.src='/resource/images/housephoto/none.jpg'"></a>
        </li>
        
    </ul>
</div>
<div id="listBox" class="listBox">
    <ul style="width: 1596px; left: -266px;" class="cf">
        
        <li class="">
            <img class="js_lazy_img" lazysrc="http://tjstatic.centaline.com.cn/images/20151031/053735_aee55397-7c0d-4a7d-a53b-fd12e7a41d19.jpg?width=96&amp;height=68&amp;watermark=smallgroup_center&amp;mode=stretch" src="http://tjstatic.centaline.com.cn/images/20151031/053735_aee55397-7c0d-4a7d-a53b-fd12e7a41d19.jpg?width=96&amp;height=68&amp;watermark=smallgroup_center&amp;mode=stretch" onerror="this.src='/resource/images/housephoto/none.jpg'" height="70" width="50"><u class="pagenumtmbg" id="js_img_count">1</u></li>
        
        <li class="">
            <img class="js_lazy_img" lazysrc="http://tjstatic.centaline.com.cn/images/20151031/053650_7c318a33-bb44-4f8f-85cb-666d5f9664e6.jpg?width=96&amp;height=68&amp;watermark=smallgroup_center&amp;mode=stretch" src="http://tjstatic.centaline.com.cn/images/20151031/053650_7c318a33-bb44-4f8f-85cb-666d5f9664e6.jpg?width=96&amp;height=68&amp;watermark=smallgroup_center&amp;mode=stretch" onerror="this.src='/resource/images/housephoto/none.jpg'" height="70" width="50"><u class="pagenumtmbg" id="js_img_count">2</u></li>
        
        <li class="">
            <img class="js_lazy_img" lazysrc="http://tjstatic.centaline.com.cn/images/20151031/052520_49900a08-a7b3-4c4a-9e4f-2e6b1ff18db7.jpg?width=96&amp;height=68&amp;watermark=smallgroup_center&amp;mode=stretch" src="http://tjstatic.centaline.com.cn/images/20151031/052520_49900a08-a7b3-4c4a-9e4f-2e6b1ff18db7.jpg?width=96&amp;height=68&amp;watermark=smallgroup_center&amp;mode=stretch" onerror="this.src='/resource/images/housephoto/none.jpg'" height="70" width="50"><u class="pagenumtmbg" id="js_img_count">3</u></li>
        
        <li class="">
            <img class="js_lazy_img" lazysrc="http://tjstatic.centaline.com.cn/images/20151031/053712_acc33b99-8a48-4d14-9c8a-67d687fb5058.jpg?width=96&amp;height=68&amp;watermark=smallgroup_center&amp;mode=stretch" src="http://tjstatic.centaline.com.cn/images/20151031/053712_acc33b99-8a48-4d14-9c8a-67d687fb5058.jpg?width=96&amp;height=68&amp;watermark=smallgroup_center&amp;mode=stretch" onerror="this.src='/resource/images/housephoto/none.jpg'" height="70" width="50"><u class="pagenumtmbg" id="js_img_count">4</u></li>
        
        <li class="on">
            <img class="js_lazy_img" lazysrc="http://tjstatic.centaline.com.cn/images/20151031/053708_5a76087f-ee81-49f0-8143-747db23c6405.jpg?width=96&amp;height=68&amp;watermark=smallgroup_center&amp;mode=stretch" src="http://tjstatic.centaline.com.cn/images/20151031/053708_5a76087f-ee81-49f0-8143-747db23c6405.jpg?width=96&amp;height=68&amp;watermark=smallgroup_center&amp;mode=stretch" onerror="this.src='/resource/images/housephoto/none.jpg'" height="70" width="50"><u class="pagenumtmbg" id="js_img_count">5</u></li>
        
        <li class="">
            <img class="js_lazy_img" lazysrc="http://tjstatic.centaline.com.cn/images/20151031/053726_ccfdef5e-36b0-47dd-80a0-2a82ecb4e344.jpg?width=96&amp;height=68&amp;watermark=smallgroup_center&amp;mode=stretch" src="http://tjstatic.centaline.com.cn/images/20151031/053726_ccfdef5e-36b0-47dd-80a0-2a82ecb4e344.jpg?width=96&amp;height=68&amp;watermark=smallgroup_center&amp;mode=stretch" onerror="this.src='/resource/images/housephoto/none.jpg'" height="70" width="50"><u class="pagenumtmbg" id="js_img_count">6</u></li>
        
        <li class="">
            <img class="js_lazy_img" lazysrc="http://tjstatic.centaline.com.cn/images/20151031/053705_5eceb4c4-0fce-4ad0-a849-7d9ff692186e.jpg?width=96&amp;height=68&amp;watermark=smallgroup_center&amp;mode=stretch" src="http://tjstatic.centaline.com.cn/images/20151031/053705_5eceb4c4-0fce-4ad0-a849-7d9ff692186e.jpg?width=96&amp;height=68&amp;watermark=smallgroup_center&amp;mode=stretch" onerror="this.src='/resource/images/housephoto/none.jpg'" height="70" width="50"><u class="pagenumtmbg" id="js_img_count">7</u></li>
        
        <li class="">
            <img class="js_lazy_img" lazysrc="http://tjstatic.centaline.com.cn/images/20151031/053717_6ab6a43c-23d3-4837-9c43-12db9fb5868a.jpg?width=96&amp;height=68&amp;watermark=smallgroup_center&amp;mode=stretch" src="http://tjstatic.centaline.com.cn/images/20151031/053717_6ab6a43c-23d3-4837-9c43-12db9fb5868a.jpg?width=96&amp;height=68&amp;watermark=smallgroup_center&amp;mode=stretch" onerror="this.src='/resource/images/housephoto/none.jpg'" height="70" width="50"><u class="pagenumtmbg" id="js_img_count">8</u></li>
        
        <li class="">
            <img class="js_lazy_img" lazysrc="http://tjstatic.centaline.com.cn/images/20151031/053731_33a0bd73-710b-4b3f-b99f-446030e509db.jpg?width=96&amp;height=68&amp;watermark=smallgroup_center&amp;mode=stretch" src="http://tjstatic.centaline.com.cn/images/20151031/053731_33a0bd73-710b-4b3f-b99f-446030e509db.jpg?width=96&amp;height=68&amp;watermark=smallgroup_center&amp;mode=stretch" onerror="this.src='/resource/images/housephoto/none.jpg'" height="70" width="50"><u class="pagenumtmbg" id="js_img_count">9</u></li>
        
        <li class="">
            <img class="js_lazy_img" lazysrc="http://tjstatic.centaline.com.cn/images/20151031/053721_b24c8e9c-da79-47e7-9756-637f5738f1a3.jpg?width=96&amp;height=68&amp;watermark=smallgroup_center&amp;mode=stretch" src="http://tjstatic.centaline.com.cn/images/20151031/053721_b24c8e9c-da79-47e7-9756-637f5738f1a3.jpg?width=96&amp;height=68&amp;watermark=smallgroup_center&amp;mode=stretch" onerror="this.src='/resource/images/housephoto/none.jpg'" height="70" width="50"><u class="pagenumtmbg" id="js_img_count">10</u></li>
        
        <li class="">
            <img class="js_lazy_img" lazysrc="http://tjstatic.centaline.com.cn/images/20151031/052520_7256cd9e-8b44-4402-8281-18ae312e1922.jpg?width=96&amp;height=68&amp;watermark=smallgroup_center&amp;mode=stretch" src="http://tjstatic.centaline.com.cn/images/20151031/052520_7256cd9e-8b44-4402-8281-18ae312e1922.jpg?width=96&amp;height=68&amp;watermark=smallgroup_center&amp;mode=stretch" onerror="this.src='/resource/images/housephoto/none.jpg'" height="70" width="50"><u class="pagenumtmbg" id="js_img_count">11</u></li>
        
        <li class="">
            <img class="js_lazy_img" lazysrc="http://tjstatic.centaline.com.cn/images/20151031/053659_611b9e95-e9d3-4221-afdb-1968857a6bcb.jpg?width=96&amp;height=68&amp;watermark=smallgroup_center&amp;mode=stretch" src="http://tjstatic.centaline.com.cn/images/20151031/053659_611b9e95-e9d3-4221-afdb-1968857a6bcb.jpg?width=96&amp;height=68&amp;watermark=smallgroup_center&amp;mode=stretch" onerror="this.src='/resource/images/housephoto/none.jpg'" height="70" width="50"><u class="pagenumtmbg" id="js_img_count">12</u></li>
        
    </ul>
</div>

<div id="js_bigimg_temp"></div>
</div></div>
<div class="roombase-infor fr">
<div class="roombase-top">
<div class="roombase-price ">
<span class="cRed"><?php echo $detail_list[0]['amountprice']?>万</span>
<span class="f000"><?php echo $detail_list[0]['shi']?>室<?php echo $detail_list[0]['ting']?>厅<?php echo $detail_list[0]['wei']?>卫</span>
<span class="f000"><?php echo $detail_list[0]['chicun']?>平</span>
</div>
<ul class="hbase_txt clearfix"><li><p class="txt_l f333"><b>单<i class="double_words"></i>价：</b></p><div class="txt_r f666"><?php echo $detail_list[0]['houseprice']?>元/平
</div>
</li>
<li class="cell"><p class="txt_l f333"><b>朝<i class="double_words"></i>向：</b></p><div class="txt_r f666">南北</div></li><li class="cell"><p class="txt_l f333"><b>年<i class="double_words"></i>代：</b></p><div class="txt_r f666"> 2013年 </div></li>
<li class="cell"><p class="txt_l f333"><b>楼<i class="double_words"></i>层：</b></p><div class="txt_r f666">高层(共5层)</div></li><li class="cell"><p class="txt_l f333"><b>装<i class="double_words"></i>修：</b></p><div class="txt_r f666">豪装</div></li><li><p class="txt_l f333"><b>小区名称：</b></p><div class="txt_r f666"><a href="/xiaoqu/xq-pewpwwwyde/" class="cBlue" target="_blank">六十三里弄三区 </a></div></li>
<li><p class="txt_l f333"><b>小区地址：</b></p><div class="txt_r f666"> <?php echo $detail_list[0]['houseaddress']?> 【西青/中北镇】 </div></li></ul></div><div class="roombase-people"><dl class="roompeple szroompeple clearfix"><dt class="fl szPhoto"></dt><dd class="fl"><p class="mb_10"><a class="f000 f18" href="/jingjiren/m-tj15100119/?from=detailjjr" target="_blank"><b><?php echo $detail_list[0]['lianxirenname']?></b></a>&nbsp;&nbsp;&nbsp; </p><p style="margin-top: 25px;">随时与我联系</p></dd></dl><p class="hotline"><span class="js_post400 js_talk_agent_400_s_022_tj15100119" zvalue="37ca7c51-d300-c49d-c237-08d2fa19a5d1"><?php echo $detail_list[0]['phone']?></span></p></div></div></div><!-- S;housecomment--><div style="position: relative; top: 0px; z-index: 88;" class="detailtab-outer" id="detailTabBox"></div><div class="commentlist-box" id="js_detailother" para="{postid:'37ca7c51-d300-c49d-c237-08d2fa19a5d1',agentid:'TJ15100119',index:'1',posttype:'S'}" style="">

</div></div><!-- S;trend-->
</div>
</div>
</div>
      
  
<!-- Sticky Nav Bar -->
	<div id="hiddenmenu"> <!-- Hidden Menu bar div open -->
		<ul id="menu">
			<li><a href="#top" class="smoothScroll">首页</a></li> <!-- menu item -->
			
			<li><a href="#work" class="smoothScroll">新房</a></li> <!-- menu item -->
			
			<li><a href="#services" class="smoothScroll">二手房</a></li> <!-- menu item -->
			
			<li><a href="#about" class="smoothScroll">租房</a></li> <!-- menu item -->

			<li><a href="#team" class="smoothScroll">论坛</a></li> <!-- menu item -->

			<li><a href="#contactus" class="smoothScroll">发布</a></li> <!-- menu item -->

			<li><a href="#team" class="smoothScroll">登录</a></li> <!-- menu item -->

			<li><a href="#contactus" class="smoothScroll">关于我们</a></li> <!-- menu item -->
		</ul>

		<select class="mobilemenu" onchange="MobilescrollToThis(this.value)" name="dropdpown">
				<option selected="selected" value>Menu</option> 			    
			    <option value="#top" >TOP</option> 
			    <option value="#work">WORK</option> 
			    <option value="#services">SERVICES</option> 
			    <option value="#about">ABOUT</option> 
			    <option value="#team">TEAM</option> 
			    <option value="#contactus">CONTACT</option> 
  		</select> 

	</div> <!-- Hidden Menu bar div close -->

	<!-- JS
================================================== -->
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.ez-bg-resize.js"></script>
<script type="text/javascript" src="__PUBLIC__/prettyphoto/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/smoothscrolling.js"></script>
<script src="__PUBLIC__/js/jquery.sticky.js" type="text/javascript"></script>
<script src="__PUBLIC__/js/css_browser_selector.js" type="text/javascript"></script> 
<script src="__PUBLIC__/js/formsubmit.js"></script>
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