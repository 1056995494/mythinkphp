<?php
namespace app\learn\controller;
use think\Controller;
use app\learn\model\User;
use think\Request;
use app\learn\controller\Base;
class Index extends Base{
	public function index(Request $request){
		//echo $request->user->nickname;
		return $this->fetch();
	}
}