<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

/*return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];*/
use think\Route;
//网站根目录路由
Route::get('/','index/index/index');

//----------------后台路由------------------------------------------
Route::group('admin', function () {
    //后台首页
    Route::get('index/index','admin/index/index');

    //---------------用户相关----------------------
    //展示用户列表路由
    Route::get('user/index','admin/user/index');
    //添加用户路由
    Route::get('user/add','admin/user/add');
    Route::post('user/add','admin/user/add');
    //编辑用户路由
    Route::get('user/edit','admin/user/edit');
    Route::post('user/edit','admin/user/edit');
    //删除用户路由
    Route::get('user/del','admin/user/del');
    Route::post('user/del','admin/user/del');

    #---------------友情链接相关----------------------
    //展示友情链接
    Route::get('links/index','admin/links/index');
    Route::post('links/index','admin/links/index');
    //删除友情链接
    Route::get('links/del','admin/links/del');
    Route::post('links/del','admin/links/del');
    //添加友情链接
    Route::get('links/add','admin/links/add');
    Route::post('links/add','admin/links/add');
    //修改友情链接
    Route::get('links/edit','admin/links/edit');
    Route::post('links/edit','admin/links/edit');

    #---------------栏目相关----------------------
    //展示栏目
    Route::get('cate/index','admin/cate/index');
    Route::post('cate/index','admin/cate/index');
    //删除栏目
    Route::get('cate/del','admin/cate/del');
    Route::post('cate/del','admin/cate/del');
    //添加栏目
    Route::get('cate/add','admin/cate/add');
    Route::post('cate/add','admin/cate/add');
    //修改栏目
    Route::get('cate/edit','admin/cate/edit');
    Route::post('cate/edit','admin/cate/edit');

    #---------------文章相关----------------------
    //展示文章
    Route::get('article/index','admin/article/index');
    Route::post('article/index','admin/article/index');
    //删除文章
    Route::get('article/del','admin/article/del');
    Route::post('article/del','admin/article/del');
    //添加文章
    Route::get('article/add','admin/article/add');
    Route::post('article/add','admin/article/add');
    //修改文章
    Route::get('article/edit','admin/article/edit');
    Route::post('article/edit','admin/article/edit');

    #---------------管理员登录相关----------------------
    //登录路由
    Route::get('public/login','admin/public/login');
    Route::post('public/login','admin/public/login');
    //退出路由
    Route::get('public/logout','admin/public/logout');
    Route::post('public/logout','admin/public/logout');

    #---------------tags标签管理相关----------------------
    //展示tags标签列表
    Route::get('tags/index','admin/tags/index');
    //添加tags标签
    Route::get('tags/add','admin/tags/add');
    Route::post('tags/add','admin/tags/add');
    //修改tags标签
    Route::get('tags/edit','admin/tags/edit');
    Route::post('tags/edit','admin/tags/edit');
    //删除tags标签
    Route::get('tags/del','admin/tags/del');
    Route::post('tags/del','admin/tags/del');
});

//----------------前台路由------------------------------------------
Route::group('index', function () {
    //文章列表页
    Route::get('article/index','index/article/index');

    //文章分类页路由
    Route::get('cate/index','index/cate/index');

    //前台首页路由
    Route::get('index/index','index/index/index');

    //搜索文章路由
    Route::get('search/index','index/search/index');

});