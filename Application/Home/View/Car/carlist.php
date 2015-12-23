<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><{$setting.keywords}>-<{$setting.sitename}></title>
		<meta content="<{$setting.keywords}>" name="keywords" />
		<meta content="<{$setting.description}>" name="description" />
		<link href="<{$weburl}>/templates/default/<{$setting.templates}>/css/car.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="<{$weburl}>/templates/default/<{$setting.templates}>/js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="<{$weburl}>/templates/default/<{$setting.templates}>/js/jcarousellite_1.0.1.min.js"></script>
		<script type="text/javascript" src="<{$weburl}>/templates/default/<{$setting.templates}>/js/jquery.easing.1.3.js"></script>
		<script language="JavaScript">
			$(function() {
				//品牌选择
				$("#brand").change(function(){
					$.get("<{$weburl}>/index.php?m=ajax&ajax=1", { 
						bid :  $("#brand").val() 
					}, function (data, textStatus){
						   $("#subbrand").html(data); // 把返回的数据添加到页面上
						}
					);
				});

				$("div.car_tab ul li a").mouseover(function() {
					$(this).addClass("here").parent().siblings().children().removeClass("here");
					var index = $div_li.index(this);
					$("div.cartab_box > div").eq(index).show().siblings().hide();
				});
			})
		</script>
		</head>
	<body>
