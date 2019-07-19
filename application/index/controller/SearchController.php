<?php
namespace app\index\controller;
//use think\Controller; //引用核心类
use app\index\model\Article;

class SearchController extends CommonController{
    //---------搜素功能---------
    public function index()
    {
        $keywords = input('keywords');
        if ($keywords) {
            $map['title'] = ['like','%'.$keywords.'%'];
            $searchres = Article::where($map)->order('id desc')->limit(8)->paginate($listRows = 3, $simple = false, $config = [
                'query' => ['keywords' => $keywords]
            ]);
            $this->assign([
                'searchres' => $searchres,
                'keywords' => $keywords
            ]);
        }else{
            $this->assign([
               'searchres' => null,
               'keywords' => '暂无数据'
            ]);
        }

        return $this->fetch();
    }
}