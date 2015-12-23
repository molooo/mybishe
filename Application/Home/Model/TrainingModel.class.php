<?php
/**
 * Created by PhpStorm.
 * User: XINJK
 * Date: 2015/12/9
 * Time: 9:01
 */
namespace Home\Model;
use Think\Model;
class TrainingModel extends Model{

    public function getTrainingList($condition, $filed = '*'){
        return $this-> field($filed) -> where($condition) -> select();
    }

    public function getinfo($condition){
        return $this->where($condition)->select();
    }

    public function AddTraining($data){
        return $this->add($data);
    }

    public function getTrainingNameById($training_id){
        return $this->field('training_name')->where(array('training_id'=>$training_id))->select();

    }


}