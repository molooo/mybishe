<?php
/**
 * Created by PhpStorm.
 * User: XINJK
 * Date: 2015/12/9
 * Time: 9:01
 */
namespace Home\Model;
use Think\Model;
class TrainMessageModel extends Model{

    public function AddTrainMessage($data){
        return $this -> add($data);
    }
    public function EditTrainMessage($data){
        return $this -> update($data);
    }

    public function getTrainMessageList($condition, $filed = '*',$page = '',$count = '', $limit = null){
        return $this -> field($filed) -> where($condition) -> page($page,$count) -> limit($limit) -> select();
    }

    public function getMessageList($condition,$field = '*'){
        return $this -> field($field) -> where($condition) -> select();
    }

    public function getTraintypeinfo($condition,$filed="*"){
        return M('training_type')->field($filed)->where($condition)->select();
    }

}