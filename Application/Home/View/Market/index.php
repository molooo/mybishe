<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="__PUBLIC__/css/Market/main.css"  rel="stylesheet" type="text/css"/>
    <link href="__PUBLIC__/css/Market/bgcolor.css"  rel="stylesheet" type="text/css"/>
    <script src="__PUBLIC__/js/jquery.js"></script>
    <script src="__PUBLIC__/js/sweet-alert.min.js"></script>
    <link href="__PUBLIC__/css/sweet-alert.css"  rel="stylesheet" type="text/css"/>
    <script src="__PUBLIC__/js/Marketmain.js"></script>
    <script src="__PUBLIC__/js/ajaxupload.js"></script>
    <script>
		var APP = "__APP__";//网站目录
		var PUBLIC = "__PUBLIC__";//文件目录
		var LoginName = '<?php echo $_SESSION['LoginName'];?>';//登录名
		var Loginid = '';//登录ID
		var is_login = '<?php echo $_SESSION['is_login'];?>';//判断登录
		var area_arr = eval(<?php echo $area;?>);//地区数组
		var classes_arr = eval(<?php echo $classes;?>);//类别数组
		var older_arr = eval(<?php echo $older;?>);//新旧数组
		var offset = 0;
		var page = 1;
		var tag_text = '首页随机信息';
		var select_area = 0;
		var select_older = 0;
		var select_class = 0;
		var area1_name,area2_name,area3_name,area1_val,area2_val,area3_val,class1_name,class2_name,class1_val,class2_val,area_level,class_level,older_val,older_name,key;
		var older_str = '';    
		var area1_str = ''; 
		var area2_str = ''; 
		var area3_str = '';  
		var class1_str = ''; 
		var class2_str = ''; 
		var content_state = 1;
		var menu_type = '';
		var pricearea1,pricearea2;
		var lock_flag;
		var ordertype;
    </script>
</head>
<body>
    <pape>
        <top_menu>
        </top_menu>
        <menu>
            <logo><img src="__PUBLIC__/img/logofooter.png"/></logo>
            <user class="bgcolor1">
                <loginbtn>登录</loginbtn>
                <registerbtn>注册</registerbtn>
            </user>
            <search class="bgcolor1">
                <unit bs_type="search">搜索:<input type="text" id="search"></unit>
                <unit bs_type="kind">类型</unit>
                <unit bs_type="area">地区</unit>
                <unit bs_type="older">新旧</unit>
                <unit bs_type="price">价格</unit>
                <unit bs_type="sort">排序</unit>
            </search>
        </menu>
        <menu_ex level="1"></menu_ex>
        <menu_ex level="2"></menu_ex>
        <menu_ex level="3"></menu_ex>
        <content class="bgcolor2 scrollbar">
            <tag></tag>
            <?php foreach($marketInfo as $val){?>
            <unit bs_type='<?php echo $val['id'];?>'>
                <img src="__PUBLIC__/img/<?php echo $val['img'];?>" width="200" height="200"/>
                <info>
                    <title><?php echo $val['title'];?></title>
                    <detail>
                        <text><?php echo $val['content'];?></text>
                        <price>￥<?php echo $val['price'];?></price>
                        <collect>加入收藏</collect>
                    </detail>
                </info>
            </unit>
            <?php }?>
        </content>
        
        <detailinfo>
            <img/>
            <title></title>
            <text></text>
            <detail>
                <unit>类别：<classes_name></classes_name></unit>
                <unit>地区：<area_name></area_name></unit>
                <unit>联系人称呼：<name></name></unit>
                <unit>新旧：<older></older></unit>
                <unit>联系电话：<phone></phone></unit>
                <unit>状态：<state></state></unit>
                <unit>发布时间：<starttime></starttime></unit>
                <unit>结束时间：<endtime></endtime></unit>
                <unit>价格：￥<price></price></unit>
                <unit><collect>加入收藏</collect></unit>
            </detail>
        </detailinfo>
        <publishinfo>
            <img/>
            <unit><uth>标题：</uth><utd><input type="text" id="publish_title"/></utd></unit>
            <unit><uth>类别：</uth><utd><select id="publish_class1"></select><select id="publish_class2"></select></utd></unit>
            <unit><uth>地区：</uth><utd><select id="publish_area1"></select><select id="publish_area2"></select><select id="publish_area3"></select></utd></unit>
            <unit><uth>联系人称呼：</uth><utd><input type="text" id="publish_name"/></utd></unit>
            <unit><uth>新旧：</uth><utd><select id="publish_older"></select></utd></unit>
            <unit><uth>联系电话：</uth><utd><input type="text" id="publish_phone"/></utd></unit>
            <unit><uth>价格：</uth><utd><input type="text" id="publish_price"/></utd></unit>
            <unittext><uth>描述：</uth><utd><textarea id="publish_content"></textarea></utd></unittext>
            <unit><uth>图片：</uth><utd><input type="button" value="上传图片" id="imgupload" /><input type="hidden" value="" id="selector"/></utd><unit>
            <submit>发布信息</submit>
            <exit>×</exit>
        </publishinfo>
        <personinfo>
            <unit><uth>UID:</uth><utd><UID></UID></utd></unit>
            <unit><uth>用户昵称:</uth><utd><Name></Name></utd></unit>
            <unit><uth>登录名:</uth><utd><LoginName></LoginName></utd></unit>
            <unit><uth>经验:</uth><utd><EXP></EXP></utd></unit>
            <unit><uth>手机号:</uth><utd><PHONE></PHONE></utd></unit>
            <unit><uth>邮箱:</uth><utd><EMAIL></EMAIL></utd></unit>
        </personinfo>
        <shade></shade>
        <alert></alert>
    </pape>
</body>
</html>
<?php //var_dump($_SESSION['test']);?>