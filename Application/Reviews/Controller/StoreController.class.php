<?php
/**
 * Created by PhpStorm.
 * User: LI
 * Date: 2015/11/25
 * Time: 14:35
 */
namespace Reviews\Controller;
use Think\Controller;
use Home\Model;
header("content-type:text/html;charset=utf-8");
class StoreController extends Controller{
	public function index(){
       // $model_admin = D('Review');//直接访问数据库
       // $model_admin -> select();
       $this -> display('index');//直接访问view目录下store_list目录下的文件名为"参数.php"的模版
    }
    // public function home(){
    //     $this -> display('index');
    // }
    // //show_store_list
    // public function show_store_list(){
    //     // $this -> display('index');
    //     $model_store = D('store');
    //     // <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    //     dump($model_store->select());
    //     // $store_list = $model_store->getStoreList();
    //     // print_r("$store_list") ;
    // }
    // public function add_store(){
    //     $this -> display('add_store');
    //     // $model_store = D('store');
    //     // <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    //     // dump($model_store->select());
    //     // $store_list = $model_store->getStoreList();
    //     // print_r("$store_list") ;
    // }
    // public function save_store(){
    //     $this -> display('index');
    //     // $model_store = D('store');
    //     // <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    //     // dump($model_store->select());
    //     // $store_list = $model_store->getStoreList();
    //     // print_r("$store_list") ;
    // }
}