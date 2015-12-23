<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">var QosSS=new Object();QosSS.t=new Array([0,0,0,0,0,0]);QosSS.t[0]=(new Date()).getTime();QosSS.t[5]=QosSS.t[4]=QosSS.t[3]=QosSS.t[2]=QosSS.t[1]=QosSS.t[0];</script>
<link type="text/css" rel="stylesheet" media="screen" href="http://mat1.gtimg.com/house/css/houseapp/kanfang/main.css" />
</head>
<body>
<div id="mainPageContent" class="page">
<!--公共头部-->  
<style>
.miniNavWrap{height:32px;background:url(http://mat1.gtimg.com/house/datalib/kft/miniNavWrap.png) center top repeat-x;}
.miniNav{height:32px;line-height:30px;color:#222;}
.miniNav a{color:#5B5B5B;}
.miniNav a:hover{color:#2D374B;text-decoration:none;}
.miniNav .login{_padding-top:4px;}
.miniNav .loginBtn{display:inline-block;width:59px;height:20px;color:#6994C1;line-height:20px;text-align:center;}
.miniNav .loginBtn:hover{background-position:-60px 0;color:#FFF;}
.miniNav .msg a{color:#EE5F00;}

.header{height:90px;}
.header .telBox{width:222px;margin-top:20px;padding-left:55px;background-position:-690px 5px;overflow:hidden;}
.header .telBox h2{font:bold 22px/30px "微软雅黑","黑体";color:#505050;}
.header .telBox p{font:bold 18px/22px "微软雅黑","黑体";color:#ee5f00;}
.header .telBox p span{color:#888;padding:0 5px;}
.header .selCity{width:53px;height:17px;margin:34px 0 0 13px;line-height:14px;padding-top:4px;border:1px solid #C2C2C2;text-align:center;position:relative;z-index:99;}
.header .selCity em{display:inline-block;width:5px;height:3px;margin-left:3px;font-size:0;line-height:0;background-position:-560px -140px;vertical-align:middle;}
.header .current .cityList{display:block;}
.header .cityList{display:none;padding:18px 0 18px 10px;line-height:18px;text-align:left;border:1px solid #C2C2C2;background:#FFF;position:absolute;left:-1px;top:21px;}
.header .cityList .btnClose{display:inline-block;width:11px;height:12px;background-position:-600px -50px;position:absolute;right:9px;top:7px;cursor:pointer;}
.header .cityList a{display:inline-block;padding:0 3px;height:18px;line-height:18px;margin:0 2px;}
.header .cityList a:hover{background:#5673CE;color:#FFF;text-decoration:none;}
.header .cityList .item{padding:5px 0;}
.header .cityList .item span{color:#8E9FE1;font-weight:bold;padding-left:10px;}

.mainNavWrap{height:40px;background:url(http://mat1.gtimg.com/house/datalib/kft/mainNavWrap.png) center top repeat-x;}
.mainNav{height:40px;}
.mainNav li{float:left;height:40px;}
.mainNav li a{display:inline-block;height:40px;line-height:40px;padding:0 26px;color:#FFF;font-size:14px;}
.mainNav li a:hover{text-decoration:none;}
.mainNav .current,
.mainNav li a:hover{padding:0 25px;border-left:1px solid #3E5DC1;border-right:1px solid #4C69C7;background:url(http://mat1.gtimg.com/house/datalib/kft/icons.png) 0 -70px no-repeat;overflow:hidden;color:#FFF;}
</style>

    <!-- ad s -->
        <!-- ads head start-->
    	<!-- ads head end -->
	<div class="layout headAd">
                       <div style="margin:10px auto; width:1000px;"><script src="http://lb.l.qq.com/lview?loc=_adb_270_10115926&callback=crystal2.addStaticSlot" charset="utf-8"></script></div>
    				</div>
    <!-- ad e -->
     <!-- mainNavWrap s -->
    <!-- mainNavWrap e -->
<script>

var g_city_info = {"FId":"25","FProvinceId":"18","FName":"\u5357\u5b81","FAIOCityName":null,"FFirstLetter":"N","FSubName":"nn","FEnName":"nan ning","FIsNewYouth":"0","FQQGroups":null,"FStatus":"1","FType":"2","FLatitude":"22.819051","FLongitude":"108.321052","FZoomLevel":"18","FOpenMap":"1","FMapInfo":"a:2:{s:3:\"day\";a:4:{s:2:\"sp\";s:4:\"7.00\";s:2:\"sd\";i:2900;s:4:\"unit\";s:4:\"1.60\";s:2:\"sc\";s:4:\"2.00\";}s:5:\"night\";a:4:{s:2:\"sp\";s:4:\"7.00\";s:2:\"sd\";i:2900;s:4:\"unit\";s:4:\"1.60\";s:2:\"sc\";s:4:\"2.00\";}}","FOpenKft":"1","FIsOpenConsulHotline":"1","FKftLatitude":"22.8178","FKftLongitude":"108.3661","FKftZoomLevel":"11","FKFTHotLine":"400-700-1234<span>\u05ea<\/span>619565","FKFTOldUrl":"","FOpenSite":"1","FSiteName":"nn_house","FInfoDomain":"nn.house.qq.com","FTwoCodeDesc":null,"FTwoCodeUrl":"http:\/\/p.qpic.cn\/house\/0\/d44cd71fc4017d11aa5c18b185ee4fdc.jpg\/0","FPgvType":"1","FIs2013NewPage":"1","FIs2014NewPage":"1","FIsOpenSubway":"0","FSearchPageAdsHouseId":"0","FShareCMSCityIds":"","FOpenNews":"0","FBaiduCityCode":"261","FBaiduCityMD5":"40d53aa0478590088cb9a8f2fc70e139","FIsSubway":"0","FIsPosition":"0","FMapRange":"1"};
var house_front_domain = "http://db.house.qq.com";
function getByClass(oParent, sClass) {
    var aTmp = [],
    aEle = oParent.getElementsByTagName('*');
    for (var i = 0, l = aEle.length; i < l; i++) {
        if (aEle[i].className.indexOf(sClass) != -1) {
            aTmp.push(aEle[i]);
        }
    }
    return aTmp;
}
/* selCity */
var cityBtn = document.getElementById("selCity");
var btnClose = getByClass(cityBtn, "btnClose")[0];

function isMouseLeave(evt, element) {  
    if (evt.type != 'mouseout' && evt.type != 'mouseover') return false;   
    var target = evt.relatedTarget ? evt.relatedTarget : evt.toElement;  
    while (target && target != element) {  
        target = target.parentNode;  
    }  
    return (target != element);  
}

btnClose.onclick = function(){
    cityBtn.className = "selCity fl"
       }
cityBtn.onmouseover = function(){
    this.className = "selCity current fl";
}
cityBtn.onmouseout = function(e){
        e = arguments[0] || window.event;
        if (isMouseLeave(e, this)) {  
    this.className = "selCity fl";
    }
}
document.getElementById("cityList").style.width = "610px";
document.getElementById("selCity").style.width = "53px";
</script>    
    <!-- mainWrap s -->
    <div class="mainWrap layout cf">
        <!-- main s -->
        <div class="main">
            <span inSrc="5,9,7" diSrc="5,9,7"><div class="hotBox mb15 cf"><p class="hide"><b style="color:red;">每行最多共计输入21个汉字或者字符,该区域图片尺寸为width:452px, height:258px</b></p><!--HTML结构开始--><div id="fsE2" class="fs_E2"><div class="fPs"><div class="fix"><div id="E2pic1" class="fPic"><div id="focus1" class="fcon"><div class="txtBox fl"><h2 class="hd">
            <a href="http://db.house.qq.com/nn_168542/" target="_blank">社区厨王争霸赛</a></h2><div class="bd"><div>第一名：现金3000元+800元家电礼包<span class="price"></span></div><div>第二名：现金2000元+500元家电礼包</div><div></div><div><span>第三名：现金1000元+300元家电礼包</span></div><ul class="txtList"><li><em>·</em><a href="http://db.house.qq.com/nn_168542/" target="_blank">咨询热线：0771-5585734</a></li><li><em>·</em><a href="http://db.house.qq.com/nn_168542/" target="_blank">恒大城超E钜惠3千享5万</a></li></ul></div><div id="focus1_oper" class="ft"><p class="btn icons fl signUpHouse">立即报名</p><div class="hide"><p>埋入楼盘id:</p><div style="display:inline;" id="focus_1_house">168542</div><p>&nbsp;</p></div><p class="numBox fl">已报名<span class="num"></span>人</p></div></div><div class="picBox fr"><a 
href="http://db.house.qq.com/nn_168542/" target="_blank"><img title="社区厨王争霸赛" alt="社区厨王争霸赛" 
src="http://img1.gtimg.com/nn_house/pics/hv1/28/61/131/8533858.jpg" /></a></div></div><div 
id="focus2" class="fcon"><div class="txtBox fl"><h2 class="hd"><a 

href="http://db.house.qq.com/nn_156916/" target="_blank">广源鲁班壹号看房团</a></h2><div class="bd"><div>最低总价：<span class="price">35万元/套</span></div><div>38-50平米跃层公寓、96-120平米阔绰四房在售</div><div>报名热线：5585734</div><div><span>所属区域：</span>西乡塘区</div><ul class="txtList"><li><em>·</em><a href="http://db.house.qq.com/nn_156916/" target="_blank">参团享超低总价35万元/套</a></li><li><em>·</em><a href="http://db.house.qq.com/nn_156916/" target="_blank">160%超高得房率，50平米做三房</a></li></ul></div><div id="focus2_oper" class="ft"><p class="btn icons fl signUpHouse">立即报名</p><div class="hide"><p>埋入楼盘id:</p><div style="display:inline;" id="focus_2_house">156916</div><p>&nbsp;</p></div><p class="numBox fl">已报名<span class="num"></span>人</p></div></div><div class="picBox fr"><a href="http://db.house.qq.com/nn_156916/" target="_blank"><img title="广源鲁班壹号看房团" alt="广源鲁班壹号看房团" src="http://img1.gtimg.com/nn_house/pics/hv1/243/22/123/8003928.jpg" /></a></div></div><div id="focus3" class="fcon"><div class="txtBox fl"><h2 class="hd"><a 

href="http://db.house.qq.com/nn_163277/" target="_blank">大唐世家</a></h2><div class="bd"><div>价格：<span class="price">最低5000元/平米</span></div><div>61-107平米130%成长户型</div><div>首款1万分期2年0利息</div><div><span></span></div><ul class="txtList"><li><em>·</em><a href="http://db.house.qq.com/nn_163277/" target="_blank">9.10-13购房享99折
</a></li><li><em>·</em><a href="http://db.house.qq.com/nn_163277/" target="_blank">咨询热线：400-700-1234 转 709292</a></li></ul></div><div id="focus3_oper" class="ft"><p class="btn icons fl signUpHouse">立即报名</p><div class="hide"><p>埋入楼盘id:</p><div style="display:inline;" id="focus_3_house">163277</div><p>&nbsp;</p></div><p class="numBox fl">已报名<span class="num"></span>人</p></div></div><div class="picBox fr"><a 
href="http://db.house.qq.com/nn_163277/" target="_blank"><img title="大唐世家" alt="大唐世家" src="http://img1.gtimg.com/nn_house/pics/hv1/249/65/131/8535099.jpg" /></a></div></div><div id="focus4" class="fcon"><div class="txtBox fl"><h2 class="hd"><a 

href="http://db.house.qq.com/nn_124513/" target="_blank">盛科城看房团</a></h2><div class="bd"><div>均价：<span class="price">7500元/㎡</span></div><div>97.89-98.27㎡精品房源热销中</div><div>电话：400-700-1234 转 643505</div><div><span>所属区域：</span>五象新区</div><ul class="txtList"><li><em>·</em><a href="http://db.house.qq.com/nn_124513/" target="_blank">周末推10套限量钜惠房</a></li><li><em>·</em><a href="http://db.house.qq.com/nn_124513/" target="_blank"></a></li></ul></div><div id="focus4_oper" class="ft"><p class="btn icons fl signUpHouse">立即报名</p><div class="hide"><p>埋入楼盘id:</p><div style="display:inline;" id="focus_4_house">124513</div><p>&nbsp;</p></div><p class="numBox fl">已报名<span class="num"></span>人</p></div></div><div class="picBox fr"><a 
href="http://db.house.qq.com/nn_124513/" target="_blank"><img title="盛科城看房团" alt="盛科城看房团" src="http://img1.gtimg.com/nn_house/pics/hv1/173/32/113/7356158.jpg" /></a></div></div></div></div></div><div id="E2fBt" class="E2fBt"><a href="javascript:void(0)" target="_self">1</a><a href="javascript:void(0)" target="_self">2</a><a href="javascript:void(0)" target="_self">3</a><a href="javascript:void(0)" target="_self">4</a></div></div><!--HTML结构结束--></div>


<!--[if !IE]>|xGv00|8fcc4b585c385e8fea7a9835ea233b94<![endif]--></span>

            <!-- ad s -->
            <div class="mainAd mb15">
                
            </div>
            <!-- ad e -->

            <div class="linkBox mb15 cf">
                <ul class="linkList cf">
                    <li class="item1 icons fl"><h2 class="fl">参团看房</h2><span class="fl">总有一条线路适合你！</span></li>
                    <li class="item2 icons fl"><h2 class="fl">自主组团</h2><span class="fl">满100人就有机会成团！</span></li>
                    <li class="item3 icons fl"><h2 class="fl">独家优惠</h2><span class="fl">参团看房享优惠！</span></li>
                </ul>
            </div>
			<!-- 参团看房 -->
            
            <input type="hidden" id="KFTRouteIds" value="" />
            <div class="mainAd mb15">
            
            </div>
            <script type="text/javascript">QosSS.t[1]= (new Date()).getTime();</script>
            <div class="mainSo mb15">
                <div class="tit icons"><h2>自主组团</h2></div>
                <div class="con">
                    
                    <form action="" method="get" class="dis" id="smartbox_form_1" >
                        <div class="search">
                            <em class="icons arr"></em>
                                <input type="hidden" name="search_city" id="search_city" value="25" />
                                <!--select下拉框-->
                                <div class="dropDownList">
                                    <div id="dropDownList1" class="dropdown">
                                        <select id="search_region_subway" name="search_region_subway">
                                            <option value="" selected="selected">选择区域</option>
                                                <option value="1_219">青秀区</option>    <option value="1_220">兴宁区</option>    <option value="1_221">西乡塘区</option>    <option value="1_223">江南区</option>    <option value="1_222">良庆区</option>    <option value="1_224">邕宁区</option>    <option value="1_2905">武鸣区</option>    <option value="1_225">其他区县</option>
                                        </select>
                                        <span id="search_region_subway_show">选择区域</span>
                                        <ul></ul>
                                    </div>
                                    <div id="dropDownList2" class="dropdown">
                                        <select id="search_price" name="search_price">
                                            <option value="" selected="selected">选择价格</option>
                                                <option value="0_4000">4000以下</option>    <option value="4001_5000">4000-5000</option>    <option value="5001_7000">5000-7000</option>    <option value="7001_9000">7000-9000</option>    <option value="9001_12000">9000-12000</option>    <option value="12001_999999">12000以上</option>
                                        </select>
                                        <span id="search_price_show">选择价格</span>
                                        <ul></ul>
                                    </div>
                                    <div id="dropDownList3" class="dropdown">
                                        <select id="search_housetype" name="search_housetype">
                                            <option value="" selected="selected">选择物业类型</option>
                                                <option value="62">住宅</option>    <option value="60">别墅</option>    <option value="64">建筑综合体</option>    <option value="44">写字楼</option>    <option value="45">商铺</option>    <option value="31">经济适用房</option>    <option value="65">自住型商品房</option>    <option value="61">限价房</option>
                                        </select>
                                        <span id="search_housetype_show">选择物业类型</span>
                                        <ul></ul>
                                    </div>
                                </div>
                                <!--/select下拉框-->
                                <div class="input_box">
                                <!-- smartbox 样式 -->
                                <style>
                                #smartbox_result {
                                    background: none repeat scroll 0 0 #FFFFFF;
                                    border-color: #8FA7C7;
                                    border-style: solid;
                                    border-width: 1px;
                                    display: none;
                                    font: 12px/1.75 "宋体",arial,sans-serif;
                                    left: 0;
                                    position: absolute;
                                    text-align: left;
                                    top: 30px;
                                    width: 204px;
                                    z-index: 1000;
                                }
                                #smartbox_list li {
                                    padding-left: 5px;
                                }
                                #smartbox_list .focus {
                                    background: none repeat scroll 0 0 #DEEFFF;
                                    cursor: pointer;
                                    display: block;
                                    text-decoration: none;
                                }
                                </style>
                                <input name="search_keyword" id="search_keyword" type="text" class="input01" autocomplete="off" maxlength="14" value="" />
                                <div id="smartbox_result" style="display: none;"><ul id="smartbox_list"></ul></div>
                                </div>
                                <input name="Submit" id="smartbox_search_1" type="submit" class="input02" value="" />
                        </div>
    
                        <!-- resEmpty s -->
                        <div id="search_no_result" class="resBox resEmpty hide">
                            <div class="emptyTxt">没有找到相关结果！</div>
                            <div class="f14">你可以通过“<a href="http://db.house.qq.com/nn/" target="_blank">高级搜索</a>”查找或者重新查找 ！ <a href="javascript:void(0);" id="search_return_from_no_result">返回到备选楼盘</a></div>
                        </div>
                        <!-- resEmpty e -->
    
                        <div id="resBox" class="resBox tabList" diSrc="5,9,9">
                            <div class="resHd">
                                <div class="hdList cf"><span id="search_title" class="fl f14">备选楼盘</span><span class="fr icons tabBtn iconDt" id="search_btn_map_module">地图模式</span></div>
                                <div class="hdMap cf f14"><span class="fl"><span id="search_tips_on_map">搜索到的楼盘</span><em class="num bold" id="search_house_num_on_map">0</em>个<a class="f12 btn" href="javascript:void(0);" id="search_return_to_init_search_result">&lt;&lt;返回到备选楼盘</a></span><span class="fr icons tabBtn iconList f12">列表模式</span></div>
                            </div>
                            <div class="resBd">
    
                                <div id="resList" class="resList">

									<!--search recommend house s-->
                                    <p class="hide"><b style="color:red;">每行最多共计输入11个汉字或者字符</b></p><ul id="search_result_list" class="cf"><li class="item"><div class="picBox"><em class="icons iconSc hide"></em><a href="http://db.house.qq.com/nn_100523/" target="_blank"><img title="瀚林新城" alt="瀚林新城" src="http://mat1.gtimg.com/nn_house/images/kanfangtuan/beixuanloupan/20121130-1.jpg" width="155" height="103" /></a><div class="picShade"><div>优惠：<span class="price">享受8折优惠</span></div></div></div><div class="txtBox"><div><em>[</em><a href="http://db.house.qq.com/index.php?mod=search&amp;city=nn&amp;CA=25:221" target="_blank">西乡塘</a><em>]</em><a href="http://db.house.qq.com/nn_100523/" target="_blank">瀚林新城</a></div><div><span class="ca">均价：</span><span class="num">6300元/平米</span></div><div><span class="ca">特色：</span>品牌地产、公园地产</div></div><div class="btnBox"><div class="hide"><p>埋入楼盘id:</p><div style="display:inline;" id="recommend_house_1" class="recommend_house">100523</div><p></p></div><p class="btn icons scBtn favHouse">收藏</p><p style="display:none;" class="btn scBtn over ">已收藏</p><p class="btn icons ztBtn signUpHouse">求组团</p><p style="display:none;" class="btn ztBtn over">已参与</p></div></li><li class="item"><div class="picBox"><em class="icons iconSc hide"></em><a href="http://db.house.qq.com/nn_95264/" target="_blank"><img title="隆源雅居" alt="隆源雅居" src="http://mat1.gtimg.com/nn_house/images/kanfangtuan/beixuanloupan/20121130-2.jpg" width="155" height="103" /></a><div class="picShade"><div>优惠：<span class="price">购房即享3万优惠</span></div></div></div><div class="txtBox"><div><em>[</em><a href="http://db.house.qq.com/index.php?mod=search&amp;city=nn&amp;CA=25:221" target="_blank">西乡塘</a><em>]</em><a href="http://db.house.qq.com/nn_95264/" target="_blank">隆源雅居</a></div><div><span class="ca">均价：</span><span class="num">6200元/平米</span></div><div><span class="ca">特色：</span>复合地产、居所</div></div><div class="btnBox"><div class="hide"><p>埋入楼盘id:</p><div style="display:inline;" id="recommend_house_2" class="recommend_house">95264</div><p></p></div><p class="btn icons scBtn favHouse">收藏</p><p style="display:none;" class="btn scBtn over">已收藏</p><p class="btn icons ztBtn signUpHouse">求组团</p><p style="display:none;" class="btn ztBtn over">已参与</p></div></li><li class="item"><div class="picBox"><em class="icons iconSc hide"></em><a href="http://db.house.qq.com/nn_39719/" target="_blank"><img title="龙胤当归" alt="龙胤当归" src="http://mat1.gtimg.com/nn_house/images/kanfangtuan/beixuanloupan/20121130-3.jpg" width="155" height="103" /></a><div class="picShade"><div>优惠：<span class="price">暂无资料</span></div></div></div><div class="txtBox"><div><em>[</em><a href="http://db.house.qq.com/index.php?mod=search&amp;city=nn&amp;CA=25:219" target="_blank">青秀</a><em>]</em><a href="http://db.house.qq.com/nn_39719/" target="_blank">龙胤当归</a></div><div><span class="ca">最低价：</span><span class="num">5488元/平米</span></div><div><span class="ca">特色：</span>低密居所、水景地产</div></div><div class="btnBox"><div class="hide"><p>埋入楼盘id:</p><div style="display:inline;" id="recommend_house_3" class="recommend_house">39719</div><p></p></div><p class="btn icons scBtn favHouse">收藏</p><p style="display:none;" class="btn scBtn over">已收藏</p><p class="btn icons ztBtn signUpHouse">求组团</p><p style="display:none;" class="btn ztBtn over">已参与</p></div></li><li class="item"><div class="picBox"><em class="icons iconSc hide"></em><a href="http://db.house.qq.com/nn_74874/" target="_blank"><img title="凤岭名筑" alt="凤岭名筑" src="http://mat1.gtimg.com/nn_house/images/kanfangtuan/beixuanloupan/20121130-4.jpg" width="155" height="103" /></a><div class="picShade"><div>优惠：<span class="price">暂无资料</span></div></div></div><div class="txtBox"><div><em>[</em><a href="http://db.house.qqhttp//db.house.qq.com/index.php?mod=search&amp;city=nn&amp;CA=25:219" target="_blank">青秀</a><em>]</em><a href="http://db.house.qq.com/nn_74874/" target="_blank">凤岭名筑</a></div><div><span class="ca">均价：</span><span class="num">7200元/平米</span></div><div><span class="ca">特色：</span>宜居生态地产</div></div><div class="btnBox"><div class="hide"><p>埋入楼盘id:</p><div style="display:inline;" id="recommend_house_4" class="recommend_house">74874</div><p></p></div><p class="btn icons scBtn favHouse">收藏</p><p style="display:none;" class="btn scBtn over">已收藏</p><p class="btn icons ztBtn signUpHouse">求组团</p><p style="display:none;" class="btn ztBtn over">已参与</p></div></li><li class="item"><div class="picBox"><em class="icons iconSc hide"></em><a href="http://db.house.qq.com/nn_39699/" target="_blank"><img title="莱茵湖畔" alt="莱茵湖畔" src="http://mat1.gtimg.com/nn_house/images/kanfangtuan/beixuanloupan/20121130-5.jpg" width="155" height="103" /></a><div class="picShade"><div>优惠：<span class="price">暂无资料</span></div></div></div><div class="txtBox"><div><em>[</em><a href="http://db.house.qq.com/index.php?mod=search&amp;city=nn&amp;CA=25:219" target="_blank">青秀</a><em>]</em><a href="http://db.house.qq.com/nn_39699/" target="_blank">莱茵湖畔</a></div><div><span class="ca">最低价：</span><span class="num">6999元/平米</span></div><div><span class="ca">特色：</span>水景地产</div></div><div class="btnBox"><div class="hide"><p>埋入楼盘id:</p><div style="display:inline;" id="recommend_house_5" class="recommend_house">39699</div><p></p></div><p class="btn icons scBtn favHouse">收藏</p><p style="display:none;" class="btn scBtn over ">已收藏</p><p class="btn icons ztBtn signUpHouse">求组团</p><p style="display:none;" class="btn ztBtn over">已参与</p></div></li><li class="item"><div class="picBox"><em class="icons iconSc hide"></em><a href="http://db.house.qq.com/nn_35908/" target="_blank"><img title="金源城" alt="金源城" src="http://mat1.gtimg.com/nn_house/images/kanfangtuan/beixuanloupan/20121130-6.jpg" width="155" height="103" /></a><div class="picShade"><div>优惠：<span class="price">暂无资料</span></div></div></div><div class="txtBox"><div><em>[</em><a href="http://db.house.qq.com/index.php?mod=search&amp;city=nn&amp;CA=25:220" target="_blank">兴宁</a><em>]</em><a href="http://db.house.qq.com/nn_35908/" target="_blank">金源城</a></div><div><span class="ca">均价：</span><span class="num">6200元/平米</span></div><div><span class="ca">特色：</span>品牌地产、地铁沿线</div></div><div class="btnBox"><div class="hide"><p>埋入楼盘id:</p><div style="display:inline;" id="recommend_house_6" class="recommend_house">35908</div><p></p></div><p class="btn icons scBtn favHouse">收藏</p><p style="display:none;" class="btn scBtn over ">已收藏</p><p class="btn icons ztBtn signUpHouse">求组团</p><p style="display:none;" class="btn ztBtn over">已参与</p></div></li><li class="item"><div class="picBox"><em class="icons iconSc hide"></em><a href="http://db.house.qq.com/nn_35891/" target="_blank"><img title="盛天东郡" alt="盛天东郡" src="http://mat1.gtimg.com/nn_house/images/kanfangtuan/beixuanloupan/20121130-7.jpg" width="155" height="103" /></a><div class="picShade"><div>优惠：<span class="price">暂无资料</span></div></div></div><div class="txtBox"><div><em>[</em><a href="http://db.house.qq.com/index.php?mod=search&amp;city=nn&amp;CA=25:220" target="_blank">兴宁</a><em>]</em><a href="http://db.house.qq.com/nn_35891/" target="_blank">盛天东郡</a></div><div><span class="ca">最低价：</span><span class="num">6800元/平米</span></div><div><span class="ca">特色：</span>公园地产、宜居地产</div></div><div class="btnBox"><div class="hide"><p>埋入楼盘id:</p><div style="display:inline;" id="recommend_house_7" class="recommend_house">35891</div><p></p></div><p class="btn icons scBtn favHouse">收藏</p><p style="display:none;" class="btn scBtn over ">已收藏</p><p class="btn icons ztBtn signUpHouse">求组团</p><p style="display:none;" class="btn ztBtn over">已参与</p></div></li><li class="item"><div class="picBox"><em class="icons iconSc hide"></em><a href="http://db.house.qq.com/nn_39749/" target="_blank"><img title="南湖名都广场" alt="南湖名都广场" src="http://mat1.gtimg.com/nn_house/images/kanfangtuan/beixuanloupan/20121130-8.jpg" width="155" height="103" /></a><div class="picShade"><div>优惠：<span class="price">5万抵20万 </span></div></div></div><div class="txtBox"><div><em>[</em><a href="http://db.house.qq.com/index.php?mod=search&amp;city=nn&amp;CA=25:219" target="_blank">青秀</a><em>]</em><a href="http://db.house.qq.com/nn_39749/" target="_blank">南湖名都广场</a></div><div><span class="ca">均价：</span><span class="num">12800元/平米 </span></div><div><span class="ca">特色：</span>投资地产</div></div><div class="btnBox"><div class="hide"><p>埋入楼盘id:</p><div style="display:inline;" id="recommend_house_8" class="recommend_house">39749</div><p></p></div><p class="btn icons scBtn favHouse">收藏</p><p style="display:none;" class="btn scBtn over ">已收藏</p><p class="btn icons ztBtn signUpHouse">求组团</p><p style="display:none;" class="btn ztBtn over">已参与</p></div></li></ul>
<!--[if !IE]>|xGv00|ff59a9f7be114f9c681322786317bd70<![endif]-->
									<!--search recommend house e-->
									
									<ul class="cf hide" id="search_result_list_2">
                                    </ul>
									
                                    <div id="search_bottom_toolbar" style="display:none;" class="resListFt cf">
                                        <div class="sortBox fl" style="display:none;">
                                            <select name="search_order" class="rankDate fl" id="search_order">
                                                <option value="2">价格从低到高</option>
                                                <option value="1">价格从高到低</option>
                                                <option value="4" selected="selected">开盘时间从近到远</option>
                                                <option value="3">开盘时间从远到近</option>
                                            </select>
                                            <span id="search_order_price" class="icons rankPrice fl">售价<em id="search_order_price_icon" class="icons up"></em></span>
                                            <span id="search_order_opendate" class="icons kpDate fl">开盘时间<em id="search_order_opendate_icon" class="icons up"></em></span>
                                        </div>
                                        <div id="search_pagebar" class="pageBox fr">
                                        </div>
                                    </div>
                                </div>
    
                                <div class="resMap">
                                    <div id="resMap" style="width:700px;height:520px"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="rankBox mb15 cf">
                <div class="rank rank1 fl" id="ungroup_top10" diSrc="5,9,10">	
                <div class="hd"><h3>自主组团TOP10</h3></div>
                    <div class="bd">
                        <div class="listHd cf">
                            <span class="col1">&nbsp;</span>
                            <span class="col2">楼盘名称</span>
                            <span class="col3">区域</span>
                            <span class="col4">剩余席位</span>
                            <span class="col5">&nbsp;</span>
                        </div>
                        <ul class="list">    	<li class="rankItem">
    	                <p class="col5"><span  id="ungroup_top10_qiang_35846" class="icons qiang" style="cursor:pointer;" onclick="select_ungrouped_top10(35846);kft_gb_house_signup(35846,refresh_ungrouped_top10);boss_statistics(1565,'askforgroup','indexpage','ungrouptop10')">抢</span></p>
    		<p class="col1"><span class="top">1</span></p>
			<span class="col2" title="嘉和城温莎北郡"><a href="/nn_35846/" target="_blank">嘉和城温莎北郡</a></span>
            <span class="col3">兴宁区</span>
            <span class="col4">3</span>
        </li>    	    	<li class="rankItem">
    	                <p class="col5"><span  id="ungroup_top10_qiang_128326" class="icons qiang" style="cursor:pointer;" onclick="select_ungrouped_top10(128326);kft_gb_house_signup(128326,refresh_ungrouped_top10);boss_statistics(1565,'askforgroup','indexpage','ungrouptop10')">抢</span></p>
    		<p class="col1"><span class="top">2</span></p>
			<span class="col2" title="常青藤"><a href="/nn_128326/" target="_blank">常青藤</a></span>
            <span class="col3">青秀区</span>
            <span class="col4">3</span>
        </li>    	    	<li class="rankItem">
    	                <p class="col5"><span  id="ungroup_top10_qiang_167100" class="icons qiang" style="cursor:pointer;" onclick="select_ungrouped_top10(167100);kft_gb_house_signup(167100,refresh_ungrouped_top10);boss_statistics(1565,'askforgroup','indexpage','ungrouptop10')">抢</span></p>
    		<p class="col1"><span class="top">3</span></p>
			<span class="col2" title="嘉和城"><a href="/nn_167100/" target="_blank">嘉和城</a></span>
            <span class="col3">兴宁区</span>
            <span class="col4">3</span>
        </li>    	    	<li class="rankItem">
    	                <p class="col5"><span  id="ungroup_top10_qiang_128524" class="icons qiang" style="cursor:pointer;" onclick="select_ungrouped_top10(128524);kft_gb_house_signup(128524,refresh_ungrouped_top10);boss_statistics(1565,'askforgroup','indexpage','ungrouptop10')">抢</span></p>
    		<p class="col1"><span >4</span></p>
			<span class="col2" title="顺隆公馆"><a href="/nn_128524/" target="_blank">顺隆公馆</a></span>
            <span class="col3">西乡塘区</span>
            <span class="col4">4</span>
        </li>    	    	<li class="rankItem">
    	                <p class="col5"><span  id="ungroup_top10_qiang_128473" class="icons qiang" style="cursor:pointer;" onclick="select_ungrouped_top10(128473);kft_gb_house_signup(128473,refresh_ungrouped_top10);boss_statistics(1565,'askforgroup','indexpage','ungrouptop10')">抢</span></p>
    		<p class="col1"><span >5</span></p>
			<span class="col2" title="盛天新界"><a href="/nn_128473/" target="_blank">盛天新界</a></span>
            <span class="col3">江南区</span>
            <span class="col4">5</span>
        </li>    	    	<li class="rankItem">
    	                <p class="col5"><span  id="ungroup_top10_qiang_119624" class="icons qiang" style="cursor:pointer;" onclick="select_ungrouped_top10(119624);kft_gb_house_signup(119624,refresh_ungrouped_top10);boss_statistics(1565,'askforgroup','indexpage','ungrouptop10')">抢</span></p>
    		<p class="col1"><span >6</span></p>
			<span class="col2" title="相思湖·大唐果"><a href="/nn_119624/" target="_blank">相思湖·大唐果</a></span>
            <span class="col3">西乡塘区</span>
            <span class="col4">8</span>
        </li>    	    	<li class="rankItem">
    	                <p class="col5"><span  id="ungroup_top10_qiang_157171" class="icons qiang" style="cursor:pointer;" onclick="select_ungrouped_top10(157171);kft_gb_house_signup(157171,refresh_ungrouped_top10);boss_statistics(1565,'askforgroup','indexpage','ungrouptop10')">抢</span></p>
    		<p class="col1"><span >7</span></p>
			<span class="col2" title="万汇华府"><a href="/nn_157171/" target="_blank">万汇华府</a></span>
            <span class="col3">西乡塘区</span>
            <span class="col4">8</span>
        </li>    	    	<li class="rankItem">
    	                <p class="col5"><span  id="ungroup_top10_qiang_163277" class="icons qiang" style="cursor:pointer;" onclick="select_ungrouped_top10(163277);kft_gb_house_signup(163277,refresh_ungrouped_top10);boss_statistics(1565,'askforgroup','indexpage','ungrouptop10')">抢</span></p>
    		<p class="col1"><span >8</span></p>
			<span class="col2" title="大唐世家"><a href="/nn_163277/" target="_blank">大唐世家</a></span>
            <span class="col3">邕宁区</span>
            <span class="col4">10</span>
        </li>    	    	<li class="rankItem">
    	                <p class="col5"><span  id="ungroup_top10_qiang_112320" class="icons qiang" style="cursor:pointer;" onclick="select_ungrouped_top10(112320);kft_gb_house_signup(112320,refresh_ungrouped_top10);boss_statistics(1565,'askforgroup','indexpage','ungrouptop10')">抢</span></p>
    		<p class="col1"><span >9</span></p>
			<span class="col2" title="天昌东盟中央城"><a href="/nn_112320/" target="_blank">天昌东盟中央城</a></span>
            <span class="col3">青秀区</span>
            <span class="col4">10</span>
        </li>    	    	<li class="rankItem">
    	                <p class="col5"><span  id="ungroup_top10_qiang_122118" class="icons qiang" style="cursor:pointer;" onclick="select_ungrouped_top10(122118);kft_gb_house_signup(122118,refresh_ungrouped_top10);boss_statistics(1565,'askforgroup','indexpage','ungrouptop10')">抢</span></p>
    		<p class="col1"><span >10</span></p>
			<span class="col2" title="和思相思湖畔"><a href="/nn_122118/" target="_blank">和思相思湖畔</a></span>
            <span class="col3">西乡塘区</span>
            <span class="col4">10</span>
        </li>    	</ul></div><input type="hidden" id="KFTSGTop10HouseIds" value="35846|128326|167100|128524|128473|119624|157171|163277|112320|122118" />
                </div>
                <div id="favHouses" class="rank rank2 fr">
                    <div class="hd"><h3>最受关注楼盘</h3></div>
                    <div class="bd" diSrc="5,9,11">
                        <div class="listHd cf">
                            <span class="col1">&nbsp;</span>
                            <span class="col2">楼盘名称</span>
                            <span class="col3">价格</span>
                            <span class="col4">&nbsp;</span>
                        </div>
                        
                        <!-- most favorite houses s-->
                        <ul class="list"><li class="rankItem"><p class="col1"><span class="top">1</span></p><span class="col2"><a href="http://db.house.qq.com/nn_73015/" target="_blank">骋望剑桥郡</a></span> <span class="col3">新品待定</span><div class="hide"><p>埋入楼盘id:</p><div style="display:inline;">73015</div><p></p></div><p class="col4"><span class="icons zutuan signupHouse">求组团</span></p></li><li class="rankItem"><p class="col1"><span class="top">2</span></p><span class="col2"><a href="http://db.house.qq.com/nn_35846/" target="_blank">嘉和城</a></span> <span class="col3">均价5200</span><div class="hide"><p>埋入楼盘id:</p><div style="display:inline;">35846</div><p></p></div><p class="col4"><span class="icons zutuan signupHouse">求组团</span></p></li><li class="rankItem"><p class="col1"><span class="top">3</span></p><span class="col2"><a href="http://db.house.qq.com/nn_39720/" target="_blank">观澜溪谷</a></span> <span class="col3">起价4868</span><div class="hide"><p>埋入楼盘id:</p><div style="display:inline;">39720</div><p></p></div><p class="col4"><span class="icons zutuan signupHouse">求组团</span></p></li><li class="rankItem"><p class="col1"><span>4</span></p><span class="col2"><a href="http://db.house.qq.com/nn_35891/" target="_blank">盛天东郡</a></span> <span class="col3">起价6800</span><div class="hide"><p>埋入楼盘id:</p><div style="display:inline;">35891</div><p></p></div><p class="col4"><span class="icons zutuan signupHouse">求组团</span></p></li><li class="rankItem"><p class="col1"><span>5</span></p><span class="col2"><a href="http://db.house.qq.com/nn_35889" target="_blank">保利城</a></span> <span class="col3">均价6950</span><div class="hide"><p>埋入楼盘id:</p><div style="display:inline;">35889</div><p></p></div><p class="col4"><span class="icons zutuan signupHouse">求组团</span></p></li><li class="rankItem"><p class="col1"><span>6</span></p><span class="col2"><a href="http://db.house.qq.com/nn_39699/" target="_blank">莱茵湖畔</a></span> <span class="col3">起价6999</span><div class="hide"><p>埋入楼盘id:</p><div style="display:inline;">39699</div><p></p></div><p class="col4"><span class="icons zutuan signupHouse">求组团</span></p></li><li class="rankItem"><p class="col1"><span>7</span></p><span class="col2"><a href="http://db.house.qq.com/nn_112217/" target="_blank">保利爱琴海</a></span> <span class="col3">待定</span><div class="hide"><p>埋入楼盘id:</p><div style="display:inline;">112217</div><p></p></div><p class="col4"><span class="icons zutuan signupHouse">求组团</span></p></li><li class="rankItem"><p class="col1"><span>8</span></p><span class="col2"><a href="http://db.house.qq.com/nn_35833/" target="_blank">正恒国际广场</a></span> <span class="col3">均价6750</span><div class="hide"><p>埋入楼盘id:</p><div style="display:inline;">35833</div><p></p></div><p class="col4"><span class="icons zutuan signupHouse">求组团</span></p></li><li class="rankItem"><p class="col1"><span>9</span></p><span class="col2"><a href="http://db.house.qq.com/nn_35897/" target="_blank">云星钱隆江南</a></span> <span class="col3">均价6400</span><div class="hide"><p>埋入楼盘id:</p><div style="display:inline;">35897</div><p></p></div><p class="col4"><span class="icons zutuan signupHouse">求组团</span></p></li><li class="rankItem"><p class="col1"><span>10</span></p><span class="col2"><a href="http://db.house.qq.com/nn_112320/" target="_blank">天昌东盟中央城</a></span> <span class="col3">待定</span><div class="hide"><p>埋入楼盘id:</p><div style="display:inline;">112320</div><p></p></div><p class="col4"><span class="icons zutuan signupHouse">求组团</span></p></li></ul><!--[if !IE]>|xGv00|7ea227274399ba97449aff5180afdbc5<![endif]-->
                        <!-- most favorite houses e-->
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- main e -->

        <!-- side s -->
        <div class="side">
            <div class="userBox mb10">
                                
            <div class="sideAd mb10" >
                      
                <!--<a href=""><img src="http://mat1.gtimg.com/house/datalib/kft/240_150.jpg" width="240" height="150" alt="温泉凯盛" /></a>-->
            </div>
            				
            	            <div id="kpMod" class="kpMod sideRank mb10">
                <div class="hd"><h3>最新开盘</h3></div>
                <div class="bd" inSrc="5,9,45">
                    <div class="listHd cf">
                        <span class="col1"></span>
                        <span class="col2">楼盘名称</span>
                        <span class="col3">区域</span>
                        <span class="col4" style="text-align:center;">开盘价</span>
                    </div>
                    <ul class="list">
                        					<li class="rankItem current">
                            <div class="info cf">
                                <span class="col1"><em class="top">1</em></span>
                                <span class="col2" title="天誉东盟创客城"><a href="/nn_168295" target="_blank">天誉东盟创客城</a></span>
                                <span class="col3" style="text-align:center;">良庆区</span>
                                <span class="col4" style="text-align:center;">12000</span>
                            </div>
                            <div class="moreInfo cf">
                                <div class="picBox fl">
                                    <a href="/nn_168295" target="_blank"><img src="http://p0.qpic.cn/estate/0/a335b61a96370349e24012e9ea0802d8.jpg/135" width="100" height="70" alt="天誉东盟创客城" /></a>
                                </div>
                                <div class="txtBox">
                                    <p>均价：12000元/平米</p>
                                    <p title=不限购>特色：不限购</p>
                                </div>
                            </div>
                        </li>					
                        <li class="rankItem current">
                            <div class="info cf">
                                <span class="col1"><em class="top">1</em></span>
                                <span class="col2" title="天誉东盟创客城"><a href="/nn_168295" target="_blank">天誉东盟创客城</a></span>
                                <span class="col3" style="text-align:center;">良庆区</span>
                                <span class="col4" style="text-align:center;">12000</span>
                            </div>
                            <div class="moreInfo cf">
                                <div class="picBox fl">
                                    <a href="/nn_168295" target="_blank"><img src="http://p0.qpic.cn/estate/0/a335b61a96370349e24012e9ea0802d8.jpg/135" width="100" height="70" alt="天誉东盟创客城" /></a>
                                </div>
                                <div class="txtBox">
                                    <p>均价：12000元/平米</p>
                                    <p title=不限购>特色：不限购</p>
                                </div>
                            </div>
                        </li>
                        <li class="rankItem current">
                            <div class="info cf">
                                <span class="col1"><em class="top">1</em></span>
                                <span class="col2" title="天誉东盟创客城"><a href="/nn_168295" target="_blank">天誉东盟创客城</a></span>
                                <span class="col3" style="text-align:center;">良庆区</span>
                                <span class="col4" style="text-align:center;">12000</span>
                            </div>
                            <div class="moreInfo cf">
                                <div class="picBox fl">
                                    <a href="/nn_168295" target="_blank"><img src="http://p0.qpic.cn/estate/0/a335b61a96370349e24012e9ea0802d8.jpg/135" width="100" height="70" alt="天誉东盟创客城" /></a>
                                </div>
                                <div class="txtBox">
                                    <p>均价：12000元/平米</p>
                                    <p title=不限购>特色：不限购</p>
                                </div>
                            </div>
                        </li>
                        <li class="rankItem current">
                            <div class="info cf">
                                <span class="col1"><em class="top">1</em></span>
                                <span class="col2" title="天誉东盟创客城"><a href="/nn_168295" target="_blank">天誉东盟创客城</a></span>
                                <span class="col3" style="text-align:center;">良庆区</span>
                                <span class="col4" style="text-align:center;">12000</span>
                            </div>
                            <div class="moreInfo cf">
                                <div class="picBox fl">
                                    <a href="/nn_168295" target="_blank"><img src="http://p0.qpic.cn/estate/0/a335b61a96370349e24012e9ea0802d8.jpg/135" width="100" height="70" alt="天誉东盟创客城" /></a>
                                </div>
                                <div class="txtBox">
                                    <p>均价：12000元/平米</p>
                                    <p title=不限购>特色：不限购</p>
                                </div>
                            </div>
                        </li>
                        <li class="rankItem current">
                            <div class="info cf">
                                <span class="col1"><em class="top">1</em></span>
                                <span class="col2" title="天誉东盟创客城"><a href="/nn_168295" target="_blank">天誉东盟创客城</a></span>
                                <span class="col3" style="text-align:center;">良庆区</span>
                                <span class="col4" style="text-align:center;">12000</span>
                            </div>
                            <div class="moreInfo cf">
                                <div class="picBox fl">
                                    <a href="/nn_168295" target="_blank"><img src="http://p0.qpic.cn/estate/0/a335b61a96370349e24012e9ea0802d8.jpg/135" width="100" height="70" alt="天誉东盟创客城" /></a>
                                </div>
                                <div class="txtBox">
                                    <p>均价：12000元/平米</p>
                                    <p title=不限购>特色：不限购</p>
                                </div>
                            </div>
                        </li>
                        <li class="rankItem current">
                            <div class="info cf">
                                <span class="col1"><em class="top">1</em></span>
                                <span class="col2" title="天誉东盟创客城"><a href="/nn_168295" target="_blank">天誉东盟创客城</a></span>
                                <span class="col3" style="text-align:center;">良庆区</span>
                                <span class="col4" style="text-align:center;">12000</span>
                            </div>
                            <div class="moreInfo cf">
                                <div class="picBox fl">
                                    <a href="/nn_168295" target="_blank"><img src="http://p0.qpic.cn/estate/0/a335b61a96370349e24012e9ea0802d8.jpg/135" width="100" height="70" alt="天誉东盟创客城" /></a>
                                </div>
                                <div class="txtBox">
                                    <p>均价：12000元/平米</p>
                                    <p title=不限购>特色：不限购</p>
                                </div>
                            </div>
                        </li>
                        <li class="rankItem current">
                            <div class="info cf">
                                <span class="col1"><em class="top">1</em></span>
                                <span class="col2" title="天誉东盟创客城"><a href="/nn_168295" target="_blank">天誉东盟创客城</a></span>
                                <span class="col3" style="text-align:center;">良庆区</span>
                                <span class="col4" style="text-align:center;">12000</span>
                            </div>
                            <div class="moreInfo cf">
                                <div class="picBox fl">
                                    <a href="/nn_168295" target="_blank"><img src="http://p0.qpic.cn/estate/0/a335b61a96370349e24012e9ea0802d8.jpg/135" width="100" height="70" alt="天誉东盟创客城" /></a>
                                </div>
                                <div class="txtBox">
                                    <p>均价：12000元/平米</p>
                                    <p title=不限购>特色：不限购</p>
                                </div>
                            </div>
                        </li>
                        <li class="rankItem">
                            <div class="info cf">
                                <span class="col1"><em class="top">2</em></span>
                                <span class="col2" title="碧桂园天玺湾"><a href="/nn_171114" target="_blank">碧桂园天玺湾</a></span>
                                <span class="col3" style="text-align:center;">良庆区</span>
                                <span class="col4" style="text-align:center;">暂无</span>
                            </div>
                            <div class="moreInfo cf">
                                <div class="picBox fl">
                                    <a href="/nn_171114" target="_blank"><img _src="http://p0.qpic.cn/estate/0/c2a8c4d112f171318d7e9c3903e1f28c.jpg/135" width="100" height="70" alt="碧桂园天玺湾" /></a>
                                </div>
                                <div class="txtBox">
                                    <p>均价：暂无</p>
                                    <p title=不限购>特色：不限购</p>
                                </div>
                            </div>
                        </li>					<li class="rankItem">
                            <div class="info cf">
                                <span class="col1"><em class="top">3</em></span>
                                <span class="col2" title="桃花源·香域中央"><a href="/nn_95262" target="_blank">桃花源·香域中央</a></span>
                                <span class="col3" style="text-align:center;">西乡塘区</span>
                                <span class="col4" style="text-align:center;">5600</span>
                            </div>
                            <div class="moreInfo cf">
                                <div class="picBox fl">
                                    <a href="/nn_95262" target="_blank"><img _src="http://p1.qpic.cn/estate/0/db48a791d0ddf79cb46035f25f6e4e91.jpg/135" width="100" height="70" alt="桃花源·香域中央" /></a>
                                </div>
                                <div class="txtBox">
                                    <p>均价：5600元/平米</p>
                                    <p title=改善住宅>特色：改善住宅</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sideAd">
                        
             <!--   <a href=""><img src="http://mat1.gtimg.com/house/datalib/kft/240_200.jpg" width="240" height="200" alt="温泉凯盛" /></a>-->
            </div>

        </div>
        <!-- side e -->

    </div>
    <!-- mainWrap e -->

</div>
<!--公共底部-->  
<script language="JavaScript" type="text/javascript" src="http://pingjs.qq.com/ping.js"></script>
<script language="javascript">
function inHref(str)
{
    return (window.location.href.indexOf(str) != -1) ? true : false;
}
function get_param(sName)
{
    var reg = new RegExp("(^|&)" + sName + "=([^&]*)(&|$)");
    if (window.location.search.substr(1).match(reg))
    {
        return RegExp.$2;
    }else
    {
        return null;
    }
}
function getCity(url)
{
    if(typeof g_city_info != 'undefined'){
        return g_city_info.FSubName;
    }else{
        url = url.substring(url.indexOf(".com")+5);
        url = url.substring(0,url.indexOf("_"));
        if (url == "" || url == null)
        {
            return get_param("city");
        }
        
        return url;
    }
}
function urlPregMatch(patternStr)
{
	var pattern = new RegExp(patternStr);
	return pattern.test(window.location.href);
}
function getHouseId()
{
	if(typeof g_house_info != 'undefined'){
		return g_house_info.FId;
    }else{
    	var match =  window.location.href.match(/db\.house\.qq\.com\/[a-zA-Z]+\_([0-9a-zA-Z\_\-]+)/);
    	return (match==null) ? false : match[1];
    }
    
}

if(typeof(pgvMain) == 'function')
{
    /*
    
    1.按照产品上报的栏目
    pgv_house_index 项目首页
    pgv_house_info 详细信息
    pgv_house_news 最新动态  
    pgv_house_photo 图库列表页
    pgv_house_pic 图库底层页
    pgv_house_search 搜索页
    pgv_house_city_XX 城市栏目
    pgv_house_comment 点评列表
    pgv_house_commentreply 点评详情
    pgv_house_price 价格走势
    pgv_house_video 楼盘视频
    pgv_house_calculator 购房工具
    pgv_house_kanfang 看房团
    pgv_house_kanfang_index 看房团首页
    pgv_house_kanfang_mymsg 我的消息页
    pgv_house_kanfang_myhouse 我的楼盘页 我的消息页和我的楼盘页之和就是我的看房团页
    pgv_house_kanfang_route 路线详情页
    
    2.按照城市和产品进行上报的栏目
            上报的栏目为按照产品上报的栏目中，加入城市简称:pgv_house_城市英文简称_产品英文简称

      
            如北京的项目首页:
    pgv_house_bj_index 北京的项目首页
    
            北京的搜索页
    pgv_house_bj_search 北京的搜索页
    
    3.按照楼盘进行上报
    pgv_house_house_楼盘id
    
    */
    
    var housepgv_city = getCity(window.location.href);
    
    var housepgv_houseid = getHouseId();
    
    var housepgv_business = '';
    
    if(inHref("info"))
    {
    	housepgv_business = "info";
    }else if(inHref("news"))
    {
    	housepgv_business = "news";
    }else if(inHref("photo"))
    {
    	housepgv_business = "photo";
    }else if(typeof g_page_type != 'undefined' && g_page_type == 'search')
    {
    	housepgv_business = "search";
    }else if(inHref("pic"))
    {
    	housepgv_business = "pic";
    }else if(inHref("comment_"))
    {
    	housepgv_business = "commentreply";
    }else if(inHref("comment"))
    {
    	housepgv_business = "comment";
    }else if(inHref("price"))
    {
    	housepgv_business = "price";
    }else if(inHref("video"))
    {
    	housepgv_business = "video";
    }else if(inHref("compare"))
    {
    	housepgv_business = "compare";
    }else if(inHref("calculator"))
    {
    	housepgv_business = "calculator";
    }else if(inHref("kanfang"))
    {
    	housepgv_business = "kanfang";
    	
    	if(urlPregMatch('.*kanfangtuan\/?$'))
    	{
    		housepgv_business += ";kanfang_index";	
    	}else if(urlPregMatch('.*kanfangtuan\/kft\_[0-9]+\/route\_[0-9]+\/?$'))
    	{
    		housepgv_business += ";kanfang_route";	
    	}else if(urlPregMatch('.*kanfangtuan\/mymsg\/?$'))
    	{
    		housepgv_business += ";kanfang_mymsg";	
    	}else if(urlPregMatch('.*kanfangtuan\/myhouse\/?$'))
    	{
    		housepgv_business += ";kanfang_myhouse";	
    	}
    	
    }else
    {
       housepgv_business = "index";
    }
    
    housepgv_business = housepgv_business.split(";");
    vsPgvCol = "";
    for(var i=0; i<housepgv_business.length; i++)
    {
    	var business = housepgv_business[i];
    	if(vsPgvCol != "")
    	{
    		vsPgvCol += ";";
    	}
    	vsPgvCol += "pgv_house_"+business+";pgv_house_"+housepgv_city+"_"+business;
    }
    
    vsPgvCol += ";pgv_house_city_" + housepgv_city;
    
    if(housepgv_houseid !== false)
    {
    	vsPgvCol += ";pgv_house_house_"+housepgv_houseid;
    }

   pvCurDomain = "db.house.qq.com";
    var pgvUrl = window.location.href.substring(window.location.href.indexOf(".com") + 4);
  
    if(typeof g_page_type != 'undefined' && g_page_type == 'search')
    {
         pgvUrl = "/search.html";
	}
	  var t = pgvUrl.indexOf('pgv_ref=aio');
    if( t != -1)
    {
        pgvUrl = pgvUrl.substring(0, t-1);
    }
     if(!inHref("info"))
    {
        pvCurUrl = pgvUrl;
    }
    if(""=="bsem")
    {
    
         var colSite = window.location.host.replace(/.qq.com$/,'').replace(/\./g, '-');
	      if((typeof g_page_type != 'undefined' && g_page_type == 'search') || false==housepgv_houseid)
	     var pgvInfo = "L."+ colSite +".bpgv-.bpgv-"+ housepgv_city +".bpgv-search";
	     else
	     var pgvInfo = "L."+ colSite +".bpgv-.bpgv-"+ housepgv_city +".bpgv-"+ housepgv_houseid;
	}
	
	if (typeof(pgvInfo) != 'undefined') {
		pgvMain({pgUserType:pgvInfo});
	} else {
		pgvMain();
	}
}
</script>
</div>
<!-- 浮层页面代码 s -->
<style type="text/css">
html,body{ height:100%;width:100%;}
.float_layer_box_warp{width:100%; height:100%;  position:fixed; _position:absolute; top:0px; left:0px;  z-index:1001;}
.float_layer_box_bg{ width:100%; height:100%;  _position:absolute; top:0px; left:0px; background:#000;filter:alpha(opacity=60); /*IE*/ -moz-opacity:0.6; /*MOZ , FF*/opacity:0.6;/*CSS3, FF1.5*/ z-index:1000;}
.float_layer_box_inner{ width:100%; height:100%;   _position:absolute; top:0px; left:0px;  z-index:1001;}
.float_layer_box{margin:0px; padding:0px; width:620px; position:absolute; top:50%; margin-top:-300px; left:50%; margin-left:-310px; height:600px;  z-index:1002;}
.float_layer_box_iframe{ width:100%; height:100%; position:absolute; top:0px; left:0px;filter:alpha(opacity=0);-moz-opacity:0}
.float_layer_box {height: 200px;left: 50%;margin: -100px 0 0 -153px;padding: 0;position: absolute;top: 50%;width: 306px;z-index: 1002;}
.bg_white{background-color:#fff}
</style>
<div class="float_layer_box_warp" id="alert_float_layer" style="display:none;">
<div class="float_layer_box_bg"></div>
<iframe class="float_layer_box_iframe" name="float_layer_box_iframe" id="float_layer_box_iframe" frameborder="0"></iframe>
<div class="float_layer_box_inner" >
<div class="float_layer_box">
</div> <!--float_layer_box end-->
</div> <!--float_layer_box_inner end-->
</div> <!--float_layer_box_warp end-->
<!-- 浮层页面代码 e -->
<!-- 填写资料 s -->
<div class="resgInfo" id="resgInfo" style="height:310px; left:-1000px;_position:absolute;_bottom:auto; display:none;">
    <div class="hd cf"><h2>填写报名资料&nbsp;<span>（带<em>*</em>为必填项）</span></h2><span class="btnClose icons fr" onclick="kft_gb_signup_close();return false;"></span></div>
    <form id="form_gb_signup" action="/index.php?mod=kanfang&act=signup" target="ifr_1" method="post" name="form_gb_signup">
	    <div class="bd">
	        <div><span  class="name"><em>*</em>姓　名：</span><input style="vertical-align:middle;" id="gb_name" name="name" class="txt" type="text" /></div>
	        <div><span  class="name">性　别：</span><label><input style="vertical-align:middle;" value="2" id="gb_sex" name="sex" type="radio" />女士</label>&nbsp;&nbsp;<label><input style="vertical-align:middle;" value="1" name="sex" type="radio" />先生</label></div>
	        <div><span  class="name"><em>*</em>手　机：</span><input style="vertical-align:middle;" id="gb_mobile" name="mobile" class="txt" type="text" /></div>
	        <div><span  class="name">邮　箱：</span><input style="vertical-align:middle;" id="gb_email" name="email" class="txt" type="text" /></div>
	        <!--<div class="yzmBox cf" style="_line-height:40px"><span class="name fl"><em>*</em>验证码：</span><input id="gb_authcode" name="authcode" class="txt txtYzm fl" type="text" /><img id="authcode_img" class="picYzm fl" width="104" height="33" src="" style="margin-left:8px;" alt="验证码" />&nbsp;<a href="javascript:void(0);" onclick="return kft_change_img();">看不清？</a></div>-->
	        <div><span class="name"></span><input id="gb_announce" name="announce" checked type="checkbox" />&nbsp;我已阅读并同意<a href="http://house.qq.com/ad/shenming.htm" target="_blank">《腾讯房产活动声明》</a></div>
	        <div><span class="name"></span><input onclick="kft_gb_signup_submit();return false;" class="icons submit" type="button" value="立即报名" title="立即报名" tabindex="21"><span id="kft_error_result" style="color:#ff0000;font-size:12px;margin-left:30px;line-height:40px;display:none"></span></div>
	    </div>
	    <input type="hidden" name="cbf" id="gb_cbf" value="" />
	    <input type="hidden" name="houseid" id="gb_houseid" value="" />
	    <input type="hidden" name="kftid" id="gb_kftid" value="" />
	    <input type="hidden" name="kftrtid" id="gb_kftrtid" value="" />
	    <input type="hidden" name="gbcityid" id="gb_cityid" value="" />
	    <input type="hidden" name="ut" id="gb_ut" value="2" />
		<input type="hidden" name="inSrc"  value="" />
		<input type="hidden" name="diSrc"  value="" />
		<input type="hidden" name="pageTitle" value="" />
		<input type="hidden" id="gb_refer" name="refer" value="signup_index" />
		<input type="hidden" id="gb_tk" name="tk" value="" />
    </form>
</div>
<!-- 填写资料 e -->
<!-- 报名成功 s -->
<div id="route_signup_success_div" class="bmResMod resBox" style="left:-1000px;_position:absolute;_bottom:auto;display:none;">
    <div class="hd">
        <span onclick="kft_gb_route_signup_success_close();return false;" class="btnClose icons fr"></span>
        <div class="center">
            <h2>恭喜您，报名成功！</h2>
            <h3>已报名<span id="route_sign_num" class="btnTxt">11</span>人，我们的工作人员会尽快与您取得联系，<br />您还可以在“<a id="signup_success_ahref_1" href="javascript:void(0);" class="num" target="_blank" onclick="kft_gb_route_signup_success_close();"><em>我的看房单</em></a>”查看最新消息，谢谢！</h3>
            <div class="btnBox">
                <a class="btn" href="javascript:void(0);" onclick="kft_gb_route_signup_success_close();return false;">继续浏览&nbsp;&gt;</a>&nbsp;<a id="signup_success_ahref_2" class="btn" href="javascript:void(0);" target="_blank" onclick="kft_gb_route_signup_success_close();">我的看房单&nbsp;&gt;</a>
            </div>
        </div>
    </div>
</div>
<!-- 报名成功 e -->
<!-- 报名成功 s -->
<div id="route_anonymous_signup_success_div" class="bmResMod resBox" style="height:128px;width:480px;margin:-64px 0 0 -240px;left:-1000px;_position:absolute;_bottom:auto; display:none;">
    <div class="hd" style="height:128px;">
        <span onclick="kft_gb_route_anonymous_signup_success_close();return false;" class="btnClose icons fr"></span>
        <div class="center">
            <h2>恭喜您，报名成功！</h2>
            <h3>已报名<span id="anonymous_route_sign_num" class="btnTxt">11</span>人，我们的工作人员会尽快与您取得联系。</h3>
        </div>
    </div>
</div>
<!-- 报名成功 e -->
<div id="route_signup_dup_div" class="resgInfo" style="width:240px;height:160px;margin:-111px 0 0 -180px;left:-1000px;_position:absolute;_bottom:auto; display:none;">
    <div class="hd"><span class="btnClose icons fr" onclick="kft_gb_route_signup_dup_close();return false;"></span></div>
    <div class="center" style="color:#38509e;font:normal 24px/30px '微软雅黑','黑体';margin:20px 0;">您已报名该线路！</div>
    <div class="center"><a id="signup_dup_ahref" style="display:block;width:150px;height:37px;line-height:37px;margin:0 auto;border:1px solid #D7D7D7;background:#F8F8F8;color:#272727;font-size:14px;"  href="javascript:void(0);" target="_blank" onclick="kft_gb_route_signup_dup_close();">查看我的选房单&gt;</a></div>
</div>
<div id="house_attention_success_div" class="bmResMod resBox" style="left:-1000px;_position:absolute;_bottom:auto; display:none;">
    <div class="hd">
        <span onclick="kft_gb_house_attention_success_close();" class="btnClose icons fr"></span>
        <div class="center">
            <h2>恭喜您，参与成功！</h2>
            <h3><span id="house_attention_success_span"><em>华庭国际家团</em>正在组团</span>中，已报名<span id="house_attention_num" class="btnTxt">11</span>人<br />您可以在“<a id="attention_success_ahref_1" href="javascript:void(0);" class="num" target="_blank" onclick="kft_gb_house_attention_success_close();"><em>我的看房单</em></a>”中查看最新消息，成团后我们将第一时间电话通知您！</h3>
            <div class="btnBox">
                <a class="btn" href="javascript:void(0);" onclick="kft_gb_house_attention_success_close();return false;">继续浏览&nbsp;&gt;</a>&nbsp;<a id="attention_success_ahref_2" class="btn" href="javascript:void(0);" target="_blank" onclick="kft_gb_house_attention_success_close();">我的看房单&nbsp;&gt;</a>
            </div>
        </div>
    </div>
</div>
<div id="house_anonymous_attention_success_div" class="bmResMod resBox" style="height:128px;width:480px;margin:-64px 0 0 -240px;left:-1000px;_position:absolute;_bottom:auto; display:none;">
    <div class="hd" style="height:128px;">
        <span onclick="kft_gb_house_anonymous_attention_success_close();return false;" class="btnClose icons fr"></span>
        <div class="center">
            <h2>恭喜您，参与成功！</h2>
            <h3>已报名<span id="anonymous_house_attention_num" class="btnTxt">11</span>人，成团后我们将第一时间电话通知您！</h3>
        </div>
    </div>
</div>
<div id="house_collect_dup_div" class="resgInfo" style="width:240px;height:160px;margin:-111px 0 0 -180px;left:-1000px;_position:absolute;_bottom:auto;display:none;">
    <div class="hd"><span class="btnClose icons fr" onclick="kft_gb_house_collect_dup_close();return false;"></span></div>
    <div class="center" style="color:#38509e;font:normal 24px/30px '微软雅黑','黑体';margin:20px 0;">您已收藏该楼盘！</div>
    <div class="center"><a id="collect_dup_ahref" style="display:block;width:150px;height:37px;line-height:37px;margin:0 auto;border:1px solid #D7D7D7;background:#F8F8F8;color:#272727;font-size:14px;" href="javascript:void(0);" target="_blank" onclick="kft_gb_house_collect_dup_close();">查看我收藏的楼盘&gt;</a></div>
</div>
<div id="house_attention_dup_div" class="resgInfo" style="width:240px;height:160px;margin:-111px 0 0 -180px;left:-1000px;_position:absolute;_bottom:auto; display:none;">
    <div class="hd"><span class="btnClose icons fr" onclick="kft_gb_house_attention_dup_close();return false;"></span></div>
    <div class="center" style="color:#38509e;font:normal 24px/30px '微软雅黑','黑体';margin:20px 0;">您已报名该楼盘！</div>
    <div class="center"><a id="attention_house_dup_ahref" style="display:block;width:150px;height:37px;line-height:37px;margin:0 auto;border:1px solid #D7D7D7;background:#F8F8F8;color:#272727;font-size:14px;" href="javascript:void(0);" target="_blank" onclick="kft_gb_house_attention_dup_close();">查看我报名的楼盘&gt;</a></div>
</div>
<div class="resgInfo" id="gb_err_div" style="width:240px;height:160px;margin:-111px 0 0 -180px;left:-1000px;_position:absolute;_bottom:auto; display:none;">
		<div class="hd"><span class="btnClose icons fr" onclick="kft_gb_signup_err_close();return false;"></span></div>
		<div class="center" style="color:#38509e;font:normal 24px/30px '微软雅黑','黑体';margin:45px 0;">对不起，出错了！</div>
</div>
<div id="login_div" style="display: none; position: fixed; _position:absolute;_bottom:auto; z-index: 1000000; padding: 0pt; width: 372px; height: 210px; top: 50%; left: -500px; margin: -105px 0px 0px -186px;">
    <div id="nologin_div" style="display:none;position:absolute;bottom:1px;left:1px;height:30px;overflow:hidden;text-align:center;font:14px/30px '微软雅黑','黑体';background:url(http://mat1.gtimg.com/house/datalib/kft/login_bg.png) left top repeat-x;">
        <iframe width="100%" height="100%" src="" style="display:none;"></iframe>
        <span style="color:#808080">没有QQ号码？</span><a href="javascript:void(0);" onclick="kft_gb_user_anonymous();return false;" style="color:#3d990f; background:url(http://mat1.gtimg.com/house/datalib/kft/login_bg.png) right -30px no-repeat; padding-right:22px;display:inline-block;">快速报名</a>
    </div>
	<iframe name="login_frame" id="login_frame" frameborder="0" scrolling="auto" width="100%" height="100%" src=""></iframe>
</div>
<input type="hidden" name="cityid" id="cityid" value="25" />
<input type="hidden" name="citySubname" id="citySubname" value="nn" />
<input type="hidden" id="page" value="kft_index" />
<input type="hidden" id="xfd_houseid" value="" />
<input type="hidden" id="gb_su_succ_cbf_houseids" value="" />
<input type="hidden" id="KFTFocusHouseIds" value="" />
<input type="hidden" id="KFTSGCommendHouseIds" value="" />
<input type="hidden" id="KFTSGSearchHouseIds" value="" />
<input type="hidden" id="KFTSGAttentionHouseIds" value="" />
<input type="hidden" id="KFTUsrXFDIds" value="" />
<input type="hidden" id="KFTUsrGBIds" value="" />
<input type="hidden" id="KFTUngroupedTop10ClickHouseId" value="" />
<iframe style="display:none;" src="" id="ifr_1" name="ifr_1"></iframe>
<script src="http://map.qq.com/api/js?v=1.0" type="text/javascript"></script>
<!-- start guide -->
<style type="text/css">
.mainSo .con{position:relative;}
.guideWrap{width:100%;height:3016px;display:none;position:absolute;left:0;top:0;z-index:998;}
.guideWrap .guideBg{position:absolute;left:0;top:0;width:100%;height:3016px;z-index:999;background:#000;opacity:0.2;filter:alpha(opacity=20);}
.guideInner{width:1000px;margin:0 auto;height:3016px;position:relative;z-index:1002;}
.guideInner .guideItem{position:absolute;z-index:1003;display:none;}
.guideInner .guideItem .closeBtn,
.guideInner .guideItem .guideStep{position:absolute;display:inline-block;text-indent:-9999px;cursor:pointer;}
.guideInner .guideItem .closeBtn{width:50px;height:20px;bottom:169px;}
.guideInner .guideItem .guideStep{width:70px;height:27px;bottom:20px;}
.guideInner .guide1 .closeBtn,
.guideInner .guide5 .closeBtn{left:317px;}
.guideInner .guide1 .guideStep,
.guideInner .guide5 .guideStep{left:289px;}
.guideInner .guide2 .closeBtn,
.guideInner .guide3 .closeBtn,
.guideInner .guide4 .closeBtn{right:12px;}
.guideInner .guide2 .guideStep,
.guideInner .guide3 .guideStep,
.guideInner .guide4 .guideStep{right:19px;}
.guideInner .guide1{width:661px;height:290px;background:url(http://mat1.gtimg.com/house/datalib/kft/guide/guideItem1.jpg) no-repeat;left:303px;top:185px;}
.guideInner .guide2{width:617px;height:291px;background:url(http://mat1.gtimg.com/house/datalib/kft/guide/guideItem2.jpg) no-repeat;left:106px;top:773px;}
.guideInner .guide3{width:894px;height:328px;background:url(http://mat1.gtimg.com/house/datalib/kft/guide/guideItem3.jpg) no-repeat;left:19px;top:1647px;}
.guideInner .guide4{width:616px;height:281px;background:url(http://mat1.gtimg.com/house/datalib/kft/guide/guideItem4.jpg) no-repeat;left:37px;top:1934px;}
.guideInner .guide5{width:718px;height:320px;background:url(http://mat1.gtimg.com/house/datalib/kft/guide/guideItem5.jpg) no-repeat;left:263px;top:1465px;}
.guidePicBg{width:1000px;height:3016px;left:50%;margin-left:-500px;top:0;position:absolute;z-index:1000;}
.guidePicBg .guidePic{height:377px;}
.guidePicBg .guidePic1{background:url(http://mat1.gtimg.com/house/datalib/kft/guide/indexBg-01-new.jpg) no-repeat;}
.guidePicBg .guidePic2{background:url(http://mat1.gtimg.com/house/datalib/kft/guide/indexBg-02.jpg) no-repeat;}
.guidePicBg .guidePic3{background:url(http://mat1.gtimg.com/house/datalib/kft/guide/indexBg-03.jpg) no-repeat;}
.guidePicBg .guidePic4{background:url(http://mat1.gtimg.com/house/datalib/kft/guide/indexBg-04.jpg) no-repeat;}
.guidePicBg .guidePic5{background:url(http://mat1.gtimg.com/house/datalib/kft/guide/indexBg-05.jpg) no-repeat;}
.guidePicBg .guidePic6{background:url(http://mat1.gtimg.com/house/datalib/kft/guide/indexBg-06.jpg) no-repeat;}
.guidePicBg .guidePic7{background:url(http://mat1.gtimg.com/house/datalib/kft/guide/indexBg-07.jpg) no-repeat;}
.guidePicBg .guidePic8{background:url(http://mat1.gtimg.com/house/datalib/kft/guide/indexBg-08.jpg) no-repeat;}
</style>
<div style="display:none">
<img src="http://mat1.gtimg.com/house/datalib/kft/guide/guideItem1.jpg" style="display:none" />
<img src="http://mat1.gtimg.com/house/datalib/kft/guide/indexBg-01.jpg" style="display:none" />
<img src="http://mat1.gtimg.com/house/datalib/kft/guide/indexBg-02.jpg" style="display:none" />
</div>
<div id="guideWrap" class="guideWrap">
    <div class="guideBg"></div>
    <div class="guidePicBg">
        <div class="guidePic guidePic1"></div>
        <div class="guidePic guidePic2"></div>
        <div class="guidePic guidePic3"></div>
        <div class="guidePic guidePic4"></div>
        <div class="guidePic guidePic5"></div>
        <div class="guidePic guidePic6"></div>
        <div class="guidePic guidePic7"></div>
        <div class="guidePic guidePic8"></div>
    </div>
    <div class="guideInner">
        <div class="guideItem guide1"><span class="closeBtn" onclick="exitGuide();">关闭</span><span class="guideStep" onclick="guideStep(1);">下一个</span></div>
        <div class="guideItem guide2"><span class="closeBtn" onclick="exitGuide();">关闭</span><span class="guideStep" onclick="guideStep(2);">下一个</span></div>
        <div class="guideItem guide3"><span class="closeBtn" onclick="exitGuide();">关闭</span><span class="guideStep" onclick="guideStep(3);">下一个</span></div>
        <div class="guideItem guide4"><span class="closeBtn" onclick="exitGuide();">关闭</span><span class="guideStep" onclick="guideStep(4);">下一个</span></div>
        <div class="guideItem guide5"><span class="closeBtn" onclick="exitGuide();">关闭</span><span class="guideStep" onclick="exitGuide();">完成   </span></div>
    </div>
</div>
<script src="http://mat1.gtimg.com/house/js/houseapp/kanfangtuan/kft_index_v46.js"></script>

<script type="text/javascript">QosSS.t[2]= (new Date()).getTime();</script>
<script type="text/javascript">
	QosSS.c = new Image();
	QosSS.c.onload = (QosSS.c.onerror = function() {delete QosSS.c;});
	QosSS.t[5]= (new Date()).getTime();
	QosSS.c.src="http://qos.report.qq.com/collect?type=1&name="+"kanfangtuan.house.qq.com"+"&1="+ (QosSS.t[1]- QosSS.t[0])+"&2="+ (QosSS.t[2]- QosSS.t[0])+ "&3="+ (QosSS.t[3]- QosSS.t[0])+"&4="+ (QosSS.t[4]- QosSS.t[0])+ "&5="+ (QosSS.t[5]- QosSS.t[0]);
 </script>
<!-- end guide -->
</body>
</html>

