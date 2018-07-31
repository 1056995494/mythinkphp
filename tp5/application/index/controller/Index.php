<?php
namespace app\index\controller;
use think\Db;
use app\index\model\User as UserModel;

class Index
{
    public function index()
    {
		return 123;
		$list=UserModel::all();
		foreach($list as $value){
			$res[]=$value->toArray();
		}
		var_dump($res);
	}
	public function add(){
		$user=new UserModel;
		$list=[
			'nickname'=>'长1白山',
			'email'=>'0099@qq.com',
			'birthday'=>'1990-12-07',
		];
		if($user->save($list)){
			return $user->nickname.'新增成功';
		}else{
			return $user->getError();
		}
	}
	public function update(){
		$user=UserModel::get(31);
		$user->nickname='小王';
		$user->save();
	}
	public function create(){
		return view();
	}
}
