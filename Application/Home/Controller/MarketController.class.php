<?php
/**
 * Created by Zend Studio.
 * User: Elegy
 * Date: 2015/12/3
 * Time: 17:24
 */
namespace Home\Controller;
use Think\Controller;
class MarketController extends Controller{
   public function index(){
       $area = $this -> getArea();
       $classes = $this -> getClasses();
       $older = $this -> getOlder();
       $marketInfo = $this -> getMarketInfo();

       $this->assign('older',$older);
       $this->assign('classes',$classes);
       $this->assign('marketInfo',$marketInfo);
       $this->assign('area',$area);
       $this->display('index');
   }
   
   /**
    * ajax 登陆
    */
   public function ajaxLogin(){
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
           $_SESSION['Loginid'] = $result['id'];
           $_SESSION['is_login'] = true;
           echo json_encode($result);
       }else{
           echo false;
       }
   }
   
   /**
    * ajax 自动登录
    */
   public function ajaxLogin2(){
       $LoginName = $_POST['LoginName'];
       $condition = array(
           'LoginName' => $LoginName,
       );
       $model_user = D('User');
       $result = $model_user -> getUserInfo($condition);
       if($result){
           $_SESSION['LoginName'] = $LoginName;
           $_SESSION['Loginid'] = $result['id'];
           $_SESSION['is_login'] = true;
           echo json_encode($result);
       }else{
           echo false;
       }
   }
   
   /**
    * ajax 注册
    */
   public function ajaxRegister(){
       $LoginName = $_POST['name'];
       $username = $_POST['username'];
       $Password = $_POST['password'];
       $email = $_POST['email'];
       $model_user = D('User');
       $data = array(
           'LoginName' => $LoginName,
           'Name' => $username,
           'Password' => $Password,
           'email' => $email,
       );
       $result = $model_user -> AddUser($data);
       if($result){
           $_SESSION['LoginName'] = $LoginName;
           $_SESSION['Loginid'] = $result;
           $_SESSION['is_login'] = true;
           $condition = array(
               'Id' => $result,
           );
           $result = $model_user -> getUserInfo($condition);
           echo json_encode($result);
       }
   }
   
   /**
    * ajax 验证用户名是否重复
    */
   public function ajaxVerUserName(){
       $LoginName = $_POST['username'];
       $condition = array(
           'LoginName' => $LoginName,
       );
       $model_user = D('User');
       $result = $model_user -> getUserInfo($condition);
       if($result) {
           echo "true";
       }else{
           echo "false";
       }
   }
   
   /**
    * ajax 注销
    */
   public function ajaxLoginOut(){
       unset($_SESSION['LoginName']);
       unset($_SESSION['is_login']);
       unset($_SESSION['Loginid']);
       echo true;
   }
   
   /**
    * ajax 商品列表获取
    */
   public function ajaxGetMarketInfo(){
       $order = 'rand()';
       $condition = $this -> getCondition();
       $offset = $_POST['offset'];
       $result = $this -> getMarketInfo($condition,$offset,$order);
       echo json_encode($result);
   }
   
   /**
    * ajax 商品详细信息
    */
   public function ajaxGetDetailInfo(){
       $condition = array('ID' => intval($_POST['id']));
       $model_market = D('Market');
       $result = $model_market -> getMarketInfo($condition);
       echo json_encode($result);
   }
   
   /**
    * ajax 商品发布信息
    */
   public function ajaxPublishInfo(){
       $publish_uid = $_POST['publish_uid'];
       $publish_title = $_POST['publish_title'];
       $publish_classes = $_POST['publish_classes'];
       $publish_classes_name = $_POST['publish_classes_name'];
       $publish_area = $_POST['publish_area'];
       $publish_area_name = $_POST['publish_area_name'];
       $publish_name = $_POST['publish_name'];
       $publish_older = $_POST['publish_older'];
       $publish_userid = $_POST['publish_userid'];
       $publish_older_name = $_POST['publish_older_name'];
       $publish_phone = $_POST['publish_phone'];
       $publish_price = $_POST['publish_price'];
       $publish_content = $_POST['publish_content'];
       $publish_img = $_POST['publish_img'];
       
       $model_market = D('Market');
       $data = array(
           'classes' => $publish_classes,
           'title' => $publish_title,
           'content' => $publish_content,
           'price' => $publish_price,
           'phone' => $publish_phone,
           'area' => $publish_area,
           'starttime' => time(),
           'userid' => $publish_userid,
           'name' => $publish_name,
           'img' => $publish_img,
           'older' => $publish_older,
           'older_name' => $publish_older_name,
           'classes_name' => $publish_classes_name,
           'area_name' => $publish_area_name,
       );
       if($publish_uid){
           $condition = array();
           $condition['ID'] = $publish_uid;
           $result = $model_market -> editMarket($condition,$data);
           if($result){
               $result = array();
               $result['state'] = 'true';
               $result['img'] = $publish_img;
               $result['title'] = $publish_title;
               $result['content'] = $publish_content;
               $result['price'] = $publish_price;
               $result['area_name'] = $publish_area_name;
               echo json_encode($result);
           }else{
               echo false;
           }
       }else{
           $result = $model_market -> AddMarket($data);
           if($result){
               echo true;
           }else{
               echo false;
           }
       }       
       
   }
   /**
    * ajax 上传图片
    */
   public function ajaxImgUpload(){
       if(count($_FILES) > 0)
       {
           $f = $_FILES['file'];
           $filename = md5(uniqid(rand())) . '_' . $f['name'];
           $allname = './public/img/Market/info/'.$filename; 
           move_uploaded_file($f['tmp_name'], $allname);
           $result[] = 'success';
           $result[] = __ROOT__.'/public/img/Market/info/'.$filename;
           $result[] = '/Market/info/'.$filename;
           echo json_encode($result);
       }
   }
   
   /**
    * ajax 查看个人发布的信息
    */
   public function ajaxGetCheckInfo(){
       $condition = array('userid' => $_SESSION['Loginid']);
       $order = null;
       $condition = $this -> getCondition($condition);
       $offset = $_POST['offset'];
       $result = $this -> getMarketInfo($condition,$offset,$order);
       echo json_encode($result);
   }
   
   /**
    * ajax 个人删除信息
    */
   public function ajaxDeleteInfo(){
       $condition = array('ID' => intval($_POST['id']));
       $model_market = D('Market');
       $result = $model_market -> getMarketInfo($condition);
       if($result['userid'] == $_SESSION['Loginid']){
           $result = $model_market -> delMarket($condition);
           if($result){
               echo true;
           }else{
               echo false;
           }
       }else{
           echo false;
       }
   }
   
   /**
    * ajax 查看个人收藏信息
    */
   public function ajaxGetCollect(){
       $model =  D('Collect');
       $offset = $_POST['offset'];
       $SQL = 'SELECT * FROM collect as a,market as b WHERE a.infoid = b.ID and a.userid = "'.$_SESSION['Loginid'];
       if($_POST['select_area'])
       {
           $SQL.= ' and b.area like %,' . $_POST['select_area'] . ',%';
       }
       if($_POST['select_class'])
       {
           $SQL.= ' and b.classes like %' . $_POST['select_class'] . ',%';
       }
       if($_POST['select_older'])
       {
           $SQL.= ' and older ' . $_POST['select_older'];
       }
       if($_POST['pricearea1'] && $_POST['pricearea2']){
           $SQL.= ' and price between('.$_POST['pricearea1'].','.$_POST['pricearea2'].')';
       }else if(!$_POST['pricearea1'] && $_POST['pricearea2']){
           $SQL.= ' and price < '.$_POST['pricearea2'];
       }else if($_POST['pricearea1'] && !$_POST['pricearea2']){
           $SQL.= ' and price > '.$_POST['pricearea1'];
       }
       if($_POST['key'])
       {
           $where['title'] = array('like','%'.$_POST['key'].'%');
           $where['content'] = array('like','%'.$_POST['key'].'%');
           $where['_logic'] = 'or';
           $condition['_complex'] = $where;
       }
       
       
       $SQL.='" LIMIT '.$offset.',20';
       
       
       $result = $model ->query($SQL);
       if($result){
           echo json_encode($result);
       }else{
           echo false;
       }
       
   }
   
   /**
    * ajax 加入收藏
    */
   public function ajaxCollect(){
       $condition = array();
       $condition['userid'] = $_SESSION['Loginid'];
       $condition['infoid'] = $_POST['id'];
       $model_collect = D('Collect');
       $result = $model_collect -> getCollectInfo($condition);
       if(!$result){
           $result = $model_collect -> addCollect($condition);
           echo true;
       }else{
           echo false;
       }
   }
   /**
    * ajax 查询个人信息
    */
   public function ajaxGetPersonInfo(){
       $model_user = D('User');
       $result = $model_user -> getUserInfo(array('id' => $_SESSION['Loginid']));
       echo json_encode($result);
   }
   
   /**
    * 获得商品列表
    */
   public function getMarketInfo($condition = Null,$offset = 0,$order = 'rand()'){
       $model_market = D('Market');
       $result = $model_market -> getMarketList($condition,$offset,$order);
       return $result;
   }
   
   /**
    * 获得新旧种类
    */
   public function getOlder(){
       $model_older = D('Older');
       $result = $model_older -> getOlder();
       return json_encode($result);
   }
   
   /**
    * 获得新旧种类
    */
   public function getClasses(){
       $model_Classes = D('Classes');
       $result = $model_Classes -> getClasses();
       $arr = array();
       foreach($result as $val)
       {
           if($val['parent_id'] == 0){
               $arr[$val['id']] = $val;
           }else{
               if($arr[$val['parent_id']]){
                   $arr[$val['parent_id']][$val['id']] = $val;
               }
           }
       }
       
       return json_encode($arr);
   }
   
   /**
    * 获得地区
    */
   public function getArea(){
       $model_area = D('Area');
       $result = $model_area -> getArea();
       $arr = array();
       foreach($result as $val)
       {
           if($val['area_deep'] != 3){
               unset($val['area_region']);
               unset($val['area_sort']);
               unset($val['area_deep']);
               if($val['area_parent_id'] == 0){
                   $arr[$val['area_id']] = $val;
               }else{
                   $arr[$val['area_parent_id']][$val['area_id']] = $val;
               }
           }else{
               unset($val['area_region']);
               unset($val['area_sort']);
               unset($val['area_deep']);
               foreach($arr as $k=>$v){
                   foreach($v as $kk=>$vv){
                       if(is_array($vv)){
                           if($kk == $val['area_parent_id'])
                           {
                               $arr[$k][$kk][$val['area_id']] = $val ;
                           }
                       }
                   }
               }
           }
       }
       
       return json_encode($arr);
   }
   
   /**
    * 获得查询条件
    */
   public function getCondition($condition = array()){
       if($_POST['select_area'])
       {
           $condition['area'] = array('like','%,' . $_POST['select_area'] . ',%');
       }
       if($_POST['select_class'])
       {
           $condition['classes'] = array('like','%,' . $_POST['select_class'] . ',%');
       }
       if($_POST['select_older'])
       {
           $condition['older'] = $_POST['select_older'];
       }
       if($_POST['pricearea1'] && $_POST['pricearea2']){
           $condition['price'] = array('between',array($_POST['pricearea1'],$_POST['pricearea2']));
       }else if(!$_POST['pricearea1'] && $_POST['pricearea2']){
           $condition['price'] = array('lt',$_POST['pricearea2']);
       }else if($_POST['pricearea1'] && !$_POST['pricearea2']){
           $condition['price'] = array('gt',$_POST['pricearea1']);
       }
       if($_POST['key'])
       {
           $where['title'] = array('like','%'.$_POST['key'].'%');
           $where['content'] = array('like','%'.$_POST['key'].'%');
           $where['_logic'] = 'or';
           $condition['_complex'] = $where;
       }
       return $condition;
   }
}