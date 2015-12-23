<html xmlns="http://www.w3.org/1999/html">
<head> 
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="__PUBLIC__/img/favicon.ico">
	<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Welcome</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="__PUBLIC__/prettyphoto/css/prettyPhoto.css" type="text/css" media="screen" />
<link rel="stylesheet" href="__PUBLIC__/css/Index/flexslider.css" type="text/css" media="screen" /> <!-- Slider Stylesheet -->
<link rel="stylesheet" href="__PUBLIC__/css/Index/reset.css">
<link rel="stylesheet" href="__PUBLIC__/css/Index/style1.css">
<link href='http://fonts.useso.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
<link href='__PUBLIC__/css/House/houselist1.css' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/House/component.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/House/normalize.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/House/font-awesome-4.2.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/House/demo.css" />
</head>
<style>
    dl{clear:left;border:1px solid black;padding: 10px;}
    dt{text-align: center;}
    #fabu{
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
    .webuploader-container {
	position: relative;
}
.webuploader-element-invisible {
	position: absolute !important;
	clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
    clip: rect(1px,1px,1px,1px);
}
.webuploader-pick {
	position: relative;
	display: inline-block;
	cursor: pointer;
	background: #00b7ee;
	padding: 10px 15px;
	color: #fff;
	text-align: center;
	border-radius: 3px;
	overflow: hidden;
}
.webuploader-pick-hover {
	background: #00a2d4;
}

.webuploader-pick-disable {
	opacity: 0.6;
	pointer-events:none;
}
</style>
<body>
	<!-- Logo Starts Here 
==================================================== -->
<div id="top"> <!-- Top Div Open -->
<div style="float:right;padding:10px;margin:10px;"> <!-- Logo Div -->
	<?php if(($_SESSION['LoginName'])&&($_SESSION['is_login'])){?>
		欢迎您：<?php echo $_SESSION['LoginName'];?>
	<ul>
		<li><a href="__APP__/home/index/loginout">退出</a></li>
		</ul>
	   <?php }else{?>
		<ul>
			<li><a href="__APP__/home/index/login">登录</a></li>
			<li><a href="__APP__/home/index/reg">注册</a></li>
		</ul>
	<?php }?>
	</div> <!-- Closes Logo Div -->
<div id="topband">

	<div id="logo"> <!-- Logo Div -->
			<img src="__PUBLIC__/img/Index/logofooter.png" alt="logo">
	</div> <!-- Closes Logo Div -->
	
</div>

<div id="menuband">

	<ul id="menu1">
			<li><a href="__APP__/Home/House/" class="smoothScroll">首页</a></li> <!-- menu item -->
			
			<li><a href="__APP__/Home/House/house_list?leixing=3" class="smoothScroll">新房</a></li> <!-- menu item -->
			
			<li><a href="__APP__/Home/House/house_list?leixing=2" class="smoothScroll">二手房</a></li> <!-- menu item -->
			
			<li><a href="__APP__/Home/House/house_list?leixing=1" class="smoothScroll">租房</a></li> <!-- menu item -->
			<li><a href="__APP__/Home/House/fabu" class="smoothScroll">发布</a></li> <!-- menu item -->

			<li><a href="__APP__/Home/House/tuan" class="smoothScroll">看房团预约</a></li> <!-- menu item -->

			<li><a href="__APP__/Home/House/hyzx" class="smoothScroll">会员中心</a></li> <!-- menu item -->
	
	</ul>

		<select onchange="MobilescrollToThis(this.value)" name="dropdpown">
				<option selected="selected" value>Menu</option> 			    
			    <option value="#top" >TOP</option> 
			    <option value="#work">WORK</option> 
			    <option value="#services">SERVICES</option> 
			    <option value="#about">ABOUT</option> 
			    <option value="#team">TEAM</option> 
			    <option value="#contactus">CONTACT</option> 
  		</select> 
</div>

