<?php
namespace app\index\controller;
use app\index\model\User as UserModel;
use think\Controller;
class User extends Controller
{
	public function add1()
	{
		$user=new UserModel;
		if($user->allowField(true)->validate(true)->save(input('post.'))){
			$this->success('用户'.$user->nickname.'创建成功',url('index\index\create'));
		}else{
			$this->error($user->getError(),url('index\index\create'));
		}
	}
	public function add()
{
    $user = new UserModel;
    if ($user->allowField(true)->validate(true)->save(input('post.'))) {
		$this->success('用户'.$user->nickname.'创建成功',url('index\index\create'));
        //return '用户[ ' . $user->nickname . ':' . $user->id . ' ]新增成功';
    } else {
		$this->error($user->getError(),url('index\index\create'));
        //return $user->getError();
    }
}
}