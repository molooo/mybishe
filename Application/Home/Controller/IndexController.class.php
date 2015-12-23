<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this -> display();
    }
    public function reg(){
        $this -> display('register');
    }
    public function login(){
        $this -> display();
    }
    /*
     * 注册
     */
    public function reg_save(){
        $LoginName = $_POST['username'];
        $Password = $_POST['password'];
        $email = $_POST['email'];
        $model_user = D('User');
        $data = array(
            'LoginName' => $LoginName,
            'Password' => $Password,
            'email' => $email,
        );
       $result = $model_user -> AddUser($data);
        if($result){
            $_SESSION['LoginName'] = $LoginName;
            $_SESSION['is_login'] = true;
            $this -> success('注册成功','index','5');
        }
    }
    /*
     * 登录
     */
    public function LoginSave(){
        $LoginName = $_POST['username'];
        $Password = $_POST['password'];
        $condition = array(
            'LoginName' => $LoginName,
            'Password' => $Password,
        );
        $model_user = D('User');
        $result = $model_user -> getUserInfo($condition);
        if($result){
            $_SESSION['LoginName'] = $LoginName;
            $_SESSION['is_login'] = true;
           redirect('index');
        }else{
           $this -> error('用户名或密码错误','login','5');
        }
    }
    /*
     * 退出
     */
    public function loginout(){
        $_SESSION['LoginName'] = '';
        $_SESSION['is_login'] = false;
        redirect('index');
     }
    /*
     * 用户名存在性验证
     */
    public function Check_User(){
        if($_GET['LoginName']){
           $condition = array(
               'LoginName' => $_GET['LoginName'],
           );
            $model_user = D('User');
            $result = $model_user -> getUserInfo($condition);
            if($result) {
                echo "true";
            }else{
                echo "false";
            }
        }else{
            echo "false";
        }
    }
    /*
     * 邮箱存在性验证
     */
    public function Check_Email(){
        if($_GET['email']){
            $condition = array(
                'email' => $_GET['email'],
            );
            $model_user = D('User');
            $result = $model_user -> getUserInfo($condition);
            if($result) {
                echo "true";
            }else{
                echo "false";
            }
        }else{
            echo "false";
        }
    }
}