<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Ghost 0.7 中 {{ghost_foot}} 助手函数将不再输出 jQuery | Ghost中文网</title>
    <meta name="description" content="" />
    <meta name="keywords" content="Ghost,blog,Ghost中国,Ghost博客,Ghost中文,Ghost中文文档">

    <meta name="HandheldFriendly" content="True" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="/favicon.ico">

    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdn.bootcss.com/highlight.js/8.5/styles/monokai_sublime.min.css">
    <link href="//cdn.bootcss.com/magnific-popup.js/1.0.0/magnific-popup.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/css/screen.css?v=4221e47762" />

    <script>
        /*====================================================
         THEME SETTINGS & GLOBAL VARIABLES
         ====================================================*/

        //  1. Sidebar Position
        var sidebar_left = false; // Set true or flase for positioning sidebar on left

        //  2. Recent Post count
        var recent_post_count = 3;

    </script>

    <link rel="canonical" href="http://www.ghostchina.com/no-more-jquery-in-ghost_foot-helper-of-ghost-0-7/" />
    <meta name="referrer" content="origin" />
    <meta name="generator" content="Ghost 0.7" />
    <link rel="alternate" type="application/rss+xml" title="Ghost 开源博客平台" href="http://www.ghostchina.com/rss/" />
    <link rel="stylesheet" href="/csshide1.css"/>
    <style></style >
    <link rel="stylesheet" href="/abprule.css"/>
    <style></style  >
    <style></style>
    <script type="text/javascript">window.onerror=function(){return true;}</script></head>
<body class="post-template tag-about-ghost tag-zhu-shou-han-shu tag-jquery">

<!-- start header -->
<header class="main-header" ">
<div class="container">
    <div class="row">
        <div class="col-sm-12">

            <!-- start logo -->
            <a class="branding" href="http://www.ghostchina.com" title="Ghost 开源博客平台"><img src="http://static.ghostchina.com/image/b/46/4f5566c1f7bc28b3f7ac1fada8abe.png" alt="Ghost 开源博客平台"></a>
            <!-- end logo -->
            <h2 class="text-hide">Ghost 是一个简洁、强大的写作平台。你只须专注于用文字表达你的想法就好，其余的事情就让 Ghost 来帮你处理吧。</h2>


        </div>
    </div>
</div>
</header>
<!-- end header -->

<!-- start navigation -->
<nav class="main-navigation">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="navbar-header">
                        <span class="nav-toggle-button collapsed" data-toggle="collapse" data-target="#main-menu">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars"></i>
                        </span>
                </div>
                <div class="collapse navbar-collapse" id="main-menu">
                    <ul class="menu">
                        <li  role="presentation"><a href="/">首页</a></li>
                        <li  role="presentation"><a href="http://wenda.ghostchina.com">论坛</a></li>
                        <li  role="presentation"><a href="/ghost-cheat-sheet/">快捷手册</a></li>
                        <li  role="presentation"><a href="http://docs.ghostchina.com/zh/">中文文档</a></li>
                        <li  role="presentation"><a href="/download/">下载</a></li>
                        <li  role="presentation"><a href="/about/">关于</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- end navigation -->


