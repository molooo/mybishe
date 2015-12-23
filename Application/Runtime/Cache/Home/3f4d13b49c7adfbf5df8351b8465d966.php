<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>消息发布</title>

    <meta name="HandheldFriendly" content="True" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="/ag_bishe/Application/Public/css/Train/bootstrap.min.css" rel="stylesheet">
    <link href="/ag_bishe/Application/Public/css/Train/fabu.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/ag_bishe/Application/Public/diyUpload/css/webuploader.css">
    <link rel="stylesheet" type="text/css" href="/ag_bishe/Application/Public/diyUpload/css/diyUpload.css">
	<link rel="stylesheet" type="text/css" href="/ag_bishe/Application/Public/css/Train/lib/sweetalert.css">
	<script src="/ag_bishe/Application/Public/css/Train/lib/sweetalert.min.js"></script>

    <!-- 如果要使用Bootstrap的js插件，必须先调入jQuery -->
    <script src="/ag_bishe/Application/Public/js/jquery-1.11.1.js"></script>
    <!-- 包括所有bootstrap的js插件或者可以根据需要使用的js插件调用　-->
    <script src="/ag_bishe/Application/Public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/ag_bishe/Application/Public/diyUpload/js/webuploader.html5only.min.js"></script>
    <script type="text/javascript" src="/ag_bishe/Application/Public/diyUpload/js/diyUpload.js"></script>
    <script src="/ag_bishe/Application/Public/js/fabu.js"></script>

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
                <li class="active"><a href="/ag_bishe/Application/index.php/Home/Train">Home</a></li>
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
                    欢迎您：<?php echo $_SESSION['LoginName'];?>&nbsp;&nbsp;&nbsp;<a href="/ag_bishe/Application/index.php/home/index/loginout">退出</a>
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
    <form role="form" method="post" action="/ag_bishe/Application/index.php/Home/Train/fabuadd" class="form-horizontal" >
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
            <label class="col-md-2 control-label"><i>*</i>培训班简介</label>
            <div class="col-md-5">
                <textarea id="intro" class="form-control" rows="2" name="message_content" placeholder="简单介绍"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label"><i>*</i>培训班描述</label>
            <div class="col-md-5">
                <?php showEditor('g_body','','200px','400px','visibility:hidden;',"false");?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">上传图片</label>
            <div class="col-md-5">

                    <!--<img id="image1" src="img/default.gif">-->
                    <div id="box">
                        <div id="test" ></div>
                    </div>
                    <input id="img" name="img" class="" type="hidden" title="上传图片">

            </div>
            </div>

        <input type="hidden" name="LoginName" value="<?php echo $_SESSION['LoginName'];?>">

        <hr>
        <h4 class="h4">联系商家</h4>
        <div class="form-group" id="selectSJ">
            <label class="col-md-2 control-label">选择商家</label>
            <div class="col-md-2">
                <select class="form-control" name="training_id" id="training_select">
                    <option>请选择</option>
                    <?php foreach($train as $v){?>
                    <option value="<?php echo $v['training_id']?>"><?php echo $v['training_name']?></option>
                    <?php }?>
                </select>
            </div>

        </div>
        <div class="form-group">
        	<label class="col-md-2 control-label"></label>
	        <div class="col-md-2">
    			<button type="button" id="addSJBtn" class="form-control btn btn-warning">添加新商家</button>
    		</div>		
        </div>
    	<div id="add_form" class="" hidden="hidden">
		    <div class="form-group">
		        <label class="col-md-2 control-label"><i>*</i>商家名称</label>
		        <div class="col-md-4">
		            <input class="form-control " name="name" type="text" id="linkSJName" placeholder="请填写商家名称" value="" />
		        </div>
		    </div><br>
	    	<div class="form-group">
		        <label class="col-md-2 control-label"><i>*</i>详细地址</label>
		        <div class="col-md-4">
		            <input class="form-control " name="name" type="text" id="linkAddress" placeholder="请填写详细地址" value="" />
		        </div>
		    </div><br>
		    <div class="form-group">
		        <label class="col-md-2 control-label"><i>*</i>联系人</label>
		        <div class="col-md-2">
		            <input class="form-control " name="name" type="text" id="linkMan" placeholder="请填写联系人姓名" />
		        </div>
		    </div><br>
		    <div class="form-group">
		        <label class="col-md-2 control-label"><i>*</i>联系电话</label>
	        	<div class="col-md-2">
		            <input class="form-control " name="name" type="text" id="linkPhone" placeholder="请填写联系人电话" />
		        </div>
		    </div><br>
		    <div class="form-group">
		    	<label class="col-md-2"></label>
	            <div class="col-md-2 ">
	            	<button type="button" class="form-control btn btn-warning" id="saveInfoBtn">保存商家信息</button>
	            </div>
	            <div class="col-md-1 ">
	            	<button type="button" class="form-control btn btn-warning" id="cancleBtn">取消</button>
	            </div>
		    </div>
		</div><br />
        <div class="form-group">
        	<label class="col-md-1"></label>
        	<div class="col-md-10">
        		<button type="button" class="form-control btn btn-danger" id="fabuBtn">发布信息</button>
        	</div>
        </div>
    </form><br /><br />

  	
</div>

</body>
<script>

    $('#test').diyUpload({
        url:'/ag_bishe/Application/Public/function/fileupload.php',
        success:function( data ) {
            file_name += data._raw+',';
            $("#img").val(file_name);

        },
        error:function( err ) {
            alert('上传失败');
        }
    });

    $('#as').diyUpload({
        url:'/ag_bishe/Application/Public/function/fileupload.php',
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
</script>
</html>