<!--内容--> 
<{include file="default/`$setting.templates`/head.html"}>
<div class="nav">您当前的位置：<a href="<{$weburl}>/">首页</a> <span>></span> <a href="<{$weburl}>/">买车</a></div>
<div class="main clearfix mt10">
	<div class="main_left">
		<div class="search_box">
			<div class="condition">
				<span class="fr pr10"><a href="<{$weburl}>/index.php?m=search&clear=1" class="unl blue">清空条件</a></span>
				<span class="fl">您已选择：</span>
				<ul class="condition_list fl">
					<{if $smarty.cookies.keywords<>''}><li><a href="<{$weburl}>/index.php?m=search&k=" class="condition"><{$smarty.cookies.keywords}></a></li><{/if}>
					<{if $smarty.cookies.brand<> 0}><li><a href="<{$weburl}>/index.php?m=search&c=b_0" class="condition"><{$cache.brandlist[$smarty.cookies.brand]}></a></li><{/if}>
					<{if $smarty.cookies.subbrand<> 0}><li><a href="<{$weburl}>/index.php?m=search&sb=0" class="condition"><{$cache.subbrandlist[$smarty.cookies.subbrand]}></a></li><{/if}>
					<{if $smarty.cookies.model<> 0}><li><a href="<{$weburl}>/index.php?m=search&c=m_0" class="condition"><{$cache.modellist[$smarty.cookies.model]}></a></li><{/if}>
					<{if $smarty.cookies.price<>0}><li><a href="<{$weburl}>/index.php?m=search&c=p_0" class="condition"><{$arr_price[$smarty.cookies.price]}></a></li><{/if}>
					<{if $smarty.cookies.age<> 0}><li><a href="<{$weburl}>/index.php?m=search&c=a_0" class="condition"><{$arr_age[$smarty.cookies.age]}></a></li><{/if}>
					<{if $smarty.cookies.gas<> 0}><li><a href="<{$weburl}>/index.php?m=search&c=g_0" class="condition"><{$arr_gas[$smarty.cookies.gas]}></a></li><{/if}>
				</ul>
			</div>
			<ul class="search_list">
				<form method="get" action="<{$weburl}>/index.php">
				<li>品 牌： <a href="<{$weburl}>/index.php?m=search&c=b_0" <{if $smarty.cookies.brand==0}>class="here"<{/if}>>全部</a><{foreach from=$arr_brand key=skey item=brandlist}><a href="<{$weburl}>/index.php?m=search&c=b_<{$skey}>" <{if $smarty.cookies.brand==$skey}>class="here"<{/if}>><{$brandlist}></a><{/foreach}>
				<select id="brand" name="c">
					<{$selectbrandsearch}>
				</select>
				<select id="subbrand" name="sb">
					<option value="">请选择车系</option>
				</select>
				<input type="hidden" name="m" value="search">
				<input type="submit" value="搜索" class="cbutton">
				</li>
				</form>
				<li>车 型： <a href="<{$weburl}>/index.php?m=search&c=m_0" <{if $smarty.cookies.model==0}>class="here"<{/if}>>全部</a><{foreach from=$cache.modellist key=skey item=modellist}><a href="<{$weburl}>/index.php?m=search&c=m_<{$skey}>" <{if $smarty.cookies.model==$skey}>class="here"<{/if}>><{$modellist}></a><{/foreach}></li>
				<li>价 格： <a href="<{$weburl}>/index.php?m=search&c=p_0"  <{if $smarty.cookies.price==0}>class="here"<{/if}>>全部</a><{foreach from=$arr_price key=skey item=pricelist}><a href="<{$weburl}>/index.php?m=search&c=p_<{$skey}>" <{if $smarty.cookies.price==$skey}>class="here"<{/if}>><{$pricelist}></a><{/foreach}></li>
				<li>车 龄： <a href="<{$weburl}>/index.php?m=search&c=a_0"  <{if $smarty.cookies.age==0}>class="here"<{/if}>>全部</a><{foreach from=$arr_age key=skey item=agellist}><a href="<{$weburl}>/index.php?m=search&c=a_<{$skey}>" <{if $smarty.cookies.age==$skey}>class="here"<{/if}>><{$agellist}></a><{/foreach}></li>
				<li>排 量： <a href="<{$weburl}>/index.php?m=search&c=g_0"  <{if $smarty.cookies.gas==0}>class="here"<{/if}>>全部</a><{foreach from=$arr_gas key=skey item=gasllist}><a href="<{$weburl}>/index.php?m=search&c=g_<{$skey}>" <{if $smarty.cookies.gas==$skey}>class="here"<{/if}>><{$gasllist}></a><{/foreach}></li>
			</ul>
		</div>
		<div class="search_big_box mt10">
			<div class="orderlist">
				<ul class="fl">
					<li <{if $smarty.cookies.order==1}>class="or04"<{elseif $smarty.cookies.order==2}>class="or03"<{else}>class="or02"<{/if}>><a href="<{$weburl}>/index.php?m=search&order=<{if $smarty.cookies.order==1}>2<{elseif $smarty.cookies.order==2}>1<{else}>2<{/if}>" >时间</a></li>
					<li <{if $smarty.cookies.order==3}>class="or04"<{elseif $smarty.cookies.order==4}>class="or03"<{else}>class="or02"<{/if}>><a href="<{$weburl}>/index.php?m=search&order=<{if $smarty.cookies.order==3}>4<{elseif $smarty.cookies.order==4}>3<{else}>3<{/if}>" >价格</a></li>
					<li <{if $smarty.cookies.order==5}>class="or04"<{elseif $smarty.cookies.order==6}>class="or03"<{else}>class="or02"<{/if}>><a href="<{$weburl}>/index.php?m=search&order=<{if $smarty.cookies.order==5}>6<{elseif $smarty.cookies.order==6}>5<{else}>5<{/if}>" >里程</a></li>
					<li <{if $smarty.cookies.order==7}>class="or04"<{elseif $smarty.cookies.order==8}>class="or03"<{else}>class="or02"<{/if}>><a href="<{$weburl}>/index.php?m=search&order=<{if $smarty.cookies.order==7}>8<{elseif $smarty.cookies.order==8}>7<{else}>7<{/if}>" >车龄</a></li>
				</ul>
				<div class="page_num">
					<span>每页显示：</span>
					<span class="num"><a href="<{$weburl}>/index.php?m=search&pagenum=30" <{if $smarty.cookies.pagenum==30}>class="fb orange01"<{/if}>>30</a></span>
					<span class="num"><a href="<{$weburl}>/index.php?m=search&pagenum=60" <{if $smarty.cookies.pagenum==60}>class="fb orange01"<{/if}>>60</a></span>
					<span class="num"><a href="<{$weburl}>/index.php?m=search&pagenum=90" <{if $smarty.cookies.pagenum==90}>class="fb orange01"<{/if}>>90</a></span>
				</div>
			</div>
			<div class="box">
				<ul class="bigcarlist clearfix">
					<{foreach from=$carslist key=skey item=cars_list}>
					<li <{if ($skey+1)%3<>0}>class="bbg"<{/if}>>
						<a href="<{$cars_list.p_url}>" target="_blank"><{if $cars_list.p_mainpic<>""}><img src="<{$weburl}>/<{$cars_list.p_mainpic}>"/><{else}><img src="<{$weburl}>/static/img/car.jpg"/><{/if}></a>
						<p class="carname"><span class="orange01 fb fr"><{$cars_list.p_price}>万</span><a href="<{$cars_list.p_url}>" target="_blank"><{$cars_list.p_shortname}></a></p>
						<p><{$cars_list.p_gas}>L &nbsp;&nbsp;<{$cars_list.p_transmission}></p>
						<p><{$cars_list.p_year}>年<{$cars_list.p_month}>月上牌&nbsp;&nbsp;<{$cars_list.p_color}></p>
						<p><div class="fr"><{if $cars_list.isshop==1}><span class="check01" title="商家车源"></span><{else}><span class="check02" title="个人车源"></span><{/if}><span class="check03" title="审核通过"></span></div><span class="gray01">发布时间：<{$cars_list.listtime}></span></p>
					</li>
					<{/foreach}>
				</ul>
				<div class="page_list"><{$button_basic}></div>
			</div>
		</div>
	</div>
	<div class="main_right">
		<div class="tool_box">
			<ul class="clearfix">
				<li class="bg01"><a href="<{$weburl}>/index.php?m=sellinfo">卖车</a></li>
				<li><a href="<{$weburl}>/index.php?m=buycar">买车</a></li>
			</ul>
		</div>
		<div class="commonbox02 mt15">
			<h3>热门车源排行</h3>
			<div class="box">
				<div class="hotcarlist">
					<{foreach from=$cache.hotcarlist key=skey item=hotcarlist}>
					<p class="clearfix"><span class="orange01 fb fr"><{$hotcarlist.p_price}>万</span><span <{if $skey<3}>class="num01"<{else}>class="num02"<{/if}>><{$skey+1}></span><a href="<{$hotcarlist.p_url}>" target="_blank" class="fl pl10"><{$hotcarlist.p_allname}></a></p>
					<{/foreach}>
				</div>
			</div>
		</div>
		<div class="commonbox02 mt15">
			<h3>二手车行情</h3>
			<div class="box">
				<ul class="newslist">
					<{foreach from=$comnewslist item=newslist}>
					<li><a href="<{$newslist.n_url}>" target="_blank"><{$newslist.shorttitle2}></a></li>
					<{/foreach}>
				</ul>
			</div>
		</div>
	</div>
</div>
<{include file="default/`$setting.templates`/foot.html" }>
</body>
</html>