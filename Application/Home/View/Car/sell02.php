<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>填写爱车信息</title>

<link href="__PUBLIC__/css/car/css/page.css" rel="stylesheet" type="text/css"/>

<link rel="stylesheet" href="__PUBLIC__/css/car/css/default.css" />
 <link rel='stylesheet' href='/graduate/Application/Public/css/sweet-alert.css'>
    <script type='text/javascript' src='/graduate/Application/Public/js/sweet-alert.min.js'></script>

<link rel="stylesheet" type="text/css" href="__PUBLIC__/diyUpload/css/webuploader.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/diyUpload/css/diyUpload.css">
<script src="__PUBLIC__/js/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/diyUpload/js/webuploader.html5only.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/diyUpload/js/diyUpload.js"></script>
</head>
<body>
<!--内容--> 
	<?php include "/Home/View/Car/head.php" ?>
<div class="nav">您当前的位置：<a href="buy">首页</a> <span>></span> 卖车 </div>
<div class="main mt10 clearfix">
	<div class="sellbox">
		<h3>填写爱车信息：</h3>
		<div class="box clearfix">
			<form name="carform" class="carform" method="post" action="__APP__/Home/Car/sellsumbit">
				<table cellspacing="0" cellpadding="0" width="100%"  class="sell_table">
					<tr>
						<th><span class="red">*</span>品牌型号：</th>
						<td colspan="3">
							<select name="p_brand" id="brand" datatype="n" nullmsg="请选择品牌！">
								<?php include "/Home/View/Car/brand.php" ?>
							</select>
							&nbsp;<input type="text" name="p_name" size="20">
						</td>
					</tr>
					<tr>
						<th>车型选择：</th>
						<td><select name="p_model">
								<?php include "/Home/View/Car/p_model.php" ?>
							</select></td>
						<th><span class="red">*</span>预售价格：</th>
						<td><input type="text" name="p_price"  size="5" datatype="s" nullmsg="请填写价格！">
							<span class="gray">(万元)</span></td>
					</tr>
					<tr>
						<th>车体颜色：</th>
						<td width="180"><input type="text" name="p_color"  size="5" datatype="s" nullmsg="请填写颜色！">
								
							</select></td>
						<th width="50">排量：</th>
						<td><select name="p_gas">
								
							<option value=''>请选择排量</option>
							<option value='1.0' >1.0</option>
							<option value='1.4' >1.4</option>
							<option value='1.5' >1.5</option>
							<option value='1.8' >1.8</option>
							<option value='2.0' >2.0</option>
							<option value='2.5' >2.5</option>
							<option value='3.0' >3.0</option>

							
							</select></td>
					</tr>
					<tr>
						<th>变速箱：</th>
						<td><select name="p_transmission">
							<option value=''>请选择变速箱</option>
								<option value='手动' >手动</option>
								<option value='自动' >自动</option>
								<option value='手自一体' >手自一体</option>
							</select></td>
						<th>上牌日期：</th>
						<td><select name="p_year" id="p_year">
								<?php include "/Home/View/Car/p_year.php" ?>
							</select>
							<select name="p_month" id="p_month">
								<?php include "/Home/View/Car/p_month.php" ?>
							</select></td>
					</tr>
					<tr>
						<th>行驶里程：</th>
						<td ><input name="p_kilometre" type="text" id="p_kilometre" size="5" />
							<span class="gray">(万公里)</span></td>
							</td>
						<th>国产进口：</th>
						<td><select name="p_country">
								<option value='国产' >国产</option>
								<option value='进口' >进口</option>
							</select>
						</td>
					</tr>
					<tr>
						<th>图片：</th>
						<td colspan="3">
							<div id="box">
               				 	<div id="test" ></div>
            				</div>
            				<input id="file" name="file" type="hidden"/>
						</td>
					</tr>
					<tr>
						<th>上次验车时间：</th>
						<td>
							<input name="p_exatime" type="text" size="30" class="cal" value=""/>
						</td>
					</tr>
					<tr>
						<th>交强险截止日期：</th>
						<td>
							<input name="p_securedate" type="text" size="30" class="cal" value=""/>
						</td>
					</tr>
					<tr>
						<th>车船使用税有效期：</th>
						<td>
							<input name="p_tax" type="text" size="30" class="cal" value=""/>
						</td>
					</tr>
					<tr>
						<th>车辆出厂日期：</th>
						<td>
							<input name="p_productiontime" type="text" size="30" class="cal" value=""/>
						</td>
					</tr>
					<tr>
						<th>车辆补充描述：</th>
						<td colspan="5"><textarea  name="p_details" rows="2" cols="90" class="textarea01"></textarea></td>
					</tr>
					<tr>
						<th><span class="red">*</span>车主姓名：</th>
						<td colspan="5"><input name="p_username" type="text" size="30" class="inp01" value="" datatype="s" nullmsg="请填写车主姓名！"/></td>
					</tr>
					<tr>
						<th><span class="red">*</span>手机号：</th>
						<td colspan="5"><input name="p_tel" type="text" size="30" class="inp01" value="" datatype="m" nullmsg="请填写手机号！"/></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" value="立刻发布" class="sell_but02">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
<!--版权--> 
		<?php include "/Home/View/Car/foot.php" ?>
</body>

<script>
var file_name = '';
    $('#test').diyUpload({
        url:'__PUBLIC__/function/fileupload.php',
        success:function( data ) {
        	file_name += data._raw+',';
        $("#file").val(file_name);

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
          $("#carform").submit();
        });
    });

</script>
<script type="text/javascript">
function submit_ajax(){
				var name = $("#username").val();
				$.ajax({
					url:"__APP__/Home/Car/sellsumbit",    //请求的url地址
					dataType:"json",   //返回格式为json
					async:true,//请求是否异步，默认为异步，这也是ajax重要特性
					data:{"LoginName":name,'brand':brand,},    //参数值
					type:"POST",   //请求方式
					success:function(res){
						if(res == true) {
							$("#username").trigger("easyinput-ajax", false);
						}else if(res == false){
							$("#username").trigger("easyinput-ajax", true);
						}
					}
				});
			}
</script>
</html>
