<?php
namespace app\learn\controller;
use app\learn\controller\Index;
use think\Request;
class Test extends Index{
	public function test(Request $request){
		echo $request->user;
	}
}