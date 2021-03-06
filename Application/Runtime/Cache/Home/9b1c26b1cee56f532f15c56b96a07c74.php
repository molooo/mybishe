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

<div style="float:right;padding:10px;margin:10px;"> <!-- Logo Div -->
		<ul>
			<li><a href="/ag_bishe/Application/index.php/Home/index/login">登录</a></li>
			<li><a href="/ag_bishe/Application/index.php/home/index/reg">注册</a></li>
		</ul>
	</div> <!-- Closes Logo Div -->
<div id="topband">

	<div id="logo"> <!-- Logo Div -->
			<img src="/ag_bishe/Application/Public/img/Index/logofooter.png" alt="logo">
	</div> <!-- Closes Logo Div -->
	
</div>

<div id="menuband">

	<ul id="menu1">
			<li><a href="#top" class="smoothScroll">首页</a></li> <!-- menu item -->
			
			<li><a href="/ag_bishe/Application/index.php/Home/House/" class="smoothScroll">房屋</a></li> <!-- menu item -->
			
			<li><a href="#services" class="smoothScroll">酒店</a></li> <!-- menu item -->
			
			<li><a href="/ag_bishe/Application/index.php/Home/Train/index" class="smoothScroll">教育</a></li> <!-- menu item -->

			<li><a href="#team" class="smoothScroll">二手车</a></li> <!-- menu item -->

			<li><a href="/ag_bishe/Application/index.php/Home/Pet" class="smoothScroll">宠物之家</a></li> <!-- menu item -->

			<li><a href="#team" class="smoothScroll">跳蚤市场</a></li> <!-- menu item -->

			<li><a href="#contactus" class="smoothScroll">消费点评</a></li> <!-- menu item -->

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
		<p class="introh1">service for life</p>

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
			<li><a href="#top" class="smoothScroll">首页</a></li> <!-- menu item -->
			
			<li><a href="#work" class="smoothScroll">房屋</a></li> <!-- menu item -->
			
			<li><a href="#services" class="smoothScroll">酒店</a></li> <!-- menu item -->
			
			<li><a href="#about" class="smoothScroll">教育</a></li> <!-- menu item -->

			<li><a href="#team" class="smoothScroll">二手车</a></li> <!-- menu item -->

			<li><a href="/ag_bishe/Application/index.php/Home/Pet" class="smoothScroll">宠物之家</a></li> <!-- menu item -->

			<li><a href="#team" class="smoothScroll">跳蚤市场</a></li> <!-- menu item -->

			<li><a href="#contactus" class="smoothScroll">消费点评</a></li> <!-- menu item -->
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
			<h1>Our <span>Work</span></h1> <!-- Title of Work page -->
			
			<span class="thirteen"> <!-- work opening paragraph -->
				我们是一群朝气蓬勃的年轻人，我们奋进、阳光、喜欢拼搏。我们设计了本地分类信息大型生活服务网站，便利了同于我们在这里的人们。
			</span>
<br>
<br>
	        <div class="flexslider"> <!-- Slider gallery starts here -->
	          		<ul class="slides">
	            	<li>
	  	    	    <img src="/ag_bishe/Application/Public/img/Index/Slider1.jpg" alt="galleryitem"  /> <!-- Slider gallery image here -->
	  	    		</li>
	  	    		<li>
	  	    	    <img src="/ag_bishe/Application/Public/img/Index/Slider2.jpg" alt="galleryitem" /> <!-- Slider gallery image here -->
	  	    		</li>
	  	    		<li>
	  	    	    <img src="/ag_bishe/Application/Public/img/Index/Slider3.jpg" alt="galleryitem" /> <!-- Slider gallery image here -->
	  	    		</li>
	  	    		<li>
	  	    	    <img src="/ag_bishe/Application/Public/img/Index/Slider4.jpg" alt="galleryitem" /> <!-- Slider gallery image here -->
	  	    		</li>
	  	    		<li>
	  	    	    <img src="/ag_bishe/Application/Public/img/Index/Slider5.jpg" alt="galleryitem" /> <!-- Slider gallery image here -->
	  	    		</li>
	  	    		<li>
	  	    	    <img src="/ag_bishe/Application/Public/img/Index/Slider6.jpg" alt="galleryitem" /> <!-- Slider gallery image here -->
	  	    		</li>
	  	    		<li>
	  	    	    <img src="/ag_bishe/Application/Public/img/Index/Slider7.jpg" alt="galleryitem" /> <!-- Slider gallery image here -->
	  	    		</li>
	          		</ul>
	        </div> <!-- Slider gallery ends here -->


