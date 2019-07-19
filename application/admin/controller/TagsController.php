<?php
namespace app\admin\controller;
//use think\Controller; //引用核心类
use app\admin\model\Tags;
use think\Db;

class TagsController extends CommonController{
    //---------展示Tags标签列表----------
    public function index()
    {
        //查出链接表中的数据
        $tags = Db::name('tags')->paginate(5);
        return $this->fetch('',[
            'tags' => $tags
        ]);
    }
    //----------添加Tags标签-----------
    public function add()
    {
        if (request()->isPost()) {
            //1.接收表单提交数据
            $postData = input('post.');
            //2.验证器验证
            $result = $this->validate($postData,'Tags.add',[],true);
            if ($result !== true ) {
                $this->error(implode(',',$result));
            }
            //3.把链接信息入库到数据库，判断是否入库成功
            $tagModel = new Tags();
            if ($tagModel->save($postData)) {
                $this->success('添加tag标签成功!',url('admin/tags/index'));
            }else{
                $this->error('添加tag标签失败!');
            }
        }
        return $this->fetch();
    }
    //----------编辑Tags标签-----------
    public function edit()
    {
        if (request()->isPost()) {
            $postData = input('post.');

            $result = $this->validate($postData,'Tags.edit',[],true);
            if ($result !== true) {
                $this->error(implode(',',$result));
            }
            $tagsMOdel = new Tags();
            if ($tagsMOdel->update($postData)) {
                $this->success('编辑tag标签成功！',url('admin/tags/index'));
            }else{
                $this->error('编辑tag标签失败!');
            }
        }
        //接收id查询数据回显
        $id = input('id');
        $tag = Tags::find($id);
        return $this->fetch('',[
            'tag' => $tag
        ]);
    }
    //----------删除Tags标签------------
    public function del()
    {
        $id = input('id');
        if (Tags::destroy($id)) {
            $this->success('删除tag标签成功！',url('admin/tags/index'));
        }else{
            $this->error('删除tag标签失败！');
        }

    }
}