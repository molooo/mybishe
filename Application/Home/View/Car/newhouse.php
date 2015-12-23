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
			
			<li><a href="__APP__/Home/House/house_listnew?leixing=3" class="smoothScroll">新房</a></li> <!-- menu item -->
			
			<li><a href="__APP__/Home/House/house_list?leixing=2">二手房</a></li> <!-- menu item -->
			
			<li><a href="__APP__/Home/House/house_list?leixing=1">租房</a></li> <!-- menu item -->

			<li><a href="#team" class="smoothScroll">论坛</a></li> <!-- menu item -->

			<li><a href="__APP__/Home/House/fabu" class="smoothScroll">发布</a></li> <!-- menu item -->

			<li><a href="#team" class="smoothScroll">看房团预约</a></li> <!-- menu item -->

			<li><a href="#contactus" class="smoothScroll">会员中心</a></li> <!-- menu item -->

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
                <p><span data-url="/ershoufang/"  id="menuband2"><?php if ($leixing ==1){echo '租房';}elseif ($leixing == 2){echo '二手房';}else {echo'新房';}?></span></p>
            </div>
            <FORM action="__APP__/Home/House/search?leixing=<?php echo $leixing?>" method="POST">
            <input id="guidKey" type="text" class="search_ipt" name="search_content"
                onblur="if($.trim(this.value)==''){this.value=this.title;this.style.color='#a9a9a9'}"
                onfocus="if(this.value==this.title){this.value='';this.style.color='#000000'}"
                title="请输入楼房名称" value="请输入楼房名称" class="txt autoSuggest fl" autocomplete="off" style="color: #a9a9a9" />
            <input type="submit" class="search_btn" id="J_Search" value="搜索" />
        	</FORM>
        </div>
        <dl class="b-search fl"></dl>
    </div>
</div>
 <div class="centmain-wraper">
            <div class="centmain-inner">
                
                <!-- 主体内容 -->
                <div class="result-lists">
                    <div class="select-bar clearfix">
                        <ul class="sort-rule fl">
                            <li <?php if ($moren=='moren'){?>class='first curr'<?php }?>><a href='__APP__/Home/House/house_list?leixing=<?php echo $leixing?>'><span>默认</span></a></li>
                            <li <?php if ($moren=='zuixin'){?>class='first curr'<?php }?>><a href='__APP__/Home/House/zuixin?leixing=<?php echo $leixing?>'><span>最新</span></a></li>
                            <li <?php if ($moren=='zongjia'){?>class='first curr'<?php }?>><a href='__APP__/Home/House/zongjia?leixing=<?php echo $leixing?>'><span>总价</span><i class='sort_normal'></i></a></li>
                            <li <?php if ($moren=='chicun'){?>class='first curr'<?php }?>><a href='__APP__/Home/House/chicun?leixing=<?php echo $leixing?>'><span>面积</span><i class='sort_normal'></i></a></li>
                        </ul>
                        <p class="pagerTxt fr ">
                            <span>共<span class="cRed"><em>17632</em></span>套二手房</span>
                        </p>
                    </div>