<br>
<br>
					
					
					<br>
					<br>


	        <div class="galleryitem"> <!-- Portfolio Item -->
	        	<a rel="prettyPhoto" title="Project Title Here" href="/ag_bishe/Application/Public/img/Index/example.png"><img class="portfolioitem" src="/ag_bishe/Application/Public/img/Index/Portfolio-Item-1.jpg" alt="Portfolio Item"></a> <!-- Portfolio Item Image -->
		        	<div class="portfolioitemtitleholder">
		        		<h6 class="portfoliotitle">房屋租赁</h6> <!-- Portfolio Item Title -->
		        	</div> 
	        			<p class="galleryitemdescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis nisi quis odio</p> <!-- Portfolio Item Description-->
	        </div> <!-- Portfolio Item end -->

	        <div class="galleryitem"> <!-- Portfolio Item -->
	        	<a rel="prettyPhoto" title="Project Title Here" href="/ag_bishe/Application/Public/img/Index/example.png"><img class="portfolioitem" src="/ag_bishe/Application/Public/img/Index/Portfolio-Item-2.jpg" alt="Portfolio Item"></a> <!-- Portfolio Item Image -->
		        	<div class="portfolioitemtitleholder">
		        		<h6 class="portfoliotitle">旅游酒店</h6> <!-- Portfolio Item Title -->
		        	</div>
	        			<p class="galleryitemdescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis nisi quis odio</p> <!-- Portfolio Item Description-->
	        </div> <!-- Portfolio Item end -->

	        <div class="galleryitem"> <!-- Portfolio Item -->
	        	<a rel="prettyPhoto" title="Project Title Here" href="/ag_bishe/Application/Public/img/Index/example.png"><img class="portfolioitem" src="/ag_bishe/Application/Public/img/Index/Portfolio-Item-3.jpg" alt="Portfolio Item"></a> <!-- Portfolio Item Image -->
		        	<div class="portfolioitemtitleholder">
		        		<h6 class="portfoliotitle">教育成长</h6> <!-- Portfolio Item Title -->
		        	</div>
	        			<p class="galleryitemdescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis nisi quis odio</p> <!-- Portfolio Item Description-->
	        </div> <!-- Portfolio Item end -->
	   

			<div class="galleryitem"> <!-- Portfolio Item -->
	        	<a rel="prettyPhoto" title="Project Title Here" href="/ag_bishe/Application/Public/img/Index/example.png"><img class="portfolioitem" src="/ag_bishe/Application/Public/img/Index/Portfolio-Item-4.jpg" alt="Portfolio Item"></a> <!-- Portfolio Item Image -->
		        	<div class="portfolioitemtitleholder">
		        		<h6 class="portfoliotitle">二手车市场</h6> <!-- Portfolio Item Title -->
		        	</div>
	        			<p class="galleryitemdescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis nisi quis odio</p> <!-- Portfolio Item Description-->
	        </div> <!-- Portfolio Item end -->

	        <div class="galleryitem"> <!-- Portfolio Item -->
	        	<a rel="prettyPhoto" title="Project Title Here" href="/ag_bishe/Application/Public/img/Index/example.png"><img class="portfolioitem" src="/ag_bishe/Application/Public/img/Index/Portfolio-Item-5.jpg" alt="Portfolio Item"></a> <!-- Portfolio Item Image -->
		        	<div class="portfolioitemtitleholder">
		        		<h6 class="portfoliotitle">宠物之家</h6> <!-- Portfolio Item Title -->
		        	</div>
	        			<p class="galleryitemdescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis nisi quis odio</p> <!-- Portfolio Item Description-->
	        </div> <!-- Portfolio Item end -->

	        <div class="galleryitem"> <!-- Portfolio Item -->
	        	<a rel="prettyPhoto" title="Project Title Here" href="/ag_bishe/Application/Public/img/Index/example.png"><img class="portfolioitem" src="/ag_bishe/Application/Public/img/Index/Portfolio-Item-6.jpg" alt="Portfolio Item"></a> <!-- Portfolio Item Image -->
		        	<div class="portfolioitemtitleholder">
		        		<h6 class="portfoliotitle">跳蚤市场</h6> <!-- Portfolio Item Title -->
		        	</div>
	        			<p class="galleryitemdescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis nisi quis odio</p> <!-- Portfolio Item Description-->
	        </div> <!-- Portfolio Item end -->


			<div class="galleryitem"> <!-- Portfolio Item -->
	        	<a rel="prettyPhoto" title="Project Title Here" href="/ag_bishe/Application/Public/img/Index/example.png"><img class="portfolioitem" src="/ag_bishe/Application/Public/img/Index/Portfolio-Item-7.jpg" alt="Portfolio Item"></a> <!-- Portfolio Item Image -->
		        	<div class="portfolioitemtitleholder">
		        		<h6 class="portfoliotitle">消费点评</h6> <!-- Portfolio Item Title -->
		        	</div>
	        			<p class="galleryitemdescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis nisi quis odio</p> <!-- Portfolio Item Description-->
	        </div> <!-- Portfolio Item end -->

	        <div class="galleryitem"> <!-- Portfolio Item -->
	        	<a rel="prettyPhoto" title="Project Title Here" href="/ag_bishe/Application/Public/img/Index/example.png"><img class="portfolioitem" src="/ag_bishe/Application/Public/img/Index/Portfolio-Item-8.jpg" alt="Portfolio Item"></a> <!-- Portfolio Item Image -->
		        	<div class="portfolioitemtitleholder">
		        		<h6 class="portfoliotitle">关于我们</h6> <!-- Portfolio Item Title -->
		        	</div>
	        			<p class="galleryitemdescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis nisi quis odio</p> <!-- Portfolio Item Description-->
	        </div> <!-- Portfolio Item end -->

	        <div class="galleryitem"> <!-- Portfolio Item -->
	        	<a rel="prettyPhoto" title="Project Title Here" href="/ag_bishe/Application/Public/img/Index/example.png"><img class="portfolioitem" src="/ag_bishe/Application/Public/img/Index/Portfolio-Item-9.jpg" alt="Portfolio Item"></a> <!-- Portfolio Item Image -->
		        	<div class="portfolioitemtitleholder">
		        		<h6 class="portfoliotitle">加入我们</h6> <!-- Portfolio Item Title -->
		        	</div>
	        			<p class="galleryitemdescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis nisi quis odio</p> <!-- Portfolio Item Description-->
	        </div> <!-- Portfolio Item end -->



	        <div id="clients">   <!-- Clients Starts Here -->

	        		<span class="lineleft"></span><p class="smallheadingfont">Recent <span>Clients</span></p><span class="lineright"></span> <!-- Client Header text -->

	        		<img id="logos" alt="logo" src="/ag_bishe/Application/Public/img/Index/client-logos.png"> <!-- Clients Image Here -->

	        </div>  <!-- closes clients div -->

	         <div id="testimonials"> <!-- Testimonials Starts Here -->

	        		<span class="lineleft2"></span><p class="smallheadingfont">Client <span id="experiences">Experiences</span></p><span class="lineright2"></span> <!-- Testimonials Heading text -->

	        		<div id="testimonials_split_text"> <!-- testimonials split paragraphs div -->

	        			<div id="textleft"> <!-- testimonials left -->
	        				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis nisi quis odio tempor imperdiet quis quis nisl. Aenean velit</p>
	        			</div> <!-- testimonials left close -->
 
	        			<div id="textright"> <!-- testimonials right -->
	        				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis nisi quis odio tempor imperdiet quis quis nisl. Aenean velit</p>
	        			</div> <!-- testimonials right close -->

	        		</div> <!-- testimonials split paragraphs div close -->

	        </div> <!-- Testimonials close -->

	        <div class="blurbenclosure"> <!-- blurb enclosure at bottom of section -->

	        	<div class="blurb"> <!-- blurb at bottom of section div open -->

	        		<h4>Like what you see? Join our family of satisfied clients!</h4>

	        	</div> <!-- blurb at bottom of section div close -->

	        </div> <!-- blurb enclosure at bottom of section close -->

	        <a href="#contactus" class="smoothScroll"><h3>CONTACT US</h3></a> <!-- Contact Button -->

					<div class="clear"></div> <!-- clear div -->


		</div> <!-- workcontent close -->
	</div> <!-- work close -->

	<div class="patterndown"></div> <!-- dividing triangular pattern -->

