<?php
/**
 * Created by PhpStorm.
 * User: XINJK
 * Date: 2015/12/9
 * Time: 9:01
 */
namespace Home\Model;
use Think\Model;
class TrainModel extends Model{

    public function getinfo(){
        M('Train')->select()->page();
    }
}