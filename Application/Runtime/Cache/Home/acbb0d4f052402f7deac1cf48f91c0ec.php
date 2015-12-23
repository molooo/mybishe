<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-touch-fullscreen" content="yes" />
<meta name="format-detection" content="telephone=no"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<meta name="msapplication-tap-highlight" content="no" />
<meta name="viewport" content="initial-scale=1,maximum-scale=1,minimum-scale=1" />
<title>消息详情</title>
<link rel="stylesheet" type="text/css" href="/ag_bishe/Application/Public/css/House/base.css">
<link rel="stylesheet" type="text/css" href="/ag_bishe/Application/Public/css/House/nctouch_chat.css">
 <link rel="stylesheet" href="/bs/bishe/Application/Public/css/Pet/ency.css">

</head>
<body>
<header id="header">
  <div class="header-wrap">
    <div class="header-l"> <a href="javascript:history.go(-1)"> <i class="back"></i> </a> </div>
    <div class="header-title">
      <h1>消息详情</h1>
    </div>
    <div class="header-r"><a href="javascript:void(0)" class="msg-log" id="chat_msg_log"><i></i>历史</a></div>
  </div>
</header>
<div class="nctouch-chat-layout">
  <div class="nctouch-chat-con">
   <?php foreach ($liaotian_list as $k=>$v){?>
   <?php if ($v['sendname'] != $_SESSION['LoginName']){?>
	<DL>
	<dt style="font-size:12px;">
	</dt>
	<dd class="submit" style="margin-left: 0px;">
	<?php echo $v['content'];?>	        </br><SPAN  style="font-size:10px;margin-left:120px;"><?php echo $v['time'];?></SPAN>
	</dd>
	</DL>
    <?php }else{?>
    <DL>
	<dt style="font-size:12px;">
	</dt>
	<dd class="submit1" style="margin-right: 0px;">
	<?php echo $v['content'];?>	        </br><SPAN  style="font-size:10px;margin-left:120px;"><?php echo $v['time'];?></SPAN>
	</dd>
	</DL>
    <?php }?>
    <?php }?>
    <?php if (!empty($housename)&&!empty($houseprice)){?>
    <div class="margin-heigh">
    <div class="nctouch-chat-product"> 
    <a href="" target="_blank">
    <div class="goods-pic"><img src="' + goods.pic36 + '" alt=""/></div>
    <div class="goods-info"><div class="goods-name"><?php echo $housename?></div>
    <div class="goods-price">￥<?php echo $houseprice?></div>
    </div>
    </a> 
    </div>
    </div>
    <?php }?>
    <div id="chat_msg_html"></div>
    <a href="javascript:void(0);" id="anchor-bottom"></a> </div>
  <div class="nctouch-chat-bottom">
    <div class="chat-input-layout">        <span class="ke-outline" data-name="emoticons" title="插入表情" unselectable="on"><span class="ke-toolbar-icon ke-toolbar-icon-url ke-icon-emoticons" unselectable="on"></span></span>
      <div class="input-box">
  		<form method="POST" id="house_form" action="/ag_bishe/Application/index.php/home/house/kefu?lianxirenid=<?php echo $lianxirenid;?>&housename=<?php echo $housename?>&houseprice=<?php echo $houseprice?>">
        <input type="text" id="content" name="content"/>
        <b><input type="submit" value="发送" class="submit"> </b>
        </form> 
      </div>
    </div>
    <div class="chat-smile-layout hide" id="chat_smile">
      <ul>
      </ul>
    </div>
  </div>
</div>
<script src="/ag_bishe/Application/Public/js/kindeditor/kindeditor-min.js" charset="utf-8"></script>
<script src="/ag_bishe/Application/Public/js/kindeditor/lang/zh_CN.js" charset="utf-8"></script>
<script>
  var KE;
  KindEditor.ready(function(K) {
        KE = K.create("textarea[name='g_body']", {
                        items : ['source', '|', 'fullscreen', 'undo', 'redo', 'print', 'cut', 'copy', 'paste',
            'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
            'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
            'superscript', '|', 'selectall', 'clearhtml','quickformat','|',
            'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
            'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', '|', 'image', 'table', 'hr', 'emoticons', 'link', 'unlink', '|', 'about'],
                        cssPath : "/bs/bishe/Application/Public/js/kindeditor/themes/default/default.css",
                        allowImageUpload : false,
                        allowFlashUpload : false,
                        allowMediaUpload : false,
                        allowFileManager : false,
                        syncType:"form",
                        afterCreate : function() {
                            var self = this;
                            self.sync();
                        },
                        afterChange : function() {
                            var self = this;
                            self.sync();
                        },
                        afterBlur : function() {
                        	var box=document.getElementsByTagName("iframe")[0];
							$(box.contentWindow.document.body).scrollTop(0);
                            var self = this;
                            self.sync();
                        }
        });
            KE.appendHtml = function(id,val) {
                this.html(this.html() + val);
                if (this.isCreated) {
                    var cmd = this.cmd;
                    cmd.range.selectNodeContents(cmd.doc.body).collapse(false);
                    cmd.select();
                }
                return this;
            }
    });
</script>
<script type="text/javascript" src="http://localhost/xiangmi/www/wap/js/zepto.min.js"></script> 
<script type="text/javascript" src="http://localhost/xiangmi/www/wap/js/config.js"></script> 
<script type="text/javascript" src="http://localhost/xiangmi/www/wap/js/common.js"></script> 
<script type="text/javascript" src="http://localhost/xiangmi/www/wap/js/simple-plugin.js"></script> 
<script type="text/javascript" src="http://localhost/xiangmi/www/wap/js/js/tmpl/chat_info.js"></script>
</body>
</html>