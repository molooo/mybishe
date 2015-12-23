<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <title>宠物之家</title>
    <meta charset="utf-8">
    <link rel="icon" href="/ag_bishe/Application/Public/img/Pet/favicon.ico">
    <link rel="shortcut icon" href="/ag_bishe/Application/Public/img/Pet/favicon.ico" />
    <link rel="stylesheet" href="/ag_bishe/Application/Public/css/Pet/style.css">
    <link rel="stylesheet" href="/ag_bishe/Application/Public/css/Pet/slider.css">
    <script src="/ag_bishe/Application/Public/js/jquery.js"></script>
    <script src="/ag_bishe/Application/Public/js/jquery-migrate-1.1.1.js"></script>
    <script src="/ag_bishe/Application/Public/js/superfish.js"></script>
    <script src="/ag_bishe/Application/Public/js/jquery.carouFredSel-6.1.0-packed.js"></script>

    <script src="/ag_bishe/Application/Public/js/jquery.equalheights.js"></script>
    <script src="/ag_bishe/Application/Public/js/jquery.easing.1.3.js"></script>
    <script src="/ag_bishe/Application/Public/js/tms-0.4.1.js"></script>
    <script src="/ag_bishe/Application/Public/js/jquery.ui.totop.js"></script>

    <script>
        $(window).load(function(){
            $('.slider')._TMS({
                show:0,
                pauseOnHover:false,
                prevBu:'.prev',
                nextBu:'.next',
                playBu:false,
                duration:800,
                preset:'fade',
                pagination:true,//'.pagination',true,'<ul></ul>'
                pagNums:false,
                slideshow:8000,
                numStatus:false,
                banners:true,
                waitBannerAnimation:false,
                progressBar:false
            })
        });




        $(window).load (
            function(){$('.carousel1').carouFredSel({auto: false,prev: '.prev',next: '.next', width: 960, items: {
                visible : {min: 3,
                    max: 3},
                height: 'auto',
                width: 300,

            }, responsive: true,

                scroll: 1,

                mousewheel: false,

                swipe: {onMouse: true, onTouch: true}});


            } );

        jQuery(document).ready(function() {
            $().UItoTop({ easingType: 'easeOutQuart' });
        });

    </script>
</head>
<body  class="page1">

<header>
    <div style="float:right;padding:10px;margin:10px;"> <!-- Logo Div -->
        <?php if(($_SESSION['LoginName'])&&($_SESSION['is_login'])){?>
            欢迎您：<?php echo $_SESSION['LoginName'];?>&nbsp;&nbsp;&nbsp;<a href="/ag_bishe/Application/index.php/home/index/loginout">退出</a>
        <?php }else{?>
            <ul>
                <li><a href="/ag_bishe/Application/index.php/home/index/login">登录</a></li>
                <li><a href="/ag_bishe/Application/index.php/home/index/reg">注册</a></li>
            </ul>
        <?php }?>
    </div>
    <div class="container_12">
        <div class="grid_12">
            <h1><a href="index.html"><img src="/ag_bishe/Application/Public/img/Pet/logo.png" alt="Gerald Harris attorney at law"></a> </h1>
            <div class="menu_block">
                <nav  class="" >
                    <ul class="sf-menu">
                        <li class="current"><a href="/ag_bishe/Application/index.php/Home/Pet/index">首页</a></li>
                        <li class="with_ul"><a href="/ag_bishe/Application/index.php/Home/Pet/ency">宠物百科 </a></li>
                        <li><a href="/ag_bishe/Application/index.php/Home/Pet/hospital">宠物医院</a>
                        <ul>
                            <li><a href="#">疑难杂症</a></li>
                            <li><a href="/ag_bishe/Application/index.php/home/pet/issue_illness">萌宠生病</a></li>
                        </ul>
                        </li>
                        <li><a href="/ag_bishe/Application/index.php/Home/Pet/home">宠物家园</a>
                            <ul>
                                <li><a href="/ag_bishe/Application/index.php/home/pet/photowall">照片墙</a></li>
                                <li><a href="/ag_bishe/Application/index.php/home/pet/publish">发帖</a></li>
                            </ul>
                        </li>
                        <li><a href="/ag_bishe/Application/index.php/Home/Pet/market">宠物交易</a></li>
                    </ul>
                </nav>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</header>
