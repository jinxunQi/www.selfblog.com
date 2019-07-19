<?php
namespace app\admin\validate;
use think\Validate;
class Cate extends Validate{
    //验证规则
    protected $rule = [
        'catename' => 'require|max:25|unique:cate'
    ];
    //验证错误提示信息
    protected $message = [
        'catename.require' => '栏目名称不能为空',
        'catename.unique' => '栏目名称重复',
        'catename.max' => '栏目名称长度不能超过25位',
    ];
    //验证场景
    protected $scene = [
        'add' => ['catename'],
        'edit' => ['catename'],
    ];
}