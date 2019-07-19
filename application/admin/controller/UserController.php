<?php
namespace app\admin\controller;
//use think\Controller;
use app\admin\model\Admin;
//这里可以使用Db简化操作 ,使用Db类不会触发模型下的模型事件,比如入库前对密码进行md5加密操作,这时候需要写在控制器该方法上
//use think\Db;

class UserController extends CommonController{
    //---------展示用户列表----------
    public function index()
    {
        //查出管理员表中的数据
        $users = Admin::paginate(5);
        return $this->fetch('',[
            'users' => $users
        ]);
    }
    //----------添加用户-----------
    public function add()
    {
        if (request()->isPost()) {
            //1.接收表单提交数据
            $postData = input('post.');
            //2.验证器验证
            $result = $this->validate($postData,'Admin.add',[],true);
            if ($result !== true ) {
                $this->error(implode($result));
            }
            //3.把用户信息入库到数据库，判断是否入库成功
            $userModel = new Admin();
            if ($userModel->save($postData)) {
                $this->success('添加管理员成功!',url('admin/user/index'));
            }else{
                $this->error('添加管理员失败!');
            }
        }
        return $this->fetch();
    }
    //----------编辑用户-----------
    public function edit()
    {
        if (request()->isPost()) {
            $postData = input('post.');

            //判断是否更改密码,更改密码的话,走edit验证场景,否则走onlyusername验证场景
            if ($postData['password'] == '') {
                $result = $this->validate($postData,'Admin.onlyUserName',[],true);
            }else{
                $result = $this->validate($postData,'Admin.edit',[],true);
            }
            if ($result !== true) {
                $this->error(implode(',',$result));
            }
            $userModel = new Admin();
            if ($userModel->update($postData)) {
                $this->success('编辑管理员成功！',url('admin/user/index'));
            }else{
                $this->error('编辑管理员失败!');
            }
        }
        //接收id查询数据回显
        $id = input('id');
        $user = Admin::find($id);
        return $this->fetch('',[
            'user' => $user
        ]);
    }
    //----------删除用户------------
    public function del()
    {
        $id = input('id');
        if ($id != 1) {
            //表示不是初始化管理员，可以删除
            if (Admin::destroy($id)) {
                $this->success('删除成功！',url('admin/user/index'));
            }else{
                $this->error('删除失败！');
            }
        }else{
            //表示是初始化管理员，不能删除
            $this->error('初始化管理员无法删除！');
        }
    }
}