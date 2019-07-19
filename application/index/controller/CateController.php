<?php
namespace app\index\controller;
use app\index\model\Article;
use app\index\model\Cate;
//use think\Controller;

class CateController extends CommonController{
    //------------展示栏目列表---------
    public function index()
    {
        $cateid = input('cateid');

        //查询cateid的栏目名称
        $cateN = Cate::where(['id'=>$cateid])->find();

        //查询当catid下的文章
        $articleModel = new Article();
        $articles = $articleModel->where(['cateid'=>$cateid])->paginate(3);

        return $this->fetch('',[
            'articles' => $articles,
            'cateN' => $cateN
        ]);
    }
}