<div id="menuband1">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwULLTExMDE2MzcyNDVkZA==" />
</div>
<input type="hidden" id="js_ismonitor400" value="True" />
 <div class="centmain-wraper">
            <div class="centmain-inner">
                
                <!-- 主体内容 -->
                <div class="result-lists">
                    <div class="select-bar clearfix">
                        <ul class="sort-rule fl">
                            <li style="margin-left:550px;font-size:21px;"><span><a href="__APP__/Home/House/fabu">发布房屋信息</a><a href="__APP__/Home/House/newfabu" style="font-size: 18px;margin-right:10px;">发布新楼盘</a></span></li>
                       </ul>
                </div>

<div class="house-main">
<!-- Intro Text -->
<div class="middle-layout" >
  <div class="tabs-panel middle-goods-list tabs-hide" id="fabu">
  <form style=" background-image: url(../../../Public/img/house/back.jpg);"method="POST" id="house_form" action="__APP__/home/house/fabuadd" enctype=”multipart/form-data">
    <?php if ($leixing==3){ ?>
    <div   class="house-item1 clearfix">
    <div class="item-info fl">                    
                <p class="f14 f000 mb_10">
                新楼盘名称：                  <INPUT type="text" name = "housename" id="housename" >
      </p>
      </div>
     </div>
    <div   class="house-item1 clearfix">
    <div class="item-info fl">                    
                <p class="f14 f000 mb_10">
              新楼盘价格（每套）：<INPUT type="text" name = "amountprice" id="amountprice" >万
      </p>
      </div>
     </div>
     <div   class="house-item1 clearfix">
    <div class="item-info fl">                    
                <p class="f14 f000 mb_10">
                新楼房地址：<INPUT type="text" name = "houseaddress" id="houseaddress" >
      </p>
      </div>
     </div>
     <div   class="house-item1 clearfix">
    <div class="item-info fl">                    
                <p class="f14 f000 mb_10">
                新房属性：<INPUT type="text" name = "shi" id="shi" >室<INPUT type="text" name = "ting" id="ting" >厅<INPUT type="text" name = "wei" id="wei" >卫
      </p>
      </div>
     </div>
     <div   class="house-item1 clearfix">
    <div class="item-info fl">                    
                <p class="f14 f000 mb_10">
                新房尺寸：<INPUT type="text" name = "chicun" id="chicun" >平米
      </p>
      </div>
     </div>
     <div   class="house-item1 clearfix">
    <div class="item-info fl">                    
                <p class="f14 f000 mb_10">
上传房屋图片： <ul class="goods-pic-list" nctype="">
          <li class="ncsc-goodspic-upload">
          <div class="ncsc-upload-btn"><a href="javascript:void(0);"><span><input type="file" hidefocus="true" size="1" class="input-file" name="image1" id="image1"></span></a></div>            
          </li>
        </ul>      </p>
      </div>
     </div>
     <div   class="house-item1 clearfix">
    <div class="item-info fl">                    
                <p class="f14 f000 mb_10">
                新楼盘联系人：<INPUT type="text" name="lianxirenname" id="lianxirenname" >
      </p>
      </div>
     </div>
     <div   class="house-item1 clearfix">
    <div class="item-info fl">                    
                <p class="f14 f000 mb_10">
                售楼处联系电话：<INPUT type="text" name = "phone" id="phone" >
      </p>
      </div>
     </div>
      <div   class="house-item1 clearfix">
    <div class="item-info fl">                    
                 <p class="labeltag">
<span class='tag_orange'><INPUT type="submit" value="发布房屋"></span>      </p>
      </div>
     </div>
     <?php }else{?>

      <table>
        <dl style="height:40px;"></dl>
        <dl style="margin-right:960px;">            
        类型：<select  name="leixing" style="width:100px;">
        <option selected="selected" value="1">租房</option>           
        <option selected="selected" value="2">二手房</option> 
              </select> 
        </dl> 
        <dl>
        <dt>上传房屋图片</dt>
        <dd>
            <div id="box">
                <div class="webuploader-container" id="test"><div class="webuploader-pick">点击选择图片</div><div style="position: absolute; top: 0px; left: 150px; width: 120px; height: 40px; overflow: hidden; bottom: auto; right: auto;" id="rt_rt_1a6paj8e8r24o61co11na1j1"><input accept="image/*" multiple="multiple" class="webuploader-element-invisible" name="file" type="file"><label style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255) none repeat scroll 0% 0%;"></label></div></div>
            </div>
            <input id="file" name="file" type="hidden">
        </dd>
    </dl>
 <dl style="margin-right:700px;">            
              <span style="float:left;"> 上传房屋图片：</span>
 <ul class="goods-pic-list" nctype="">
          <li class="ncsc-goodspic-upload">
          <div class="ncsc-upload-btn"><a href="javascript:void(0);"><span><input type="file" hidefocus="true" size="1" class="input-file" name="image1" id="image1"></span></a></div>            
          </li>
        </ul>    
    </dl>
        
        <dl>
        <span class="input input--hoshi" style="margin-left:10px;font-size:20px">
          <input style="text-indent:6em" class="input__field input__field--hoshi" type="text" id="housename" name = "housename"/>
          <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
            <span class="input__label-content input__label-content--hoshi" style="font-size:22px;color:black">房屋名称：</span>
          </label>
        </span>
        </dl>
        
        <dl>
        <span class="input input--hoshi" style="margin-left:20px;font-size:20px">
          <input  style="text-indent:4em" class="input__field input__field--hoshi" type="text" name = "houseprice" id="houseprice" />
          <label class="input__label input__label--hoshi input__label--hoshi-color-2" for="input-5">
            <span class="input__label-content input__label-content--hoshi" style="font-size:22px;color:black">房租：</span>
          </label>
        </span>
        </dl>

        <dl>
        <span class="input input--hoshi" style="margin-left:20px;font-size:20px">
          <input  style="text-indent:7em" class="input__field input__field--hoshi" type="text" name = "amountprice" id="amountprice"/>
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="input-6">
            <span class="input__label-content input__label-content--hoshi" style="font-size:22px;color:black">房屋总价格:</span>
          </label>
        </span>
        </dl>

        <dl>
        <span class="input input--hoshi" style="margin-left:20px;font-size:20px">
          <input style="text-indent:6em" class="input__field input__field--hoshi" type="text" name = "houseaddress" id="houseaddress"/>
          <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
            <span class="input__label-content input__label-content--hoshi" style="font-size:22px;color:black">房屋地址：</span>
          </label>
        </span>
        </dl>
        
        
        <dl>
        
            
            <span class="input input--hoshi" style="margin-left:20px;font-size:20px">
            <input style="text-indent:2em" class="input__field input__field--hoshi" type="text" name = "shi" id="shi"/>
          <label class="input__label input__label--hoshi input__label--hoshi-color-2" for="input-5">
            <span class="input__label-content input__label-content--hoshi" style="font-size:22px;color:black">室</span>
           </span></dl>
         <dl>
          <span class="input input--hoshi" style="margin-left:20px;font-size:20px">
            <input style="text-indent:2em" class="input__field input__field--hoshi" type="text" name = "ting" id="ting"  />
          <label class="input__label input__label--hoshi input__label--hoshi-color-2" for="input-5">
            <span class="input__label-content input__label-content--hoshi" style="font-size:22px;color:black">厅</span>
           </span></dl>
         <dl> 
          <span class="input input--hoshi" style="margin-left:20px;font-size:20px">
            <input  style="text-indent:2em" class="input__field input__field--hoshi" type="text" name = "wei" id="wei" />
          <label class="input__label input__label--hoshi input__label--hoshi-color-2" for="input-5">
            <span class="input__label-content input__label-content--hoshi" style="font-size:22px;color:black">卫</span>
           </span>
            
         </dl>
        <dl>
        <span class="input input--hoshi" style="margin-left:20px;font-size:20px">
          <input style="text-indent:9em" class="input__field input__field--hoshi" type="text" name = "chicun" id="chicun"/>
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="input-6">
            <span class="input__label-content input__label-content--hoshi" style="font-size:22px;color:black">房屋尺寸(平米)：</span>
          </label>
        </span>
        </dl>

   
    
      <dl>
        <span class="input input--hoshi" style="margin-left:20px;font-size:20px">
          <input  style="text-indent:7em" class="input__field input__field--hoshi" type="text" name = "lianxirenname" id="lianxirenname"/>
          <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-6">
            <span class="input__label-content input__label-content--hoshi" style="font-size:22px;color:black"> 联系人名称：</span>
          </label>
        </span>
        </dl>

        <dl>
        <span class="input input--hoshi" style="margin-left:20px;font-size:20px">
          <input  style="text-indent:7em" class="input__field input__field--hoshi" type="text" name = "phone" id="phone"/>
          <label class="input__label input__label--hoshi input__label--hoshi-color-2" for="input-6">
            <span class="input__label-content input__label-content--hoshi" style="font-size:22px;color:black"> 联系人电话：</span>
          </label>
        </span>
        </dl>
      
     
      <dl>             
                
      <INPUT style="width:200px;height:50px" type="submit" value="发布房屋">  
     </dl>
     </table>
     <?php }?>
    </form>
    </div>