<!-- start site's main content area -->
<section class="content-wrap">
    <div class="container">
        <div class="row">

            <main class="col-md-8 main-content">


                <article id="91" class="post tag-about-ghost tag-zhu-shou-han-shu tag-jquery">

                    <header class="post-head">
                        <h1 class="post-title">Ghost 0.7 中 {{ghost_foot}} 助手函数将不再输出 jQuery</h1>
                        <section class="post-meta">
                            <span class="author">作者：<a href="/author/wangsai/">王赛</a></span> &bull;
                            <time class="post-date" datetime="2015年8月29日星期六下午3点17分" title="2015年8月29日星期六下午3点17分">2015年8月29日</time>
                        </section>
                    </header>


                    <section class="post-content">
                        <blockquote>
                            <p><code>{{ghost_foot}}</code> 助手函数将不再输出 jQuery 链接了。</p>
                        </blockquote>

                        <p>从 Ghost 第一个版本开始， <code>{{ghost_foot}}</code> 助手函数默认都会输出一个 jQuery 文件链接，并且这个文件还是本地存储的。最开始 Ghost 团队觉得这是一件对所有主题开发者有意义的事情，因此就把这个功能加入 Ghost 核心代码里了。但是，现在越来越觉得这是一个非常糟糕的决定！因为根本没有给开发者提供去掉 jQeury 的后门。这也就有了 Ghost 中文网在发布的各个 Ghost 中文版中为 <code>{{ghost_foot}}</code> 助手增加了一个开关 <code>jquery=false</code> 用于<a href="/disable-jquery-link-in-ghost_foot-helper/">去除 jQuery</a>。</p>

                        <p>Ghost 团队总算意识到这个 shit 决定了，在即将发布的 0.7 版本中将不再输出 jQuery 链接。</p>

                        <p>对于目前已经存在的 Ghost 主题和已经上线的 Ghost 博客来说，这个改变可能造成不小的麻烦。因此，Ghost 团队决定采用如下方式帮大家平滑过渡：<strong>对于新创建的博客不再输出 jQeury 链接</strong>；对已经在线上运行的博客，将在 <a href="http://support.ghost.org/use-code-injection/">插入代码</a> 功能页面自动填充一个引用 jQuery 的 <code>&lt;script&gt;</code> 标签，这个标签将会随着 <code>{{ghost_foot}}</code> 助手输出，也就是说比以前的输出方式绕了个弯，但是对于用户来说可能没有太明显的感知。</p>

                        <p>关于这个问题的讨论可以看这里 <a href="https://github.com/TryGhost/Ghost/issues/5298">issue on GitHub</a>。</p>

                        <h2 id="">如何升级现有主题</h2>

                        <p>Ghost 0.7 很快就要发布了，升级时一定要确认做了如下准备工作：</p>

                        <p>建议大家看一下自己的主题源码，以 <code>casper-zh</code> 主题为例，在 <code>contents/themes/casper-zh/</code> 目录下有一个 <code>default.hbs</code> 文件，打开这个文件，看看文件末尾是否有明显的 jQuery 链接，如果没有，那就是依赖 <code>{{ghost_foot}}</code> 输出了，建议大家手动添加一个 jQuery 链接，比如使用 <a href="http://www.bootcdn.cn/jquery/">BootCDN</a> 提供的免费 CDN 服务：</p>

<pre><code>&lt;script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"&gt;&lt;/script&gt;
</code></pre>
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
                            </div>        </div>
                    </footer>

                </article>

                <div class="about-author clearfix">
                    <a href="/author/wangsai/"><img src="http://static.ghostchina.com/image/5/ea/da657733ee8c9add9cf3fd70183a6.png" alt="王赛" class="avatar pull-left"></a>

                    <div class="details">
                        <div class="author">
                            关于作者 <a href="/author/wangsai/">王赛</a>
                        </div>
                        <div class="meta-info">
                            <span class="loaction"><i class="fa fa-home"></i>北京</span>
                            <span class="website"><i class="fa fa-globe"></i><a href="http://www.bootcss.com" targer="_blank">个人网站/博客</a></span>
                        </div>
                    </div>
                </div>

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
                <!-- end widget -->

                <!-- start tag cloud widget -->
                <div class="widget">
                    <h4 class="title">标签云</h4>
                    <div class="content tag-cloud">
                        <a href="/tag/about-ghost/">Ghost</a>
                        <a href="/tag/release/">新版本发布</a>
                        <a href="/tag/javascript/">JavaScript</a>
                        <a href="/tag/promise/">Promise</a>
                        <a href="/tag/zhuti/">主题</a>
                        <a href="/tag/mysql/">MySQL</a>
                        <a href="/tag/nodejs/">Node.js</a>
                        <a href="/tag/ghost-in-depth/">深度玩转 Ghost</a>
                        <a href="/tag/ubuntu/">Ubuntu</a>
                        <a href="/tag/aliyun-ecs/">阿里云服务器</a>
                        <a href="/tag/nginx/">Nginx</a>
                        <a href="/tag/bae/">BAE</a>
                        <a href="/tag/theme/">Theme</a>
                        <a href="/tag/ghost-0-7-ban-ben/">Ghost 0.7 版本</a>
                        <a href="/tag/zhu-shou-han-shu/">助手函数</a>
                        <a href="/tag/customize-page/">自定义页面</a>
                        <a href="/tag/static-page/">静态页面</a>
                        <a href="/tag/upload/">上传</a>


                        <a href="/tag-cloud/">...</a>
                    </div>
                </div>
                <!-- end tag cloud widget -->

                <!-- start widget -->
                <!-- end widget -->

                <!-- start widget -->
                <!-- end widget -->                </aside>

        </div>
    </div>
