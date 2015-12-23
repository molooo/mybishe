
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
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/House/base.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/House/nctouch_chat.css">
</head>
<body>
<header id="header">
  <div class="header-wrap">
    <div class="header-l"> <a href="javascript:history.go(-1)"> <i class="back"></i> </a> </div>
    <div class="header-title">
      <h1><a href="__APP__/Home/House/hyzx">消息列表</a>   <a href="__APP__/Home/House/guanli">管理房屋</a>  </h1>
    </div>
    <div class="header-r"><a href="javascript:void(0)" class="msg-log" id="chat_msg_log"><i></i>历史</a></div>
  </div>
</header>
<div class="nctouch-chat-layout">
  <div class="nctouch-chat-con">
  <?php foreach ($house_list as $v){?>
  <div class="margin-heigh1">
    <div class="nctouch-chat-product"> 
    <div class="goods-pic" >    <a href=""><img src="' + goods.pic36 + '" alt=""/></a></div>
    <div class="goods-info" ><div class="goods-name">    <a href=""><?php echo $v['housename']?></a></div>
    <div class="goods-price">￥<?php echo $v['houseprice']?></div>
    <div style="margin-left: 1100px;font-size:15px;"><a href="__APP__/Home/House/edithouse?houseid=<?php echo $v['id'];?>">编辑房屋信息</a>      <a href="__APP__/Home/House/xiajiahouse?houseid=<?php echo $v['id']?>">下架</a></div>
    </div>
    </div>
    </div>
    <?php }?>
    </div>
    </div>
    <div id="chat_msg_html"></div>
    <a href="javascript:void(0);" id="anchor-bottom"></a> </div>
  
</div>
<script type="text/javascript" src="http://localhost/xiangmi/www/wap/js/zepto.min.js"></script> 
<script type="text/javascript" src="http://localhost/xiangmi/www/wap/js/config.js"></script> 
<script type="text/javascript" src="http://localhost/xiangmi/www/wap/js/common.js"></script> 
<script type="text/javascript" src="http://localhost/xiangmi/www/wap/js/simple-plugin.js"></script> 
<script type="text/javascript" src="http://localhost/xiangmi/www/wap/js/js/tmpl/chat_info.js"></script>
</body>
</html>