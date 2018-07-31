<?php
namespace app\index\controller;
use think\Controller;
class Captcha extends Controller{
	public function index(){
		return $this->fetch();
	}
	public function check($code){
		if(!captcha_check($code)){
			$this->error('验证失败');
		}else{
			$this->success('验证成功');
		}
	}
}