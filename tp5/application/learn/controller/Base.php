<?php
namespace app\learn\controller;

use app\learn\model\User;
use think\Controller;
use think\Request;
use think\Session;

class Base extends Controller
{
    public function _initialize()
    {
    	$user = User::get(30);
		Request::instance()->bind('user',$user);
    }
}