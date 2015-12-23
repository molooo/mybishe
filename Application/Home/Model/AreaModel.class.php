<?php
/**
 * Created by PhpStorm.
 * User: XINJK
 * Date: 2015/12/6
 * Time: 10:52
 */
namespace Home\Model;
use Think\Model;
class AreaModel extends Model{
    
    public function getArea(){
         return $this -> select();
    }
    
}