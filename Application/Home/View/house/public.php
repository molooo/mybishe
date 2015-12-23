<html>
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
<link rel="stylesheet" href="__PUBLIC__/css/Pet/style.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/diyUpload/css/webuploader.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/diyUpload/css/diyUpload.css">
<script src="__PUBLIC__/js/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/diyUpload/js/webuploader.html5only.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/diyUpload/js/diyUpload.js"></script>
</head>
<style>
    dl{float:left;padding: 10px;margin-left:50PX}
    dt{float:left;width:150px;text-align: center;}
    #illness{
        font-size: 20px;
        font-style: normal;
        color: black;
    }
    .submit{	
    	opacity: 0;
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
</style>
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
<div id="illness" style="margin-top: 50px;">
    <span style="margin-left:400px;font-size: 20px;font-style:normal;color: orange;"><a href="__APP__/Home/House/fabu">发布房屋信息</a><a href="__APP__/Home/House/newfabu" style="font-size: 18px;margin-right:10px;">发布新楼盘</a></span>
    <form id="illness_form" method="post" action="__APP__/home/pet/illness_save">
    <?php if ($leixing==3){ ?>
    <dl style="height:40px;"></dl>
    
     <dl>
        <span class="input input--hoshi" style="margin-left:10px;font-size:20px">
          <input style="text-indent:6em" class="input__field input__field--hoshi" type="text" id="housename" name = "housename"/>
          <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
            <span class="input__label-content input__label-content--hoshi" style="font-size:22px;color:black">新楼盘名称：</span>
          </label>
        </span>
        </dl>
        
        <dl>
        <span class="input input--hoshi" style="margin-left:20px;font-size:20px">
          <input  style="text-indent:4em" class="input__field input__field--hoshi" type="text" name = "houseprice" id="houseprice" />
          <label class="input__label input__label--hoshi input__label--hoshi-color-2" for="input-5">
            <span class="input__label-content input__label-content--hoshi" style="font-size:22px;color:black">均价：</span>
          </label>
        </span>
        </dl>

        <dl>
        <span class="input input--hoshi" style="margin-left:20px;font-size:20px">
          <input  style="text-indent:7em" class="input__field input__field--hoshi" type="text" name = "amountprice" id="amountprice"/>
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="input-6">
            <span class="input__label-content input__label-content--hoshi" style="font-size:22px;color:black">新楼盘价格:</span>
          </label>
        </span>
        </dl>

        <dl>
        <span class="input input--hoshi" style="margin-left:20px;font-size:20px">
          <input style="text-indent:6em" class="input__field input__field--hoshi" type="text" name = "houseaddress" id="houseaddress"/>
          <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
            <span class="input__label-content input__label-content--hoshi" style="font-size:22px;color:black">楼房地址：</span>
          </label>
        </span>
        </dl>
        
        
        <dl>
        
            
            <span class="input input--hoshi" style="margin-left:20px;font-size:20px">
            <input style="text-indent:2em" class="input__field input__field--hoshi" type="text" name = "shi" id="shi"/>
          <label class="input__label input__label--hoshi input__label--hoshi-color-2" for="input-5">
            <span class="input__label-content input__label-content--hoshi" style="font-size:22px;color:black">室</span>
           </label>
            </span></dl>
         <dl>
          <span class="input input--hoshi" style="margin-left:20px;font-size:20px">
            <input style="text-indent:2em" class="input__field input__field--hoshi" type="text" name = "ting" id="ting"  />
          <label class="input__label input__label--hoshi input__label--hoshi-color-2" for="input-5">
            <span class="input__label-content input__label-content--hoshi" style="font-size:22px;color:black">厅</span>
              </label>
           </span></dl>
         <dl> 
          <span class="input input--hoshi" style="margin-left:20px;font-size:20px">
            <input  style="text-indent:2em" class="input__field input__field--hoshi" type="text" name = "wei" id="wei" />
          <label class="input__label input__label--hoshi input__label--hoshi-color-2" for="input-5">
            <span class="input__label-content input__label-content--hoshi" style="font-size:22px;color:black">卫</span>
          </label>
          </span>
            
         </dl>
        <dl>
        <span class="input input--hoshi" style="margin-left:20px;font-size:20px">
          <input style="text-indent:9em" class="input__field input__field--hoshi" type="text" name = "chicun" id="chicun"/>
          <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="input-6">
            <span class="input__label-content input__label-content--hoshi" style="font-size:22px;color:black">新房尺寸(平米)：</span>
          </label>
        </span>
        </dl>

   
    
      <dl>
        <span class="input input--hoshi" style="margin-left:20px;font-size:20px">
          <input  style="text-indent:7em" class="input__field input__field--hoshi" type="text" name = "lianxirenname" id="lianxirenname"/>
          <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-6">
            <span class="input__label-content input__label-content--hoshi" style="font-size:22px;color:black"> 新楼盘联系人：</span>
          </label>
        </span>
        </dl>

        <dl>
        <span class="input input--hoshi" style="margin-left:20px;font-size:20px">
          <input  style="text-indent:7em" class="input__field input__field--hoshi" type="text" name = "phone" id="phone"/>
          <label class="input__label input__label--hoshi input__label--hoshi-color-2" for="input-6">
            <span class="input__label-content input__label-content--hoshi" style="font-size:22px;color:black"> 售楼处联系电话：</span>
          </label>
        </span>
        </dl>
         <dl  style="clear:left;margin-top:30px">
        <dt>上传房屋图片</dt>
        <dd>
            <div id="box">
                <div id="test" ></div>
            </div>
            <input id="file" name="file" type="hidden"/>
        </dd>
    </dl>
      <dl  style="clear:left;margin-left:400px">                            
      <INPUT style="width:200px;height:50px" type="submit" value="发布房屋">  
     </dl>
    <?php }else{?>
     <dl style="height:40px;"></dl>
        <dl style="margin-right:960px;">            
        类型：<select  name="leixing" style="width:100px;">
        <option selected="selected" value="1">租房</option>           
        <option selected="selected" value="2">二手房</option> 
              </select> 
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
              </label>
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
        <br/>
         <br/>
        
       <dl style="clear:left;margin-top:30px">
        <dt>上传房屋图片</dt>
        <dt>
            <div id="box">
                <div id="test" ></div>
            </div>
            <input id="file" name="file" type="hidden"/>
        </dt>
    </dl>
      <dl style="margin-left:400px;margin-top:30px">                            
      <INPUT style="width:200px;height:50px" type="submit" value="发布房屋">  
     </dl>
    <?php }?>
        </form>
</div>
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
    $(function(){
        $(".submit").click(function(){
          $("#illness_form").submit();
        });
    });
</script>
</html>