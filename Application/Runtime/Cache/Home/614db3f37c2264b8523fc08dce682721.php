<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>教育机构资源网首页</title>
    <!-- Bootstrap -->
    <link href="/ag_bishe/Application/Public/css/Train/bootstrap.min.css" rel="stylesheet">

    <link href="/ag_bishe/Application/Public/css/Train/index.css" rel="stylesheet">

    <style>

    </style>

    <!-- 如果要使用Bootstrap的js插件，必须先调入jQuery -->
    <script src="/ag_bishe/Application/Public/js/jquery-1.11.1.js"></script>
    <!-- 包括所有bootstrap的js插件或者可以根据需要使用的js插件调用　-->
    <script src="/ag_bishe/Application/Public/js/bootstrap.min.js"></script>
    <script src="/ag_bishe/Application/Public/js/jquery.validation.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only"></span>·
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">教育培训机构资源网</a>
        </div>        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/ag_bishe/Application/index.php">首页</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Content</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">培训内容<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <?php foreach($training_type as $v){?>
                            <li><a href="/ag_bishe/Application/index.php/home/Train/index?type_id=<?php echo $v['type_id'] ;?>"><?php echo $v['type_name'];?></a></li>
                        <?php }?>
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



<!--
    作者：404290546@qq.com
    时间：2015-12-02
    描述：轮播图片(旋转木马)
-->
<div class="adv">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-silde-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-silde-to="1"></li>
            <li data-target="#carousel-example-generic" data-silde-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/ag_bishe/Application/Public/img/Train/shouye1.jpg" alt="0 slider">
                <div class="carousel-caption">
                    <p class="carousel p">优胜教育，行业领导者</p>
                </div>
            </div>
            <div class="item">
                <img src="/ag_bishe/Application/Public/img/Train/shouye1.jpg" alt="1 slider">
                <div class="carousel-caption">
                    <p></p>
                </div>
            </div>
            <div class="item">
                <img src="img/4.jpg" alt="2 slider">
                <div class="carousel-caption">
                    <p></p>
                </div>
            </div>

        </div>
    </div>

    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        		<span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container">
    <nav class="navbar">
        <div class="container-fluid">
            <div class="marleft30per">
                <form class="navbar-form" action="/ag_bishe/Application/index.php/Home/Train/search" method="get">
                    <div class="form-group form-group-lg">
                        <input type="text" name="search_content" class="form-control" placeholder="Search" style="width: 350px;">
                    </div>
                    <button type="submit" class="btn btn-warning">搜本类</button>
                </form>
            </div>
        </div>
    </nav>
</div>

<!--
    作者：404290546@qq.com
    时间：2015-12-03
    描述：教育培训列表
