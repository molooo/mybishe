<?php
/**
 * Created by PhpStorm.
 * User: LI
 * Date: 2015/12/18
 * Time: 10:02
 */
namespace Home\Model;
use Think\Model;
class NoteReplyModel extends Model{
    public function getNoteReplyList($condition, $filed = '*'/*,$page = '',$count = '', $limit = null*/){
        return $this -> field($filed) -> where($condition)/* -> page($page,$count) -> limit($limit)*/ -> select();
    }
    public function getNoteReplyCount($condition){
        return $this ->  where($condition)  -> count();
    }
    public function getNoteReplyInfo($condition,$filed = '*'){
        return $this ->field($filed) ->where($condition) ->find();
    }
    public function addNoteReply($data){
        return $this -> add($data);
    }
}