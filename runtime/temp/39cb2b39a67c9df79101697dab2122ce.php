<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"H:\www.selfblog.com\public/../application/admin\view\article\add.html";i:1563524221;s:61:"H:\www.selfblog.com\application\admin\view\common\header.html";i:1563292524;s:58:"H:\www.selfblog.com\application\admin\view\common\top.html";i:1563464602;s:62:"H:\www.selfblog.com\application\admin\view\common\sidebar.html";i:1563378619;}*/ ?>
<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <title>个人博客</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="<?php echo config('admin_static'); ?>/style/bootstrap.css" rel="stylesheet">
    <link href="<?php echo config('admin_static'); ?>/style/font-awesome.css" rel="stylesheet">
    <link href="<?php echo config('admin_static'); ?>/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="<?php echo config('admin_static'); ?>/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="<?php echo config('admin_static'); ?>/style/demo.css" rel="stylesheet">
    <link href="<?php echo config('admin_static'); ?>/style/typicons.css" rel="stylesheet">
    <link href="<?php echo config('admin_static'); ?>/style/animate.css" rel="stylesheet">

</head>
<script type="text/javascript" src="/static/plugins/admin/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/static/plugins/admin/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" src="/static/plugins/admin/ueditor/lang/zh-cn/zh-cn.js"></script>
<body>
	<!-- 头部 -->
    <div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="<?php echo config('admin_static'); ?>/images/logo.png" alt="">
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="<?php echo config('admin_static'); ?>/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo session('username'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/public/logout'); ?>">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/user/edit'); ?>">
                                        修改密码
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

	<!-- /头部 -->

	<div class="main-container container-fluid">
		<div class="page-container">
			            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">管理员</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('admin/user/index'); ?>">
                                    <span class="menu-text">
                                        管理列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text">栏目管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('admin/cate/index'); ?>">
                                    <span class="menu-text">
                                        栏目列表
                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-file-text"></i>
                <span class="menu-text">文档</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('admin/article/index'); ?>">
                                    <span class="menu-text">
                                        文章列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-link"></i>
                <span class="menu-text">友情链接</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('admin/links/index'); ?>">
                                    <span class="menu-text">
                                        链接地址
                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">系统</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/document/index.html">
                                    <span class="menu-text">
                                        配置                                   </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>



    </ul>
    <!-- /Sidebar Menu -->
</div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="<?php echo url('admin/index/index'); ?>">系统</a>
                    </li>
                                        <li>
                        <a href="<?php echo url('admin/article/index'); ?>">文章管理</a>
                    </li>
                                        <li class="active">添加文章</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">

<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增文章</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">文章标题</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="title" placeholder="" name="title" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">文章作者</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="author" placeholder="" name="author" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">文章简介</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="desc" cols="" rows=""></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">关键字</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="keywords" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填,多个关键字间用|分隔</p>
                        </div>
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">所属栏目</label>
                            <div class="col-sm-6">
                                <select name="cateid" id="">
                                    <option value="">请选择栏目</option>
                                    <?php if(is_array($CateRows) || $CateRows instanceof \think\Collection || $CateRows instanceof \think\Paginator): if( count($CateRows)==0 ) : echo "" ;else: foreach($CateRows as $key=>$cate): ?>
                                        <option value="<?php echo $cate['id']; ?>"><?php echo $cate['catename']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">缩略图</label>
                            <div class="col-sm-6">
                                <input class="form-control" name="pic" placeholder="" type="file">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">是否推荐</label>
                            <div class="col-sm-6">
                                <label for="group_id" class="control-label no-padding-right">
                                    <input class="checkbox-slider  colored-darkorange" name="state" type="checkbox">
                                    <span class="text"></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">文章内容</label>
                            <div class="col-sm-6">
                                <textarea name="content" id="content"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存信息</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>
	</div>

	    <!--Basic Scripts-->
    <script src="<?php echo config('admin_static'); ?>/style/jquery_002.js"></script>
    <script src="<?php echo config('admin_static'); ?>/style/bootstrap.js"></script>
    <script src="<?php echo config('admin_static'); ?>/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="<?php echo config('admin_static'); ?>/style/beyond.js"></script>
    <script type="text/javascript">
        //实例化编辑器
        var ue = UE.getEditor('content');
        UE.getEditor('content',{initialFrameWidth:1600,initialFrameHeight:500});
    </script>


</body></html>