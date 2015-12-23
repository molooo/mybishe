<?php
/**
 * Created by PhpStorm.
 * User: XINJK
 * Date: 2015/12/6
 * Time: 10:52
 */
namespace Admin\Model;
use Think\Model;
class MarketModel extends Model{
    /**
     * 查询信息
     */
    public function getMarketList($condition = null,$offset = 0,$orderby = '',$limit = 20,$field = '*'){
         return $this -> where($condition) -> field($field) -> limit($offset,$limit) -> order($orderby) -> select();
    }
}