-->
<div class="container">
    <div class="fabu">
        <a href="/ag_bishe/Application/index.php/Home/Train/fabu">
            <button type="button" class="btn btn-danger fr">发布免费信息</button>
        </a>
    </div>
    <div class="tabsbar">
        <div class="list-tabs">
            <a href="#" class="sel"><h4>天津<?php if(!empty($type_id)){ echo $training_type[$type_id-1]['type_name']; }else{ echo '培训'; }?></h4></a>
        </div>
    </div>
    <div class="filterbar">
        <div class="col-sm-9 martop4">
            <div class="btn-group btn-group-sm" role="group" aria-label="...">
                <button type="button" class="btn btn-default"><a>默认排序</a></button>
                <button type="button" class="btn btn-default">预约 <span class="glyphicon glyphicon-arrow-down"></span></button>
                <button type="button" class="btn btn-default">评分 <span class="glyphicon glyphicon-arrow-down"></button>
            </div>&nbsp;&nbsp;&nbsp;
            <label class="checkbox-inline">
                <input type="checkbox" id="isonline" value="option1">帮帮在线
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" id="renzheng" value="option2">只看认证
            </label>
        </div>
        <div class="col-sm-3 martop9 text-right">
            <a href="http://e.58.com/shenghuo.html">想更多接单详询4008107258</a>
        </div>
    </div>

    <div id="infolist">
        <table class="table table-hover">
            <tbody>
            <?php foreach($message_list as $value){ ?>


            <tr>
                <td class="width100">
                    <img src="/ag_bishe/Application/Public/img/Train/default.gif" alt="..." class="img-thumbnail" width="80" height="80">
                </td>
                <td style="line-height: 1.9;">
                    <a href="/ag_bishe/Application/index.php/Home/Train/detail?id=<?php echo $value['message_id'];?>"><strong><?php echo $value['message_title']?></strong></a>&nbsp;<span class="label label-warning">精</span><br />
                    <span class="font12"><?php echo $value['message_jianjie'];?></span><br />
                    <a href="#"><small><u><?php echo $value['training_name'];?></u></small></a>
                </td>
                <td style="line-height: 1.9;">
                    <label class="starcolor">
                        <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span>
                    </label>
                    <label class="darkgray">
                        <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span>
                    </label>
                    <br />
                    <a href="#" class="font12">当月预约<?php echo $value['yuyue']?>次</a><br />
                    <a href="#" class="font12">当月评价<?php echo $value['pingjia'];?>次</a>
                </td>
                <td style="line-height: 6;"><button href="#" class="btn btn-warning"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;联系商家</button></td>
            </tr>

            <?php }?>


            </tbody>
        </table>
    </div>

    <div align="center">
        <nav>
            <ul class="pagination">
                <li>
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<footer class="foot-wrap">
    <!--采用container，使得页尾内容居中 -->
    <div class="container">
        <div >
            <div class="row-content col-sm-2">
                <h3>Subscribe</h3>
                <ul>
                    <li ><a href="#">Newsletter</a></li>
                    <li><a href="#">RSS feed</a></li>
                    <li><a href="#">RSS to Email</a></li>
                    <li><a href="#">Product Hunt</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Pinterest</a></li>
                    <li><a href="#">Google+</a></li>
                </ul>
            </div>
            <div class="row-content col-sm-2">
                <h3>BROWSE</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Templates</a></li>
                    <li><a href="#">Resources</a></li>
                    <li><a href="#">OPL Themes</a></li>
                </ul>
            </div>
            <div class="row-content col-sm-2">
                <h3>INFORMATION</h3>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Why One Page?</a></li>
                    <li><a href="#">OPL Blog</a></li>
                    <li><a href="#">Product Hunt</a></li>
                    <li><a href="#">Advertise</a></li>
                    <li><a href="#">Submit</a></li>
                    <li><a href="#">Award Ribbons</a></li>
                    <li><a href="#">Roadmap</a></li>
                </ul>
            </div>

            <div class="row-content col-sm-2">
                <h3>RESOURCES</h3>
                <ul>
                    <li><a href="#">Browse All</a></li>
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Development</a></li>
                    <li><a href="#">Hosting</a></li>
                    <li><a href="#">Round Ups</a></li>
                    <li><a href="#">Tutorials</a></li>
                </ul>

            </div>
            <div class="row-content col-sm-2">
                <h3>TRENDING</h3>
                <ul>
                    <li><a href="#">Big Typography</a></li>
                    <li><a href="#">Free Templates</a></li>
                    <li><a href="#">Most Loved</a></li>
                    <li><a href="#">Centrally Divided</a></li>
                    <li><a href="#">Skrollr.js</a></li>
                    <li><a href="#">Parallax Scrolling</a></li>
                    <li><a href="#">Off-Canvas Menu</a></li>
                    <li><a href="#">Molecules</a></li>
                </ul>
            </div>
            <div class="row-content col-sm-2">
                <h3>OPL THEMES</h3>
                <ul>
                    <li><a href="#">Browse All</a></li>
                    <li><a href="#">East Java</a></li>
                    <li><a href="#">Clutterless</a></li>
                    <li><a href="#">Mapped</a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div align="center">
                    <span style="color: #fff">Copyright&copy; <a href="#">呜呜教育咨询网</a></span> |
                    <span style="color: #fff"><a href="#" target="_blank">京ICP备11008151号</a></span> |
                    <span style="color: #fff">BY XINJK </span>
                </div>
            </div>
        </div>
    </div>

</footer>

<!--登录注册弹出框-->
<form class="modal fade bs-example-modal-sm" id="Loginform" method="post" action="/ag_bishe/Application/index.php/Home/Index/LoginSave" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="LoginLabel">登录</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="username">用户名</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="用户名">
                </div>
                <div class="form-group">

                    <label for="password">密码</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="密码">
                </div>

                <input type="hidden" value="train">

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-block">登录</button>
                <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
            </div>
        </div>
    </div>
</form>

<form class="modal fade bs-example-modal-sm" method="post" action="/ag_bishe/Application/index.php/Home/Index/Reg_save" role="form" id="registerform" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="registerLabel">注册</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="regUsername">用户名</label>
                    <input type="email" class="form-control" id="regUsername" name="regUsername" placeholder="Username">
                </div>
                <div class="form-group">

                    <label for="regPassword">密码</label>
                    <input type="password" class="form-control" id="regPassword" name="regPassword" placeholder="Password">
                </div>
                <div class="form-group">

                    <label for="conPassword">确认密码</label>
                    <input type="password" class="form-control" id="conPassword" name="conPassword" placeholder="Password">
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-block">注册</button>

            </div>
        </div>
    </div>
</form>




<script>
    $(function(){
        $( "#registerform" ).validate({
            errorElement : 'span',
            errorClass : 'help-block',
            focusInvalid : false,
            rules: {

                // 注册用户名
                regUsername: {
                    required: true,
                    minlength: 5,
                    maxlength: 12
                },
                // 密码
                regPassword: {
                    required: true,
                    minlength: 6,
                    maxlength: 18
                },
                // 确认密码
                conPassword: {
                    equalTo:"#regPassword"
                }

            },
            messages: {
                // 注册用户名
                regUsername: {
                    required: "*此项不能为空",
                    minlength: "*不能少于5个字符",
                    maxlength: "*不能多于12个字符"
                },
                // 密码
                regPassword: {
                    required: "*此项不能为空",
                    minlength: "*不能少于6个字符",
                    maxlength: "*不能多于18个字符"
                },
                // 确认密码
                conPassword: "*两次输入密码不一致"
            },
            highlight : function(element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            success : function(label) {
                label.closest('.form-group').removeClass('has-error');
                label.remove();
            },
            errorPlacement : function(error, element) {
                element.parent('div').append(error);
            },
            submitHandler : function(form) {
                form.submit();
            }
        });

    });
</script>
</body>
</html>