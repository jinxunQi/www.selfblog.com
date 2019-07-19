<?php
namespace app\index\controller;
use app\index\model\Article;
use app\index\model\Cate;
//use think\Controller;

class ArticleController extends CommonController{
    //---------aritcle文章页面展示方法---------
    public function index()
    {
        $art_id = input('id');
        $article = Article::find($art_id);

        //每次浏览该方法给文章热度加1
        Article::where(['id'=>$art_id])->setInc('click');
        $cateid = $article['cateid'];
        $cateN = Cate::where(['id'=>$cateid])->find();

        //查询关键字的相关文章
        $reslatres = $this->relat($article['keywords']);
        //halt($reslatres);//二维数组

        //推荐文章
        $recCs = Article::where(['cateid'=>$cateid])->where(['state'=> 1])->limit(8)->select();
        return $this->fetch('',[
            'article' => $article,
            'cateN' => $cateN,
            'recCs' => $recCs,
            'reslatres' => $reslatres
        ]);
    }

    //-----------搜索相关文章----------
    public function relat($keywords)
    {
        //把关键词进行分离
        $arr = explode('|',$keywords);
        //halt($arr);
        static $relatres = []; //一维数组
        foreach ($arr as $k => $v) {
            //---匹配条件----
            $where['keywords'] = [
                'like',"%".$v."%"
            ];    //或者这样写>>>>>>where('keywords','like','%'.$v.'%')

            //匹配符合keywords的信息
            $artres = Article::where($where)->order('id desc')->limit(8)->select()->toArray();
            //halt($artres);
            $relatres = array_merge($relatres,$artres);
        }
        $relatres = arr_unique($relatres);
        return $relatres;

    }

}