<!-- Services Starts Here -->

	<div id="services"> <!-- Services open -->
		<div class="container" id="servicescontent" > <!-- Services content -->
			<h1>Our <span>Services</span></h1> <!-- Services Heading Text -->

			
			<span class="thirteen"> <!-- Services paragraph -->
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor feugiat urna, id sagittis tellus.<br>
				
				Duis eget arcu eget purus sagittis laoreet ut eu quam. Curabitur interdum velit et felis malesuada eleifend. <br>
				<br>

			</span>
			

			<div id="whatwedo"> <!-- What We Do Starts Here -->

	        		<span class="lineleft3"></span><p class="smallheadingfont">What <span>We Do</span></p><span class="lineright3"></span> <!-- What We Do heading text -->

	     		<div id="whatwedoicons"> <!-- open whatwedoicons -->

			        <div class="servicesitem"> <!-- Portfolio Item -->
			        	<img class="servicesicon" src="/ag_bishe/Application/Public/img/Index/web-icon.png" alt="webicon"> <!-- Portfolio Item Image -->
				        	<div class="portfolioitemtitleholder">
				        		<h6 class="servicestitle">WEB</h6> <!-- Portfolio Item Title -->
				        	</div>
			        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis nisi quis odio</p> <!-- Portfolio Item Description-->
			        </div>

			        <div class="servicesitem"> <!-- Portfolio Item -->
			        	<img class="servicesicon" src="/ag_bishe/Application/Public/img/Index/print-icon.png" alt="webicon"> <!-- Portfolio Item Image -->
				        	<div class="portfolioitemtitleholder">
				        		<h6 class="servicestitle">PRINT</h6> <!-- Portfolio Item Title -->
				        	</div>
			        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis nisi quis odio</p> <!-- Portfolio Item Description-->
			        </div>

			           <div class="servicesitem"> <!-- Portfolio Item -->
			        	<img class="servicesicon" src="/ag_bishe/Application/Public/img/Index/design-icon.png" alt="webicon"> <!-- Portfolio Item Image -->
				        	<div class="portfolioitemtitleholder">
				        		<h6 class="servicestitle">DESIGN</h6> <!-- Portfolio Item Title -->
				        	</div>
			        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis nisi quis odio</p> <!-- Portfolio Item Description-->
			        </div>


			        <div class="servicesitemlast"> <!-- Portfolio Item -->
			        	<img class="servicesicon" src="/ag_bishe/Application/Public/img/Index/seo-icon.png" alt="webicon"> <!-- Portfolio Item Image -->
				        	<div class="portfolioitemtitleholder">
				        		<h6 class="servicestitle">SEO</h6> <!-- Portfolio Item Title -->
				        	</div>
			        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis nisi quis odio</p> <!-- Portfolio Item Description-->
			        </div>

			</div> <!-- Closes whatwedoicons -->
	     

	        </div> <!-- closes whatwedo div -->

	        <div id="process"> <!-- Process Starts Here -->

	        		<span class="lineleft4"></span><p class="smallheadingfont">Our <span>Process</span></p><span class="lineright4"></span> <!-- Process heading text -->

	        </div> <!-- Process close -->

	       <div id="processicons"> <!-- Start of process icons -->

	       		    <div class="servicesitem"> <!-- Portfolio Item -->
			        	   <img class="servicesicon" src="/ag_bishe/Application/Public/img/Index/research-icon.png" alt="webicon"> <!-- Portfolio Item Image -->
				        	   <div class="portfolioitemtitleholder">
				        		   <h6 class="servicestitle">RESEARCH</h6> <!-- Portfolio Item Title -->
				          	   </div>
			        	   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis nisi quis odio</p> <!-- Portfolio Item Description-->
			        </div> <!-- Portfolio Item close -->

			        <div class="servicesitem"> <!-- Portfolio Item -->
			        	<img class="servicesicon" src="/ag_bishe/Application/Public/img/Index/develop-icon.png" alt="webicon"> <!-- Portfolio Item Image -->
				        	<div class="portfolioitemtitleholder">
				        		<h6 class="servicestitle">DEVELOP</h6> <!-- Portfolio Item Title -->
				        	</div>
			        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis nisi quis odio</p> <!-- Portfolio Item Description-->
			        </div> <!-- Portfolio Item close -->

			        <div class="servicesitem"> <!-- Portfolio Item -->
			        	<img class="servicesicon" src="/ag_bishe/Application/Public/img/Index/test-icon.png" alt="webicon"> <!-- Portfolio Item Image -->
				        	<div class="portfolioitemtitleholder">
				        		<h6 class="servicestitle">TEST</h6> <!-- Portfolio Item Title -->
				        	</div>
			        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis nisi quis odio</p> <!-- Portfolio Item Description-->
			        </div> <!-- Portfolio Item close -->

			        <div class="servicesitemlast"> <!-- Portfolio Item -->
			        	<img class="servicesicon" src="/ag_bishe/Application/Public/img/Index/launch-icon.png" alt="webicon"> <!-- Portfolio Item Image -->
				        	<div class="portfolioitemtitleholder">
				        		<h6 class="servicestitle">LAUNCH</h6> <!-- Portfolio Item Title -->
				        	</div>
			        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis nisi quis odio</p> <!-- Portfolio Item Description-->
			        </div> <!-- Portfolio Item close -->

	       </div>  <!-- Closes Process icons -->

	        <div class="blurbenclosure"> <!-- Ending Blurb enclosure -->
	        	<div class="blurb"> <!-- Ending Blurb div -->
	        		<h4>If you like what we do, and think we could work together, then get in touch!</h4> <!-- Ending Blurb test -->
	        	</div> <!-- Ending Blurb div close -->
	        </div> <!-- Ending Blurb enclosure close -->

	        <a href="#contactus" class="smoothScroll"><h3>CONTACT US</h3></a> <!-- Contact Us button -->

		</div> <!-- Servicescontent close -->
	</div> <!-- Services close -->

	<div class="pattern"></div> <!-- dividing triangular pattern -->

