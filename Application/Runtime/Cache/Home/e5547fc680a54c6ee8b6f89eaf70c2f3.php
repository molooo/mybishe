<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <title>宠物百科</title>
    <meta charset="utf-8">
    <link rel="icon" href="/ag_bishe/Application/Public/img/Pet/favicon.ico">
    <link rel="shortcut icon" href="/ag_bishe/Application/Public/img/Pet/favicon.ico" />
    <link rel="stylesheet" href="/ag_bishe/Application/Public/css/Pet/style.css">
    <link rel="stylesheet" href="/ag_bishe/Application/Public/css/Pet/ency.css">
    <link rel="stylesheet" type="text/css" href="/ag_bishe/Application/Public/diyUpload/css/webuploader.css">
    <link rel="stylesheet" type="text/css" href="/ag_bishe/Application/Public/diyUpload/css/diyUpload.css">
    <script src="/ag_bishe/Application/Public/js/jquery.js"></script>
    <script src="/ag_bishe/Application/Public/js/jquery-migrate-1.1.1.js"></script>
    <script src="/ag_bishe/Application/Public/js/superfish.js"></script>
    <script src="/ag_bishe/Application/Public/js/jquery.equalheights.js"></script>
    <script src="/ag_bishe/Application/Public/js/jquery.easing.1.3.js"></script>
    <script src="/ag_bishe/Application/Public/js/jquery.ui.totop.js"></script>
    <script type="text/javascript" src="/ag_bishe/Application/Public/diyUpload/js/webuploader.html5only.min.js"></script>
    <script type="text/javascript" src="/ag_bishe/Application/Public/diyUpload/js/diyUpload.js"></script>
    <script src="/ag_bishe/Application/Public/js/sweet-alert.min.js"></script>
    <link href="/ag_bishe/Application/Public/css/sweet-alert.css"  rel="stylesheet" type="text/css"/>

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
        
<style>
   body{
       background:
   }
    #clear{
        height:50px
    }
    dl{clear:left;border:1px solid black;padding: 10px;}
    dt{float:left;width:150px;text-align: center;}
    #illness{
        font-size: 15px;
        font-style: normal;
        color: black;
    }
    .submit{
        margin-left: 415px;
        background-color: #5bb75b;
        border: 0 none;
        color: #fff;
        cursor: pointer;
        display: block;
        font-size: 20px;
        font-weight: bold;
        width:50px;
        height: 15px;
        padding: 10px 20px 18px;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.1);

    }
    .submit:hover{
        background-color: #51a351;
        color:#fff;
        text-decoration: none;
    }
</style>
<div id="illness" style="margin-top: 50px;">
    <span style="margin-left:400px;font-size: 34px; font-family: '楷体' ;color: orange;">病情询问单</span>
    <div id="clear"></div>
    <form id="illness_form" method="post" action="/ag_bishe/Application/index.php/home/pet/illness_save">
<dl>
    <dt>
        标题
    </dt>
    <dd>
        <input name="title" type="text"/>
    </dd>
</dl>
    <dl>
        <dt>
            病情描述
        </dt>
        <dd>
            <?php showEditor('g_body','','200px','400px','visibility:hidden;',"false");?>
        </dd>
    </dl>
    <dl>
        <dt>宠物种类</dt>
        <dd><select name="category">
                <?php foreach($Cate_List as $k => $v){?>
                    <option value="<?php echo $v['id']?>"><?php echo $v['name']?></option>
                <?php } ?>
            </select></dd>
    </dl>
    <dl>
        <dt>宠物照片</dt>
        <dd>
            <div id="box">
                <div id="test" ></div>
            </div>
            <input id="file" name="file" type="hidden"/>
        </dd>
    </dl>
    <dl style="text-align: center">
        <a  class="submit" href="javascript:void(0)">提交</a>
    </dl>
        </form>
</div>
<script>
    $('#test').diyUpload({
        url:'/ag_bishe/Application/Public/function/fileupload.php',
        success:function( data ) {
        $("#file").val(data._raw);

        },
        error:function( err ) {
            alert('上传失败');
        }
    });

    $('#as').diyUpload({
        url:'/ag_bishe/Application/Public/function/server/fileupload.php',
        success:function( data ) {
            console.info( data );
        },
        error:function( err ) {
            console.info( err );
        },
        buttonText : '选择文件',
        chunked:true,
        // 分片大小
        chunkSize:512 * 1024,
        //最大上传的文件数量, 总文件大小,单个文件大小(单位字节);
        fileNumLimit:50,
        fileSizeLimit:500000 * 1024,
        fileSingleSizeLimit:50000 * 1024,
        accept: {}
    });
    $(function(){
        $(".submit").click(function(){
          $("#illness_form").submit();
        });

        $(".sf-menu>li:eq(2)").addClass("current");
        $(".sf-menu>li:eq(1)").removeClass("current");

    });
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