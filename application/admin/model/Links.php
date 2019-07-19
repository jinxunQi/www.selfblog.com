<?php
namespace app\admin\model;
use think\Model;
class Links extends Model{
    protected $pk = 'id';
    protected static function init()
    {

        //-----修改管理员入库前的事件
//        Admin::event('before_update', function ($admin) {
//            //halt($admin);
//            //判断管理员密码是否做修改  不修改则保持原密码
//            if ($admin['password']=='') {
//                //表示不修改密码,那么把password字段删除即可
//                unset($admin['password']);
//            }else{
//                //对新密码进行md5加密
//                $admin['password'] = md5($admin['password'].config('password_salt'));
//            }
//            //halt($admin);
//
//        });
    }
}