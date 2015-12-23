
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->



<head> 

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="__PUBLIC__/img/favicon.ico">

	<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Welcome</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="__PUBLIC__/prettyphoto/css/prettyPhoto.css" type="text/css" media="screen" />
<link rel="stylesheet" href="__PUBLIC__/css/Index/flexslider.css" type="text/css" media="screen" /> <!-- Slider Stylesheet -->
<link rel="stylesheet" href="__PUBLIC__/css/Index/reset.css">
<link rel="stylesheet" href="__PUBLIC__/css/Index/style.css">
<link rel="stylesheet" href="__PUBLIC__/css/car/css/common.css">
<link rel="stylesheet" href="__PUBLIC__/css/car/css/inside.css">
<link href='http://fonts.useso.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
<style type="text/css">
.introh1 {
	font-family: 'Bebas', sans-serif;
	font-size: 140px;
	color: #FFF;
	font-weight: normal;
	text-transform: uppercase;
	margin-bottom: 0px;
	margin-top:-10px;
	line-height: 1.1em;
	text-shadow: 1px 1px 0px rgba(0,0,0,0.25);
}
</style>
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
<div id="topband">

	<div id="logo"> <!-- Logo Div -->
			<img src="__PUBLIC__/img/Index/logofooter.png" alt="logo">
	</div> <!-- Closes Logo Div -->
	
</div>

<div id="hiddenmenu"> <!-- Hidden Menu bar div open -->
		<ul id="menu">
			<li><a href="__APP__/Home/Index" class="smoothScroll">首页</a></li> <!-- menu item -->
			
			<li><a href="__APP__/Home/buy" class="smoothScroll">买车</a></li> <!-- menu item -->
			
			<li><a href="__APP__/Home/Index" class="smoothScroll">卖车</a></li> <!-- menu item -->

			<li><a href="__APP__/Home/Index" class="smoothScroll">车友论坛</a></li> <!-- menu item -->

			<li><a href="__APP__/Home/Index" class="smoothScroll">返回</a></li> <!-- menu item -->
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

	</div> 

<!-- Intro Text -->
	<div id="intro"> <!-- intro div open -->

		<p class="introh3"><span class="dottedline_left"></span>Welcome to the<span class="dottedline_right"></span></p>
		<p class="introh1">诚信二手车</p>
		<p class="introh4">本地分类信息生活服务网站</p>
	</div> <!-- intro div close -->


<!-- Social Icons -->
		<div class="topsocialicons">

					<div class="circlelarge" id="facebookiconlarge">
						<a href="#"><img class="contactsocialicon2" src="__PUBLIC__/img/Index/facebook-icn.png" alt="facebook"></a>
					</div>

					<div class="circlelarge" id="hoteliconlarge">
						<a href="#"><img class="contactsocialicon2" src="__PUBLIC__/img/Index/hotel-icn.png" alt="linkedin"></a>
					</div>

					<div class="circlelarge" id="twittericonlarge">
						<a href="#"><img class="contactsocialicon2" src="__PUBLIC__/img/Index/twitter-icn.png" alt="twitter"></a>
					</div>

					<div class="circlelarge" id="behanceiconlarge">
						<a href="#"><img class="contactsocialicon2" src="__PUBLIC__/img/Index/behance-icn.png" alt="googleplus"></a>
					</div>

					<div class="circlelarge" id="dribbbleiconlarge">
						<a href="#"><img class="contactsocialicon2" src="__PUBLIC__/img/Index/dribbble-icn.png" alt="dribbble"></a>
					</div>

					<div class="circlelarge" id="fleaiconlarge">
						<a href="#"><img class="contactsocialicon2" src="__PUBLIC__/img/Index/flea-icn.png" alt="linkedin"></a>
					</div>

					<div class="circlelarge" id="linkediniconlarge">
						<a href="#"><img class="contactsocialicon2" src="__PUBLIC__/img/Index/linkedin-icn.png" alt="linkedin"></a>
					</div>


		</div>


</div>	<!-- Closes top Div -->


