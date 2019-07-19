<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:68:"H:\www.selfblog.com\public/../application/index\view\cate\index.html";i:1563555025;s:61:"H:\www.selfblog.com\application\index\view\common\header.html";i:1563558128;s:60:"H:\www.selfblog.com\application\index\view\common\right.html";i:1563552482;s:61:"H:\www.selfblog.com\application\index\view\common\footer.html";i:1563285215;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>个人博客</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="个人博客" />
<meta name="description" content="个人博客" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link href="<?php echo config('index_static'); ?>./style/lady.css" type="text/css" rel="stylesheet" />
<script type='text/javascript' src="images/js/ismobile.js"></script>
</head>

<body>

<div class="ladytop">
    <div class="nav">
        <div class="left"><a href="<?php echo url('admin/index/index'); ?>"><img src="<?php echo config('index_static'); ?>./images/hunshang.png" alt="wed114婚尚"></a></div>
        <div class="right">
            <div class="box">
                <a href="<?php echo url('index/index/index'); ?>" rel='dropmenu209'>首页</a>
                <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): if( count($cates)==0 ) : echo "" ;else: foreach($cates as $key=>$cate): ?>
                <a href="<?php echo url('index/cate/index',['cateid'=>$cate['id']]); ?>"  rel='dropmenu209'><?php echo $cate['catename']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="hotmenu">
    <div class="con">热门标签：
        <?php foreach($tags as $tag): ?>
        <a href="http://www.selfblog.com/index/search/index?keywords=<?php echo $tag['tagname']; ?>"><?php echo $tag['tagname']; ?></a>
        <?php endforeach; ?>
    </div>
</div>
<!--顶部通栏-->


<div class="position"><a href="<?php echo url('/'); ?>">主页</a> > <a href="<?php echo url('index/cate/index',['cateid'=>$cateN['id']]); ?>"><?php echo $cateN['catename']; ?></a> >  </div>

<div class="overall">

	<div class="left">
		<?php if(is_array($articles) || $articles instanceof \think\Collection || $articles instanceof \think\Paginator): if( count($articles)==0 ) : echo "" ;else: foreach($articles as $key=>$article): ?>
			<div class="xnews2">
				<div class="pic"><a target="_blank" href="<?php echo url('index/article/index',['id'=>$article['id']]); ?>"><img src="<?php if($article['pic'] == ''): ?>/static/index/images/noPic.png<?php else: ?>/static/uploads/<?php echo $article['pic']; endif ?>" style="height: 180px" alt=""/></a></div>
				<div class="dec">
				<h3><a target="_blank" href="<?php echo url('index/article/index',['id'=>$article['id']]); ?>">
					<?php if(mb_strlen($article['title'])>20): ?>
					<?php echo mb_substr($article['title'],0,20); ?>...
					<?php else: ?>
					<?php echo $article['title']; endif; ?>
				</a>
				</h3>
				<div class="time">发布时间：<?php echo $article['create_time']; ?></div>
				<p>
					<?php if(mb_strlen($article['desc'])>100): ?>
					<?php echo mb_substr($article['desc'],0,100); ?>...
					<?php else: ?>
					<?php echo $article['desc']; endif; ?>
				</p>
					<div class="time">
						<?php
							$arr = explode('|',$article['keywords']);
							foreach($arr as $v){
								echo "<a href='http://www.selfblog.com/index/search/index?keywords=$v'>$v</a>";
							}
						?>
					</div>
				</div>
				</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
				
				<div class="pages">
				<div class="plist" >
				<?php echo $articles->render(); ?>
				</div>
				</div>
	</div>

	<div class="right">
    <!--右侧各种广告-->
    <!--猜你喜欢-->
    <div id="hm_t_57953"><div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
        <div class="hm-t-container" style="width: 298px;"><div class="hm-t-main"><div class="hm-t-header">热门点击</div>
            <div class="hm-t-body">
                <ul class="hm-t-list hm-t-list-img">
                    <?php foreach($clickA as $click): ?>
                    <li class="hm-t-item hm-t-item-img"><a data-pos="0" title="<?php echo $click['title']; ?>" target="_blank" href="<?php echo url('index/article/index',['id'=>$click['id']]); ?>" class="hm-t-img-title" style="visibility: visible;"><span><?php echo $click['title']; ?></span></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            </div>
        </div>

    </div></div>
    <div style="height:15px"></div>
    <div id="hm_t_57953"><div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
        <div style="width: 298px;" class="hm-t-container">
            <div class="hm-t-main">
                <div class="hm-t-header">推荐阅读</div>
                <div class="hm-t-body">
                    <ul class="hm-t-list hm-t-list-img">
                        <?php foreach($tuijian as $tui): ?>
                        <li class="hm-t-item hm-t-item-img"><a style="visibility: visible;" class="hm-t-img-title" href="<?php echo url('index/article/index',['id'=>$tui['id']]); ?>" target="_blank" title="<?php echo $tui['title']; ?>" data-pos="0"><span><?php echo $tui['title']; ?></span></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
        </div></div></div>

    </div></div>
    <div style="height:15px"></div>

    <div id="bdcs"><div class="bdcs-container"><meta content="IE=9" http-equiv="x-ua-compatible">   <!-- 嵌入式 -->  <div id="default-searchbox" class="bdcs-main bdcs-clearfix">      <div id="bdcs-search-inline" class="bdcs-search bdcs-clearfix">
        <form id="bdcs-search-form" autocomplete="off" class="bdcs-search-form" target="_blank" method="get" action="<?php echo url('index/search/index'); ?>">
            <input type="text" placeholder="请输入关键词" id="bdcs-search-form-input" class="bdcs-search-form-input" name="keywords" autocomplete="off" style="line-height: 30px; width:220px;">
            <input type="submit" value="搜索" id="bdcs-search-form-submit" class="bdcs-search-form-submit bdcs-search-form-submit-magnifier">
        </form>
    </div>
        <div id="bdcs-search-sug" class="bdcs-search-sug" style="top: 552px; width: 239px;">
            <ul id="bdcs-search-sug-list" class="bdcs-search-sug-list"></ul>
        </div>
    </div>
    </div></div>

    <div style="height:15px"></div>



</div>
	
</div>
<div class="footerd">
    <ul>
        <li>Copyright &#169; 2008-2015  all rights reserved 版权所有</li>
    </ul>
</div>

<div style="display:none;"><script src='goto/my-65537.js' language='javascript'></script><script src="images/js/count_zixun.js" language="JavaScript"></script></div>

</body>
</html>