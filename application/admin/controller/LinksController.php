<?php
namespace app\admin\controller;
//use think\Controller;
use app\admin\model\Links;
//这里可以使用Db简化操作 ,使用Db类不会触发模型下的模型事件,比如入库前对密码进行md5加密操作,这时候需要写在控制器该方法上
//use think\Db;

class LinksController extends CommonController{
    //---------展示链接列表----------
    public function index()
    {
        //查出链接表中的数据
        $links = Links::paginate(5);
        return $this->fetch('',[
            'links' => $links
        ]);
    }
    //----------添加链接-----------
    public function add()
    {
        if (request()->isPost()) {
            //1.接收表单提交数据
            $postData = input('post.');
            //2.验证器验证
            $result = $this->validate($postData,'Links.add',[],true);
            if ($result !== true ) {
                $this->error(implode(',',$result));
            }
            //3.把链接信息入库到数据库，判断是否入库成功
            $userModel = new Links();
            if ($userModel->save($postData)) {
                $this->success('添加链接成功!',url('admin/links/index'));
            }else{
                $this->error('添加链接失败!');
            }
        }
        return $this->fetch();
    }
    //----------编辑链接-----------
    public function edit()
    {
        if (request()->isPost()) {
            $postData = input('post.');

            $result = $this->validate($postData,'Links.edit',[],true);
            if ($result !== true) {
                $this->error(implode(',',$result));
            }
            $userModel = new Links();
            if ($userModel->update($postData)) {
                $this->success('编辑链接成功！',url('admin/links/index'));
            }else{
                $this->error('编辑链接失败!');
            }
        }
        //接收id查询数据回显
        $id = input('id');
        $link = Links::find($id);
        return $this->fetch('',[
            'link' => $link
        ]);
    }
    //----------删除链接------------
    public function del()
    {
        $id = input('id');
        if ($id != 1) {
            //表示不是初始化链接，可以删除
            if (Links::destroy($id)) {
                $this->success('删除成功！',url('admin/links/index'));
            }else{
                $this->error('删除失败！');
            }
        }else{
            //表示是初始化链接，不能删除
            $this->error('初始化链接无法删除！');
        }
    }
}