<!-- Sticky Nav Bar -->
	<div id="hiddenmenu"> <!-- Hidden Menu bar div open -->
		<ul id="menu">
			<li><a href="__APP__/Home/Index" class="smoothScroll">首页</a></li> <!-- menu item -->
			
			<li><a href="__APP__/Home/Index" class="smoothScroll">买车</a></li> <!-- menu item -->
			
			<li><a href="__APP__/Home/Index" class="smoothScroll">卖车</a></li> <!-- menu item -->

			<li><a href="__APP__/Home/Index" class="smoothScroll">车友论坛</a></li> <!-- menu item -->

			<li><a href="__APP__/Home/Index" class="smoothScroll">返回</a></li> <!-- menu item -->
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

<div id="navcover"> <!-- Div to hide nav sticky nav bar when at top of page -->
</div> <!-- close hide nav div -->

		<!-- WOrk Starts Here -->

	<div id="work"> <!-- work div open -->
		<div class="container" id="workcontent">  <!-- work content div open -->
			<h1  style="font-family:黑体;color:black;float:center;font-size:56px;padding-top:10px;margin-bottom:10px;">站长推荐<span></span></h1> <!-- Title of Work page -->
			
			<span class="thirteen"> <!-- work opening paragraph -->
				说到路虎揽胜你会想到什么，想到高大威猛的车身和强大的四驱系统，而揽胜Evoque属于城市。
			</span>
<br>
<br>
	        <div class="flexslider"> <!-- Slider gallery starts here -->
	          		<ul class="slides">
	            	<li>
	  	    	    <img src="__PUBLIC__/img/car/1.jpg" alt="galleryitem"  /></li>
	  	    		<li>
	  	    	    <img src="__PUBLIC__/img/car/2.jpg" alt="galleryitem" /> <!-- Slider gallery image here -->
	  	    		</li>
	  	    		<li>
	  	    	    <img src="__PUBLIC__/img/car/3.jpg" alt="galleryitem" /> <!-- Slider gallery image here -->
	  	    		</li>
	  	    		<li>
	  	    	    <img src="__PUBLIC__/img/car/4.jpg" alt="galleryitem" /> <!-- Slider gallery image here -->
	  	    		</li>
	  	    		<li>
	  	    	    <img src="__PUBLIC__/img/car/7.jpg" alt="galleryitem" /> <!-- Slider gallery image here -->
	  	    		</li>
	  	    		
	          		</ul>
	        </div> <!-- Slider gallery ends here -->


<br>
<br>
			<!--hall_show-->
<div id="hall_show" class="wrap">
  <div class="show_title">
    <h1 style="font-family:黑体;color:#fff;float:left;font-size:36px;padding-top:50px;margin-bottom:20px;"><span></span>二手车旗舰店</h1>
  </div>
  <p>人性化设计，宽敞的车辆展示空间，360度无死角看车；独立交易室，购车安全感倍增；提供车辆预约双向试驾服务；设有儿童区、免费水吧，让您不只是买卖车辆，更享受星级服务。我们期待您的光临，本店所有员工将竭诚为您服务。</p>
  <ul class="hallImg_show clearfix">
    <li><img alt="大搜车，二手车，展馆，洽谈室" src="__PUBLIC__/img/car/images/hall1.jpg" /></li>
    <li><img alt="大搜车，二手车，展馆，接待区" src="__PUBLIC__/img/car/images/hall2.jpg" /></li>
    <li><img alt="大搜车，二手车，展馆，儿童区" src="__PUBLIC__/img/car/images/hall3.jpg" /></li>
    <li><img alt="大搜车，二手车，展馆，旗舰式展厅" src="__PUBLIC__/img/car/images/hall4.jpg" /><ins>国际会展设施  可同时容纳超过700辆车</ins></li>
    <li><img style="width:380px;height:290px;" alt="大搜车，二手车，夜店，晚上22:00点" src="__PUBLIC__/img/car/222.jpg" /><ins>贴心服务，只为客户<br/>
      </ins></li>
  </ul>
</div>
<!--hall_show end--> 

