<?php
/**
 * Created by PhpStorm.
 * User: Elegy
 * Date: 2015/12/13
 * Time: 23:52
 */
namespace Home\Model;
use Think\Model;
class OlderModel extends Model{
    
    public function getOlder(){
         return $this -> select();
    }
    
}