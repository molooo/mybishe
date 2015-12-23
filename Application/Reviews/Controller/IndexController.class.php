<?php
namespace Reviews\Controller;
use Think\Controller;
header("content-type:text/html;charset=utf-8");

class IndexController extends Controller {

    public function index(){
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
        //echo "review";
        // $this -> display('Reviews/Test/index');
        $this -> display('index');
        // 'Reviews/Test/index'
        //$this->RewriteTest();
        // $username='zigzag';
        // $email='zigzag@szz.com';
        // $age=21;
        // $birthday_year=1994;

        // $user = array(
        // 	'user'=>$username,
        // 	'mail'=>$email,
        // 	'age'=>$age
        // );

        // $this->assign('user',$user);
        // $this->assign('birthday_year',$birthday_year);

        // $fetchContent=$this->fetch();
        // $fetchContent=str_replace('szz', 'super', $fetchContent);

        // $this->show($fetchContent);

        // $this->assign('user',$username);
        // $this->assign('mail',$email);
        // $this->assign('age',$age);

        // $this->display();
    }
    // private function RewriteTest(){
    //    	header("content-type:text/html;charset=utf-8");
    //     echo "当前的url模式是:".C('URL_MODEL');
    //     echo "<hr>";

    //     echo "<a href=\"".U('Reviews/Test/index')."\">".U('Reviews/Index/index')."</a>";
    //     echo "<hr>";

    //     echo "<a href=\"".U('Reviews/Test/edit')."\">".U('Reviews/Test/edit')."</a>";
    //     echo "<hr>";

    //     echo "<a href=\"".U('Reviews/Test/login')."\">".U('Reviews/Test/login')."</a>";
    //     echo "<hr>";
    // }
}