<!-- About Starts Here -->
	<div id="about"> <!-- About div open -->
		<div id="aboutcontent" class="container">  <!-- About content div open -->
 
				<h1>About <span>US</span></h1> <!-- About Us heading text -->

				<span class="thirteen">  <!-- About Us paragraph -->
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor feugiat urna, id sagittis tellus.<br>
				
					Duis eget arcu eget purus sagittis laoreet ut eu quam. Curabitur interdum velit et felis malesuada eleifend. <br>
					<br>

				</span>

				<div id="aboutusleft"> <!-- About Us left section div open -->
 
					<p class="smallheadingfont8">What Sets Us Apart</p> <!-- About Us left heading text -->

					<span class="line"></span> <!-- heading underline -->


					<p class="aboutusblurb">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor feugiat urna, id sagittis tellus. 
				
					Duis eget arcu eget purus sagittis laoreet ut eu quam. Curabitur interdum velit et felis malesuada eleifend.

					Duis eget arcu eget purus sagittis laoreet ut eu quam. Curabitur interdum velit et felis malesuada eleifend.

					Duis eget arcu eget purus sagittis laoreet ut eu quam. Curabitur interdum. </p> <!-- paragraph -->

					<div id="skillwrapper"> <!-- skill graph wrapper open -->

						<p class="skilltitle">PHP</p> <!-- skill bar title -->
						<div class="skillbackground"> <!-- skill bar 1 open -->
							<div class="skill1">
							</div>
						</div> <!-- skill bar 1 close -->

						<p class="skilltitle">JAVASCRIPT</p> <!-- skill bar 2 open -->
						<div class="skillbackground"> <!-- skill bar 2 open -->
							<div class="skill2">
							</div>
						</div> <!-- skill bar 2 close -->

						<p class="skilltitle">ILLUSTRATOR</p> <!-- skill bar 3 open -->
						<div class="skillbackground"> <!-- skill bar 3 open -->
							<div class="skill3">
							</div>
						</div> <!-- skill bar 3 close -->

						<p class="skilltitle">HTML/CSS</p> <!-- skill bar 4 open -->
						<div class="skillbackground"> <!-- skill bar 4 open -->
							<div class="skill4">
							</div>
						</div> <!-- skill bar 4 close -->

						<p class="skilltitle">PHOTOSHOP</p> <!-- skill bar 5 open -->
						<div class="skillbackground"> <!-- skill bar 5 open -->
							<div class="skill5">
							</div>
						</div> <!-- skill bar 5 close -->


					</div> <!-- skills graph wrapper close -->

				</div> <!-- About Us left section div close -->

				<div id="aboutusright"> <!-- about us right section div open -->

					<p class="smallheadingfont8">Our Quality Guarantee</p> <!-- About us Right section heading text -->
					<span class="line"></span> <!-- text underline -->

					<p class="aboutusblurb">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor feugiat urna, id sagittis tellus pellentesque non.
				
					Duis eget arcu eget purus sagittis laoreet ut eu quam. Curabitur interdum velit et felis malesuada eleifend.

					Duis eget arcu eget purus sagittis laoreet ut eu quam. Curabitur interdum velit et felis malesuada eleifend.

					Duis eget arcu eget purus sagittis laoreet ut eu quam. </p> <!-- about us right paragraph -->


					<div id="checklist"> <!-- about us checklist div starts here -->
						<div class="checklistitem"> <!-- checklist item div -->
							<img class="checkmark" alt="checkmark" src="/ag_bishe/Application/Public/img/Index/check-mark-green.png"><p class="checkmarktext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor feugiat urna, id sagittis tellus pellentesque non.</p> <!-- Insert Your checklist text inside p tags -->
						</div> <!-- checklist item div close -->

						<div class="checklistitem"> <!-- checklist item div -->
							<img class="checkmark" alt="checkmark" src="/ag_bishe/Application/Public/img/Index/check-mark-green.png"><p class="checkmarktext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor feugiat urna, id sagittis tellus pellentesque non.</p> <!-- Insert Your checklist text inside p tags -->
						</div> <!-- checklist item div close -->

						<div class="checklistitem"> <!-- checklist item div -->
							<img class="checkmark" alt="checkmark" src="/ag_bishe/Application/Public/img/Index/check-mark-green.png"><p class="checkmarktext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor feugiat urna, id sagittis tellus pellentesque non.</p> <!-- Insert Your checklist text inside p tags -->
						</div> <!-- checklist item div close -->

						<div class="checklistitem"> <!-- checklist item div -->
							<img class="checkmark" alt="checkmark" src="/ag_bishe/Application/Public/img/Index/check-mark-green.png"><p class="checkmarktext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor feugiat urna, id sagittis tellus pellentesque non.</p> <!-- Insert Your checklist text inside p tags -->
						</div> <!-- checklist item div close -->

						<div class="checklistitem"> <!-- checklist item div -->
							<img class="checkmark" alt="checkmark" src="/ag_bishe/Application/Public/img/Index/check-mark-green.png"><p class="checkmarktext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor feugiat urna, id sagittis tellus pellentesque non.</p> <!-- Insert Your checklist text inside p tags -->
						</div> <!-- checklist item div close -->

						<div class="checklistitem"> <!-- checklist item div -->
							<img class="checkmark" alt="checkmark" src="/ag_bishe/Application/Public/img/Index/check-mark-green.png"><p class="checkmarktext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor feugiat urna, id sagittis tellus pellentesque non.</p> <!-- Insert Your checklist text inside p tags -->
						</div> <!-- checklist item div close -->
					</div> <!-- about us checklist div ends here -->
				</div> <!-- about us right section div close -->

				<div class="blurbenclosure2"> <!-- section end blurb enclosure open -->
		        	<div class="blurb">  <!-- section end blurb open -->
		        		<h4>Ready to get started? Great, so are we! Lets do this!</h4>  <!-- section end blurb text -->
		        	</div>  <!-- section end blurb close -->


	        	</div>  <!-- section end blurb enclosure close -->


	        					<div id="contactbutton">
	        			        	<a href="#contactus" class="smoothScroll"><h3>CONTACT US</h3></a>
	        			        </div>
			
		</div>  <!-- aboutuscontent close -->

		<div class="clear100"></div>  <!-- clear div -->
	
	</div>  <!-- about close -->

