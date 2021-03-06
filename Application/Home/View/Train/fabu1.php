<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>消息发布</title>

    <meta name="HandheldFriendly" content="True" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="__PUBLIC__/css/Train/bootstrap.min.css" rel="stylesheet">
    <link href="__PUBLIC__/css/Train/fabu.css" rel="stylesheet">

    <!-- 如果要使用Bootstrap的js插件，必须先调入jQuery -->
    <script src="__PUBLIC__/js/jquery-1.11.1.js"></script>
    <!-- 包括所有bootstrap的js插件或者可以根据需要使用的js插件调用　-->
    <script src="__PUBLIC__/js/bootstrap.min.js"></script>
    <script src="__PUBLIC__/js/ajaxfileupload.js"></script>
    <script>
        $(function(){

            $('#addshangjia').on('click',function(){

                $('#add_form').show();
            });


            $('#image').on('change',function(){
                console.log("文件本地路径："+$("#image").val());
                //判断是否选择文件
                if ($("#image").val().length > 0) {
                    var loadingImg = "__PUBLIC__/img/Train/loading.gif";
                    $('#image1').attr('src',loadingImg);//上传中gif....

                    ajaxFileUpload();
                }else {
                    alert("请选择图片");
                }
            });


        });

//        function ajaxFileUpload() {
//            $.ajaxFileUpload({
//                url: "index.php?act=store_article1_add&op=upload&uploadpath=<?php //echo ATTACH_ARTICLE1;?>//", //用于文件上传的服务器端请求地址
//                secureuri: false, //是否需要安全协议，一般设置为false
//                fileElementId: 'image', //文件上传域的ID
//                dataType: 'json', //返回值类型 一般设置为json
//                success: function (data, status){  //服务器成功响应处理函数,data为服务器端返回的信息,status为返回的状态码,如200:OK
//                    if (typeof (data.error) != 'undefined') {
//                        if (data.error != '') {
//                            alert(data.error);
//                        } else {
//                            alert(data.msg);
//                        }
//                    }
//                    $('#image1').attr('src',data.url);
//                    console.log("上传路径："+$('#image1')[0].src);
//
////				alert("上传成功");
//                },
//                error: function (data, status, e){//服务器响应失败处理函数,data, status, e均为服务器端返回来的信息
//
//                    alert('上传失败');
//                    var defaultImg ="http://localhost/xinjikang/xin_shopnc/shopnc_lite2/data/upload/shop/common/default_goods_image_240.gif";
//                    $('#image1').attr('src',defaultImg);//恢复默认图片显示
//
//                    $('#image').bind('change',uploadChange);
//                }
//            })
//            return false;
//        }

    </script>
</head>
<body class="post-template tag-about-ghost tag-zhu-shou-han-shu tag-jquery">

    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
    <div class="container bo">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">教育培训机构资源网</a>
        </div>        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="__APP__/Home/Train">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Content</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Important<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Kobe</a></li>
                        <li class="dropdown-header"><a href="#">Ander</a></li>
                        <li><a href="#">X-Man</a></li>
                        <li><a href="#">Caption American</a></li>
                    </ul>
                </li>
            </ul>

            <?php if(($_SESSION['LoginName'])&&($_SESSION['is_login'])){?>
                <div class="welcome">
                    欢迎您：<?php echo $_SESSION['LoginName'];?>&nbsp;&nbsp;&nbsp;<a href="__APP__/home/index/loginout">退出</a>
                </div>
            <?php }else{?>
                <div class="rightBtn">
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#Loginform">
                        登录
                    </button>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#registerform">
                        注册
                    </button>

                </div>
            <?php }?>

        </div>
    </div>


</nav>

<div class="container body">
    <form role="form" method="post" action="__APP__/Home/Train/fabuadd" class="form-horizontal" >
        <div class="form-group">
            <label class="col-md-2 control-label"><i>*</i>标 题</label>
            <div class="col-md-4">
                <input class="form-control " name="message_title" type="text" id="message_title" placeholder="请包含您所提供的具体培训课程，更快找到同学" value="" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label"><i>*</i>类 别</label>
            <div class="col-md-2">
                <select class="form-control" name="train_type">
                    <option>请选择类别</option>
                    <?php foreach($train_type as $k=>$v){?>
                    <option value="<?php echo $v['type_id']?>"><?php echo $v['type_name'];?></option>
                    <?php }?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label"><i>*</i>授课形式</label>
            <div class="col-md-4">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="class_type" value="1" />一对一
                    </label>
                    <label>
                        <input type="checkbox" name="class_type"  value="2" />小班
                    </label>
                    <label>
                        <input type="checkbox" name="class_type"  value="3" />大班
                    </label>
                    <label>
                        <input type="checkbox" name="class_type"  value="4" />脱产
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label"><i>*</i>培训班介绍</label>
            <div class="col-md-5">
                <textarea id="intro" class="form-control" rows="5" name="message_content" placeholder="详细介绍"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">上传图片</label>
            <div class="col-md-5">
                <a id="upBtn" href="javascript:void(0);">
                    <img id="image1" src="__PUBLIC__/img/Train/default.gif">
                    <input id="image" name="image" class="" type="file" title="上传图片">
                </a>
            </div>
        </div>

        <input type="hidden" name="LoginName" value="<?php echo $_SESSION['LoginName'];?>">

        <hr>
        <h4 class="h4">联系商家</h4>
        <div class="form-group">
            <label class="col-md-2 control-label">选择商家</label>
            <div class="col-md-2">
                <select class="form-control" name="training_id">
                    <option>请选择类别</option>
                    <?php foreach($train as $v){?>
                    <option value="<?php echo $v['training_id']?>"><?php echo $v['training_name']?></option>
                    <?php }?>
                </select>
            </div>

        </div>
        <div><button type="button" id="addshangjia">添加新商家</div>
        <div class="form-group">
            <label class="col-md-2"></label>
            <div class="col-md-2 ">
            <button type="submit" class="form-control btn btn-danger">发布信息</button>
            </div>
        </div>
    </form>

</div>

<form id="add_form" class="container" hidden="hidden">
    <div class="form-group">
        <label class="col-md-2 control-label"><i>*</i>详细地址</label>
        <div class="col-md-4">
            <input class="form-control " name="name" type="text" id="name" placeholder="请包含您所提供的具体培训课程，更快找到同学" value="" />
        </div>
    </div><br>
    <div class="form-group">
        <label class="col-md-2 control-label"><i>*</i>联系人</label>
        <div class="col-md-2">
            <input class="form-control " name="name" type="text" id="name" placeholder="" />
        </div>
    </div><br>
    <div class="form-group">
        <label class="col-md-2 control-label"><i>*</i>联系电话</label>
        <input>
    </div><br>
    <div class="form-group">
        <button type="submit" class="form-control btn btn-danger">保存商家信息</button>
    </div>
</form>
</body>


</html>

