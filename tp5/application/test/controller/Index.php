<?php
namespace app\test\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
		$this->view->replace([
			'__CSS__'=>'/static/test/css',
			'__JS__'=>'/static/test/js',
		]);
		$this->assign('title','测试');
		return $this->fetch();
    }
}
