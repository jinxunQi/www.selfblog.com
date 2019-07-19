<?php
namespace app\admin\controller;
//use think\Controller; //引用核心类
class IndexController extends CommonController{
    //后台首页页面
    public function index()
    {
        return $this->fetch();
    }
}