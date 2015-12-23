<?php
/**
 * Created by PhpStorm.
 * User: LI
 * Date: 2015/11/25
 * Time: 14:35
 */
namespace Home\Controller;
use Think\Controller;
use Home\Model\HousemessageModel;
use Home\Model\houseliaotianModel;
class HouseController extends Controller{
   public function index(){
       $this->display('index');
   }
   public function fabu(){
   	if(($_SESSION['LoginName'])&&($_SESSION['is_login'])) {
   		$this->display('public');
   	}else{
   		$this -> error('请先登陆');
   	}	
   }
   public function fabuadd(){
   	if ($_POST['leixing']==1&&$_POST['leixing']==2){
   	$add_list = new HousemessageModel();
   	$add_list = D('housemessage');
   	$condition=array(
   		'leixing'=>$_POST['leixing'],
   		'housename'=>$_POST['housename'],
   		'houseprice'=>$_POST['houseprice'],
   		'amountprice'=>$_POST['amountprice'],
   		'houseaddress'=>$_POST['houseaddress'],
   		'shi'=>$_POST['shi'],
   		'ting'=>$_POST['ting'],
   		'wei'=>$_POST['wei'],
   		'image1'=>$_POST['image1'],
   		'chicun'=>$_POST['chicun'],
   		'lianxirenid'=>$_SESSION['LoginName'],
   		'lianxirenname'=>$_POST['lianxirenname'],
   		'phone'=>$_POST['phone']
   			
   	);
   	$houst_add=$add_list->AddHousemessage($condition);   	
   	if ($houst_add){
   		echo "<script>alert('success!!!');history.back();</script>";
   	}   
   	}else{
   		$add_list = new HousemessageModel();
   		$add_list = D('housemessage');
   		$condition=array(
   				'leixing'=>3,
   				'housename'=>$_POST['housename'],
   				'amountprice'=>$_POST['amountprice'],
   				'houseaddress'=>$_POST['houseaddress'],
   				'shi'=>$_POST['shi'],
   				'ting'=>$_POST['ting'],
   				'wei'=>$_POST['wei'],
   				'image1'=>$_POST['image1'],
   				'chicun'=>$_POST['chicun'],
   				'lianxirenid'=>$_SESSION['LoginName'],
   				'lianxirenname'=>$_POST['lianxirenname'],
   				'phone'=>$_POST['phone']
   		
   		);
   		$houst_add=$add_list->AddHousemessage($condition);
   		if ($houst_add){
   			echo "<script>alert('success!!!');history.back();</script>";
   		}
   	}	
   }
   public function newfabu(){
   	if(($_SESSION['LoginName']=='wangcong')&&($_SESSION['is_login'])) {
   		$condition=array(
   			'LoginName'=>$_SESSION['LoginName']
   		);
   		$user_list = D('User');   		 
   		$data = $user_list->where($condition)->select();
   		if ($data[0]['password']=='wangcong'){
   		$this->assign('leixing',3);   			
   		$this->display('public');
   		}else{
   			$this -> error('请先登陆管理员账户');   			
   		}
   	}else{
   		$this -> error('请先登陆管理员账户');
   	}
   }
   public function house_list(){
   	$house_list = new HousemessageModel();
   	$condition=array(
   		'leixing'=>$_GET['leixing']
   	);
   	$data = $house_list->where($condition)->select();
   	$this->assign('leixing',$_GET['leixing']);   
   	$this->assign('moren','moren');
   	$this->assign('house_list',$data);
   	$this->display('newhouse');
   }
   public function tuan(){
   	$house_list = new HousemessageModel();
   	$condition=array(
   			'leixing'=>3
   	);
   	$data = $house_list->where($condition)->select();
   	$this->assign('house_list',$data);
   	$this->display('tuan');
   }
   public function kefu(){
   	$houseliaotian_model = new houseliaotianModel();
   	$houseliaotian_model = D('houseliaotian');
   	if ($_POST['content']!=null){
   		if(($_SESSION['LoginName'])&&($_SESSION['is_login'])) {
   			$condition=array(
   			'content'=>$_POST['content'],
   			'sendname'=>$_SESSION['LoginName'],
   			'receivename'=>$_GET['lianxirenid']
   			);
   	$houstliaotian_add=$houseliaotian_model->AddHouseliaotian($condition);
   		}else{
   			$this -> error('请先登陆');
   		}
   	}
   	$condition1 = array(
   		'sendname'=>$_SESSION['LoginName'],//去的信息
   		'receivename'=>$_GET['lianxirenid']
   	);
   	$condition2=array(
   			'receivename'=>$_SESSION['LoginName'],   			//来的信息
   			'sendname'=>$_GET['lianxirenid']
   	);
   	$condition3=array($condition1,$condition2,'_logic'=>'or');
   	$liaotian_list = $houseliaotian_model->GetLiaotianList($condition3);
   	$keysvalue= $new_array= array();
   	foreach($liaotian_list as $k=>$v){
   		$keysvalue[$k] = $v['time'];
   	}
   	asort($keysvalue);
   	reset($keysvalue);
   	foreach($keysvalue as $k=>$v){
   		$new_array[$k] = $liaotian_list[$k];
   	}
   	$this->assign('liaotian_list',$new_array);
   	$this->assign('lianxirenid',$_GET['lianxirenid']);
   	$this->assign('housename',$_GET['housename']);
   	$this->assign('houseprice',$_GET['houseprice']);
   	$this->display('kefu');
   }
   public function detail(){
   	$house_list = new HousemessageModel();
   	$condition=array(
   		'id'=>$_GET['houseid']
   	);
   	$data = $house_list->where($condition)->select();
   	$this->assign('detail_list',$data);   	
   	$this->display('detail');
   }
   public function zuixin(){
   	$house_list = new HousemessageModel();
   	$condition=array(
   			'leixing'=>$_GET['leixing']
   	);
   	$data = $house_list->where($condition)->select();
   	$keysvalue= $new_array= array();
   	foreach($data as $k=>$v){
   		$keysvalue[$k] = $v['time'];
   	}
   	arsort($keysvalue);
   	reset($keysvalue);
   	foreach($keysvalue as $k=>$v){
   		$new_array[$k] = $data[$k];
   	}
   	$this->assign('leixing',$_GET['leixing']);
   	$this->assign('moren','zuixin');
   	$this->assign('house_list',$new_array);
   	$this->display('newhouse');
   }
   public function zongjia(){
   	$house_list = new HousemessageModel();
   	$condition=array(
   			'leixing'=>$_GET['leixing']
   	);
   	$data = $house_list->where($condition)->select();
   	$keysvalue= $new_array= array();
   	foreach($data as $k=>$v){
   		$keysvalue[$k] = $v['amountprice'];
   	}
   	asort($keysvalue);
   	reset($keysvalue);
   	foreach($keysvalue as $k=>$v){
   		$new_array[$k] = $data[$k];
   	}
   	$this->assign('leixing',$_GET['leixing']);
   	$this->assign('moren','zongjia');
   	$this->assign('house_list',$new_array);
   	$this->display('newhouse');
   }
   public function chicun(){
   	$house_list = new HousemessageModel();
   	$condition=array(
   			'leixing'=>$_GET['leixing']
   	);
   	$data = $house_list->where($condition)->select();
   	$keysvalue= $new_array= array();
   	foreach($data as $k=>$v){
   		$keysvalue[$k] = $v['chicun'];
   	}
   	asort($keysvalue);
   	reset($keysvalue);
   	foreach($keysvalue as $k=>$v){
   		$new_array[$k] = $data[$k];
   	}
   	$this->assign('leixing',$_GET['leixing']);
   	$this->assign('moren','chicun');
   	$this->assign('house_list',$new_array);
   	$this->display('newhouse');
   }
   public function search(){
   	$house_list = new HousemessageModel();
   	$condition=array();
   	$condition['housename']=array('like',array('%'.$_POST['search_content'].'%'),'OR');
   	$condition['leixing']=$_GET['leixing'];
   	$data = $house_list->where($condition)->select();
   	$this->assign('leixing',$_GET['leixing']);
   	$this->assign('keyword',$_POST['search_content']);
   	$this->assign('house_list',$data);
   	$this->display('newhouse');
   }
   public function hyzx(){
   	$houseliaotian_model = new houseliaotianModel();
   	$houseliaotian_model = D('houseliaotian');
   	if(($_SESSION['LoginName'])&&($_SESSION['is_login'])) {
			
   		$condition1 = array(
   				'sendname'=>$_SESSION['LoginName'],//去的信息
   		);
   		$condition2=array(
   				'receivename'=>$_SESSION['LoginName'],   			//来的信息
   		);
   		$condition3=array($condition1,$condition2,'_logic'=>'or');
   		$liaotian_list = $houseliaotian_model->GetLiaotianList($condition3);
   		$keysvalue= $new_array= array();
   		foreach($liaotian_list as $k=>$v){
   			$keysvalue[$k] = $v['time'];
   		}
   		asort($keysvalue);
   		reset($keysvalue);
   		foreach($keysvalue as $k=>$v){
   			$new_array[$k] = $liaotian_list[$k];
   		}
   		$shu =array();
   		foreach($new_array as $key=>$value){
   			if ($value['sendname']==$_SESSION['LoginName']){
   				$shu[$key] = $new_array[$key]['receivename'];
   			}elseif ($value['receivename']==$_SESSION['LoginName']){
   		   		$shu[$key] = $new_array[$key]['sendname'];
   			}
   		}
   		$shu1 = array_unique($shu);
 		   	$this->assign('liaotian_list',$shu1);
  		   	$this->display('hyzx');
   	}else{
   		$this -> error('请先登陆');
   	}
   }
   public function jilu(){
   	$houseliaotian_model = new houseliaotianModel();
   	$houseliaotian_model = D('houseliaotian');
   		if(($_SESSION['LoginName'])&&($_SESSION['is_login'])) {
   			$condition1 = array(
   					'sendname'=>$_SESSION['LoginName'],//去的信息
   					'receivename'=>$_GET['receivename']
   			);
   			$condition2=array(
   					'receivename'=>$_SESSION['LoginName'],   			//来的信息
   					'sendname'=>$_GET['receivename']
   			);
   			$condition3=array($condition1,$condition2,'_logic'=>'or');
   			$liaotian_list = $houseliaotian_model->GetLiaotianList($condition3);
   			$keysvalue= $new_array= array();
   			foreach($liaotian_list as $k=>$v){
   				$keysvalue[$k] = $v['time'];
   			}
   			asort($keysvalue);
   			reset($keysvalue);
   			foreach($keysvalue as $k=>$v){
   				$new_array[$k] = $liaotian_list[$k];
   			}
   			$this->assign('liaotian_list',$new_array);
   			$this->display('jilu');
   		}else{
   			$this -> error('请先登陆');
   	} 
   }
   public function huifu(){
   	$houseliaotian_model = new houseliaotianModel();
   	$houseliaotian_model = D('houseliaotian');
   	if(($_SESSION['LoginName'])&&($_SESSION['is_login'])) {
   		$condition1 = array(
   				'sendname'=>$_SESSION['LoginName'],//去的信息
   				'receivename'=>$_GET['receivename']
   		);
   		$condition2=array(
   				'receivename'=>$_SESSION['LoginName'],   			//来的信息
   				'sendname'=>$_GET['receivename']
   		);
   		$condition3=array($condition1,$condition2,'_logic'=>'or');
   		$liaotian_list = $houseliaotian_model->GetLiaotianList($condition3);
   		$keysvalue= $new_array= array();
   		foreach($liaotian_list as $k=>$v){
   			$keysvalue[$k] = $v['time'];
   		}
   		asort($keysvalue);
   		reset($keysvalue);
   		foreach($keysvalue as $k=>$v){
   			$new_array[$k] = $liaotian_list[$k];
   		}
   		$this->assign('liaotian_list',$new_array);
   		$this->assign('receivename',$_GET['receivename']);
   		$this->display('huifu');
   	}else{
   		$this -> error('请先登陆');
   	}
   }
   public function guanli(){
   	$house_list = new HousemessageModel();
   	$house_list = D('housemessage');
   	if(($_SESSION['LoginName'])&&($_SESSION['is_login'])) {
   		$condition=array(
               'lianxirenid'=>$_SESSION['LoginName']   		
   		);
   		$data = $house_list->where($condition)->select();  
   		$this->assign('house_list',$data);
   		$this->display('guanli');
   	}else{
   		$this -> error('请先登陆');
   	}
   }
   public function edithouse(){
   	$house_list = new HousemessageModel();
   	$house_list = D('housemessage');
   	$condition=array(
   			'id'=>$_GET['houseid']
   	);
   	$data = $house_list->where($condition)->select();
   	$this->assign('house_message',$data);
   	$this->display('edithouse');
   }
   	public function xiajiahouse(){
   		$delete_list = new HousemessageModel();
   		$delete_list = D('housemessage');
   		$condition = array(
   			'id' => $_GET['houseid']
   		);
   		$result = $delete_list->where($condition)->delete();
   		$house_list = new HousemessageModel();
   		$house_list = D('housemessage');
   		if(($_SESSION['LoginName'])&&($_SESSION['is_login'])) {
   			$condition1=array(
   					'lianxirenid'=>$_SESSION['LoginName']
   			);
   			$data = $house_list->where($condition1)->select();
   			$this->assign('house_list',$data);
   			$this->display('guanli');
   		}else{
   			$this -> error('请先登陆');
   		}
   }
   public function edit(){
   	$edit_list = new HousemessageModel();
   	$edit_list = D('housemessage');
   	$condition=array(
   			'leixing'=>$_POST['leixing'],
   			'housename'=>$_POST['housename'],
   			'houseprice'=>$_POST['houseprice'],
   			'amountprice'=>$_POST['amountprice'],
   			'houseaddress'=>$_POST['houseaddress'],
   			'shi'=>$_POST['shi'],
   			'ting'=>$_POST['ting'],
   			'wei'=>$_POST['wei'],
   			'image1'=>$_POST['image1'],
   			'chicun'=>$_POST['chicun'],
   			'lianxirenid'=>$_SESSION['LoginName'],
   			'lianxirenname'=>$_POST['lianxirenname'],
   			'phone'=>$_POST['phone']
   	
   	);
   	$houst_add=$edit_list->EditHousemessage($condition);
   }
   public function tuanadd(){
   	echo 'ngurtogi';
   }
}