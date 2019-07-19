<?php
namespace app\admin\validate;
use think\Validate;

class Links extends Validate {
    //验证规则
    protected $rule = [
        'title' => 'require|unique:links',
        'url' => 'require|unique:links|max:60',
    ];
    //错误提示信息
    protected $message = [
        'title.require' => '链接名不能为空',
        'title.unique' => '链接名重复',
        'url.require' => '链接地址必填',
        'url.unique' => '链接地址重复',
        'url.max' => '链接地址最长60位',
    ];

    //验证场景
    protected $scene = [
        'add' => ['title','url'],
        'edit' => ['title','url'],
    ];
}