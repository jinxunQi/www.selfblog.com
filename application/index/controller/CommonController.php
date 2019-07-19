<?php
namespace app\index\controller;
use app\index\model\Article;
use app\index\model\Cate;
use think\Controller;
use think\Db; //引用核心类
class CommonController extends Controller{

    //>>>>>>>>>>>>>>>>>初始化操作(分配栏目头上的变量)<<<<<<<<<<<<<<<
    public function _initialize()
    {
        $tags = Db::name('tags')->select();
        $this->right();
        $cateModel = new Cate();
        $cates = $cateModel->select();
        $this->assign([
            'cates' => $cates,
            'tags' => $tags
        ]);
    }

    //---------------查找热点点击的数据回显-------------
    public function right()
    {
        //-----热门点击-----
        $clickA = Article::order('click desc')->limit(8)->select();
        //-----推荐--------
        $tuijian = Article::where(['state'=>1])->order('click desc')->limit(8)->select()->toArray();
        $this->assign([
            'clickA' => $clickA,
            'tuijian' => $tuijian
        ]);
    }
}