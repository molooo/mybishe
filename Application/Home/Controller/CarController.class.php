<?php
/**
 * Created by PhpStorm.
 * User: LI
 * Date: 2015/11/25
 * Time: 14:35
 */
namespace Home\Controller;
use Think\Controller;
use Home\Model;

class CarController extends Controller{
   public function index(){
       $model_admin = D('PetNote');
       $model_admin -> select();
       $this -> display('index');
   }
    public function home(){
        $this -> display();
   }
   public function buy(){
       $this -> display('buy');
   }
   public function sell01(){
    $backurl = empty($_SERVER['HTTP_REFERER']) && strstr($_SERVER['HTTP_REFERER'], 
           $_SERVER['HTTP_HOST']) ?  '#' : $_SERVER['HTTP_REFERER'];
        $this->assign('backurl', $backurl);
       $this -> display('sell01');
   }
   public function sell02(){
        $backurl = empty($_SERVER['HTTP_REFERER']) && strstr($_SERVER['HTTP_REFERER'], 
           $_SERVER['HTTP_HOST']) ?  '#' : $_SERVER['HTTP_REFERER'];
        $this->assign('backurl', $backurl);
    if(($_SESSION['LoginName'])&&($_SESSION['is_login'])) {
      $this->display('sell02');
    }else{
      $this -> error('请先登陆');
    } 
   }
   public function sellsumbit(){
    $add_list = D('Car');
    $condition=array(
      'brand'       =>  $_POST['p_brand'],
      'carname'     =>  $_POST['p_name'],
      'model'       =>  $_POST['p_model'],
      'price'       =>  $_POST['p_price'],
      'color'       =>  $_POST['p_color'],
      'gas'         =>  $_POST['p_gas'],
      'transmission'=>  $_POST['p_transmission'],
      'year'        =>  $_POST['p_year'],
      'month'       =>  $_POST['p_month'],
      'kilometre'   =>  $_POST['p_kilometre'],
      'country'     =>  $_POST['p_country'],
      'image'       =>  $_SESSION['file'],
      'exatime'     =>  $_POST['p_exatime'],
      'securedate'  =>  $_POST['p_securedate'],
      'tax'         =>  $_POST['p_tax'],
      'productiontime'=>$_POST['p_productiontime'],
      'details'     =>  $_POST['p_details'],
      'username'    =>  $_POST['p_username'],
      'tel'         =>  $_POST['p_tel'],
      'send_name'   =>  $_SESSION['LoginName'],
      'send_time'   =>  time(),    
    );
    $car_add=$add_list->AddCar($condition);    
    echo "
    <link rel='stylesheet' href='/graduate/Application/Public/css/sweet-alert.css'>
    <script type='text/javascript' src='/graduate/Application/Public/js/sweet-alert.min.js'></script>
    <script> swal('Success!', 'You clicked the button!', 'success')</script>";
    } 
  }
