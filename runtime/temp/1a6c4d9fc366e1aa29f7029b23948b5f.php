<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"H:\www.selfblog.com\public/../application/admin\view\public\login.html";i:1563460675;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><!--Head--><head>
    <meta charset="utf-8">
    <title>管理员登录页</title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="<?php echo config('admin_static'); ?>/style/bootstrap.css" rel="stylesheet">
    <link href="<?php echo config('admin_static'); ?>/style/font-awesome.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="<?php echo config('admin_static'); ?>/style/beyond.css" rel="stylesheet">
    <link href="<?php echo config('admin_static'); ?>/style/demo.css" rel="stylesheet">
    <link href="<?php echo config('admin_static'); ?>/style/animate.css" rel="stylesheet">
    <script type="text/javascript" src="/static/plugins/jq.js"></script>
</head>
<!--Head Ends-->
<!--Body-->

<body>
    <div class="login-container animated fadeInDown">
        <form action="" method="post">
            <div class="loginbox bg-white">
                <div class="loginbox-title">SIGN IN</div>
                <div class="loginbox-textbox">
                    <input value="admin" class="form-control" placeholder="username" name="username" type="text">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="password" name="password" type="password">
                </div>
                <div class="loginbox-textbox">
                    <input type="text" class="form-control" name="captcha" placeholder="请输入验证码">
                </div>
                <div class="loginbox-textbox">
                    <img src="<?php echo captcha_src(); ?>" style="cursor:pointer" alt="captcha" id="captcha"/>
                </div>


                <div class="loginbox-submit">
                    <input class="btn btn-primary btn-block" value="Login" type="submit">
                </div>
            </div>
                <div class="logobox">
                    <p class="text-center">博客后台管理员登录页</p>
                </div>
        </form>
    </div>
    <!--Basic Scripts-->
    <script src="<?php echo config('admin_static'); ?>/style/jquery.js"></script>
    <script src="<?php echo config('admin_static'); ?>/style/bootstrap.js"></script>
    <script src="<?php echo config('admin_static'); ?>/style/jquery_002.js"></script>
    <!--Beyond Scripts-->
    <script src="<?php echo config('admin_static'); ?>/style/beyond.js"></script>
    <script type="text/javascript">
        $("#captcha").click(function () {
            $(this).attr('src',"<?php echo captcha_src(); ?>?_="+Math.random());
        });
        $("#captcha").click(); //自执行一次
    </script>



</body><!--Body Ends--></html>