<?php
namespace app\index\validate;
use think\Validate;
class User extends Validate{
	protected $rule = [
        ['nickname', 'checkNickname:1', '昵称不能为空'],
        ['email', 'require|email', '邮箱不能为空|邮箱格式错误'],
        ['birthday', 'dateFormat:Y-m-d', '生日格式错误'],
    ];
	protected function checkNickname($value,$rule){
		if($value==null||$value==1){
			return '123';
		}else{
			return true;
		}
	}
}
?>