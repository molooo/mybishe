<?php if (!defined('THINK_PATH')) exit();?>﻿
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
<link rel="stylesheet" href="/ag_bishe/Application/Public/css/Index/style.css">
<link href='http://fonts.useso.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>

</head>

<body>

	<!-- Logo Starts Here 
==================================================== -->
<div id="top"> <!-- Top Div Open -->
<div style="float:right;padding:10px;margin:25px;color:#525252"> <!-- Logo Div -->
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
<div id="topband">

	<div id="logo"> <!-- Logo Div -->
			<img src="/ag_bishe/Application/Public/img/Index/logofooter.png" alt="logo">
	</div> <!-- Closes Logo Div -->
	
</div>

<div id="menuband">

	<ul id="menu1">
			<li><a href="/ag_bishe/Application/index.php/Home/House/" class="smoothScroll">首页</a></li> <!-- menu item -->
			
			<li><a href="/ag_bishe/Application/index.php/Home/House/house_list?leixing=3" class="smoothScroll">新房</a></li> <!-- menu item -->
			
			<li><a href="/ag_bishe/Application/index.php/Home/House/house_list?leixing=2" class="smoothScroll">二手房</a></li> <!-- menu item -->
			
			<li><a href="/ag_bishe/Application/index.php/Home/House/house_list?leixing=1" class="smoothScroll">租房</a></li> <!-- menu item -->
			<li><a href="/ag_bishe/Application/index.php/Home/House/fabu" class="smoothScroll">发布</a></li> <!-- menu item -->

			<li><a href="/ag_bishe/Application/index.php/Home/House/tuan" class="smoothScroll">看房团预约</a></li> <!-- menu item -->

			<li><a href="/ag_bishe/Application/index.php/Home/House/hyzx" class="smoothScroll">会员中心</a></li> <!-- menu item -->

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

</div>

<!-- Intro Text -->
	<div id="intro"> <!-- intro div open -->

		<p class="introh3"><span class="dottedline_left"></span>Welcome to the<span class="dottedline_right"></span></p>
		<p class="introh1">新的家</p>
		<p class="introh4">本地分类信息生活服务网站</p>
	</div> <!-- intro div close -->


<!-- Social Icons -->
		<div class="topsocialicons">

					<div class="circlelarge" id="facebookiconlarge">
						<a href="#"><img class="contactsocialicon2" src="/ag_bishe/Application/Public/img/Index/facebook-icn.png" alt="facebook"></a>
					</div>

					<div class="circlelarge" id="hoteliconlarge">
						<a href="#"><img class="contactsocialicon2" src="/ag_bishe/Application/Public/img/Index/hotel-icn.png" alt="linkedin"></a>
					</div>

					<div class="circlelarge" id="twittericonlarge">
						<a href="#"><img class="contactsocialicon2" src="/ag_bishe/Application/Public/img/Index/twitter-icn.png" alt="twitter"></a>
					</div>

					<div class="circlelarge" id="behanceiconlarge">
						<a href="#"><img class="contactsocialicon2" src="/ag_bishe/Application/Public/img/Index/behance-icn.png" alt="googleplus"></a>
					</div>

					<div class="circlelarge" id="dribbbleiconlarge">
						<a href="#"><img class="contactsocialicon2" src="/ag_bishe/Application/Public/img/Index/dribbble-icn.png" alt="dribbble"></a>
					</div>

					<div class="circlelarge" id="fleaiconlarge">
						<a href="#"><img class="contactsocialicon2" src="/ag_bishe/Application/Public/img/Index/flea-icn.png" alt="linkedin"></a>
					</div>

					<div class="circlelarge" id="linkediniconlarge">
						<a href="#"><img class="contactsocialicon2" src="/ag_bishe/Application/Public/img/Index/linkedin-icn.png" alt="linkedin"></a>
					</div>


		</div>


</div>	<!-- Closes top Div -->


<!-- Sticky Nav Bar -->
	<div id="hiddenmenu"> <!-- Hidden Menu bar div open -->
		<ul id="menu">
			<li><a href="/ag_bishe/Application/index.php/Home/House/" class="smoothScroll">首页</a></li> <!-- menu item -->
			
			<li><a href="/ag_bishe/Application/index.php/Home/House/newhouse.html" class="smoothScroll">新房</a></li> <!-- menu item -->
			
			<li><a href="/ag_bishe/Application/index.php/Home/House/" class="smoothScroll">二手房</a></li> <!-- menu item -->
			
			<li><a href="#about" class="smoothScroll">租房</a></li> <!-- menu item -->

			<li><a href="#team" class="smoothScroll">论坛</a></li> <!-- menu item -->

			<li><a href="/ag_bishe/Application/index.php/Home/House/public.html" class="smoothScroll">发布</a></li> <!-- menu item -->

			<li><a href="#team" class="smoothScroll">返回</a></li> <!-- menu item -->

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

