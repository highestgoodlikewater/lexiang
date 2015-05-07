<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>简单实用国产jQuery UI框架 - DWZ富客户端框架(J-UI.com)</title>

<link href="__DWZ__/themes/default/style.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="__DWZ__/themes/css/core.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="__DWZ__/themes/css/print.css" rel="stylesheet" type="text/css" media="print"/>
<link href="__DWZ__/uploadify/css/uploadify.css" rel="stylesheet" type="text/css" media="screen"/>
<!--[if IE]>
<link href="themes/css/ieHack.css" rel="stylesheet" type="text/css" media="screen"/>
<![endif]-->

<!--[if lte IE 9]>
<script src="js/speedup.js" type="text/javascript"></script>
<![endif]-->

<script src="__DWZ__/js/jquery-1.7.2.js" type="text/javascript"></script>
<script src="__DWZ__/js/jquery.cookie.js" type="text/javascript"></script>
<script src="__DWZ__/js/jquery.validate.js" type="text/javascript"></script>
<script src="__DWZ__/js/jquery.bgiframe.js" type="text/javascript"></script>
<script src="__DWZ__/xheditor/xheditor-1.2.1.min.js" type="text/javascript"></script>
<script src="__DWZ__/xheditor/xheditor_lang/zh-cn.js" type="text/javascript"></script>
<script src="__DWZ__/uploadify/scripts/jquery.uploadify.js" type="text/javascript"></script>

<!-- svg图表  supports Firefox 3.0+, Safari 3.0+, Chrome 5.0+, Opera 9.5+ and Internet Explorer 6.0+ -->
<script type="text/javascript" src="__DWZ__/chart/raphael.js"></script>
<script type="text/javascript" src="__DWZ__/chart/g.raphael.js"></script>
<script type="text/javascript" src="__DWZ__/chart/g.bar.js"></script>
<script type="text/javascript" src="__DWZ__/chart/g.line.js"></script>
<script type="text/javascript" src="__DWZ__/chart/g.pie.js"></script>
<script type="text/javascript" src="__DWZ__/chart/g.dot.js"></script>

<script src="__DWZ__/bin/dwz.min.js" type="text/javascript"></script>
<script src="__DWZ__/js/dwz.regional.zh.js" type="text/javascript"></script>

<script type="text/javascript">
$(function(){
	DWZ.init("__DWZ__/dwz.frag.xml", {
		loginUrl:"login_dialog.html", loginTitle:"登录",	// 弹出登录对话框
//		loginUrl:"login.html",	// 跳到登录页面
		statusCode:{ok:200, error:300, timeout:301}, //【可选】
		pageInfo:{pageNum:"pageNum", numPerPage:"numPerPage", orderField:"orderField", orderDirection:"orderDirection"}, //【可选】
		debug:false,	// 调试模式 【true|false】
		callback:function(){
			initEnv();
			$("#themeList").theme({themeBase:"__DWZ__/themes"}); // themeBase 相对于index页面的主题base路径
		}
	});
});

</script>
</head>

<body scroll="no">
<div id="layout">
  <div id="header">
    <div class="headerNav"> <a class="logo" href="#">标志</a>
      <ul class="nav">
        <li><a>欢迎您： <?php echo session('ADMIN_NAME');?></a></li>
        <li><a>登录IP：<?php echo get_client_ip();?></a></li>
        <li><a href="#">退出</a></li>
      </ul>
      <ul class="themeList" id="themeList">
        <li theme="default">
          <div class="selected">蓝色</div>
        </li>
        <li theme="green">
          <div>绿色</div>
        </li>
        <!--<li theme="red"><div>红色</div></li>-->
        <li theme="purple">
          <div>紫色</div>
        </li>
        <li theme="silver">
          <div>银色</div>
        </li>
        <li theme="azure">
          <div>天蓝</div>
        </li>
      </ul>
    </div>

    <!-- navMenu -->

  </div>
  <div id="leftside">
    <div id="sidebar_s">
      <div class="collapse">
        <div class="toggleCollapse">
          <div></div>
        </div>
      </div>
    </div>
    <div id="sidebar">
      <div class="toggleCollapse">
        <h2>主菜单</h2>
        <div>收缩</div>
      </div>
      <div class="accordion" fillSpace="sidebar">
        <div class="accordionHeader">
          <h2><span>Folder</span>资源管理</h2>
        </div>
        <div class="accordionContent">
          <ul class="tree treeFolder">
		    <li><a href="<?php echo U('Admin/Resource/articlecategory');?>" target="navTab"  rel="cat11">文章分类</a></li>
            <li><a href="<?php echo U('Admin/Resource/article');?>" target="navTab"  rel="cat12">文章管理</a></li>
			<li><a href="<?php echo U('Admin/Resource/resourcecategory');?>" target="navTab" rel="cat13">下载分类</a></li>
            <li><a href="<?php echo U('Admin/Resource/resource');?>" target="navTab"  rel="cat14">下载管理</a></li>
            <li><a href="#" target="navTab"  rel="cat15">其它管理</a></li>
          </ul>
        </div>
        <div class="accordionHeader">
          <h2><span>Folder</span>用户管理</h2>
        </div>
        <div class="accordionContent">
          <ul class="tree treeFolder">
            <li><a href="<?php echo U('Admin/User/usercategory');?>" target="navTab"  rel="cat21">用户分类</a></li>
            <li><a href="<?php echo U('Admin/User/user');?>" target="navTab"  rel="cat22">用户管理</a></li>
			<li><a href="<?php echo U('Admin/User/userlog');?>" target="navTab" rel="cat24">用户登录日志</a></li>
          </ul>
        </div>
        <div class="accordionHeader">
          <h2><span>Folder</span>管理员管理</h2>
        </div>
        <div class="accordionContent">
          <ul class="tree treeFolder">
            <li><a href="#" target="navTab"  rel="cat31">管理员管理</a></li>
            <li><a href="#" target="navTab"  rel="cat32">管理员登录日志</a></li>
          </ul>
        </div>
        
      </div>
    </div>
  </div>
  <div id="container">
    <div id="navTab" class="tabsPage">
      <div class="tabsPageHeader">
        <div class="tabsPageHeaderContent"><!-- 显示左右控制时添加 class="tabsPageHeaderMargin" -->
          <ul class="navTab-tab">
            <li tabid="main" class="main"><a href="javascript:;"><span><span class="home_icon">我的主页</span></span></a></li>
          </ul>
        </div>
        <div class="tabsLeft">left</div>
        <!-- 禁用只需要添加一个样式 class="tabsLeft tabsLeftDisabled" -->
        <div class="tabsRight">right</div>
        <!-- 禁用只需要添加一个样式 class="tabsRight tabsRightDisabled" -->
        <div class="tabsMore">more</div>
      </div>
      <ul class="tabsMoreList">
        <li><a href="javascript:;">我的主页</a></li>
      </ul>
      <div class="navTab-panel tabsPageContent layoutBox">
        <div class="page unitBox">
          <div class="accountInfo">
            <p><span>欢迎使用乐享后台管理系统</span></p>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="footer">Copyright &copy; 2014 <a href="http://www.tangdream.com" target="dialog">lexiang.com</a> 技术支持：made By hunter</div>
</body>
</html>