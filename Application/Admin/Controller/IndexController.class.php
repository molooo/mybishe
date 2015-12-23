<?php
namespace admin\Controller;;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        if($_SESSION['admin_login']){

            $condition['id'] = $_SESSION['admin_id'];
            $Model_admin = D('admin');
            $result = $Model_admin -> islogin($condition);
            $this -> assign('adminname',$result['name']);
            $this -> display();
        }else{
            $this -> display('login');
        }
    }    
    public function login(){
        if($_POST['is_login']){
            $condition = array();
            $condition['Name'] = $_POST['Name'];
            $condition['Password'] = $_POST['Password'];    
            $Model_admin = D('admin');        
            $result = $Model_admin -> islogin($condition);
            $_SESSION['admin_login'] = 1;
            $_SESSION['admin_id'] = $result['id'];
            $this -> assign('adminname',$result['name']);
            if($result){
                $this -> display('index');
            }else{
                
            }
        }else{
            $this -> display('login');
        }
    }
}