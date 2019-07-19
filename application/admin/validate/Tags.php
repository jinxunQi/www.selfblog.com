<?php
namespace app\admin\validate;
use think\Validate;

class Tags extends Validate {
    //验证规则
    protected $rule = [
        'tagname' => 'require|max:20|unique:tags',
    ];
    //错误提示信息
    protected $message = [
        'tagname.require' => 'tag标签名称不能为空',
        'tagname.max' => 'tag标签名称长度不能超过20位',
        'tagname.unique' => 'tag标签名称重复',
    ];

    //验证场景
    protected $scene = [
        'add' => ['tagname'],
        'edit' => ['tagname'],
    ];
}