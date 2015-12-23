<?php
namespace Reviews\Controller;
use Think\Controller;
header("content-type:text/html;charset=utf-8");
class TestController extends Controller{
	
	public function index()
	{
		//echo "Test.index";
		//$this->redirect('edit','',2,'纯跳转');
		//$this->success('成功跳转',U('Test/login'),3);
		//$this->error('出错!正在跳转',U('Test/login'),5);
		//$this->ajaxReturn(getTestData(),'xml');
		$server=I('server.HTTP_HOST');
		dump($server);
	}
	
	public function edit()
	{
		echo "Test.edit";
	}
	
	public function login()
	{
		//echo "Test.login";
		$user=I('get.user',null);

		if ($user==='szz') {
			$this->success('成功跳转',U('Test/index'),3);
		}else{
			$this->error('出错!正在跳转',U('Test/index'),3);
		}
	}
}