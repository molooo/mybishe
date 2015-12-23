<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <title>宠物百科</title>
    <meta charset="utf-8">
    <link rel="icon" href="/ag_bishe/Application/Public/img/Pet/favicon.ico">
    <link rel="shortcut icon" href="/ag_bishe/Application/Public/img/Pet/favicon.ico" />
    <link rel="stylesheet" href="/ag_bishe/Application/Public/css/Pet/style.css">
    <link rel="stylesheet" href="/ag_bishe/Application/Public/css/Pet/ency.css">
    <script src="/ag_bishe/Application/Public/js/jquery.js"></script>
    <script src="/ag_bishe/Application/Public/js/jquery-migrate-1.1.1.js"></script>
    <script src="/ag_bishe/Application/Public/js/superfish.js"></script>
    <script src="/ag_bishe/Application/Public/js/jquery.equalheights.js"></script>
    <script src="/ag_bishe/Application/Public/js/jquery.easing.1.3.js"></script>
    <script src="/ag_bishe/Application/Public/js/jquery.ui.totop.js"></script>

    <script>

        jQuery(document).ready(function() {
            $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
</head>
<body>
<!--==============================header=================================-->
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
                        <li><a href="/ag_bishe/Application/index.php/Home/Pet/index">首页</a></li>
                        <li class="current"><a href="/ag_bishe/Application/index.php/Home/Pet/ency">宠物百科 </a></li>
                        <li><a href="/ag_bishe/Application/index.php/Home/Pet/hospital">宠物医院</a>
                            <ul>
                                <li><a href="#">疑难杂症</a></li>
                                <li><a href="/ag_bishe/Application/index.php/home/pet/issue_illness">萌宠生病</a></li>
                            </ul>
                        </li>
                        <li><a href="/ag_bishe/Application/index.php/Home/Pet/home">宠物家园</a></li>
                        <li><a href="/ag_bishe/Application/index.php/Home/Pet/market">宠物交易</a></li>
                    </ul>
                </nav>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</header>
<div class="page1_block nb">
    <div class="container_12">
        
<div class="grid_7">
    <h2>宠物饲养小知识</h2><br>
    <img src="/ag_bishe/Application/Public/img/Pet/page3_img1.jpg" alt="" class="img_inner fleft i1">
    <div class="extra_wrapper"><p class="col1"><a href="#">Nunc fringilla diam sit amet adipi scing bibendum turpis velit feugiat urna etlort pharetra neque nisi ac nunc.</a></p>
        Vivamus est quam dapibus ullamcolot rperolty hoki. Hibh ullamcorper accufogy msan sem lectus ut sapien. Donecjoilih venenatis posuere eli a convallis.
    </div>
    <div class="clear"></div>
    Praesent quis orci eget diam viverra consequat. Fusce sagittis quam in pulvinar sollicitudin velit velit cursus nibh ullamcorper accumsan sem lectus ut sapien. Donec venenatis posuere velit aty convallis neque ullamcorper quis. Integer posuere ipsum eu risus sollicitudin nec varius eratylo luctus. Fusce fringilla erat ac urna pe llentesque congue. Nunc fringilla diam sit amet adipi scing bibendum turpis velit feugiat urna et pharetra neque nisi ac nunc. Vivamus est quam dapibuslok. <br>
    <a href="#" class="btn">More</a>
    <div class="clear he2"></div>
    <img src="/ag_bishe/Application/Public/img/Pet/page3_img2.jpg" alt="" class="img_inner fleft i1">
    <div class="extra_wrapper"><p class="col1"><a href="#">Plunc fringilla diam sit amet adipi scing bibendum turpis velit feugiat urna etlort pharetra neque nisi ac nuny.</a></p>
        Wivamus est quam dapibus ullamcolot rperolty hoki. Hibh ullamcorper accufogy msan sem lectus ut sapien. Monecjoilih venenatis posuere eli a convally.
    </div>
    <div class="clear"></div>
    Traesent quis orci eget diam viverra consequat. Fusce sagittis quam in pulvinar sollicitudin velit velit cursus nibh ullamcorper accumsan sem lectus ut sapien. Donec venenatis posuere velit aty convallis neque ullamcorper quis. Integer posuere ipsum eu risus sollicitudin nec varius eratylo luctus. Kusce fringilla erat ac urna pe llentesque congue. Ounc fringilla diam sit amet adipi scing bibendum turpis velit feugiat urna et pharetra neque nisi ac nunc. Vivamus est quam dapibuslok. <br>
    <a href="#" class="btn">More</a>
</div>
<div class="grid_4 prefix_1">
    <h2 class="ic1">常见病情</h2>
    <ul class="list l1">
        <li>
           <span>
             <time datetime="2013-01-01">1</time></span>
            <div class="extra_wrapper">
                <div class="col1"><a href="#">Tuis posuere consectetur pellente</a></div>Sed nisi turpis pellentesque at ultriceso in dapibus in magna. Kunc easi diamyu risulacerat ut scelerisque et suscip.</div>
        </li>
        <li>
           <span class="cnt">
             <time datetime="2013-01-01">2</time></span> <div class="extra_wrapper">
                <div class="col1"><a href="#">Juuis posuere consectetur pellente</a></div>Ted nisi turpis pellentesque at ultricesyt in dapibus io magna. Runc easi diamyu risulacerat ut scelerisque et suscipy.</div>
        </li>
        <li>
           <span>
             <time datetime="2013-01-01">3</time></span> <div class="extra_wrapper">
                <div class="col1"><a href="#">Dpuis posuere honsectetur pellentio</a></div>Yoed nisi turpis, pellentesque at ultrkoty ices in dapibus in magna. Unc easigoli diam risujo placerat ut scelerisko.  </div>
        </li>
        <li>
           <span class="cnt">
             <time datetime="2013-01-01">4</time></span> <div class="extra_wrapper">
                <div class="col1"><a href="#">Kouis losuere honsectetur pellentit</a></div>Gyoed nisi turpis pellentesque at kolop ultrkoty ices in dapibus in magna. Cea
                si goli diam risujo placerat ut tyulortyuil.</div>
        </li>
        <li>
           <span >
             <time datetime="2013-01-01">5</time></span> <div class="extra_wrapper">
                <div class="col1"><a href="#">Opuis posuere monsectetur pellentlo</a></div>Loed nisi turpis pellentesqupo at ult ylo rkoty ices in dapibus in magna. Uncylo easigoli diam risujo placerat utwetyko. </div>
        </li>
        <li>
           <span class="cnt">
             <time datetime="2013-01-01">6</time></span> <div class="extra_wrapper">
                <div class="col1"><a href="#">Hipuis posuere honsectetur pellen</a></div>Huoed nisi turpis pellentesque at iotyk ultrkoty ices in dapibus in magna. Unc easigoli diam risujo placerat ut wertytu.</div>
        </li>
    </ul>
</div>
<script>
    $(".sf-menu>li:eq(2)").addClass("current");
    $(".sf-menu>li:eq(1)").removeClass("current");
</script>
    </div>
</div>
<footer>
    <div  style="text-align: center">
        <div>

            <p>Pet Home &copy; 2015 | <a href="#">Graduate Project</a> | By Li YiXin </p>

        </div>

    </div>
</footer>
</body>
</html>