<div class="patterndown"></div>
			

<!-- Team Starts Here -->

	<div id="team">   <!-- team div open -->

		<div id="teamcontent" class="container">  <!-- teamcontent div open -->

				<h1>The <span>Team</span></h1> <!-- team content heading text -->

				<p class="fifteen">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin auctor feugiat urna, id sagittis tellus.</p> <!-- team description paragraph -->

			<img id="arrows" src="/ag_bishe/Application/Public/img/Index/arrows-light.png" alt="arrows"> <!-- arrows image above workers -->

			
			<br>

			<div class="portrait"> <!-- portrait div open -->

				<img src="/ag_bishe/Application/Public/img/Index/photodune-2785700-happy-businessman-with-laptop-smiling-m.png" alt="Portrait"> <!-- worker image -->
				<span class="name">Michael</span> <!-- worker name -->
				<br>
				<span class="position">Developer</span> <!-- worker title -->
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur.</p>
					<div class="portraitsocialicons">
					<img class="workersocialicon" src="/ag_bishe/Application/Public/img/Index/mini-facebook-icon.png" alt="facebook">
					<img class="workersocialicon" src="/ag_bishe/Application/Public/img/Index/mini-twitter-icon.png" alt="twitter">
					<img class="workersocialicon" src="/ag_bishe/Application/Public/img/Index/mini-behance-icon.png" alt="behance">
					<img class="workersocialicon" src="/ag_bishe/Application/Public/img/Index/mini-dribbble-icon.png" alt="dribbble">
					<img class="workersocialicon" src="/ag_bishe/Application/Public/img/Index/mini-linkedin-icon.png" alt="linkedin">
				</div>

			</div> <!-- portrait div close -->

			<div class="portrait"> <!-- portrait div open -->

				<img src="/ag_bishe/Application/Public/img/Index/photodune-2785700-happy-businessman-with-laptop-smiling-m.png" alt="Portrait"> <!-- worker image -->
				<span class="name">Joe</span> <!-- worker name -->
				<br>
				<span class="position">Designer</span> <!-- worker title -->
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur.</p>
					<div class="portraitsocialicons">
					<img class="workersocialicon" src="/ag_bishe/Application/Public/img/Index/mini-facebook-icon.png" alt="facebook">
					<img class="workersocialicon" src="/ag_bishe/Application/Public/img/Index/mini-twitter-icon.png" alt="twitter">
					<img class="workersocialicon" src="/ag_bishe/Application/Public/img/Index/mini-behance-icon.png" alt="behance">
					<img class="workersocialicon" src="/ag_bishe/Application/Public/img/Index/mini-dribbble-icon.png" alt="dribbble">
					<img class="workersocialicon" src="/ag_bishe/Application/Public/img/Index/mini-linkedin-icon.png" alt="linkedin">
				</div>

			</div> <!-- portrait div close -->

			<div class="portrait"> <!-- portrait div open -->

				<img src="/ag_bishe/Application/Public/img/Index/photodune-2785700-happy-businessman-with-laptop-smiling-m.png" alt="Portrait"> <!-- worker image -->
				<span class="name">Adrian</span> <!-- worker name -->
				<br>
				<span class="position">Artist</span> <!-- worker title -->
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur.</p>
				<div class="portraitsocialicons">
					<img class="workersocialicon" src="/ag_bishe/Application/Public/img/Index/mini-facebook-icon.png" alt="facebook">
					<img class="workersocialicon" src="/ag_bishe/Application/Public/img/Index/mini-twitter-icon.png" alt="twitter">
					<img class="workersocialicon" src="/ag_bishe/Application/Public/img/Index/mini-behance-icon.png" alt="behance">
					<img class="workersocialicon" src="/ag_bishe/Application/Public/img/Index/mini-dribbble-icon.png" alt="dribbble">
					<img class="workersocialicon" src="/ag_bishe/Application/Public/img/Index/mini-linkedin-icon.png" alt="linkedin">
				</div>

			</div> <!-- portrait div close -->

			<div class="portraitlast"> <!-- portrait div open -->

				<img src="/ag_bishe/Application/Public/img/Index/photodune-2785700-happy-businessman-with-laptop-smiling-m.png" alt="Portrait"> <!-- worker image -->
				<span class="name">Dave</span> <!-- worker name -->
				<br> 
				<span class="position">Photographer</span> <!-- worker title -->
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur.</p>
					<div class="portraitsocialicons">
					<img class="workersocialicon" src="/ag_bishe/Application/Public/img/Index/mini-facebook-icon.png" alt="facebook">
					<img class="workersocialicon" src="/ag_bishe/Application/Public/img/Index/mini-twitter-icon.png" alt="twitter">
					<img class="workersocialicon" src="/ag_bishe/Application/Public/img/Index/mini-behance-icon.png" alt="behance">
					<img class="workersocialicon" src="/ag_bishe/Application/Public/img/Index/mini-dribbble-icon.png" alt="dribbble">
					<img class="workersocialicon" src="/ag_bishe/Application/Public/img/Index/mini-linkedin-icon.png" alt="linkedin">
				</div>

			</div> <!-- portrait div close -->

			<div id="stats"> <!-- stats div open -->

				<span class="lineleft5"></span><p class="smallheadingfont">Team <span>Stats</span></p><span class="lineright5"></span> <!-- stats heading text -->

			</div> <!-- stats div close -->

			<div id="statsicons"> <!-- Start of Stats icons -->

	       		 <div class="servicesitem"> <!-- Stats Item -->
			        	<img class="servicesicon" src="/ag_bishe/Application/Public/img/Index/coffee-icon.png" alt="webicon"> <!-- Stats Item Image -->
				        	<div class="portfolioitemtitleholder"> <!-- stats title holder div -->
				        		<h6 class="statstitle">1200 Cups of Coffee</h6> <!-- Stats Item Title -->
				        	</div> <!-- stats title holder div close -->
			     </div> <!-- Stats Item close -->

			        <div class="servicesitem"> <!-- Stats Item -->
			        	<img class="servicesicon" src="/ag_bishe/Application/Public/img/Index/code-icon.png" alt="webicon"> <!-- Stats Item Image -->
				        	<div class="portfolioitemtitleholder"> <!-- stats title holder div -->
				        		<h6 class="statstitle">150000 Lines of Code</h6> <!-- Stats Item Title -->
				        	</div> <!-- stats title holder div close -->

			        </div> <!-- Stats Item close -->

			        <div class="servicesitem"> <!-- Stats Item -->
			        	<img class="servicesicon" src="/ag_bishe/Application/Public/img/Index/work-con.png" alt="webicon"> <!-- Stats Item Image -->
				        	<div class="portfolioitemtitleholder"> <!-- stats title holder div -->
				        		<h6 class="statstitle">5600 Hours of Work</h6> <!-- Stats Item Title -->
				        	</div> <!-- stats title holder div close -->
			        </div> <!-- Stats Item close -->

			        <div class="servicesitemlast"> <!-- Stats Item -->
			        	<img class="servicesicon" src="/ag_bishe/Application/Public/img/Index/heart-icon.png" alt="webicon"> <!-- Stats Item Image -->
				        	<div class="portfolioitemtitleholder"> <!-- stats title holder div -->
				        		<h6 class="statstitle">1350 Happy Customers</h6> <!-- Stats Item Title -->
				        	</div> <!-- stats title holder div close -->
			        </div> <!-- Stats Item close -->
 
	       </div>  <!-- Closes Process icons -->

				<div class="clear"></div> <!-- clear div -->

		</div> <!-- closes teamcontent -->

	</div> <!-- closes team -->


<div class="patterngreenup"></div>
		



<!-- Footer Info Starts Here -->
<div class="patternwhite"></div>
	<div id="footer"> <!-- footer div open -->

		<div id="footercontent" class="container"> <!-- footer content wrapper div -->
			<img src="/ag_bishe/Application/Public/img/Index/logofooter.png" alt="footerlogo"> <!-- footer logo image here -->
			<br> <!-- line break -->
			<br> <!-- line break -->
			<p id="copyright"> &#169; Graduation Design 2016. Copyright by tjedu <!-- copyright text here -->
 
		</div> <!-- footer content wrapper div close -->

	</div> <!-- footer div close -->

<!-- JS
================================================== -->
<script type="text/javascript" src="/ag_bishe/Application/Public/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/ag_bishe/Application/Public/js/script.js"></script>
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