<?php
namespace app\admin\model;
use think\Model;
class Admin extends Model{
    protected $pk = 'id';
    protected static function init()
    {
        //------管理员添加入库前的事件
        Admin::event('before_insert', function ($admin) {
            //halt($admin['password']);
            //对用户输入的密码进行加密
            $admin['password'] = md5($admin['password'].config('password_salt'));
        });

        //-----修改管理员入库前的事件
        Admin::event('before_update', function ($admin) {
            //halt($admin);
            //判断管理员密码是否做修改  不修改则保持原密码
            if ($admin['password']=='') {
                //表示不修改密码,那么把password字段删除即可
                unset($admin['password']);
            }else{
                //对新密码进行md5加密
                $admin['password'] = md5($admin['password'].config('password_salt'));
            }
            //halt($admin);

        });
    }
    #-----用户登录验证方法
    public function checkUser($username,$password)
    {
        //其实第一个判断可以不用写，因为可以从验证器进行判断
        if ($username == ''|$password == '') {
            return false;
        }else{
            $userData = [
              'username' => $username,
              'password' => md5($password.config('password_salt'))
            ];
            //halt($userData);
            $userInfo = $this->where($userData)->find();
            //halt($userInfo);
            if ($userInfo) {
                session('user_id',$userInfo['id']);
                session('username',$userInfo['username']);
                return true;
            }else{
                return false;
            }

        }
    }
}