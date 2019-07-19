<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"H:\www.selfblog.com\public/../application/admin\view\links\index.html";i:1563359411;s:61:"H:\www.selfblog.com\application\admin\view\common\header.html";i:1563292524;s:58:"H:\www.selfblog.com\application\admin\view\common\top.html";i:1563558239;s:62:"H:\www.selfblog.com\application\admin\view\common\sidebar.html";i:1563556687;}*/ ?>
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
<body>
	<!-- 头部 -->
    <div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="<?php echo url('/'); ?>" class="navbar-brand">
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
                    <a href="<?php echo url('admin/tags/index'); ?>">
                                    <span class="menu-text">
                                        tags标签管理                                   </span>
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
                                        <li class="active">链接管理</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<button type="button" tooltip="添加链接" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('admin/links/add'); ?>'"> <i class="fa fa-plus"></i> Add
</button>
<div class="row">s
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <table class="table table-bordered table-hover">
                        <thead class="">
                            <tr>
                                <th class="text-center" width="4%">ID</th>
                                <th class="text-center" width="8%">链接名称</th>
                                <th class="text-center" width="8%">链接地址</th>
                                <th class="text-center" width="8%">链接描述</th>
                                <th class="text-center" width="14%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(is_array($links) || $links instanceof \think\Collection || $links instanceof \think\Paginator): if( count($links)==0 ) : echo "" ;else: foreach($links as $key=>$link): ?>
                            <tr>
                                    <td align="center"><?php echo $link['id'] ?></td>
                                    <td align="center"><?php echo $link['title']; ?></td>
                                    <td align="center"><a href="<?php echo $link['url']; ?>" target="_blank"><?php echo $link['url']; ?></a></td>
                                    <td align="center">
                                        <?php echo $link['desc']==''?'暂无描述':$link['desc']; ?>
                                        <!--<?php if($link['desc'] == ''): ?>
                                        暂无描述
                                        <?php else: ?>
                                        <?php echo $link['desc']; endif; ?>-->
                                    </td>
                                    <td align="center">
                                        <a href="<?php echo url('admin/links/edit',['id'=>$link['id']]); ?>" class="btn btn-primary btn-sm shiny">
                                            <i class="fa fa-edit"></i> 编辑
                                        </a>
                                        <a href="<?php echo url('admin/links/del',['id'=>$link['id']]); ?>" onClick="return confirm('确实要删除吗?');" class="btn btn-danger btn-sm shiny">
                                            <i class="fa fa-trash-o"></i> 删除
                                        </a>
                                    </td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
                <div style="text-align: right; margin-top: 10px;">
                    <?php echo $links->render(); ?>
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
    


</body></html>