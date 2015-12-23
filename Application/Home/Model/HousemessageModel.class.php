<?php
/**
 * Created by PhpStorm.
 * User: XINJK
 * Date: 2015/12/6
 * Time: 10:52
 */
namespace Home\Model;
use Think\Model;
class HousemessageModel extends Model{
    public function AddHousemessage($data){
        return $this -> add($data);
    }
    public function EditHousemessage($data){
    	return $this -> update($data);
    }
}