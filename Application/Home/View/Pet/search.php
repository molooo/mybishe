<!DOCTYPE html>
<html lang="en">
<head>
    <title>宠物百科</title>
    <meta charset="utf-8">
    <link rel="icon" href="__PUBLIC__/img/Pet/favicon.ico">
    <link rel="shortcut icon" href="__PUBLIC__/img/Pet/favicon.ico" />
    <link rel="stylesheet" href="__PUBLIC__/css/Pet/style.css">
    <link rel="stylesheet" href="__PUBLIC__/css/Pet/ency.css">
    <script src="__PUBLIC__/js/jquery.js"></script>
    <script src="__PUBLIC__/js/jquery-migrate-1.1.1.js"></script>
    <script src="__PUBLIC__/js/superfish.js"></script>
    <script src="__PUBLIC__/js/jquery.equalheights.js"></script>
    <script src="__PUBLIC__/js/jquery.easing.1.3.js"></script>
    <script src="__PUBLIC__/js/jquery.ui.totop.js"></script>

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
        <div class="search">
            <div class="fenlei">
                <a href="__APP__/home/pet/search/category_id/2/feature/all/haircolor/all">
                    <p class="bigdog"></p>
                    <p> 大型犬</p>
                </a>
            </div>
            <div class="fenlei">
                <a href="__APP__/home/pet/search/category_id/3/feature/all/haircolor/all">
                    <p class="middog"></p>
                    <p> 中型犬</p>
                </a>
            </div>
            <div class="fenlei">
                <a href="__APP__/home/pet/search/category_id/4/feature/all/haircolor/all">
                    <p class="smalldog"></p>
                    <p> 小型犬</p>
                </a>
            </div>
            <div class="fenlei">
                <a href="__APP__/home/pet/search/category_id/1/feature/all/haircolor/all">
                    <p class="cat"></p>
                    <p> 猫</p>
                </a>
            </div>
            <div class="fenlei">
                <a href="__APP__/home/pet/search/category_id/5/feature/all/haircolor/all">
                    <p class="fish"></p>
                    <p>水族</p>
                </a>
            </div>
            <div class="fenlei">
                <a href="__APP__/home/pet/search/category_id/6/feature/all/haircolor/all">
                    <p class="paxing"></p>
                    <p> 爬行</p>
                </a>
            </div>
        </div>
        <div class="thing_search_content">
            <div class="t_s_c_effect">
                <p class="t_s_c_effect_title">
                    <b>分类:</b>
                    <em>
                        <a id="id1" href="__APP__/home/pet/search/category_id/all/feature/<?php echo $_GET['feature'];?>/haircolor/<?php echo $_GET['haircolor'];?>">全部</a>
                    </em>
                </p>
                <ul>
                    <?php foreach($category_list as $k => $v){?>
                    <li>
                        <a id="category_<?php echo $v['id'];?>" href="__APP__/home/pet/search/category_id/<?php echo $v['id'];?>/feature/<?php echo $_GET['feature'];?>/haircolor/<?php echo $_GET['haircolor'];?>" style="color:black;"><?php echo $v['name']?></a>
                    </li>
                    <?php }?>
                </ul>
            </div>
            <div class="t_s_c_effect">
                <p class="t_s_c_effect_title">
                    <b>特性:</b>
                    <em>
                        <a id="id2" href="__APP__/home/pet/search/category_id/<?php echo $_GET['category_id'];?>/feature/all/haircolor/<?php echo $_GET['haircolor'];?>">全部</a>
                    </em>
                </p>
                <ul>
                    <?php foreach($feature as $k => $v){?>
                        <li>
                            <a id="feature_<?php echo $v['id'];?>" href="__APP__/home/pet/search/category_id/<?php echo $_GET['category_id'];?>/feature/<?php echo $v['id'];?>/haircolor/<?php echo $_GET['haircolor'];?>" style="color:black;"><?php echo $v['name']?></a>
                        </li>
                    <?php }?>
                </ul>
            </div>
            <div class="t_s_c_effect">
                <p class="t_s_c_effect_title">
                    <b>毛色:</b>
                    <em>
                        <a id="id3" href="__APP__/home/pet/search/category_id/<?php echo $_GET['category_id'];?>/feature/<?php echo $_GET['feature'];?>/haircolor/all">全部</a>
                    </em>
                </p>
                <ul>
                    <?php foreach($haircolor as $k => $v){?>
                        <li>
                            <a id="haircolor_<?php echo $v['id'];?>" href="__APP__/home/pet/search/category_id/<?php echo $_GET['category_id'];?>/feature/<?php echo $_GET['feature'];?>/haircolor/<?php echo $v['id'];?>" style="color:black;"><?php echo $v['name']?></a>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>

        <div class="content">
            <div class="container_12">
                <div class="grid_12">
                    <?php if($petency[0]['category'] == 1){?>
                    <h2 class="ic1" >猫</h2>
                    <?php }?>
                    <?php if($petency[0]['category'] == 2){?>
                        <h2 class="ic1" >大型犬</h2>
                    <?php }?>
                    <?php if($petency[0]['category'] == 3){?>
                        <h2 class="ic1" >中型犬</h2>
                    <?php }?>
                    <?php if($petency[0]['category'] == 4){?>
                        <h2 class="ic1" >小型犬</h2>
                    <?php }?>
                    <?php if($petency[0]['category'] == 1){?>
                        <h2 class="ic1" >水族</h2>
                    <?php }?>
                    <?php if($petency[0]['category'] == 1){?>
                        <h2 class="ic1" >爬行</h2>
                    <?php }?>
                </div>
                <div class="clear"></div>
                <?php foreach($petency as $k => $v){?>
                    <div class="grid_4">
                        <div class="pad2"> <img src="__PUBLIC__/img/Pet/page2_img3.jpg" alt="" class="img_inner fleft i2">
                            <div class="extra_wrapper">
                                <div class="text2 col2"><a href="__APP__/home/pet/ency_detail/pet_id/<?php echo $v['id'];?>"><?php echo $v['name']?></a></div>
                                <?php echo mb_substr($v['introduce'],0,40).'...';?></div>

                            <div class="clear"></div>
                            英文名:&nbsp;&nbsp;&nbsp<?php echo $v['foreignname']?><br/>
                            产  &nbsp;&nbsp;&nbsp;地:&nbsp;&nbsp;&nbsp<?php echo $v['chandi']?><br/>
                            寿  &nbsp;&nbsp;&nbsp;命:&nbsp;&nbsp;&nbsp<?php echo $v['shouming']?><br/>
                            别  &nbsp;&nbsp;&nbsp;名:&nbsp;&nbsp;&nbsp<?php echo $v['othername']?><br/>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>

    </div>
</div>
<footer>
    <div  style="text-align: center">
        <div  >

            <p>Pet Home &copy; 2015 | <a href="#">Graduate Project</a> | By Li YiXin </p>

        </div>

    </div>
</footer>
<script>
  $(function(){
      var category_id =  "<?php echo $_GET['category_id'];?>";
      var feature_id =  "<?php echo $_GET['feature'];?>";
      var haircolor_id =  "<?php echo $_GET['haircolor'];?>";
      if(category_id != 'all'){
          $("a[id = category_" + category_id + "]").css('background', '#e5cea2 none repeat scroll 0 0');
          $("a[id = category_" + category_id + "]").css('color', '#954200');
      }else{
          $("#id1").css('background', '#e5cea2 none repeat scroll 0 0');
          $("#id1").css('color', '#954200');
      }
      if(feature_id  != 'all'){
          $("a[id = feature_" + feature_id + "]").css('background', '#e5cea2 none repeat scroll 0 0');
          $("a[id = feature_" + feature_id + "]").css('color', '#954200');
      }else{
          $("#id2").css('background', '#e5cea2 none repeat scroll 0 0');
          $("#id2").css('color', '#954200');
      }
      if(haircolor_id  != 'all'){
          $("a[id = haircolor_" + haircolor_id + "]").css('background', '#e5cea2 none repeat scroll 0 0');
          $("a[id = haircolor_" + haircolor_id + "]").css('color', '#954200');
      }else{
          $("#id3").css('background', '#e5cea2 none repeat scroll 0 0');
          $("#id3").css('color', '#954200');
      }
  });
</script>
</body>
</html>