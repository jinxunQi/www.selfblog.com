<?php
namespace app\index\controller;
//use think\Controller;
use app\index\model\Article;
use app\index\model\Cate;
class IndexController extends CommonController
{
    //----------前台首页--------
    public function index()
    {
        $articleModel = new Article();
        $articles = $articleModel->paginate(5);
        return  $this->fetch('',[
            'articles' => $articles
        ]);
    }
}