<!--rideCar-->
<div id="checkCar" class="wrap">
  <div class="show_title">
    <h1 style="font-family:黑体;color:#fff;float:left;font-size:36px;padding-top:50px;margin-bottom:20px;"><span></span>全方位检测&nbsp;&nbsp;保证车源质量</h1>
    <h5 style="font-family:黑体;color:#fff;float:left;font-size:16px;margin-left:50px;"><span></span>每一台在售车辆提供356项详细检测，包括底盘检测、发动机检测、驾驶体验检测、内饰外观检测及漆面修复检测。</h5>
    <h5 style="font-family:黑体;color:#fff;float:left;font-size:16px;margin-left:50px;"><span></span>操作工序多达468道，确保杜绝火烧车、水浸车及重大事故车辆，让您安心选车，放心购车。</h5>


  </div>
  <div class="checkCar_show clearfix"> <img src="__PUBLIC__/img/car/images/check1.jpg" /> <img src="__PUBLIC__/img/car/images/check2.jpg" /> <img src="__PUBLIC__/img/car/images/check3.jpg" /> </div>
  <p class="check_decorate"><ins>360度全方位检测</ins>提供详细专业的检测报告</p>
  <img src="__PUBLIC__/img/car/images/check4.jpg"  class="check_img" /> </div>
<!--rideCar end--> 

<!--alpha_price-->
<div id="alpha_price" class="wrap">
  <div class="show_title">
    <h1 style="font-family:黑体;color:#fff;float:left;font-size:36px;padding-top:40px;margin-bottom:10px;"><span></span>价格透明</h1>
    <h1 style="font-family:黑体;color:#fff;float:left;font-size:36px;padding-top:40px;margin-bottom:10px;">卖家自主定价</h1>
  
      <br/>
    </p>
  </div>

 </div>
<!--alpha_price end--> 

<!--alpha_price-->
<div id="service_show" class="wrap">
  <div class="show_title">
    <h1 style="font-family:黑体;color:#fff;float:left;font-size:36px;padding-top:40px;margin-bottom:10px;"><span></span>1对1过户专员全程服务</h1>
	<h1 style="font-family:黑体;color:#fff;float:left;font-size:24px;padding-top:40px;margin-bottom:10px;">全程免费为您办理过户、转籍、上牌等手续！</h1>

    <div class="service_tag"> <ins><span></span>过户</ins> <ins><span></span>转籍</ins> <ins><span></span>上牌</ins> </div>
  </div>
</div>
<!--alpha_price end--> 

<!--payment-->
<div id="pay_show" class="wrap">
  <div class="show_title">
    <h1 style="font-family:黑体;color:#fff;float:left;font-size:36px;padding-top:40px;margin-bottom:10px;"><span></span>分期付款&nbsp;&nbsp;购车无压力</h1>
   
  </div>
</div>
<!--alpha_price end--> 

<!--quality_promise-->
<div id="quality_promise" class="wrap clearfix">
  <div class="show_title">
    <h1 style="font-family:黑体;color:#fff;float:left;font-size:36px;padding-top:40px;margin-bottom:10px;"><span></span>全方位质保&nbsp;&nbsp;再无后顾之忧</h1>
    </div>
  <div class="promise_content"> <ins></ins>
    <dl>
         <h1 style="height:100px;font-family:黑体;background:#93715d;color:#FFF;float:center;font-size:36px;padding-top:40px;margin-bottom:10px;">7天无理由退货</h1>
    </dl>
  </div>
  <div class="promise_content promise_content_180"> <ins></ins>
  	<dl>
         <h1 style="height:100px;font-family:黑体;background:#93715d;color:#FFF;float:center;font-size:36px;padding-top:40px;margin-bottom:10px;">1年2W公里超长质保</h1>
  	</dl>
  </div>
</div>
<div  class="wrap" style="height:30px;font-family:黑体;background:#272822;color:#FFF;float:center;font-size:36px;margin-bottom:10px;">
<p id="copyright" style="margin-bottom:20px;"> &#169; Graduation Design 2016. Copyright by tj-edu 
</div>



<!-- JS
================================================== -->
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/scriptcar.js"></script>
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
</body> <!-- close body -->
</html> <!-- close html -->


	

