<!DOCTYPE html>
<html lang="en">
<head>
    <title>宠物百科</title>
    <meta charset="utf-8">
    <link rel="icon" href="__PUBLIC__/img/Pet/favicon.ico">
    <link rel="shortcut icon" href="__PUBLIC__/img/Pet/favicon.ico" />
    <link rel="stylesheet" href="__PUBLIC__/css/Pet/style.css">
    <link rel="stylesheet" href="__PUBLIC__/css/Pet/ency.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/diyUpload/css/webuploader.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/diyUpload/css/diyUpload.css">
    <script src="__PUBLIC__/js/jquery.js"></script>
    <script src="__PUBLIC__/js/jquery-migrate-1.1.1.js"></script>
    <script src="__PUBLIC__/js/superfish.js"></script>
    <script src="__PUBLIC__/js/jquery.equalheights.js"></script>
    <script src="__PUBLIC__/js/jquery.easing.1.3.js"></script>
    <script src="__PUBLIC__/js/jquery.ui.totop.js"></script>
    <script type="text/javascript" src="__PUBLIC__/diyUpload/js/webuploader.html5only.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/diyUpload/js/diyUpload.js"></script>
    <script src="__PUBLIC__/js/sweet-alert.min.js"></script>
    <link href="__PUBLIC__/css/sweet-alert.css"  rel="stylesheet" type="text/css"/>

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
            欢迎您：<?php echo $_SESSION['LoginName'];?>&nbsp;&nbsp;&nbsp;<a href="__APP__/home/index/loginout">退出</a>
        <?php }else{?>
            <ul>
                <li><a href="__APP__/home/index/login">登录</a></li>
                <li><a href="__APP__/home/index/reg">注册</a></li>
            </ul>
        <?php }?>
    </div>
    <div class="container_12">
        <div class="grid_12">
            <h1><a href="index.html"><img src="__PUBLIC__/img/Pet/logo.png" alt="Gerald Harris attorney at law"></a> </h1>
            <div class="menu_block">
                <nav  class="" >
                    <ul class="sf-menu">
                        <li><a href="__APP__/Home/Pet/index">首页</a></li>
                        <li class="current"><a href="__APP__/Home/Pet/ency">宠物百科 </a></li>
                        <li><a href="__APP__/Home/Pet/hospital">宠物医院</a>
                            <ul>
                                <li><a href="#">疑难杂症</a></li>
                                <li><a href="__APP__/home/pet/issue_illness">萌宠生病</a></li>
                            </ul>
                        </li>
                        <li><a href="__APP__/Home/Pet/home">宠物家园</a>
                            <ul>
                                <li><a href="__APP__/home/pet/photowall">照片墙</a></li>
                                <li><a href="__APP__/home/pet/publish">发帖</a></li>
                            </ul>
                        </li>
                        <li><a href="__APP__/Home/Pet/market">宠物交易</a></li>
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
        {__CONTENT__}
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