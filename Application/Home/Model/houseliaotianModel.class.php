<?php
/**
 * Created by PhpStorm.
 * User: XINJK
 * Date: 2015/12/6
 * Time: 10:52
 */
namespace Home\Model;
use Think\Model;
class houseliaotianModel extends Model{
    public function AddHouseliaotian($data){
        return $this -> add($data);
    }
    public function GetLiaotianList($condition, $filed = '*'/*,$order='id', $page = 0, $limit = 0, $count = 0*/){
    	return $this -> field($filed) -> where($condition) ->select();
    }
}