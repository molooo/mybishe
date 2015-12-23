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
                <li class="active"><a href="#">Home</a></li>
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
        <div><span style="color: #dd5533">天津</span>[<a href="">切换城市</a>]</div>
            <div class="rightBtn">
                <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#Loginform">
                    登录
                </button>
                <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#registerform">
                    注册
                </button>

            </div>




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
                    <p>优胜教育，行业领导者</p>
                </div>
            </div>
            <div class="item">
                <img src="/ag_bishe/Application/Public/img/Train/shouye1.jpg" alt="1 slider">
                <div class="carousel-caption">
                    <p>有了新一代 802.11ac 技术，MacBook Air 令 Wi-Fi 速度超越极限。</p>
                </div>
            </div>
            <div class="item">
                <img src="img/4.jpg" alt="2 slider">
                <div class="carousel-caption">
                    <p>无论是什么任务，配备 Intel HD Graphics 5000 图形处理器的第四代 Intel Core 处理器都能应对自如。</p>
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

<!--
    作者：404290546@qq.com
    时间：2015-12-03
    描述：教育培训列表
-->
<div class="container">
    <div class="fabu">
        <button type="button" class="btn btn-danger" style="float: right">发布免费信息</button>
    </div>
    <div class="tabsbar">
    <div class="list-tabs">
        <a href="/tiyu/" class="sel"><h4>天津体育培训</h4></a>
    </div>
    </div>

    <div class="filterbar h28 ">
        <div class="filterbar-l col-sm-6">
            <div class="filterup " id="filterup">
                <a class="m1 sel " title="默认" href="#" rel="nofollow" onclick=""><span>默认排序<em></em></span></a>
                <a  class="m1 "  title="预约" href="#" rel="nofollow" onclick=""><span>预约<em class="ico-miarr-d"></em></span></a>
                <a  class="m1 "  title="评分" href="#" rel="nofollow" onclick=""><span>评分<em class="ico-miarr-d"></em></span></a>
            </div>

            <span class="checkbox-ico" id="isonline"><a href="javascript:void(0);">帮帮在线</a></span>
            <span class="checkbox-ico" id="renzheng"><a href="javascript:void(0);">只看认证</a></span>

        </div>
        <div class="filterbar-md" style="text-align: right">
            <!-- 加入医疗健康判断-->
            <a class="mdtj" style="display:inline-block;" rel="nofollow" target="_blank" href="http://e.58.com/shenghuo.html" onClick="">想更多接单详询4008107258</a>
        </div>
    </div>

    <div id="infolist">
        <table class=" table table-hover">
            <tbody>
            <tr>
                <td class="img">
                    <div>
                        <a><img src=""></a>
                    </div>
                </td>
                <td><div class="tdiv">
                    <a class="t" href="#">0元入学，不限次数，边学边卖</a>
                </div></td>
                <td>表格单元格</td>
                <td><a href="#" class="btn btn-warning " role="button"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;联系商家</a></td>
            </tr>
            <tr>
                <td>表格单元格</td>
                <td>表格单元格</td>
                <td>表格单元格</td>
                <td><a href="#" class="btn btn-warning " role="button"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;联系商家</a></td>
            </tr>
            <tr>
                <td>表格单元格</td>
                <td>表格单元格</td>
                <td>表格单元格</td>
                <td><a href="#" class="btn btn-warning " role="button"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;联系商家</a></td>
            </tr>
            <tr>
                <td>表格单元格</td>
                <td>表格单元格</td>
                <td>表格单元格</td>
                <td><a href="#" class="btn btn-warning " role="button"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>&nbsp;联系商家</a></td>
            </tr>
            </tbody>
        </table>
    </div>

    <div>
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
<form class="modal fade bs-example-modal-sm" id="Loginform" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="LoginLabel">登录</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="Username">用户名</label>
                    <input type="email" class="form-control" id="Username" placeholder="Username">
                </div>
                <div class="form-group">

                    <label for="Password">密码</label>
                    <input type="password" class="form-control" id="Password" placeholder="Password">
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-block">登录</button>
                <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
            </div>
        </div>
    </div>
</form>

<form class="modal fade bs-example-modal-sm" role="form" id="registerform" tabindex="-1" role="dialog">
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