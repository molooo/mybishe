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
            <li><a href="">登录</a></li>
            <li><a href="">注册</a></li>
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

            <li><a href="#work" class="smoothScroll">房屋</a></li> <!-- menu item -->

            <li><a href="#services" class="smoothScroll">酒店</a></li> <!-- menu item -->

            <li><a href="#about" class="smoothScroll">教育</a></li> <!-- menu item -->

            <li><a href="#team" class="smoothScroll">二手车</a></li> <!-- menu item -->

            <li><a href="/ag_bishe/Application/Home/Pet/" class="smoothScroll">宠物之家</a></li> <!-- menu item -->

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

        <li><a href="#contactus" class="smoothScroll">宠物之家</a></li> <!-- menu item -->

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

<div class="content">
    

<div class="neirong">12333</div>
<script>
    $(function(){
        $("a[id=index]").css('color','#ff6d00');
    });
</script>
</div>
<script type="text/javascript" src="/ag_bishe/Application/Public/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/ag_bishe/Application/Public/js/scriptpet.js"></script>
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
</body>
</html>