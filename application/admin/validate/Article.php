<?php
namespace app\admin\validate;
use think\Validate;
class Article extends Validate{
    //验证规则
    protected $rule = [
        'title' => 'require|max:60|unique:article',
        'author' => 'require|max:20|unique:article',
        'keywords' => 'require|unique:article',
        'cateid' => 'require',
    ];
    //验证错误提示信息
    protected $message = [
        'title.require' => '文章标题不能为空',
        'title.max' => '文章标题字数不能操过60个',
        'title.unique' => '文章标题重复',
        'author.require' => '文章作者不能为空',
        'author.max' => '文章作者字数不能操作20个',
        'author.unique' => '文章作者重复',
        'keywords.require' => '关键字必填',
        'keywords.unique' => '关键字重复',
        'cateid.require' => '所属栏目必填',
    ];
    //验证场景
    protected $scene = [
        'add' => ['title','cateid','author','keywords'],
        'edit' => ['title'],
    ];
}