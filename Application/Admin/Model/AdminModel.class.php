<?php
/**
 * Created by PhpStorm.
 * User: LI
 * Date: 2015/12/7
 * Time: 13:53
 */
namespace Admin\Model;
use Think\Model;
class AdminModel extends Model{
    public function islogin($condition){
        return $this -> where($condition) -> find();
    }
}