<?php
namespace Home\Controller;
use Home\Model\CommomModel;
use Home\Model\UserModel;
use Think\Controller;
class HotelController extends Controller{
    public function index(){
        $this->display();
    }
        public function hello(){
        $this->display();
    }
}