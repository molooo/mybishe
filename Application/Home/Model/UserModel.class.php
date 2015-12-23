<?php
/**
 * Created by PhpStorm.
 * User: XINJK
 * Date: 2015/12/6
 * Time: 10:52
 */
namespace Home\Model;
use Think\Model;
class UserModel extends Model{
    public function AddUser($data){
        return $this -> add($data);
    }
    /*
     * 查询单条会员信息
     */
    public function getUserInfo($condition,$filed = '*'){
         return $this -> where($condition) -> field($filed) -> find();
    }

    /*
     * 查询会员的id
     */
    public function getUserId($condition){
        return $this -> field('id') -> where($condition) ->find();
    }
}