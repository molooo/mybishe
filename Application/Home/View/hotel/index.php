<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="Keywords" content="{$siteInfo['keywords']}" />
  <meta name="Description" content="{$siteInfo['description']}" />
{template inc/common_lib}
<link href="__PUBLIC__/css/Hotel/index.css" type="text/css" rel="stylesheet"/>
<script src="__PUBLIC__/js/jquery.touchSlider.js" type="text/javascript"></script>
<script src="__PUBLIC__/js/hotel.js" type="text/javascript"></script>
<title>HL</title>
</head>
<body>
  <div class="head">
    <!--{template inc/header}-->
  </div>
  <div class="container">
    <!--顶部搜索框banner start-->
  <div class="index_bannerbox mt_25">
      <div class="index_bannerbg">
          <div class="index_bannerpic">
          <div class="main_visual">
            <div class="flicking_con">
              <div class="flicking_inner">
                 {loop $photo $k $v} 
                                <a href="javascript:;" >{$k}</a>
                          {/loop}
              </div>
            </div>
            <div class="main_image">
              <ul>
                {loop $photo $k $v}
                        <li>
                       
                              <a href="{$v['url']}" target="_blank" title="{$v['title']}">
                    <span  style="background:url({$v['image']}) ;"></span></a>
                            </li>
                {/loop}
              </ul>
              <a id="btn_prev" href="javascript:;"></a> <a id="btn_next" href="javascript:;"></a>
            </div>
          </div>
            </div> 
            <div class="index_banner">
              <div class="index_bannercon">
                  <div class="index_seabgbox">
                      <div class="index_seabg"></div>
                      <div class="index_sea">
                          <div class="index_seatitle">
                              <h1>酒店预订</h1>
                                <span>实时搜索<i>{$cityCount}</i>个城市<i id="zn_hotel_total_num"></i></span>
                            </div>
                            <form action="{DOMAIN}{ROOT}?m=hotel.setSearchSession" method="post" name="search-form" id="index-search-hotel">
                            <input type="hidden" name="type" value="getCityId" />
                            <ul>
                                <li>
                                    <label>目的地</label>
                                    <div class="inputbox">
                                      <input type="hidden" name="search-cityId" id="search-cityId" value="{$city['id']}"/>
                                        <input type="text" name="cityName" id="search-city" class="text ued_city_input city_target" autocomplete="Off" value="{$city['name']}"/>
                                        <span class="city_ico"></span>
                                    </div>
                                </li>
                                <li>
                                    <label>日  &nbsp;&nbsp;&nbsp;期</label>
                                      <div class="datebox" id="ued_datePicker_view">
                                            <div class="inputdate">
                                                <div class="in">
                                                  <span>入住</span>
                                                    <input type="text" name="indate" id="indate" class="ued_datePicker_start date search-date" value="{eval echo date('Y-m-d');}"  name="indate" autocomplete="Off"/>
                                                </div>
                                                <p class="line">—</p>
                                                <div class="out">
                                                  <span>离店</span>
                                                    <input type="text" name="outdate"  id="outdate" class="ued_datePicker_end date search-date" value="{eval echo date('Y-m-d' , time() + (86400 * 1));}" autocomplete="Off"/>
                                                </div>
                                            </div>
                                            <span id="howManyDays" class='howManyDays'>
                                                 共<strong>1</strong>晚
                                            </span>
                                        </div>
                                          
                                </li>
                                <li>
                                    <label>关键词</label>
                                    <div class="inputbox">
                                        <input type="text" value="酒店名称 / 品牌 / 位置" class="text hot_key_target" name="hotelName" id="search-hotelName" autocomplete="Off">
                                    </div>
                                </li>
                                <li class="input_but">
                                    <input type="button" value="" class="but" id="search-btn">
                                </li>
                            </ul>
                                </form>
                        </div>
                    </div>                     
                </div>
                <!-- <div class="banner_focus">
                    <ol class="slidetablist">
                    {loop $photo $k $v} 
                      {if $k==1}
                        <li class="cur"></li>
                        {else}
                         <li ></li>
                         {/if}
                    {/loop}
                    </ol>
                </div>   -->
            </div>     
        </div>      
    </div>
    <div class="index_main">
      <!--左侧stat-->
      <div class="indexmain_le">
          <!--地标找酒店stat-->
            <div class="index_landmark mt_30">
                <div class="landmark_title">
                    <h3>地标找酒店</h3>
                </div>
                <div class="landmark_list">
                    <ul id="point_mapbar_menu">
                      <li id="point_li_subway" tag="metro"><strong class="lm_ico1"></strong><span>地铁周边</span></li>
                        <li id="point_li_airportTrain"   tag="carStop"><strong class="lm_ico2"></strong><span>机场/车站</span></li>
                        <li id="point_li_business" tag="shopArea"><strong class="lm_ico3"></strong><span>商业区</span></li>
                        <li id="point_li_scene" tag="scenic"><strong class="lm_ico4"></strong><span>热门景点</span></li>
                        <li id="point_li_hospital" tag="hospital"><strong class="lm_ico5"></strong><span>医院附近</span></li>
                        <li id="point_li_college" tag="school"><strong class="lm_ico6"></strong><span>大学附近</span></li>
                        <li id="point_li_canton" tag="area"><strong class="lm_ico7"></strong><span>行政区</span></li>
                        <li id="point_li_exhibition" tag="pavilion"><strong class="lm_ico8"></strong><span>展馆周边</span></li>
                    </ul>
                </div>
            </div>
            <!--地标找酒店end-->
            <!-- 推荐酒店start -->
            <div class="watu_con mt_30">
              <div class="watu_hotel">
                  <div class="item_hoteltitle">
                      <h3>精选酒店</h3>
                      <span><a target="_blank" href="{DOMAIN}{ROOT}hotel/list-0-0-0-0-0-0-1.html" >更多》</a></span> </div>
              </div>
              <div class="hot_hotellist"> 
                  <div class="hotellist_le"> <a target="_blank" href="{$adList['left_recommend']['url']}"><img src="{$adList['left_recommend']['image']}" width="210" height="365"> </a> </div>
                  <div class="hotellist_ri">
                      <ol >
                      {loop $hotel_recommend $rk $rv}
                       <li>
                            <a target="_blank" href="{DOMAIN}{ROOT}hotel/info-{$rv['id']}.html">
                              <img src="{DOMAIN}{ROOT}upload/hotel/{$rv['image']}" width="210" height="175">
                            </a>
                              <div class="watu_tips"> 
                                <span class="f_right"><em>￥</em>{eval echo $rv['price'] > 0 ?  (int)$rv['price'] : '0'; }</span>
                                <a target="_blank" href="{DOMAIN}{ROOT}hotel/info-{$rv['id']}.html">{$rv['name']}</a> 
                              </div>
                          </li>
                      {/loop}
                    </ol>
                  </div>
              </div>
      </div>
      <!-- 推荐酒店end -->
            <!--热门酒店start-->
            <div class="hot_hotel mt_30">
                <div class="hot_hoteltitle">
                    <h3>热门酒店</h3>
                    <span><a target="_blank" href="" style="display:none;">更多》</a></span>
                </div>
                <div class="hot_hotellist">
                    <div class="hotellist_le">
                        <a href="{$adList['left_top']['url']}" target="_blank" class="spe"><img src="{$adList['left_top']['image']}"  title="{$adList['left_top']['title']}" width="240" height="330"></a>
                    </div>
                        <div class="hotellist_ri ">
                            <ul class="hot_city_hotel">
                            {loop $hotel_hit $k $v}
                                    <li>
                                    <div class="pic">
                                        <a target="_blank" title="{$v['name']}" href="{DOMAIN}{ROOT}hotel/info-{$v['id']}.html">
                                        <img src="{DOMAIN}{ROOT}upload/hotel/{$v['image']}">
                                        </a>
                                    </div>
                                    <div class="hot_text">
                                        <span>
                                          <a target="_blank" title="{$v['name']}" href="{DOMAIN}{ROOT}hotel/info-{$v['id']}.html">{$v['name']}</a>
                                        </span>
                                        <p>
                                            <i>￥</i>
                                            <em>{eval echo (int)$v['price'];}</em>
                                            <strong>起</strong>
                                        </p>
                                    </div>
                                </li>
                                {/loop}
                              </ul>
                       </div>                    
                </div>
            </div>
            <!--热门酒店end-->
             <!--特价酒店start-->
            <div class="hot_hotel mt_30">
                <div class="hot_hoteltitle">
                    <h3>特价酒店</h3>
                    <span><a target="_blank" href="" style="display:none;">更多》</a></span>
                </div>
                <div class="hot_hotellist">
                    <div class="hotellist_le">
                        <a href="{$adList['left_bargainprice']['url']}" target="_blank" class="spe"><img src="{$adList['left_bargainprice']['image']}"  title="{$adList['left_bargainprice']['title']}" width="240" height="330"></a>
                    </div>
                        <div class="hotellist_ri ">
                            <ul class="hot_city_hotel">
                            {loop $hotel_rank $k $v}
                                  <li>
                                    <div class="pic">
                                        <a target="_blank" title="{$v['name']}" href="{DOMAIN}{ROOT}hotel/info-{$v['id']}.html">
                                        <img src="{DOMAIN}{ROOT}upload/hotel/{$v['image']}">
                                        </a>
                                    </div>
                                    <div class="hot_text">
                                        <span>
                                          <a target="_blank" title="{$v['name']}" href="{DOMAIN}{ROOT}hotel/info-{$v['id']}.html">{$v['name']}</a>
                                        </span>
                                        <p>
                                            <i>￥</i>
                                            <em>{eval echo (int)$v['price'];}</em>
                                            <strong>起</strong>
                                        </p>
                                    </div>
                                </li>
                                {/loop}
                              </ul>
                       </div>                    
                </div>
            </div>
            <!--特价酒店end-->
            <!--特色客栈start-->
            <div class="hot_hotel mt_30">
                <div class="hot_hoteltitle">
                    <h3>特色客栈</h3>
                    <span><a target="_blank" href="" style="display:none;">更多》</a></span>
                </div>
                <div class="hot_hotellist">
                    <div class="hotellist_le">
                        <a href="{$adList['left_inn']['url']}" target="_blank" class="spe"><img src="{$adList['left_inn']['image']}"  title="{$adList['left_inn']['title']}" width="240" height="330"></a>
                    </div>
                        <div class="hotellist_ri ">
                            <ul class="hot_city_hotel">
                                    {loop $kezhanList $k $v}
                                  <li>
                                    <div class="pic">
                                        <a target="_blank" title="{$v['name']}" href="{DOMAIN}{ROOT}hotel/info-{$v['id']}.html">
                                        <img src="{DOMAIN}{ROOT}upload/hotel/{$v['image']}">
                                        </a>
                                    </div>
                                    <div class="hot_text">
                                        <span>
                                          <a target="_blank" title="{$v['name']}" href="{DOMAIN}{ROOT}hotel/info-{$v['id']}.html">{$v['name']}</a>
                                        </span>
                                        <p>
                                            <i>￥</i>
                                            <em>{$v['price']}</em>
                                            <strong>起</strong>
                                        </p>
                                    </div>
                                </li>
                                {/loop}
                              </ul>
                       </div>                    
                </div>
            </div>
            <!--特色客栈end-->
            <!--微出行start-->
              {if $adList['left_bottom']}
            <div class="period_special mt_30">
              <div class="special_title">
                  <h3>微出行</h3>
                </div>
              <div class="special_list">
                {if $adList['left_bottom'] > 1}
                  <ul>
                  {loop $adList['left_bottom'] $k $v}
                      <li><a href="{$v['url']}" target="_blank"><img title="{$v['title']}" src="{$v['image']}"></a></li>
                        {/loop}
                    </ul>
                    {/if}
                </div>
            </div>
            {/if}
        </div>
        <!--左侧end-->
        <!--右侧stat-->
        <div class="indexmain_ri">
          <!--start-->
            <div class="news_des mt_30">
              <div class="news_title">
                  <h3>最新资讯</h3>
                </div>
                <div class="news_list">
                  <ul id="news_list_nav">
                      {loop $news $k $v}
                      <li><i>■</i><a target="_blank" href="{DOMAIN}{ROOT}news/detail-{$v['id']}.html" title="{$v['title']}">{$v['title']}</a></li>
                      {/loop}
                    </ul>
                </div>
            </div>
            <!--end-->
          <!--为您推荐start-->
            <div class="recommend mt_30">
              <div class="recom_title">
                  <h3>为您推荐</h3>
                    <!-- <span id="recommend_menu">换一批</span> -->
                </div>
                <div class="recom_list">
                  <ul id="recommend_list">
                  {loop $adList['right_recomment'] $k $v}
                      <li><a href="{$v['url']}" target="_blank"><img src="{$v['image']}" width="280" height="80"></a></li>
                      {/loop}
                    </ul>
                </div>
            </div>
            <!--为您推荐end-->
          <div class="watu_right">
              <div class="theme_title">
                  <h3>超值特惠</h3>
              </div>
              <div class="watu_img">
                  <ul>
                  {loop $adList['right_watu'] $k $v}
                      <li><a target="_blank" href="{$v['url']}"><img src="{$v['image']}" width="280" height="80"></a></li>
                     {/if}
                  </ul>
              </div>
          </div>
          <!-- <div class="watu_right">
              <div class="theme_title">
                  <h3>超值特惠</h3>
              </div>
              <div class="watu_img">
                  <ul>
                  {loop $adList['right_watu'] $k $v}
                      <li><a target="_blank" href="{$v['url']}"><img src="{$v['image']}" width="280" height="80"></a></li>
                     {/if}
                  </ul>
              </div>
          </div>
          <div class="watu_right">
              <div class="theme_title">
                  <h3>超值特惠</h3>
              </div>
              <div class="watu_img">
                  <ul>
                  {loop $adList['right_watu'] $k $v}
                      <li><a target="_blank" href="{$v['url']}"><img src="{$v['image']}" width="280" height="80"></a></li>
                     {/if}
                  </ul>
              </div>
          </div> -->
          <!--品牌连锁start--> 
            <div class="brand_chain mt_30" id="index_tab_liansuo_content">
              <div class="brand_title">
                  <h3>品牌连锁</h3>
                    <ul id="index_tab_liansuo_menu">
                      <li class="cur" liansuo="jj"><a href="javascript:void(0);">经济</a></li>
                        <li liansuo="ss"><a href="javascript:void(0);">舒适</a></li>
                        <li liansuo="gd"><a href="javascript:void(0);">高档</a></li>
                        <li liansuo="hh"><a href="javascript:void(0);">豪华</a></li>
                    </ul>
                </div>
                {loop $brandList $k $v}
                <div class="brand_list pinpai_liansuo" id="brand_jj">
                {loop $v $k1 $v1}
                  <dl t="1" class="">
                        <dt><a href="javascript:void(0);"><img src="{MY_THEMEDIR}images/brand/{$v1['image']}" width="78" height="58"></a></dt>
                          <dd>
                            <ul>
                                <li><a href="javascript:void(0);">{$v1['name']}</a></li>
                                  <li>{$v1['desc']}</li>
                              </ul>
                          </dd>
                      </dl>
                {/loop}
                </div>
                {/loop}
            </div>
            <!--品牌连锁end--> 
        </div>
        <!--右侧end-->
    </div>
  </div>
  <!--{template inc/footer}-->
  <!-- 推荐/友情连接 -->
  <div class="mainbox">
  <div class="friend_box">
    <div class="friend_top">
      <div class="friend_tab">
        <ul>
          <li class="current">友情链接 </li>
        </ul>
      </div>
      <dfn></dfn>
    </div>
    <div class="clearfloat"></div>
    <div class="friend_link1" style="display: block;">
      <ul>
      <!--{loop $flink $v}-->
      <li><a title="{$v['name']}" target="_blank" href="http://{$v['url']}">{$v['name']}</a></li>
    <!--{/loop}-->
    </ul>
    </div>
  </div>
</div>
  <div class="city-select" myType="hotel" id="city-select" style="display: none;">
    <div class="select-tips">
      <strong>热门城市</strong>(可直接选择城市或输入城市拼音)
    </div>
    <div id="hotel-select-item" class="select-item clearfix" style="display: block;">
      <ul>

        <!--{loop $hotCity $k $v}-->
        <!--{if $k>=20}{eval break;}{/if}-->
        <li value="{$v['id']}">{$v['name']}</li>
        <!--{/loop}-->
      </ul>
    </div>
    <div class="select-list clearfix" style="display: none;"></div>
  </div>
</body>
</html>