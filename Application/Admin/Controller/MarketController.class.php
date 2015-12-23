<?php
/**
 * Created by Zend Studio.
 * User: Elegy
 * Date: 2015/12/3
 * Time: 17:24
 */
namespace Admin\Controller;
use Think\Controller;
class MarketController extends Controller{
    public function getList(){
        $model_market = D('Market');
        $result = $model_market -> getMarketList($condition,$offset,$order);
        $this -> assign('infolist',$result);
        $this -> display('MarketList');
    }
}