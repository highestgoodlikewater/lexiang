<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>乐享让知识变得有趣</title>
<link href="/lexiang/Tpl/Main/css/header.css" rel="stylesheet" type="text/css" />
<style>
/*css reset*/
body,h1,h2,h3,h4,h5,h6,hr,p,blockquote,dl,dt,dd,ul,ol,li,pre,form,fieldset,legend,button,input,textarea,th,td{margin:0;padding:0;
}
body{background:url(/lexiang/Tpl/Main/images/bg.jpg);}
/*common*/
#container{ width:1120px; min_height:600px; margin:auto; background:#FFFFFF; text-align:center;
}
.div{width:100%;height:20px;}
.article li{list-style:none; background-image:url(/lexiang/Tpl/Main/images/hot_5.gif); background-repeat:no-repeat; background-position:40px;}
.article li a{text-decoration:none; font-size:14px; color:#333333; line-height:24px; text-align:center;}
.article li a:hover{color:#F00; text-decoration:underline;}
.margin{margin-left:150px;}
#main{ width:1120px; height:auto; min-height:860px;}
#left_list{ width:250px; height:860px; float:left;}
.slide_img{width:250px; height:280px; background-color:#CFC; position:relative; z-index:0; margin:0 auto;}
.slide-btn-bj{width:250px;height:22px;position:absolute;bottom:0;z-index:999; margin-bottom:2px;}
#Btn{float:right;margin-right:10px;}
#Btn li{float:left;display:inline;width:20px; height:18px; line-height:
18px; text-align:center;background:#333333; cursor:pointer;margin-left:10px; color:#fff; font-weight:bold;}
#Btn li.cc{background:#FF6633; color:#fff; font-weight:bold;}
#imgMain{width:250px; height:280px; overflow:hidden;}
.l_list1{width:250px; height: 270px; background:#f5f8fd; border:1px solid #B5D2FF;}
.l_list2{width:250px; height: 270px; background:#f5f8fd; border:1px solid #B5D2FF;}
#mid_list{ width:480px; height:860px; float:left; overflow:hidden;}
.search{width:480px; height:40px;}
.search-box{outline:none; float:left;}
.search_btn{width:50px; height:34px; background-color: #4d90fe; border:1px solid #4d90fe;
cursor: pointer; color:#f3f7fc; float:left;}
.scroll_img{width:480px; height:180px; background-color:#0F6;}
.resource{width:480px; height:560px; overflow:hidden; font-size:14px; line-height:25px;}
.resource ul{list-style:none;}
.resource li{text-align:left; padding:5px 0 0 10px; font-size:14px;}
.resource li a{text-decoration:none; color:#333333; font-weight:normal;}
.resource li a:hover{color:#F00; text-decoration:underline;}
#right_list{ width:260px; height:860px; float:left;}
.r_list1{width:260px; height:278px; background:#f5f8fd; border:1px solid #B5D2FF;}
.r_list2{width:260px; height:270px; background:#f5f8fd; border:1px solid #B5D2FF;}
.r_list3{width:260px; height:272px; background:#f5f8fd; border:1px solid #B5D2FF;}
.lm_style{height:30px; background:url(/lexiang/Tpl/Main/images/lm_bg.jpg); text-align:center; line-height:30px; color:#FFF;}
.lm_style p{color:#27638C; font-size:17px; font-weight:bold;}
#footer{width:1120px; height:170px; background:#F2F2F2; line-height:170px;}


@charset "utf-8";
.mask{margin:0;padding:0;border:none;width:100%;height:100%;background:#333;opacity:0.6;filter:alpha(opacity=60);z-index:9999;position:fixed;top:0;left:0;display:none;}
#LoginBox{position:absolute;left:460px;top:150px;background:white;width:426px;height:282px;border:3px solid #444;border-radius:7px;z-index:10000;display:none;}
.row1{background:#f7f7f7;padding:0px 20px;line-height:50px;height:50px;font-weight:bold;color:#666;font-size:20px;}
.row{height:77px;line-height:77px;padding:0px 30px;font-family:华文楷体;font-size:x-large;}
.close_btn{font-family:arial;font-size:30px;font-weight:700;color:#999;text-decoration:none;float:right;padding-right:4px;}
.inputBox{border:1px solid #c3c3c3;padding:1px 3px 6px 3px;border-radius:5px;margin-left:5px;}
#txtName{height:27px;width:230px;border:none;}
#txtPwd{height:27px;width:230px;border:none;}
#loginbtn{color:White;background:#4490f7;text-decoration:none;padding:10px 95px;margin-left:87px;margin-top:40px;border-radius:5px;opacity:0.8;filter:alpha(opacity=80);}
#example{position:fixed;left:390px;top:30px;color:White;background:#4490f7;text-decoration:none;padding:10px 95px;margin-left:87px;margin-top:40px;border-radius:5px;opacity:0.6;filter:alpha(opacity=60);}
.warning{float:right;color:Red;text-decoration:none;font-size:20px;font-weight:bold;margin-right:20px;display:none;}
</style>
<script type="text/javascript" src="/lexiang/Tpl/Main/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="/lexiang/Tpl/Main/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/lexiang/Tpl/Main/js/nav.js"></script>

<script>
$(function(){
var t = n = count = 0;
$(function(){
count = $("#imgMain a").size();
for(var i=1; i<count+1;i++){
	var newsli="<li>"+i+"</li>";
	$('#Btn').append(newsli);
};
$("#Btn li").eq(0).addClass('cc');
$("imgMain a:not(:first)").hide();
$("#Btn li").click(function(){
	$(this).addClass("cc").siblings("li").removeClass("cc");
	var i = $(this).text()-1;
	n=i;
	if(i>=count) return;
	$("#imgMain a").filter(":visible").fadeOut(500).parent().children().eq(i).fadeIn(1000);
});
t=setInterval("showAuto()",7000);
$("slide_img").hover(function(){clearInterval(t)},
function(){t=setInterval("showAuto()",7000);});
})		
});
function showAuto(){
	n=n>=(count-1) ? 0 : n+1;
	$("#Btn li").eq(n).trigger("click").addClass("cc").siblings("li").removeClass("cc");
}
</script>
<!--弹出层-->
<script type="text/javascript">
	$(function ($) {
		//弹出登录
		$("#login").hover(function () {
			$(this).stop().animate({
				opacity: '1'
			}, 600);
		}, function () {
			$(this).stop().animate({
				opacity: '0.6'
			}, 1000);
		}).on('click', function () {
			$("body").append("<div id='mask'></div>");
			$("#mask").addClass("mask").fadeIn("slow");
			$("#LoginBox").fadeIn("slow");
		});
		//
		//按钮的透明度
		$("#loginbtn").hover(function () {
			$(this).stop().animate({
				opacity: '1'
			}, 600);
		}, function () {
			$(this).stop().animate({
				opacity: '0.8'
			}, 1000);
		});
		
		//关闭
		$(".close_btn").hover(function () { $(this).css({ color: 'black' }) }, function () { $(this).css({ color: '#999' }) }).on('click', function () {
			$("#LoginBox").fadeOut("fast");
			$("#mask").css({ display: 'none' });
		});
	});
	</script>	
</head>
<body>
<!--页面开始-->
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
<!--主页头部结束-->
<div style="width:1120px; height:20px;"></div>
<!--主页内容部分开始-->
<div id="main">
<div style="width:30px; height:860px; float:left;"></div>
<div id="left_list">
<div class="slide_img">

<div class="slide-btn-bj">
<ul id="Btn">
</ul>
</div>
<div id="imgMain">
<a href="#"><img src="/lexiang/Tpl/Main/images/1.jpg"></a>
<a href="#"><img src="/lexiang/Tpl/main/images/2.jpg"></a>
<a href="#"><img src="/lexiang/Tpl/Main/images/3.jpg"></a>
</div>

</div>
<div class="div"></div>
<div class="l_list1"><div class="lm_style" width="250px"><p>猜你感兴趣</p></div>
<ul class="article">
<?php if(is_array($interestData)): $i = 0; $__LIST__ = $interestData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__GROUP__/Main/Article/readarticle?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div>
<div class="div"></div>
<div class="l_list2"><div class="lm_style" width="250px"><p>下载排行</p></div>
<ul class="article">
<?php if(is_array($downloadData)): $i = 0; $__LIST__ = $downloadData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Main/Resource/download');?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>


</div>
</div>
<div style="width:50px; height:864px; float:left;"></div>
<div id="mid_list">
<div class="search"><form><p>&nbsp;&nbsp;<input type="text" name="name" style="width:400px; height:30px;" class="search-box" /><input type="submit" value="搜索" class="search_btn"></p></form></div>
<div class="div"></div>
<div class="scroll_img"><img src="/lexiang/Tpl/Main/images/u=4164223389,3460888460&fm=21&gp=0.jpg" width="480px" height="180px"></div>
<div style="width:100%; height:60px;"></div>
<div class="resource">
<div style="width:480px; height:590px; float:left;">
<div class="lm_style" width="480px" style="border:1px solid #B5D2FF; border-bottom:none;"><p>资源浏览</p></div>
<div style="padding:10px; padding-right:50px; border:1px solid #B5D2FF; background:#f5f8fd;">
<ul>
<?php if(is_array($datalist)): $i = 0; $__LIST__ = $datalist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__GROUP__/Main/Article/readarticle?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a><span style="float:right; color:#FF6633;"><?php echo (date("Y-m-d",$vo["ptime"])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div>
</div>
</div>
</div>
<div style="width:20px; height:860px;float:left;"></div>
<div id="right_list">
<div class="r_list1"><div class="lm_style" width="260px"><p>安卓技术</p></div>
<ul class="article">
<?php if(is_array($androidData)): $i = 0; $__LIST__ = $androidData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__GROUP__/Main/Article/readarticle?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div>
<div class="div"></div>
<div class="r_list2"><div class="lm_style" width="260px"><p>最新文章</p></div>
<ul class="article">
<?php if(is_array($latestData)): $i = 0; $__LIST__ = $latestData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__GROUP__/Main/Article/readarticle?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div>
<div class="div"></div>
<div class="r_list3"><div class="lm_style" width="260px"><p>php技术</p></div>
<ul class="article">
<?php if(is_array($phpData)): $i = 0; $__LIST__ = $phpData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__GROUP__/Main/Article/readarticle?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div>

</div>
<div style="width:30px; height:860px;float:right;"></div>
<!--弹出层-->
<div id="LoginBox">
        <div class="row1">
            <span style="float:left">乐享DIY登录窗口</span><a href="javascript:void(0)" title="关闭窗口" class="close_btn" id="closeBtn">×</a>
        </div>
        <div class="row">
            用户名: <span class="inputBox">
                <input type="text" id="txtName" placeholder="账号/邮箱" />
            </span><a href="javascript:void(0)" title="提示" class="warning" id="warn">*</a>
        </div>
        <div class="row">
            密&nbsp;&nbsp码: <span class="inputBox">
                <input type="text" id="txtPwd" placeholder="密码" />
            </span><a href="javascript:void(0)" title="提示" class="warning" id="warn2">*</a>
        </div>
        <div class="row">
            <a href="#" id="loginbtn">登录</a>
        </div>
    </div>

</div>
<!--主页内容部分结束-->
<div style="width:1120px; height:10px;"></div>
<!--脚部-->
<div id="footer">
<p style="text-align:center;">Powered by Hunter @cqupt 2014/7/14</p>
</div>
<!--脚步结束-->
</div>
<!---页面结束-->
</body>
</html>