<div id="navcover"> <!-- Div to hide nav sticky nav bar when at top of page -->
</div> <!-- close hide nav div -->

		<!-- WOrk Starts Here -->

	<div id="work"> <!-- work div open -->
		<div class="container" id="workcontent">  <!-- work content div open -->
			<h1>近期楼盘 <span></span></h1> <!-- Title of Work page -->
			
			<span class="thirteen"> <!-- work opening paragraph -->
				我们是一群朝气蓬勃的年轻人，我们奋进、阳光、喜欢拼搏。我们设计了本地分类信息大型生活服务网站，便利了同于我们在这里的人们。
			</span>
<br>
<br>
	        <div class="flexslider"> <!-- Slider gallery starts here -->
	          		<ul class="slides">
	            	<li>
	  	    	    <img src="/ag_bishe/Application/Public/img/House/house1.jpg" alt="galleryitem"  /></li>
	  	    		<li>
	  	    	    <img src="/ag_bishe/Application/Public/img/House/house2.jpg" alt="galleryitem" /> <!-- Slider gallery image here -->
	  	    		</li>
	  	    		<li>
	  	    	    <img src="/ag_bishe/Application/Public/img/House/house3.jpg" alt="galleryitem" /> <!-- Slider gallery image here -->
	  	    		</li>
	  	    		<li>
	  	    	    <img src="/ag_bishe/Application/Public/img/House/house4.jpg" alt="galleryitem" /> <!-- Slider gallery image here -->
	  	    		</li>
	  	    		<li>
	  	    	    <img src="/ag_bishe/Application/Public/img/House/house5.jpg" alt="galleryitem" /> <!-- Slider gallery image here -->
	  	    		</li>
	  	    		<li>
	  	    	    <img src="/ag_bishe/Application/Public/img/House/house6.jpg" alt="galleryitem" /> <!-- Slider gallery image here -->
	  	    		</li>
	  	    		<li>
	  	    	    <img src="/ag_bishe/Application/Public/img/House/house7.jpg" alt="galleryitem" /> <!-- Slider gallery image here -->
	  	    		</li>
	          		</ul>
	        </div> <!-- Slider gallery ends here -->