<?php if ($houselist==null){?>
<div class="house-main">    
<div class="listnonebox" style='display: none'>
    <div class="listnone">
        对不起，暂未找到相关房源。您可以，适当调整查找条件...
    </div>
</div>
<?php }?>
<!-- Intro Text -->
<div class="house-listBox">
 <?php foreach ($house_list as $key=>$value){?>
            <div id="37ca7c51-d300-c49d-c237-08d2fa19a5d1" class="house-item clearfix">
                <p class="item-photo fl">
                    <a href='__APP__/Home/House/detail?houseid=<?php echo $value['id']?>' target='_blank'>
                        <img class="lazy" data-original='__APP__/Home/House/'
                            src="__PUBLIC__/img/House/public1.jpg" alt='<?php echo $value['housename']?>200万'
                            title='<?php echo $value['housename']?>200万' /></a>
                </p>
                <div class="item-info fl">
                    <h4 class="house-title">
                        <a href="__APP__/Home/House/detail?houseid=<?php echo $value['id']?>" class="cBlueB" title="<?php echo $value['housename']?>" target="_blank"><?php echo $value['housename']?></a>
                    </h4>
                    <p class="f14 f000 mb_10">
                       <span class='f000 mr_10'><?php echo $value['shi']?>室<?php echo $value['ting']?>厅<?php echo $value['wei']?>卫</span><span class='f000'><?php echo $value['chicun']?>平米</span>
                    </p>
                    <p class="f7b mb_10">
                        南北<em class='mrl_6'>|</em>高层<em class='mrl_6'>|</em>豪装 <em class='mrl_6'>|</em>2013年
                    </p>
                    <p class="f7b mb_15">
                        <?php echo $value['houseaddress']?>
                          </p>
                    <p class="labeltag">
                    <?php if ($value['leixing']!=3){?>
                        <span class='tag_red'>独家</span><span class='tag_orange'>随时看房</span><span class='tag_orange'><a href="__APP__/Home/House/kefu?housename=<?php echo $value['housename']?>&houseprice=<?php echo $value['houseprice']?>&lianxirenid=<?php echo $value['lianxirenid']?>">与卖家联系</a></span>
                    <?php }else{?>
                        <span class='tag_red'>在售</span><span class='tag_orange'>精装修</span>                 
                    <?php }?>
                    </p>
                </div>
                <div class="item-pricearea fr">
                    <p class='price-nub cRed'><?php echo $value['amountprice'];?>万<?php if ($leixing==3){echo '/套';}?><i class='icons-up ml_10'></i></p>
                    
                    <p class="f14 f000 mb_15 fsm"><?php echo $value['houseprice'];?><?php if ($leixing==2){?>元/平米<?php }elseif ($leixing==1){?>元/月<?php }?></p>
                </div>
                                <div class="clearr"></div>
 
                
            </div>
 <?php }?>
 </div>
 <div class="pagerLayer" style='display: block'>
                            <div class="pagerbox">
                                <div class='pagerbar'><span class='resultTxt  f16 '>共找到<span class='cRed'>17632</span>套房源</span><span class='curr'>1</span><a class='curr' href='/ershoufang/g2/'>2</a><a class='curr' href='/ershoufang/g3/'>3</a><a class='curr' href='/ershoufang/g4/'>4</a><a class='curr' href='/ershoufang/g5/'>5</a><a class='fsm fb' href='/ershoufang/g2/'>&gt;</a><a class='fsm fb' href='/ershoufang/g882/'>&gt;&gt;</a></div>
                            </div>
                        </div>
            </div>
        </div>
        <div  id="scrollSid">
	    <a title="返回顶部" id="topBtn" class="topBtn"></a>
    </div>
   <div class="popupmap none" style="width: 665px; height: 404px; background: white; padding-top: 4px;">
        <iframe id="imap" src='/page/v1/common/empty.htm' width="660px" height="400px"
            marginwidth='5' marginheight='0' scrolling='no' frameborder='no'></iframe>
    </div>
    <div class="popupbg">
    </div>
    
        <script type="text/javascript" src="http://static.centanet.com/resource/modulescript/require.js?v2015112610561"></script>
 <div style="display: none">
    <script type="text/javascript">var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F5355df1cf87f7b87cd509f27a92fc4d7' type='text/javascript'%3E%3C/script%3E"));</script>
    <script type="text/javascript">var pkBaseURL = (("https:" == document.location.protocol) ? "https://114.80.110.193/stat/" : "http://114.80.110.193/stat/");document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));</script><script type="text/javascript">try {var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 12);piwikTracker.trackPageView();piwikTracker.enableLinkTracking();} catch( err ) {}</script>
<script>
(function()
{ var bp = document.createElement('script'); bp.src = '//push.zhanzhang.baidu.com/push.js'; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(bp, s); }
)();
</script>

</div>

     <div  id="scrollSid">
	    <a title="返回顶部" id="topBtn" class="topBtn"></a>
    </div>
   <div class="popupmap none" style="width: 665px; height: 404px; background: white; padding-top: 4px;">
        <iframe id="imap" src='/page/v1/common/empty.htm' width="660px" height="400px"
            marginwidth='5' marginheight='0' scrolling='no' frameborder='no'></iframe>
    </div>
    <div class="popupbg">
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