<div class="top_block">
    <div class="slider-relative">
        <div class="slider-block">
            <div class="slider">
                <ul class="items">
                    <li><img src="/ag_bishe/Application/Public/img/Pet/slide.jpg" alt="">
                        <div class="banner">They Need  Your <span>Love</span> and <i>Care</i><p>It is so easy to make them happy</p></div>
                    </li>
                    <li><img src="/ag_bishe/Application/Public/img/Pet/slide1.jpg" alt="">
                        <div class="banner">They Need  Your <span>Love</span> and <i>Care</i><p>It is so easy to make them happy</p></div>
                    </li>
                    <li><img src="/ag_bishe/Application/Public/img/Pet/slide2.jpg" alt="">
                        <div class="banner">They Need  Your <span>Love</span> and <i>Care</i><p>It is so easy to make them happy</p></div>
                    </li>
                    <li><img src="/ag_bishe/Application/Public/img/Pet/slide3.jpg" alt="">
                        <div class="banner">They Need  Your <span>Love</span> and <i>Care</i><p>It is so easy to make them happy</p></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>
<div class="page1_block">
    <div class="container_12">
        <div class="grid_6">
            <h2>欢迎来到宠物之家</h2><br>
            <img src="/ag_bishe/Application/Public/img/Pet/page1_img5.jpg" alt="" class="img_inner fleft">
            <div class="extra_wrapper style1"><p class="text1"><a href="http://blog.templatemonster.com/free-website-templates/" rel="nofollow">Click here</a> for more info about this free website template created by TemplateMonster.com </p>
                Hibh ullamcorper accumsan sem lectus ut sapien. Donec venenatis .

            </div>
            <div class="clear"></div>
            Praesent quis orci eget diam viverra consequat. Fusce sagittis quam in pulvinar sollicitudin velit velit cursus nibh ullamcorper accumsan sem lectus ut sapien. Donec venenatis posuere velit aty convallis neque ullamcorper quis. Integer posuere ipsum eu risus sollicitudin nec varius eratylo luctus. Fusce fringilla erat ac urna pe llentesque congue. Nunc fringilla diam sit amet adipi scing bibendum turpis velit feugiat urna et pharetra neque nisi ac nunc. Vivamus est quam dapibuslok. ..ullamco rper imperdiet nec euismod ut arcu. Nulla facilisi. Etiam mauris lorem pulvinar vel con sequat ut pretium ac erat. Morbi facilisis elit eu nisl blandit ac blandit enim faucibu. Praesent quis orci eget diam viverra consequat. Fusce sagittis.<br>
            <a href="#" class="btn">More</a>
        </div>
        <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >Website Template</a></div>
        <div class="grid_5 prefix_1">
            <h2 class="ic1">最新热帖</h2>
            <ul class="list">
                <li>
           <span>
             <time datetime="2013-01-01">27<span>APR</span></time></span>
                    <div class="extra_wrapper">
                        <div class="col1"><a href="#">Duis posuere consectetur pellentesqe;</a><time datetime="2013-01-01">April 27.03.13</time></div>Sed nisi turpis, pellentesque at ultrices in dapibus in magna. Nunc easi diam risus,placerat ut scelerisque  suscipit eu ante. Nullam vitae dolor ullcper felises</div>
                </li>
                <li>
           <span class="cnt">
             <time datetime="2013-01-01">28<span>APR</span></time></span> <div class="extra_wrapper">
                        <div class="col1"><a href="#">Kuuis posuere consectetur pellentes;</a><time datetime="2013-01-01">April 28.03.13</time></div>Eed nisi turpis, pellentesque at ultrices in dapibus in magna. Nunc easi diam risulacerat ut scelerisque et suscipit eu ante. Nullam vitae dolor ullcper felises. </div>
                </li>
                <li>
           <span>
             <time datetime="2013-01-01">29<span>APR</span></time></span> <div class="extra_wrapper">
                        <div class="col1"><a href="#">Opuis posuere honsectetur pellentesyt;</a><time datetime="2013-01-01">April 29.03.13</time></div>Koed nisi turpis, pellentesque at ultrices in dapibus in magna. Nunc easi diam risujo placerat ut scelerisque et suscipit eu ante. Ullam vitae dolor ullcper felises. </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--=======content================================-->

