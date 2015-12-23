<!doctype html>

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
<meta http-equiv="refresh" content="5">
<title>消息详情</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/House/base.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/House/nctouch_chat.css">
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
    <div id="chat_msg_html"></div>
    <a href="javascript:void(0);" id="anchor-bottom"></a> </div>
  <div class="nctouch-chat-bottom">
    <div class="chat-input-layout"> <span class="open-smile"><a href="javascript:void(0)" id="open_smile"></a></span>
      <div class="input-box">
  		<form method="POST" id="house_form" action="__APP__/home/house/kefu?lianxirenid=<?php echo $receivename;?>">
        <input type="text" id="content" name="content"/>
        <input type="submit" value="发送" class="submit"> 
        </form> 
      </div>
    </div>
    <div class="chat-smile-layout hide" id="chat_smile">
      <ul>
      </ul>
    </div>
  </div>
</div>
<script type="text/javascript" src="http://localhost/xiangmi/www/wap/js/zepto.min.js"></script> 
<script type="text/javascript" src="http://localhost/xiangmi/www/wap/js/config.js"></script> 
<script type="text/javascript" src="http://localhost/xiangmi/www/wap/js/common.js"></script> 
<script type="text/javascript" src="http://localhost/xiangmi/www/wap/js/simple-plugin.js"></script> 
<script type="text/javascript" src="http://localhost/xiangmi/www/wap/js/js/tmpl/chat_info.js"></script>
</body>
</html>