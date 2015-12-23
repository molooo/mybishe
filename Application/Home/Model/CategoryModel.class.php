<?php
/**
 * Created by PhpStorm.
 * User: LI
 * Date: 2015/12/7
 * Time: 14:14
 */
namespace Home\Model;
use Think\Model;
class CategoryModel extends Model{
    public function getCategoryList($condition, $filed = '*',$order='id'/*, $page = 0, $limit = 0, $count = 0*/){
        return $this -> field($filed) -> where($condition) -> order($order) ->select();
    }
    public function getCategoryInfo($condition, $filed = '*',$order='id'/*, $page = 0, $limit = 0, $count = 0*/){
        return $this -> field($filed) -> where($condition) -> order($order) ->find();
    }
}