<br>
<br>
			<h1>二手房 <span></span></h1> <!-- Title of Work page -->

					<span class="thirteen">
							找了好久的房子   终于决定留在这里   突然好想知道   这房子以前拥有谁的回忆						
						<br>
					</span>
					
					<br>
					<br>


	        <div class="galleryitem"> <!-- Portfolio Item -->
	        	<a rel="prettyPhoto" title="Project Title Here" href="/ag_bishe/Application/Public/img/House/example.png"><img class="portfolioitem" src="/ag_bishe/Application/Public/img/House/h2.jpg" alt="Portfolio Item"></a> <!-- Portfolio Item Image -->
		        	<div class="portfolioitemtitleholder">
		        		<h6 class="portfoliotitle">Project Title Goes Here</h6> <!-- Portfolio Item Title -->
		        	</div> 
	        			<p class="galleryitemdescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis nisi quis odio</p> <!-- Portfolio Item Description-->
	        </div> <!-- Portfolio Item end -->

	        <div class="galleryitem"> <!-- Portfolio Item -->
	        	<a rel="prettyPhoto" title="Project Title Here" href="/ag_bishe/Application/Public/img/Index/example.png"><img class="portfolioitem" src="/ag_bishe/Application/Public/img/House/h3.jpg" alt="Portfolio Item"></a> <!-- Portfolio Item Image -->
		        	<div class="portfolioitemtitleholder">
		        		<h6 class="portfoliotitle">Project Title Goes Here</h6> <!-- Portfolio Item Title -->
		        	</div>
	        			<p class="galleryitemdescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis nisi quis odio</p> <!-- Portfolio Item Description-->
	        </div> <!-- Portfolio Item end -->

	        <div class="galleryitem"> <!-- Portfolio Item -->
	        	<a rel="prettyPhoto" title="Project Title Here" href="/ag_bishe/Application/Public/img/Index/example.png"><img class="portfolioitem" src="/ag_bishe/Application/Public/img/House/h4.jpg" alt="Portfolio Item"></a> <!-- Portfolio Item Image -->
		        	<div class="portfolioitemtitleholder">
		        		<h6 class="portfoliotitle">Project Title Goes Here</h6> <!-- Portfolio Item Title -->
		        	</div>
	        			<p class="galleryitemdescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis nisi quis odio</p> <!-- Portfolio Item Description-->
	        </div> <!-- Portfolio Item end -->
	   

			<div class="galleryitem"> <!-- Portfolio Item -->
	        	<a rel="prettyPhoto" title="Project Title Here" href="/ag_bishe/Application/Public/img/Index/example.png"><img class="portfolioitem" src="/ag_bishe/Application/Public/img/House/h5.jpg" alt="Portfolio Item"></a> <!-- Portfolio Item Image -->
		        	<div class="portfolioitemtitleholder">
		        		<h6 class="portfoliotitle">Project Title Goes Here</h6> <!-- Portfolio Item Title -->
		        	</div>
	        			<p class="galleryitemdescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis nisi quis odio</p> <!-- Portfolio Item Description-->
	        </div> <!-- Portfolio Item end -->

	        <div class="galleryitem"> <!-- Portfolio Item -->
	        	<a rel="prettyPhoto" title="Project Title Here" href="/ag_bishe/Application/Public/img/Index/example.png"><img class="portfolioitem" src="/ag_bishe/Application/Public/img/Index/Portfolio-Item-5.jpg" alt="Portfolio Item"></a> <!-- Portfolio Item Image -->
		        	<div class="portfolioitemtitleholder">
		        		<h6 class="portfoliotitle">Project Title Goes Here</h6> <!-- Portfolio Item Title -->
		        	</div>
	        			<p class="galleryitemdescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis nisi quis odio</p> <!-- Portfolio Item Description-->
	        </div> <!-- Portfolio Item end -->

	        <div class="galleryitem"> <!-- Portfolio Item -->
	        	<a rel="prettyPhoto" title="Project Title Here" href="/ag_bishe/Application/Public/img/Index/example.png"><img class="portfolioitem" src="/ag_bishe/Application/Public/img/Index/Portfolio-Item-6.jpg" alt="Portfolio Item"></a> <!-- Portfolio Item Image -->
		        	<div class="portfolioitemtitleholder">
		        		<h6 class="portfoliotitle">Project Title Goes Here</h6> <!-- Portfolio Item Title -->
		        	</div>
	        			<p class="galleryitemdescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis nisi quis odio</p> <!-- Portfolio Item Description-->
	        </div> <!-- Portfolio Item end -->


			<div class="galleryitem"> <!-- Portfolio Item -->
	        	<a rel="prettyPhoto" title="Project Title Here" href="/ag_bishe/Application/Public/img/Index/example.png"><img class="portfolioitem" src="/ag_bishe/Application/Public/img/Index/Portfolio-Item-7.jpg" alt="Portfolio Item"></a> <!-- Portfolio Item Image -->
		        	<div class="portfolioitemtitleholder">
		        		<h6 class="portfoliotitle">Project Title Goes Here</h6> <!-- Portfolio Item Title -->
		        	</div>
	        			<p class="galleryitemdescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis nisi quis odio</p> <!-- Portfolio Item Description-->
	        </div> <!-- Portfolio Item end -->

	        <div class="galleryitem"> <!-- Portfolio Item -->
	        	<a rel="prettyPhoto" title="Project Title Here" href="/ag_bishe/Application/Public/img/Index/example.png"><img class="portfolioitem" src="/ag_bishe/Application/Public/img/Index/Portfolio-Item-8.jpg" alt="Portfolio Item"></a> <!-- Portfolio Item Image -->
		        	<div class="portfolioitemtitleholder">
		        		<h6 class="portfoliotitle">Project Title Goes Here</h6> <!-- Portfolio Item Title -->
		        	</div>
	        			<p class="galleryitemdescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis nisi quis odio</p> <!-- Portfolio Item Description-->
	        </div> <!-- Portfolio Item end -->

	        <div class="galleryitem"> <!-- Portfolio Item -->
	        	<a rel="prettyPhoto" title="Project Title Here" href="/ag_bishe/Application/Public/img/Index/example.png"><img class="portfolioitem" src="/ag_bishe/Application/Public/img/Index/Portfolio-Item-9.jpg" alt="Portfolio Item"></a> <!-- Portfolio Item Image -->
		        	<div class="portfolioitemtitleholder">
		        		<h6 class="portfoliotitle">Project Title Goes Here</h6> <!-- Portfolio Item Title -->
		        	</div>
	        			<p class="galleryitemdescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis nisi quis odio</p> <!-- Portfolio Item Description-->
	        </div> <!-- Portfolio Item end -->
		</div> <!-- workcontent close -->
	</div> <!-- work close -->
	<div id="footer"> <!-- footer div open -->
		<div id="footercontent" class="container"> <!-- footer content wrapper div -->
			<img src="/ag_bishe/Application/Public/img/Index/logofooter.png" alt="footerlogo"> <!-- footer logo image here -->
			<br> <!-- line break -->
			<br> <!-- line break -->
			<p id="copyright"> &#169; Scroll King 2013. More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p> <!-- copyright text here -->
		</div> <!-- footer content wrapper div close -->
	</div> <!-- footer div close -->

<!-- JS
================================================== -->
<script type="text/javascript" src="/ag_bishe/Application/Public/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/ag_bishe/Application/Public/js/scripthouse.js"></script>
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