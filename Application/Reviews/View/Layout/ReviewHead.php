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
<title>本地信息生活-消费点评</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="__PUBLIC__/prettyphoto/css/prettyPhoto.css" type="text/css" media="screen" />
<link rel="stylesheet" href="__PUBLIC__/css/Index/flexslider.css" type="text/css" media="screen" /> <!-- Slider Stylesheet -->
<link rel="stylesheet" href="__PUBLIC__/css/Index/reset.css">
<link rel="stylesheet" href="__PUBLIC__/css/Index/style.css">
<link href='http://fonts.useso.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>

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

<div id="menuband">

    <ul id="menu1">
            <li><a href="__APP__/Reviews/" class="smoothScroll">首页</a></li> <!-- menu item -->
            
            <li><a href="__APP__/Reviews/Store/index" class="smoothScroll">商铺列表</a></li> <!-- menu item -->
            
            <li><a href="__APP__/Reviews/Review/add_store" class="smoothScroll">添加商户</a></li> <!-- menu item -->
            
            <li><a href="__APP__/Reviews/House/house_list?leixing=1" class="smoothScroll">C3</a></li> <!-- menu item -->

            <li><a href="__APP__/Reviews/House/CopyOfhouse" class="smoothScroll">C4</a></li> <!-- menu item -->

            <li><a href="__APP__/Reviews/House/fabu" class="smoothScroll">C5</a></li> <!-- menu item -->

            <li><a href="__APP__/Reviews/House/tuan" class="smoothScroll">关于作者</a></li> <!-- menu item -->

            <li><a href="__APP__/Home/" class="smoothScroll">回到主页</a></li> <!-- menu item -->

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
        <p class="introh1">生活点评</p>
        <p class="introh4">点评你的吃喝玩乐!</p>
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
                        <a href="__APP__/Reviews/"><img class="contactsocialicon2" src="__PUBLIC__/img/Index/linkedin-icn.png" alt="linkedin"></a>
                    </div>


        </div>


</div>  <!-- Closes top Div -->


<!-- Sticky Nav Bar -->
    <div id="hiddenmenu"> <!-- Hidden Menu bar div open -->
        <ul id="menu">
            <li><a href="#top" class="smoothScroll">回到顶部</a></li> <!-- menu item -->
            
            <li><a href="__APP__/Reviews/Store/" class="smoothScroll">商铺列表</a></li> <!-- menu item -->
            
            <li><a href="__APP__/Home/House/" class="smoothScroll">C2</a></li> <!-- menu item -->
            
            <li><a href="#about" class="smoothScroll">C3</a></li> <!-- menu item -->

            <li><a href="#team" class="smoothScroll">C4</a></li> <!-- menu item -->

            <li><a href="__APP__/Home/House/public.html" class="smoothScroll">C5</a></li> <!-- menu item -->

            <li><a href="__APP__/Home/" class="smoothScroll">返回主页</a></li> <!-- menu item -->

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

<div style="background-color: #f6f6f6">
    {__CONTENT__}
</div>









<script>
    var Url = "__PUBLIC__";
</script>
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/scriptreview.js"></script>
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
</body>
</html>