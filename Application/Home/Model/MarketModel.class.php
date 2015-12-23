<?php
/**
 * Created by PhpStorm.
 * User: XINJK
 * Date: 2015/12/6
 * Time: 10:52
 */
namespace Home\Model;
use Think\Model;
class MarketModel extends Model{
    public function AddUser($data){
        return $this -> add($data);
    }
    /**
     * 查询信息
     */
    public function getMarketList($condition = null,$offset = 0,$orderby = 'rand()',$limit = 20,$field = '*'){
         return $this -> where($condition) -> field($field) -> limit($offset,$limit) -> order($orderby) -> select();
    }
    
    public function getMarketInfo($condition = null){
        return $this -> where($condition) -> find();
    }
    
    public function addMarket($data){
        return $this -> add($data);
    }
    public function editMarket($condition,$data){
        return $this ->where($condition) -> save($data);
    }
    
    public function delMarket($condition){
        return $this -> where($condition) -> delete();
    }
}