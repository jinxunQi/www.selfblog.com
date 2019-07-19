<?php
namespace app\admin\controller;
use think\Controller; //引用核心类
use app\admin\model\Admin;
class PublicController extends Controller{
    //----------后台登录方法-------------
    public function login()
    {
        if (request()->isPost()) {
            $postData = input('post.');

            $result = $this->validate($postData,'Admin.login',[],true);
            if ($result !== true) {
                $this->error(implode(',',$result));
            }
            $adminModel = new Admin();
            $user = $adminModel->checkUser($postData['username'],$postData['password']);
            if ($user) {
                $this->redirect('/admin/index/index');
            }else{
                $this->error('用户名或者密码有误！');
            }
        }
        return $this->fetch();
    }

    //---------后台用户退出-------------
    public function logout()
    {
        session('username',null);
        session('user_id',null);
        //重定向到登陆页
        $this->redirect('/admin/public/login');
    }
}