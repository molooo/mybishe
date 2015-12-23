<?php
/**
 * Created by PhpStorm.
 * User: LI
 * Date: 2015/12/7
 * Time: 14:19
 */
namespace Home\Model;
use Think\Model;
class PetNoteModel extends Model{
    protected $tableName = 'PetNote';
    public function addNote($data){
        return $this -> add($data);
    }
    public function getNoteList($condition, $field = '*', $Page = '0', $limit = null){
        return $this -> field($field) -> where($condition)  -> select();
    }
    public function getNoteInfo($condition, $field = '*', $Page = '0', $limit = null){
        return $this -> field($field) -> where($condition)  -> find();
    }
}