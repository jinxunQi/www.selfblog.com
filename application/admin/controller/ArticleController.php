<?php
namespace app\admin\controller;
use app\admin\model\Cate;
//use think\Controller;
use app\admin\model\Article;
class ArticleController extends CommonController{
    //---------展示文章列表----------
    public function index()
    {
        //查出文章列表内容
        $articles = Article::alias('art')
            ->field('art.*,c.catename c_name')
            ->join('cate c','art.cateid = c.id','left')
            ->paginate(5);
        return $this->fetch('',[
            'articles' => $articles
        ]);
    }
    //----------添加文章-----------
    public function add()
    {
        if (request()->isPost()) {
            //1.接收表单提交数据
            $postData = input('post.');
            //halt($postData);
            //2.验证器验证
            $result = $this->validate($postData,'Article.add',[],true);
            if ($result !== true ) {
                $this->error(implode(',',$result));
            }

            if (!isset($postData['state'])) {
                $postData['state'] = 'off';
            }
            //是否推荐
            if ($postData['state'] == 'on') {
                $postData['state'] = 1;
            }else{
                $postData['state'] = 0;
            }
            //halt($postData);
            #上传图片的处理
            $articleModel = new Article();
            $files = $this->uploadImg();
            //halt($files);
            $postData['pic'] = $files;
            //3，判断是否入库成功
            if ($articleModel->allowField(true)->save($postData)) {
                $this->success('添加文章成功!',url('admin/article/index'));
            }else{
                $this->error('添加文章失败!');
            }
        }

        $CateRows = Cate::select();
        return $this->fetch('',[
            'CateRows' => $CateRows
        ]);
    }
    //----------编辑文章-----------
    public function edit()
    {
        if (request()->isPost()) {
            $postData = input('post.');

            $result = $this->validate($postData,'Article.edit',[],true);
            if ($result !== true) {
                $this->error(implode(',',$result));
            }
            $articleModel = new Article();
            if ($articleModel->update($postData)) {
                $this->success('编辑文章成功！',url('admin/article/index'));
            }else{
                $this->error('编辑文章失败!');
            }
        }
        //接收id查询数据回显
        $id = input('id');
        $CateRows = Cate::select();
        $article = Article::find($id);
        return $this->fetch('',[
            'article' => $article,
            'CateRows' => $CateRows
        ]);
    }
    //----------删除文章------------
    public function del()
    {
        $id = input('id');
        if (Article::destroy($id)) {
            $this->success('删除文章成功！',url('admin/article/index'));
        }else{
            $this->error('删除文章失败！');
        }

    }

    //------------文件上传的方法--------------
    public function uploadImg()
    {
        $file = request()->file('pic');
        //判断是否存在图片上传
        if ($file) {
            //定义上传图片的信息
            $validates = [
                'size' => 1024*1024*3,//最大3m
                'ext' => 'jpg,png,gif,bmp,jpeg'//文件后缀
            ];

            //上传文件的路径
            $uploadDir = './static/uploads';

            //临时上传图片移动到目录下
            $info = $file->validate($validates)->move($uploadDir);
            if ($info) {
                $oldFilePath = $info->getSaveName();
                $pic = str_replace('\\','/',$oldFilePath);
            }
                return $pic;
        }

    }
}