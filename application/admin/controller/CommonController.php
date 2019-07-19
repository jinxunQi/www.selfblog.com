<?php
namespace app\admin\controller;
use think\Controller; //引用核心类
class CommonController extends Controller{

    //-----------在实例化一个类时必须要执行的方法,类似__construct构造函数-------------
    #--------------------防翻墙-------------------
    public function _initialize()
    {
        //表示没有session用户登录信息,不能翻墙
        if (!session('user_id')) {
            $this->error('请先登陆后再操作!','/admin/public/login');
        }
    }
}