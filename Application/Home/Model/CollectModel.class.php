<?php
/**
 * Created by PhpStorm.
 * User: XINJK
 * Date: 2015/12/6
 * Time: 10:52
 */
namespace Home\Model;
use Think\Model;
class CollectModel extends Model{
    
    public function getCollectInfo($condition = null){
        return $this -> where($condition) -> find();
    }
    public function addCollect($data){
        return $this -> add($data);
    }
}