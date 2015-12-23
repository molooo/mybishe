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
<div class="page1_block nb">
    <div class="container_12">
        <div class="search">
            <div class="fenlei">
                <a href="/ag_bishe/Application/index.php/home/pet/search/category_id/2/feature/all/haircolor/all">
                    <p class="bigdog"></p>
                    <p> 大型犬</p>
                </a>
            </div>
            <div class="fenlei">
                <a href="/ag_bishe/Application/index.php/home/pet/search/category_id/3/feature/all/haircolor/all">
                    <p class="middog"></p>
                    <p> 中型犬</p>
                </a>
            </div>
            <div class="fenlei">
                <a href="/ag_bishe/Application/index.php/home/pet/search/category_id/4/feature/all/haircolor/all">
                    <p class="smalldog"></p>
                    <p> 小型犬</p>
                </a>
            </div>
            <div class="fenlei">
                <a href="/ag_bishe/Application/index.php/home/pet/search/category_id/1/feature/all/haircolor/all">
                    <p class="cat"></p>
                    <p> 猫</p>
                </a>
            </div>
            <div class="fenlei">
                <a href="/ag_bishe/Application/index.php/home/pet/search/category_id/5/feature/all/haircolor/all">
                    <p class="fish"></p>
                    <p>水族</p>
                </a>
            </div>
            <div class="fenlei">
                <a href="/ag_bishe/Application/index.php/home/pet/search/category_id/6/feature/all/haircolor/all">
                    <p class="paxing"></p>
                    <p> 爬行</p>
                </a>
            </div>
        </div>

<!--=======content================================-->

<div class="content">
    <div class="container_12">
        <div class="grid_12">
            <h2 class="ic1" >犬类</h2>
        </div>
        <div class="clear"></div>
        <?php for($i = 0;$i<6;$i++){?>
        <div class="grid_4">
            <div class="pad2"> <img src="/ag_bishe/Application/Public/img/Pet/page2_img3.jpg" alt="" class="img_inner fleft i2">
                <div class="extra_wrapper">
                    <div class="text2 col2"><a href="#">土狗</a></div>
                   你阿斯顿发生空家里地方哈快睡觉地方哈会计师对老夫就卡掉</div>
                <div class="clear"></div>
                  英文名:<br/>
                  产  &nbsp;&nbsp;&nbsp;地:<br/>
                  寿  &nbsp;&nbsp;&nbsp;命:<br/>
                  别  &nbsp;&nbsp;&nbsp;名:<br/>
               </div>
        </div>
        <?php }?>

    </div>
    <div class="grid_12">
        <h2 class="ic1" >猫类</h2>
    </div>
    <div class="clear"></div>
    <?php for($i = 0;$i<6;$i++){?>
        <div class="grid_4">
            <div class="pad2"> <img src="/ag_bishe/Application/Public/img/Pet/page2_img2.jpg" alt="" class="img_inner fleft i2">
                <div class="extra_wrapper">
                    <div class="text2 col2"><a href="#">波斯猫</a></div>
                    你阿斯顿发生空家里地方哈快睡觉地方哈会计师对老夫就卡掉</div>
                <div class="clear"></div>
                英文名:<br/>
                产  &nbsp;&nbsp;&nbsp;地:<br/>
                寿  &nbsp;&nbsp;&nbsp;命:<br/>
                别  &nbsp;&nbsp;&nbsp;名:<br/>
            </div>
        </div>
    <?php }?>

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