<?php
namespace app\admin\validate;
use think\Validate;

class Admin extends Validate {
    //验证规则
    protected $rule = [
        'username' => 'require|unique:admin',
        'password' => 'require|min:6',
        'captcha' => 'require|captcha'
    ];
    //错误提示信息
    protected $message = [
        'username.require' => '用户名不能为空',
        'username.unique' => '用户名重复',
        'password.require' => '密码不能为空',
        'password.min' => '密码最少6位',
        'captcha.require' => '验证码不能为空',
        'captcha.captcha' => '验证码有误'
    ];

    //验证场景
    protected $scene = [
        'add' => ['username','password'],
        'edit' => ['username','password'],
        //只验证用户名的场景
        'onlyUserName' => ['username'],
        'login' => ['username'=>'require','password'=>'require','captcha'],
    ];
}