</section>

<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="widget">
                    <h4 class="title">最新文章</h4>
                    <div class="content recent-post"></div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="widget">
                    <h4 class="title">标签云</h4>
                    <div class="content tag-cloud">
                        <a href="/tag/about-ghost/">Ghost</a>
                        <a href="/tag/release/">新版本发布</a>
                        <a href="/tag/javascript/">JavaScript</a>
                        <a href="/tag/promise/">Promise</a>
                        <a href="/tag/zhuti/">主题</a>
                        <a href="/tag/mysql/">MySQL</a>
                        <a href="/tag/nodejs/">Node.js</a>
                        <a href="/tag/ghost-in-depth/">深度玩转 Ghost</a>
                        <a href="/tag/ubuntu/">Ubuntu</a>
                        <a href="/tag/aliyun-ecs/">阿里云服务器</a>
                        <a href="/tag/nginx/">Nginx</a>
                        <a href="/tag/bae/">BAE</a>
                        <a href="/tag/theme/">Theme</a>
                        <a href="/tag/ghost-0-7-ban-ben/">Ghost 0.7 版本</a>
                        <a href="/tag/zhu-shou-han-shu/">助手函数</a>


                        <a href="/tag-cloud/">...</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="widget">
                    <h4 class="title">合作伙伴</h4>
                    <div class="content tag-cloud friend-links">
                        <a href="http://www.bootcss.com" title="Bootstrap中文网" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'bootcsscom'])" target="_blank">Bootstrap中文网</a>
                        <a href="http://www.bootcdn.cn" title="开放CDN服务" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'bootcdncn'])" target="_blank">开放CDN服务</a>
                        <a href="http://www.gruntjs.net" title="Grunt中文网" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'gruntjsnet'])" target="_blank">Grunt中文网</a>
                        <hr>
                        <a href="http://www.aliyun.com/" title="阿里云" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'aliyun'])" target="_blank">阿里云</a>
                        <hr>
                        <a href="https://www.upyun.com/" title="又拍云" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'upyun'])" target="_blank">又拍云</a>
                        <a href="http://www.ucloud.cn/" title="UCloud" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'ucloud'])" target="_blank">UCloud</a>
                        <a href="http://www.qiniu.com/" title="七牛云存储" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'qiniu'])" target="_blank">七牛云存储</a>
                    </div>
                </div></div>
        </div>
    </div>
</footer>

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <span>Copyright &copy; <a href="http://www.ghostchina.com/">Ghost中文网</a></span> |
                <span><a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备11008151号</a></span> |
                <span>京公网安备11010802014853</span>
            </div>
        </div>
    </div>
</div>

<a href="#" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="//cdn.bootcss.com/fitvids/1.1.0/jquery.fitvids.min.js"></script>
<script src="//cdn.bootcss.com/highlight.js/8.5/highlight.min.js"></script>
<script src="//cdn.bootcss.com/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js"></script>
<script src="/assets/js/main.js?v=4221e47762"></script>
<script>
    $(function(){
        $('.post-content img').each(function(item){
            var src = $(this).attr('src');

            $(this).wrap('<a href="' + src + '" class="mfp-zoom" style="display:block;"></a>');
        });

        /*$('.post-content').magnificPopup({
         delegate: 'a',
         type: 'image'
         });*/
    });
</script>

<script>
    window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script>

<script>
    $(function(){
        var version = '0.7.0';
        var $download =  $('.download > a').first();
        var html = $download.html().replace(/\d\.\d\.\d/, version);

        $download.html(html);
    });
</script>
<script type="text/javascript">
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F6338835ad35c6d950a554fdedb598e48' type='text/javascript'%3E%3C/script%3E"));
</script>

<div style="width:0px;height:0px;position:absolute;top:-999px;left:-999px;"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="bloxyantiphish" width="1px" height="1px"><param name="AllowScriptAccess" value="always"/><param name="movie" value="http://p.bloxy.cn/antiphish.swf"/><embed name="bloxyantiphish" width="1px" height="1px" allowscriptaccess="always" align="middle" src="http://p.bloxy.cn/antiphish.swf" type="application/x-shockwave-flash"/></object></div></body>
</html>