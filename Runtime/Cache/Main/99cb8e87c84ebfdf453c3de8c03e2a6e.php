<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>乐享网</title>
<link href="/lexiang/Tpl/Main/css/header.css" rel="stylesheet" type="text/css" />
<link href="/lexiang/Tpl/Main/css/lm_cate.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/lexiang/Tpl/Main/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/lexiang/Tpl/Main/js/nav.js"></script>
<style>
*{margin:0;padding:0; font-family:Arial, "宋体", "微软雅黑"; color:#333;}
body{background:#eee; font-size:12px;}
#container{ width:1120px; min-height:600px; margin:auto;
}
#main{width:1120px; min-height:600px; margin:0 auto; margin-top:40px;}
#article{width:700px; min-height:600px;float:left; text-align:left; border:1px solid #aaa; padding:20px;}
.div{width:100%;height:20px;}
.article li{list-style:none; background-image:url(/lexiang/Tpl/Main/images/hot_5.gif); background-repeat:no-repeat; background-position-x:30px; background-position-y:10px;}
.article li a{text-decoration:none; font-size:14px; color:#333333; line-height:24px; text-align:center;}
.article li a:hover{color:#F00; text-decoration:underline;}
</style>
</head>

<body>

<div id="container">
<!--主页头部开始-->
<div id="head">
<div id="top">
<div id="logo" style="text-align:center; background:#ffffff;"><img src="/lexiang/Tpl/Main/images/logo.gif" style="padding:10px 0 0 0;"></div>
<div id="banner"></div>
</div>
<div id="nav">
<ul>
 <li style="float:left;line-height:30px;display:block; border-right:1px solid #fff; text-align:center; color:#fff;font:18px/30px '微软雅黑'; width:300px;">
    <div style="margin-left:20px;">
    <div style="margin-right:1px;padding:0 2em;">
    <span class="text"><a href="/lexiang/index.php/Main">LeXiang</a></span>
    </div>
    </div>
    </li>

<li><a href="<?php echo U('Main/Article/article', array('category'=>base64_encode('网页美工')));?>">网页美工</a>
<ul id="ul">
<li><a href="<?php echo U('Main/Article/article', array('category'=>base64_encode('PhotoShop技术')));?>">PhotoShop技术</a></li>
<li><a href="<?php echo U('Main/Article/article', array('category'=>base64_encode('原型设计')));?>">原型设计</a></li>
<li><a href="<?php echo U('Main/Article/article', array('category'=>base64_encode('UI设计')));?>">UI设计</a></li>
</ul>
</li>
<li><a href="<?php echo U('Main/Article/article', array('category'=>base64_encode('网页前端')));?>">网页前端</a>
<ul id="ul">
<li><a href="<?php echo U('Main/Article/article', array('category'=>base64_encode('PhotoShop技术')));?>">DIV+CSS</a></li>
<li><a href="<?php echo U('Main/Article/article', array('category'=>base64_encode('原型设计')));?>">jquery特效</a></li>
<li><a href="<?php echo U('Main/Article/article', array('category'=>base64_encode('前端框架')));?>">前端框架</a></li>
</ul>
</li>
<li><a href="<?php echo U('Main/Article/article', array('category'=>base64_encode('后台技术')));?>">后台技术</a>
<ul id="ul">
<li><a href="<?php echo U('Main/Article/article', array('category'=>base64_encode('PHP+MYSQL')));?>">PHP+MYSQL</a></li>
<li><a href="<?php echo U('Main/Article/article', array('category'=>base64_encode('JAVA+MYSQL')));?>">JAVA+MYSQL</a></li>
<li><a href="<?php echo U('Main/Article/article', array('category'=>base64_encode('JAVA+MYSQL')));?>">设计模式</a></li>
</ul>
</li>
<li><a href="<?php echo U('Main/Article/article', array('category'=>base64_encode('网站策划')));?>">网站策划</a></li>
<li><a href="<?php echo U('Main/Article/article', array('category'=>base64_encode('android开发')));?>">android开发</a></li>
</ul>
</div>
</div>
<div id="main">
<div id="article">
<h1 style="font-size:26px; color:#2C2B29; font-weight:bold; letter-spacing:1px;"><?php echo ($articleData["title"]); ?></h1>
<br>
<h1 style="font-size:12px; color:#333; letter-spacing:1px;">作者：<span style="color:#CC9900;">hunter</span>&nbsp;&nbsp;<span style="color:#00CC00;"><?php echo (date("Y-m-d",$articleData["ptime"])); ?></span></h1>
<br>
<p style="font-size: 14px; line-height: 26px;"><?php echo ($articleData["content"]); ?></p>
</div>
<div style="width:40px; height:600px; float:left;"></div>
<div id="lm">
<h2>分类索引</h2>
<div class="lm_cate">
<ul>
<?php if(is_array($categorylist)): $i = 0; $__LIST__ = $categorylist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__GROUP__/Main/Article/article/category/<?php echo (base64_encode($vo["category"])); ?>"><?php echo ($vo["category"]); ?></a>(<?php echo (count($vo["article"])); ?>)</li><?php endforeach; endif; else: echo "" ;endif; ?>
<!--
<li><a href="#">AJAX框架</a>(23)</li>
<li><a href="#">AJAX框架</a>(23)</li>
<li><a href="#">AJAX框架</a>(23)</li>
<li><a href="#">AJAX框架</a>(23)</li>
<li><a href="#">AJAX框架</a>(23)</li>
<li><a href="#">AJAX框架</a>(23)</li>
<li><a href="#">AJAX框架</a>(23)</li>
<li><a href="#">AJAX框架</a>(23)</li>
-->
</ul>
</div>
</div>
</div>
</body>
</html>