<?php
namespace app\admin\controller;
//use think\Controller; //引用核心类
use app\admin\model\Cate;
class CateController extends CommonController{
    //---------展示栏目----------
    public function index()
    {
        //查出链接表中的数据
        $cates = Cate::paginate(5);
        return $this->fetch('',[
            'cates' => $cates
        ]);
    }
    //----------添加栏目-----------
    public function add()
    {
        if (request()->isPost()) {
            //1.接收表单提交数据
            $postData = input('post.');
            //2.验证器验证
            $result = $this->validate($postData,'Cate.add',[],true);
            if ($result !== true ) {
                $this->error(implode(',',$result));
            }
            //3.把链接信息入库到数据库，判断是否入库成功
            $cateModel = new Cate();
            if ($cateModel->save($postData)) {
                $this->success('添加栏目成功!',url('admin/cate/index'));
            }else{
                $this->error('添加栏目失败!');
            }
        }
        return $this->fetch();
    }
    //----------编辑栏目-----------
    public function edit()
    {
        if (request()->isPost()) {
            $postData = input('post.');
            //halt($postData);

            $result = $this->validate($postData,'Cate.edit',[],true);
            if ($result !== true) {
                $this->error(implode(',',$result));
            }
            $cateModel = new Cate();
            if ($cateModel->update($postData)) {
                $this->success('编辑栏目成功！',url('admin/cate/index'));
            }else{
                $this->error('编辑栏目失败!');
            }
        }
        //接收id查询数据回显
        $id = input('id');
        $cate = Cate::find($id);
        return $this->fetch('',[
            'cate' => $cate
        ]);
    }
    //----------删除栏目------------
    public function del()
    {
        $id = input('id');
        if ($id != 1) {
            //表示不是初始化链接，可以删除
            if (Cate::destroy($id)) {
                $this->success('删除栏目成功！',url('admin/cate/index'));
            }else{
                $this->error('删除栏目失败！');
            }
        }else{
            //表示是初始化链接，不能删除
            $this->error('初始化链接无法删除！');
        }
    }
}