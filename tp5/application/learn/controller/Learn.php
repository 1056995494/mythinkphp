<?php
namespace app\learn\controller;
use think\Controller;
use think\Db;
class Learn extends Controller{
	public function index(){
            return json($this->request->param());
	}
        public function learn(){
            return $this->fetch();
        }
        public function index2(){
            $data=$this->request->param();
            $data2=[
                'name'=>'dat',
                'id'=>234
            ];
            return json($data);
        }
}