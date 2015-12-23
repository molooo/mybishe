//加载函数主体
var RequireArray = (function () {
    /***************************************************************配置文件开始***************************************************************/
    //每页加载JS的配置文件
    var pageJsConfig = {
        agentListJs: ["agentListV"],
        ershoufangListJs: ["ershoufangListV"],
        ershoufangListPostJs: ["ershoufangListPostV"],
        xiaoquListJs: ["xiaoquListV"],
        xiaoquDetailJs: ["xiaoqudetailV"],
        chengjiaoListJs: ["chengjiaoListV"],
        mapJs: ["mapV"],
        map2015Js: ["map2015V"],
        ershoufangDetail2015js: ["ershoufangDetail2015V"],
        ershoufangListSchooljs: ["ershoufangListSchoolV"],
        ershoufangDetailForDealJs: ["ershoufangDetailForDealV"],
        chengjiaoContrastJs: ["chengjiaoContrastV"],
        jingjirenViewJs: ["jingjirenViewV"],
        mendianListJs: ["mendianListV"],
        mendianEsfListJs: ["mendianEsfListV"],
        chengjiaoForEstateJs: ["chengjiaoForEstateV"],
        chengjiaoForStoreJS: ["chengjiaoForStoreV"],
        userCenterLoginJS: ["userCenterLoginV"],
        userRegisterJS: ["userRegisterV"],
        userCenterForgetJS: ["userCenterForgetV"],
        comparelistJS: ["compareListV"],
        agentonlineJS: ["agentonlineV"],
        onlinerequireJS: ["onlinerequireV"],
        onlinesuccessJS: ["onlinesuccessV"],
        quyudetailJS: ["quyudetailV"],
        xiaoquImageJS: ["xiaoquImageV"],
        xinfangReserveJS: ["xinfangReserveV"],
        xinfangDetailJS: ["xinfangDetailV"],
        xinfangXiangceJS: ["xinfangXiangceV"],
        wendaListJs: ["wendaListV"],
        wendaDetailJs: ["wendaDetailV"],
        evaluateOnlineJs: ["evaluateOnlineV"]
    };
    //JS 文件配置名字以及对应目录
    function requireJsConfig() {
        require.config({
            paths: {
                "jquery": "http://libs.baidu.com/jquery/1.7.2/jquery.min",

                "jathis": "http://v3.jiathis.com/code/jia.js?uid=1377512664779230",
                "tj": pageConfig.defaultRoot + "/resource/modulescript/diagnostics/" + pageConfig.tjJsName,
                "map": pageConfig.defaultRoot + "/resource/modulescript/map/map.js?jv=" + pageConfig.jsVerson,
                "mapinfobox": pageConfig.defaultRoot + "/resource/modulescript/map/map_infobox",
                "maptool": pageConfig.defaultRoot + "/resource/modulescript/map/map_tool",
                "neibuTj": ("https:" == document.location.protocol ? "https://114.80.110.193/stat/" : "http://114.80.110.193/stat/") + "piwik",
                "jqueryQueryJ": pageConfig.defaultRoot + "/resource/modulescript/jqueryextend/jquery.query",
                "autocompleteJ": pageConfig.defaultRoot + "/resource/modulescript/jqueryextend/jquery.autocomplete.min",
                "jquerynearJ": pageConfig.defaultRoot + "/resource/modulescript/jqueryextend/jquery.near",
                "centaScrollJ": pageConfig.defaultRoot + "/resource/modulescript/jqueryextend/jquery.centaScroll",
                "spryMap": pageConfig.defaultRoot + "/resource/modulescript/jqueryextend/jquery.spryMap",
                "jquerySearchJ": pageConfig.defaultRoot + "/resource/modulescript/jqueryextend/jquery.search",
                "lazyloadJ": "http://libs.baidu.com/jquery-lazyload/1.9.5/jquery.lazyload.min",
                "wordlimit": pageConfig.defaultRoot + "/resource/modulescript/jqueryextend/jquery.wordlimit",
                "scrolltoJ": pageConfig.defaultRoot + "/resource/modulescript/jqueryextend/jquery.scrollto",
                "slidesJ": pageConfig.defaultRoot + "/resource/modulescript/jqueryextend/jquery.slides.min",
                "jqueryFormJ": pageConfig.defaultRoot + "/resource/modulescript/jqueryextend/jquery.form",
                "cookieJ": pageConfig.defaultRoot + "/resource/modulescript/jqueryextend/jquery.cookie",
                "floatJ": pageConfig.defaultRoot + "/resource/modulescript/jqueryextend/jquery.float",
                "faceboxJ": pageConfig.defaultRoot + "/resource/modulescript/jqueryextend/jquery.facebox",
                "powerSwitchJ": pageConfig.defaultRoot + "/resource/modulescript/jqueryextend/jquery-powerSwitch",
                "limittextJ": pageConfig.defaultRoot + "/resource/modulescript/jqueryextend/jquery.limittext",
                "blockSlideJ": pageConfig.defaultRoot + "/resource/modulescript/jqueryextend/jquery.blockSlide",
                "jqplotAllJ": pageConfig.defaultRoot + "/resource/modulescript/jqpolt/jquery.jqplot.all.min",
                "bigPicJ": pageConfig.defaultRoot + "/resource/modulescript/jqueryextend/jquery.bigPic",
                "jqprintJ": pageConfig.defaultRoot + "/resource/modulescript/jqueryextend/jquery.jqprint",
                "fancyboxJ": pageConfig.defaultRoot + "/resource/modulescript/jqueryextend/jquery.fancybox-1.3.4",
                "ratyJ": pageConfig.defaultRoot + "/resource/modulescript/jqueryextend/jquery.raty",
                "common": pageConfig.defaultRoot + "/resource/modulescript/common.js?jv=" + pageConfig.jsVerson,
                "setRewordBindAndClickM": pageConfig.defaultRoot + "/resource/modulescript/module/setRewordBindAndClickM.js?jv=" + pageConfig.jsVerson,
                "imgLazyOrReloadM": pageConfig.defaultRoot + "/resource/modulescript/module/imgLazyOrReloadM.js?jv=" + pageConfig.jsVerson,
                "weiboM": pageConfig.defaultRoot + "/resource/modulescript/module/weiboM.js?jv=" + pageConfig.jsVerson,
                "quickLoginM": pageConfig.defaultRoot + "/resource/modulescript/module/quickLoginM.js?jv=" + pageConfig.jsVerson,
                "showAndHideM": pageConfig.defaultRoot + "/resource/modulescript/module/showAndHideM.js?jv=" + pageConfig.jsVerson,
                "postListMouseMoveM": pageConfig.defaultRoot + "/resource/modulescript/module/postListMouseMoveM.js?jv=" + pageConfig.jsVerson,
                "ershoufangListM": pageConfig.defaultRoot + "/resource/modulescript/module/ershoufangListM.js?jv=" + pageConfig.jsVerson,
                "postAnyAjaxM": pageConfig.defaultRoot + "/resource/modulescript/module/postAnyAjaxM.js?jv=" + pageConfig.jsVerson,
                "listSelectM": pageConfig.defaultRoot + "/resource/modulescript/module/listSelectM.js?jv=" + pageConfig.jsVerson,
                "ershoufangDetailM": pageConfig.defaultRoot + "/resource/modulescript/module/ershoufangDetailM.js?jv=" + pageConfig.jsVerson,
                "ershoufangDetail2015M": pageConfig.defaultRoot + "/resource/modulescript/module/ershoufangDetailM2015.js?jv=" + pageConfig.jsVerson,
                "mapV": pageConfig.defaultRoot + "/resource/modulescript/view/mapV.js?jv=" + pageConfig.jsVerson,
                "map2015V": pageConfig.defaultRoot + "/resource/modulescript/view/map2015V.js?jv=" + pageConfig.jsVerson,
                "agentListV": pageConfig.defaultRoot + "/resource/modulescript/view/agentListV.js?jv=" + pageConfig.jsVerson,
                "SearchInfoWindownM": "http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min",
                "jingjirenViewV": pageConfig.defaultRoot + "/resource/modulescript/view/jingjirenViewV.js?jv=" + pageConfig.jsVerson,
                "ershoufangListV": pageConfig.defaultRoot + "/resource/modulescript/view/ershoufangListV.js?jv=" + pageConfig.jsVerson,
                "ershoufangListPostV": pageConfig.defaultRoot + "/resource/modulescript/view/ershoufangListSchoolV.js?jv=" + pageConfig.jsVerson,
                "xiaoquListV": pageConfig.defaultRoot + "/resource/modulescript/view/xiaoquListV.js?jv=" + pageConfig.jsVerson,
                "xiaoquDetailM": pageConfig.defaultRoot + "/resource/modulescript/module/xiaoquDetailM.js?jv=" + pageConfig.jsVerson,
                "chengjiaoListV": pageConfig.defaultRoot + "/resource/modulescript/view/chengjiaoListV.js?jv=" + pageConfig.jsVerson,
                "chengjiaoAutocompleteM": pageConfig.defaultRoot + "/resource/modulescript/module/chengjiaoAutocompleteM.js?jv=" + pageConfig.jsVerson,
                "chengjiaoChartM": pageConfig.defaultRoot + "/resource/modulescript/module/chengjiaoChartM.js?jv=" + pageConfig.jsVerson,
                "secondlistM": pageConfig.defaultRoot + "/resource/modulescript/module/secondlistM.js?jv=" + pageConfig.jsVerson,
                "sliderM": pageConfig.defaultRoot + "/resource/modulescript/module/sliderM.js?jv=" + pageConfig.jsVerson,
                "ershoufangDetail2015V": pageConfig.defaultRoot + "/resource/modulescript/view/ershoufangDetailV2015.js?jv=" + pageConfig.jsVerson,
                "ershoufangListSchoolV": pageConfig.defaultRoot + "/resource/modulescript/view/ershoufangListSchoolV.js?jv=" + pageConfig.jsVerson,
                "ershoufangDetailForDealV": pageConfig.defaultRoot + "/resource/modulescript/view/ershoufangDetailForDealV.js?jv=" + pageConfig.jsVerson,
                "chengjiaoContrastV": pageConfig.defaultRoot + "/resource/modulescript/view/chengjiaoContrastV.js?jv=" + pageConfig.jsVerson,
                "mendianListV": pageConfig.defaultRoot + "/resource/modulescript/view/mendianListV.js?jv=" + pageConfig.jsVerson,
                "metroMuitSelectM": pageConfig.defaultRoot + "/resource/modulescript/module/metroMuitSelectM.js?jv=" + pageConfig.jsVerson,
                "InfoBoxM": pageConfig.defaultRoot + "/resource/modulescript/module/InfoBoxM.js?jv=" + pageConfig.jsVerson,
                "maplibraryM": pageConfig.defaultRoot + "/resource/modulescript/module/maplibraryM.js?jv=" + pageConfig.jsVerson,
                "chengjiaoForEstateV": pageConfig.defaultRoot + "/resource/modulescript/view/chengjiaoForEstateV.js?jv=" + pageConfig.jsVerson,
                "moreDealRecordM": pageConfig.defaultRoot + "/resource/modulescript/module/moreDealRecordM.js?jv=" + pageConfig.jsVerson,
                "chengjiaoForStoreV": pageConfig.defaultRoot + "/resource/modulescript/view/chengjiaoForStoreV.js?jv=" + pageConfig.jsVerson,
                "formValidatorM": pageConfig.defaultRoot + "/resource/modulescript/module/formValidatorM.js?jv=" + pageConfig.jsVerson,
                "userCenterM": pageConfig.defaultRoot + "/resource/modulescript/module/userCenterM.js?jv=" + pageConfig.jsVerson,
                "userCenterLoginV": pageConfig.defaultRoot + "/resource/modulescript/view/userCenterLoginV.js?jv=" + pageConfig.jsVerson,
                "userRegisterV": pageConfig.defaultRoot + "/resource/modulescript/view/userRegisterV.js?jv=" + pageConfig.jsVerson,
                "userCenterForgetV": pageConfig.defaultRoot + "/resource/modulescript/view/userCenterForgetV.js?jv=" + pageConfig.jsVerson,
                "compareListV": pageConfig.defaultRoot + "/resource/modulescript/view/compareListV.js?jv=" + pageConfig.jsVerson,
                "compareListM": pageConfig.defaultRoot + "/resource/modulescript/module/compareListM.js?jv=" + pageConfig.jsVerson,
                "agentonlineV": pageConfig.defaultRoot + "/resource/modulescript/view/agentonlineV.js?jv=" + pageConfig.jsVerson,
                "entrustM": pageConfig.defaultRoot + "/resource/modulescript/module/entrustM.js?jv=" + pageConfig.jsVerson,
                "uploadM": pageConfig.defaultRoot + "/resource/modulescript/module/uploadM.js?jv=" + pageConfig.jsVerson,
                "onlinerequireV": pageConfig.defaultRoot + "/resource/modulescript/view/onlinerequireV.js?jv=" + pageConfig.jsVerson,
                "onlinesuccessV": pageConfig.defaultRoot + "/resource/modulescript/view/onlinesuccessV.js?jv=" + pageConfig.jsVerson,
                "xiaoqudetailV": pageConfig.defaultRoot + "/resource/modulescript/view/xiaoqudetailV.js?jv=" + pageConfig.jsVerson,
                "quyudetailV": pageConfig.defaultRoot + "/resource/modulescript/view/quyudetailV.js?jv=" + pageConfig.jsVerson,
                "gscopeDetailM": pageConfig.defaultRoot + "/resource/modulescript/module/gscopeDetailM.js?jv=" + pageConfig.jsVerson,
                "xiaoquImageV": pageConfig.defaultRoot + "/resource/modulescript/view/xiaoquImageV.js?jv=" + pageConfig.jsVerson,
                "listToMapM": pageConfig.defaultRoot + "/resource/modulescript/module/listToMapM.js?jv=" + pageConfig.jsVerson,
                "AgentCommentXfM": pageConfig.defaultRoot + "/resource/modulescript/module/agentCommentXfM.js?jv=" + pageConfig.jsVerson,
                "mendianEsfListV": pageConfig.defaultRoot + "/resource/modulescript/view/mendianEsfListV.js?jv=" + pageConfig.jsVerson,
                "postNearM": pageConfig.defaultRoot + "/resource/modulescript/module/postNearM.js?jv=" + pageConfig.jsVerson,
                "postNear2015M": pageConfig.defaultRoot + "/resource/modulescript/module/postNearM2015.js?jv=" + pageConfig.jsVerson,
                "mapautoM": pageConfig.defaultRoot + "/resource/modulescript/module/mapautoM.js?jv=" + pageConfig.jsVerson,
                "wendaListV": pageConfig.defaultRoot + "/resource/modulescript/view/wendaListV.js?jv=" + pageConfig.jsVerson,
                "wendaDetailV": pageConfig.defaultRoot + "/resource/modulescript/view/wendaDetailV.js?jv=" + pageConfig.jsVerson,
                "evaluateOnlineV": pageConfig.defaultRoot + "/resource/modulescript/view/evaluateonlineV.js?jv=" + pageConfig.jsVerson,
                "searchM": "/home/resource/modulescript/view/searchmain.js?jv=" + pageConfig.jsVerson,
                "mapdataM": pageConfig.defaultRoot + "/resource/modulescript/module/mapdataM.js?jv=" + pageConfig.jsVerson,
                "esfmap2015M": pageConfig.defaultRoot + "/resource/modulescript/map/esfmap2015.js?jv=" + pageConfig.jsVerson,
                "businessM": pageConfig.defaultRoot + "/resource/modulescript/module/businessCommonM.js?jv=" + pageConfig.jsVerson,
                "passpostMinNiLoginM": pageConfig.passpostUrl + "/resource/js/business/passport_minilogin.js?jv=" + pageConfig.jsVerson
            }
        });
    }
    /***************************************************************配置文件结束***************************************************************/
    /*执行文件加载   
    pageType 页面类型   
    paras 页面JS附加参数  
    loadOther 是否加载其他 */
    //页面配置参数
    var pageConfig = {
        jsVerson: "v20151203",
        pageType: "", //页面类型
        paras: "", //站内统计JS带的参数
        defaultRoot: "", //可能需要动态配置目录
        tjJsName: "", //统计代码读取配置文件
        cityName: "", //站点城市中文名
        mapKey: "", //地图KEY
        mapPostType: "",
        mapDeal: false,
        passpostUrl: ""
    };

    //按照页面类型调用不同的JS
    function typeToJs() {

        switch (pageConfig.pageType) {
            case "agentlist":
                requireArrayConfig.isSecondLoad = pageJsConfig.agentListJs;
                break;
            case "ershoufanglist":
                requireArrayConfig.isSecondLoad = pageJsConfig.ershoufangListJs;
                break;
            case "ershoufanglistpost":
                requireArrayConfig.isSecondLoad = pageJsConfig.ershoufangListPostJs;
                break;
            case "xiaoqulist":
                requireArrayConfig.isSecondLoad = pageJsConfig.xiaoquListJs;
                break;
            case "xiaoqudetail":
                requireArrayConfig.isSecondLoad = pageJsConfig.xiaoquDetailJs;
                break;
            case "chengjiaolist":
                requireArrayConfig.isSecondLoad = pageJsConfig.chengjiaoListJs;
                break;
            case "map":
                requireArrayConfig.isSecondLoad = pageJsConfig.mapJs;
                break;
            case "map2015":
                requireArrayConfig.isSecondLoad = pageJsConfig.map2015Js;
                break;
            case "ershoufangdetail2015":
                requireArrayConfig.isSecondLoad = pageJsConfig.ershoufangDetail2015js;
                break;
            case "ershoufanglistschool":
                requireArrayConfig.isSecondLoad = pageJsConfig.ershoufangListSchooljs;
                break;
            case "ershoufangdetailfordeal":
                requireArrayConfig.isSecondLoad = pageJsConfig.ershoufangDetailForDealJs;
                break;
            case "chengjiaocontrast":
                requireArrayConfig.isSecondLoad = pageJsConfig.chengjiaoContrastJs;
                break;
            case "jingjirenview":
                requireArrayConfig.isSecondLoad = pageJsConfig.jingjirenViewJs;
                break;
            case "mendianlist":
                requireArrayConfig.isSecondLoad = pageJsConfig.mendianListJs;
                break;
            case "mendianesflist":
                requireArrayConfig.isSecondLoad = pageJsConfig.mendianEsfListJs;
                break;
            case "chengjiaoforestate":
                requireArrayConfig.isSecondLoad = pageJsConfig.chengjiaoForEstateJs;
                break;
            case "chengjiaoforstore":
                requireArrayConfig.isSecondLoad = pageJsConfig.chengjiaoForStoreJS;
                break;
            case "usercenterlogin":
                requireArrayConfig.isSecondLoad = pageJsConfig.userCenterLoginJS;
                break;
            case "userregister":
                requireArrayConfig.isSecondLoad = pageJsConfig.userRegisterJS;
                break;
            case "usercenterforget":
                requireArrayConfig.isSecondLoad = pageJsConfig.userCenterForgetJS;
                break;
            case "comparelistview":
                requireArrayConfig.isSecondLoad = pageJsConfig.comparelistJS;
                break;
            case "agentonlineview":
                requireArrayConfig.isSecondLoad = pageJsConfig.agentonlineJS;
                break;
            case "onlinerequireview":
                requireArrayConfig.isSecondLoad = pageJsConfig.onlinerequireJS;
                break;
            case "onlinesuccessview":
                requireArrayConfig.isSecondLoad = pageJsConfig.onlinesuccessJS;
                break;
            case "quyudetailview":
                requireArrayConfig.isSecondLoad = pageJsConfig.quyudetailJS;
                break;
            case "xiaoquimageview":
                requireArrayConfig.isSecondLoad = pageJsConfig.xiaoquImageJS;
                break;
            case "wendaList":
                requireArrayConfig.isSecondLoad = pageJsConfig.wendaListJs;
                break;
            case "wendadetail":
                requireArrayConfig.isSecondLoad = pageJsConfig.wendaDetailJs;
                break;
            case "evaluateonlineview":
                requireArrayConfig.isSecondLoad = pageJsConfig.evaluateOnlineJs;
                break;
        }

    }

    //配置Require加载文件
    var requireArrayConfig = {
        defaultVal: ['jquery'], //（Common 会依赖JQUERY）  站点引用的公共JS 【无则使用空数组】
        loadZj: ['common', 'jqueryQueryJ', 'autocompleteJ'], //加载整站通用组件
        isFirstLoad: ['searchM'], //加载依赖于jquery的JS
        isSecondLoad: [], //加载依赖于common的JS  V层
        isAny: [] //设置一些外部JS 如百度地图,广告等  放置在最后执行

    }; // "RN4BZ-T7DA3-BA432-3HK3V-AWQ36-TBFS2"

    var num = 0;
    function getRequireArray() {
        //JS 配置带参数的统计JS
        requireJsConfig();
        typeToJs();

        var defaultVal = requireArrayConfig.defaultVal;
        var isFirst = requireArrayConfig.isFirstLoad;
        var isSecond = requireArrayConfig.isSecondLoad;
        var isAny = requireArrayConfig.isAny;
        var isZj = requireArrayConfig.loadZj;
        //首先加载框架以及COMMON

        require(defaultVal, function () {

            //加载整站通用组件
            require(isZj, function () {
                //加载Common等依赖jquery组件的
                require(isFirst, function () {
                    if (requireArrayConfig.isSecondLoad.length > 0) {
                        //加载页面JS依赖common的
                        require(isSecond, function () {

                            //加载推广或统计
                            if (isAny.length > 0) {
                                require(isAny, function () { });
                            }

                        });
                    } else {
                        //加载推广或统计
                        if (isAny.length > 0) {
                            require(isAny, function () { });
                        }
                    }
                });
            });
        });
    }
    var instance;
    var _static = {
        GetRequireArray: function () {
            if (instance === undefined) {
                instance = new getRequireArray();
            }
            return instance;
        },
        PageConfig: pageConfig
    };
    return _static;
})();

