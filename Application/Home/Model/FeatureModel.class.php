<?php
/**
 * Created by PhpStorm.
 * User: LI
 * Date: 2015/12/10
 * Time: 15:01
 */
namespace Home\Model;
use Think\Model;
class FeatureModel extends Model{
    public function getFeatureList($condition, $filed = '*'/*, $page = 0, $limit = 0, $count = 0*/){
        return $this -> field($filed) -> where($condition) -> /*page($page,$count) -> limit($limit) ->*/ select();
    }
    public function getFeatureInfo($condition, $filed = '*'/*, $page = 0, $limit = 0, $count = 0*/){
        return $this -> field($filed) -> where($condition) -> /*page($page,$count) -> limit($limit) ->*/ find();
    }
}