<div class="content page1"><div class="ic">More Website Templates @ <a href="http://www.cssmoban.com/" >网页模板</a> - June 10, 2013!</div>
    <div class="container_12">
        <div class="grid_12">
            <a href="#" class="next"></a><a href="#" class="prev"></a>
            <h2>领养信息</h2>
        </div>
        <div class="clear"></div>
        <ul class="carousel1">
            <li class="grid_4">
                <img src="/ag_bishe/Application/Public/img/Pet/carousel1_img1.jpg" alt="" class="img_inner fleft">
                <div class="extra_wrapper pad1">
                    <p class="col2"><a href="#">Praesent quis orcidiam viverralopr </a></p>Raes quis orci eget diam viverralopr con equat. Fusce sagit quam ihui hyhy kolo opirlo pulvinarhjkjo.
                </div>
            </li>
            <li class="grid_4">
                <img src="/ag_bishe/Application/Public/img/Pet/carousel1_img2.jpg" alt="" class="img_inner fleft">
                <div class="extra_wrapper pad1">
                    <p class="col2"><a href="#">Aeraesent quis hoj rcieget diam iverral.</a></p>Loaesent quis orci diam viverralopr con equat. Lusce sagittis quam ihui hyhy opir pulvinarhjk velit.
                </div>
            </li>
            <li class="grid_4">
                <img src="/ag_bishe/Application/Public/img/Pet/carousel1_img3.jpg" alt="" class="img_inner fleft">
                <div class="extra_wrapper pad1">
                    <p class="col2"><a href="#">Tyeraesent quis hojo rcieget iam iverralji.</a></p>Eroaesent quis orci ediam viverralopr con jikjulo poiu retyulo hyk equat. Usce sagittis ki quam ihui hyhy opirp.
                </div>
            </li>
            <li class="grid_4">
                <img src="/ag_bishe/Application/Public/img/Pet/carousel1_img4.jpg" alt="" class="img_inner fleft">
                <div class="extra_wrapper pad1">
                    <p class="col2"><a href="#">Aeraesent quis hoj rcieget diam iverral.</a></p>Loaesent quis orci diam viverralopr con equat. Lusce sagittis quam ihui hyhy opir pulvinarhjk velit.
                </div>
            </li>
            <li class="grid_4">
                <img src="/ag_bishe/Application/Public/img/Pet/carousel1_img5.jpg" alt="" class="img_inner fleft">
                <div class="extra_wrapper pad1">
                    <p class="col2"><a href="#">Aeraesent quis hoj rcieget diam iverral.</a></p>Loaesent quis orci diam viverralopr con equat. Lusce sagittis quam ihui hyhy opir pulvinarhjk velit.
                </div>
            </li>
            <li class="grid_4">
                <img src="/ag_bishe/Application/Public/img/Pet/carousel1_img6.jpg" alt="" class="img_inner fleft">
                <div class="extra_wrapper pad1">
                    <p class="col2"><a href="#">Aeraesent quis hoj rcieget diam iverral.</a></p>Loaesent quis orci diam viverralopr con equat. Lusce sagittis quam ihui hyhy opir pulvinarhjk velit.
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="bottom_block">
    <div class="container_12">
        <div class="grid_6">
            <h2>每日一剂 </h2><br>
            Praesent quis orci eget diam viverra consequat. Fusce sagittis quam in pulvinar sollicitudin velit velit cursus nibh ullamcorper accumsan sem lectus ut sapien. Donec venenatis posuere velit a convallis neque ullamcorper quis. Integer posuere ipsum eu risus sollicitudin nec varius erat luctus. Fusce fringilla erat ac urna pe llentesque congue. Nunc fringilla, diam sit amet adipi scing bibendum turpis velit feugiat urna, et pharetra neque nisi ac nunc. Vivamus est quam dapibus ullamco rper imperdiet nec, euismod ut arcu. Nulla facilisi. Etiam mauris lorem pulvinar vel con sequat ut pretium ac erat. Morbi facilisis elit eu nisl blandit ac blandit enim faucibus. Praesent quis orci eget diam viverra consequat. Fusce sagittis.
        </div>
        <div class="grid_4 prefix_2">
            <h2 class="ic1">Any Question?</h2>
            <img src="/ag_bishe/Application/Public/img/Pet/page1_img4.jpg"
                 alt="" class="fleft img_inner">
            <div class="extra_wrapper">
                <div class="cont">
                    Call Us Free:
                    <span>+1 000 000 0000</span>
                </div>
            </div>
            <div class="clear"></div>
            Nunc fringilla, diam sit amet adipi scing bibendum turpis velit feugiat urna, et pharetra neque nisi ac nunc. Viv amus est quam dapibus ullamco rper imperdiet nec euismod ut arcu. Nulla facilisi. Etiam mauris.
        </div>
    </div>
</div>
<!--==============================footer=================================-->

<footer>
    <div class="container_12">
        <div class="grid_12" >

            <p style="margin-left:357px">Pet Home &copy; 2015 | <a href="#">Graduate Project</a> | By Li YiXin </p>

        </div>
        <div class="clear"></div>
    </div>
</footer>
</body>
</html>