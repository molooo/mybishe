<?php
/**
 * Created by PhpStorm.
 * User: LI
 * Date: 2015/12/7
 * Time: 14:18
 */
namespace Home\Model;
use Think\Model;
class PetEncyModel extends Model{
    protected $tableName = 'petency';
   public function getPetEncyListByCategory($condition, $filed = '*'){
       return $this -> field($filed) -> where($condition) -> select();
   }
    public function getPetEncyInfo($condition,$filed = '*'){
        return $this ->field($filed) ->where($condition) ->find();
    }
}