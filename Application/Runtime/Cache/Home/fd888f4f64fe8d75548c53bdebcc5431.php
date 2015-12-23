<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>信息详情</title>

    <meta name="HandheldFriendly" content="True" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="/favicon.ico">

    <link href="/ag_bishe/Application/Public/css/Train/bootstrap.min.css" rel="stylesheet">
    <link href="/ag_bishe/Application/Public/css/Train/detail.css" rel="stylesheet">

    <style>
        body{
            padding-top: 50px;
        }
    </style>
    <script type="text/javascript">window.onerror=function(){return true;}</script></head>
<body class="post-template tag-about-ghost tag-zhu-shou-han-shu tag-jquery">


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

<!-- start site's main content area -->
<section class="content-wrap">
    <div class="container">
        <div class="row">

            <main class="col-md-8 main-content">


                <article id="91" class="post tag-about-ghost tag-zhu-shou-han-shu tag-jquery">

                    <header class="head">
                        <h3 class="title"><b>天津铭仁培训中心专业跆拳道、散打、来电享受免费试课</b></h3>
                        <section class="meta">
                            <span class="glyphicon glyphicon-time" aria-hidden="true"><time class="time" datetime="2015-12-7">2015-12-7</time></span>

                        </section>
                    </header>


                    <hr>
                    <section class="post-content">
                        <dl class="dl-horizontal">
                            <dt>服务区域</dt>
                            <dd></dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>类别</dt>
                            <dd></dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>联系人</dt>
                            <dd></dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>咨询商家</dt>
                            <dd></dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt></dt>
                            <dd><button class="btn btn-danger btn-lg">免费预约</button></dd>
                        </dl>

                        <blockquote>
                            <p><code>{{ghost_foot}}</code> 助手函数将不再输出 jQuery 链接了。</p>
                        </blockquote>

                        <p>从 Ghost 第一个版本开始， <code>{{ghost_foot}}</code> 助手函数默认都会输出一个 jQuery 文件链接，并且这个文件还是本地存储的。最开始 Ghost 团队觉得这是一件对所有主题开发者有意义的事情，因此就把这个功能加入 Ghost 核心代码里了。但是，现在越来越觉得这是一个非常糟糕的决定！因为根本没有给开发者提供去掉 jQeury 的后门。这也就有了 Ghost 中文网在发布的各个 Ghost 中文版中为 <code>{{ghost_foot}}</code> 助手增加了一个开关 <code>jquery=false</code> 用于<a href="/disable-jquery-link-in-ghost_foot-helper/">去除 jQuery</a>。</p>

                        <p>Ghost 团队总算意识到这个 shit 决定了，在即将发布的 0.7 版本中将不再输出 jQuery 链接。</p>

                        <p>对于目前已经存在的 Ghost 主题和已经上线的 Ghost 博客来说，这个改变可能造成不小的麻烦。因此，Ghost 团队决定采用如下方式帮大家平滑过渡：<strong>对于新创建的博客不再输出 jQeury 链接</strong>；对已经在线上运行的博客，将在 <a href="http://support.ghost.org/use-code-injection/" target="_blank">插入代码</a> 功能页面自动填充一个引用 jQuery 的 <code>&lt;script&gt;</code> 标签，这个标签将会随着 <code>{{ghost_foot}}</code> 助手输出，也就是说比以前的输出方式绕了个弯，但是对于用户来说可能没有太明显的感知。</p>

                        <p>关于这个问题的讨论可以看这里 <a href="https://github.com/TryGhost/Ghost/issues/5298">issue on GitHub</a>。</p>

                        <h2 id="">如何升级现有主题</h2>

                        <p>Ghost 0.7 很快就要发布了，升级时一定要确认做了如下准备工作：</p>

                        <p>建议大家看一下自己的主题源码，以 <code>casper-zh</code> 主题为例，在 <code>contents/themes/casper-zh/</code> 目录下有一个 <code>default.hbs</code> 文件，打开这个文件，看看文件末尾是否有明显的 jQuery 链接，如果没有，那就是依赖 <code>{{ghost_foot}}</code> 输出了，建议大家手动添加一个 jQuery 链接，比如使用 <a href="http://www.bootcdn.cn/jquery/">BootCDN</a> 提供的免费 CDN 服务：</p>


                    </section>

                    <footer class="post-footer clearfix">
                        <div class="pull-left tag-list">
                            <i class="fa fa-folder-open-o"></i>
                            <a href="/tag/about-ghost/">Ghost</a>, <a href="/tag/zhu-shou-han-shu/">助手函数</a>, <a href="/tag/jquery/">jQuery</a>
                        </div>

                        <div class="pull-right share">
                            <div class="bdsharebuttonbox share-icons">
                                <a href="#" class="bds_more" data-cmd="more"></a>
                                <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                                <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                                <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                                <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
                                <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                            </div>
                        </div>
                    </footer>

                </article>



                <div class="prev-next-wrap clearfix">

                    <a class="btn btn-default" href="/ghost-0-7-going-to-be-released-lets-preview/"><i class="fa fa-angle-left fa-fw"></i> Ghost 0.7 即将发布，高清大图提前看</a>
                    &nbsp;

                    <a class="btn btn-default" href="/ghost-0-7-0-released/">Ghost 0.7.0 正式发布 <i class="fa fa-angle-right fa-fw"></i></a>
                </div>


            </main>

            <aside class="col-md-4 sidebar">
                <!-- start widget -->
                <!-- end widget -->

                <!-- start tag cloud widget -->
                <div class="widget">
                    <h4 class="title">社区</h4>
                    <div class="content community">
                        <p>QQ群：277327792</p>
                        <p><a href="http://wenda.ghostchina.com/" title="Ghost中文网问答社区" target="_blank" onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '问答社区'])"><i class="fa fa-comments"></i> 问答社区</a></p>
                        <p><a href="http://weibo.com/ghostchinacom" title="Ghost中文网官方微博" target="_blank" onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '官方微博'])"><i class="fa fa-weibo"></i> 官方微博</a></p>
                    </div>
                </div>
                <!-- end tag cloud widget -->

                <!-- start widget -->
                <div class="widget">
                    <h4 class="title">下载 Ghost</h4>
                    <div class="content download">
                        <a href="/download/" class="btn btn-default btn-block" onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '下载Ghost'])">Ghost 中文版（0.6.0）</a>
                    </div>
                </div>
                           </aside>

        </div>
    </div>
</section>

<a href="#" id="back-to-top"><i class="fa fa-angle-up"></i></a>
<!-- 如果要使用Bootstrap的js插件，必须先调入jQuery -->
<script src="/ag_bishe/Application/Public/js/jquery-1.11.1.js"></script>
<!-- 包括所有bootstrap的js插件或者可以根据需要使用的js插件调用　-->
<script src="/ag_bishe/Application/Public/js/bootstrap.min.js"></script>


<script>
    $(function(){
        $('.post-content img').each(function(item){
            var src = $(this).attr('src');

            $(this).wrap('<a href="' + src + '" class="mfp-zoom" style="display:block;"></a>');
        });


    });
</script>

<script>
    window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script>


<div style="width:0px;height:0px;position:absolute;top:-999px;left:-999px;">
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="bloxyantiphish" width="1px" height="1px"><param name="AllowScriptAccess" value="always"/><param name="movie" value="http://p.bloxy.cn/antiphish.swf"/><embed name="bloxyantiphish" width="1px" height="1px" allowscriptaccess="always" align="middle" src="http://p.bloxy.cn/antiphish.swf" type="application/x-shockwave-flash"/></object></div></body>
</html>