</div>

            </div>
        </div>
        <div  id="scrollSid">
	    <a title="返回顶部" id="topBtn" class="topBtn"></a>
    </div>
   <div class="popupmap none" style="width: 665px; height: 404px; background: white; padding-top: 4px;">
        <iframe id="imap" src='/page/v1/common/empty.htm' width="660px" height="400px"
            marginwidth='5' marginheight='0' scrolling='no' frameborder='no'></iframe>
    </div>
    <div class="popupbg">
    </div>
        <script type="text/javascript" src="http://static.centanet.com/resource/modulescript/require.js?v2015112610561"></script>
 <div style="display: none">
 </div>

     <div  id="scrollSid">
	    <a title="返回顶部" id="topBtn" class="topBtn"></a>
    </div>
    <div class="popupmap none" style="width: 665px; height: 404px; background: white; padding-top: 4px;">
        <iframe id="imap" src='/page/v1/common/empty.htm' width="660px" height="400px"
            marginwidth='5' marginheight='0' scrolling='no' frameborder='no'></iframe>
    </div>
    <div class="popupbg">
    </div>
	<!-- JS
================================================== -->
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/publichouse.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.ez-bg-resize.js"></script>
<script type="text/javascript" src="__PUBLIC__/prettyphoto/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/smoothscrolling.js"></script>
<script src="__PUBLIC__/js/jquery.sticky.js" type="text/javascript"></script>
<script src="__PUBLIC__/js/css_browser_selector.js" type="text/javascript"></script> 
<script src="__PUBLIC__/js/formsubmit.js"></script>
<script>
    $('#test').diyUpload({
        url:'__PUBLIC__/function/fileupload.php',
        success:function( data ) {
        $("#file").val(data._raw);

        },
        error:function( err ) {
            alert('上传失败');
        }
    });

    $('#as').diyUpload({
        url:'__PUBLIC__/function/server/fileupload.php',
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
 
<!-- Sticky nav2 initiation 
==================================================== -->
	<script>
		$(document).ready(function(){
			$("#hiddenmenu").sticky({topSpacing:0});
		});
	</script>

<!-- Initiate PrettyPhoto Plugin
==================================================== -->
<script type="text/javascript" charset="utf-8">

		$(document).ready(function(){
			$("a[rel^='prettyPhoto']").prettyPhoto({
				social_tools: false,
				theme: 'light_square'
			});
		});
</script>

	<!-- FlexSlider 
==================================================== -->
  <script defer src="__PUBLIC__/js/jquery.flexslider.js"></script>
  
  <script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        smoothHeight: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>

<!-- Mobile Menu Smooth Scroll Funtion 
==================================================== -->
<script type="text/javascript"> 
    function MobilescrollToThis(target){
          var theArray = target.split('#');
          var desiredElement = jQuery('#' + theArray[1]).offset().top;
          jQuery('html,body').animate({ scrollTop: desiredElement}, 'slow');
        }
    
</script>
  
<!-- End Document
================================================== -->
</div>
</body>
</html>