<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" method="post" action="<?php echo U('Admin/User/usercategory');?>">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" />
</form>
<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo U('Admin/User/usersearch');?>" method="post">
	<div class="searchBar">
		<ul class="searchContent">
			<li>
				<label>昵称：</label>
				<input type="text" name="nickname" value=""/>
			</li>
		</ul>
		<div class="subBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">查询</button></div></div></li>
			</ul>
		</div>
	</div>
	</form>
</div>

<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="<?php echo U('Admin/User/adduser');?>" target="navTab"><span>添加</span></a></li>
			<li><a class="delete" href="__GROUP__/UserAct/deluser/id/{sid_user}" target="ajaxTodo" title="删除" warn="你确定要删除吗？"><span>删除</span></a></li>
			<li><a class="edit" href="__URL__/userEdit/id/{sid_user}" target="navTab" warn="你确定要修改吗？"><span>修改</span></a></li>
			<li class="line">line</li>
		</ul>
	</div>
<table class="list" width="100%" layoutH="116">

      <thead>

      <tr>

            <th>编号</th>

            <th>用户名</th>

            <th>昵称</th>

            <th>状态</th>

            <th>注册时间</th>


      </tr>

      </thead>

      <tbody>
	  <?php if(is_array($userData)): $i = 0; $__LIST__ = $userData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="sid_user" rel="<?php echo ($vo['id']); ?>">

                  <td><?php echo ($vo['id']); ?></td>

                  <td><?php echo ($vo['username']); ?></td>

                  <td><?php echo ($vo['nickname']); ?></td>

                  <td><?php echo ($vo['state']); ?></td>

                  <td><?php echo (date("Y-m-d",$vo['regtime'])); ?></td>

            </tr><?php endforeach; endif; else: echo "" ;endif; ?>

      </tbody>

</table>
	<div class="panelBar">
		<div class="pages">
			<span>显示</span>
			<select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
				<option value="20" <?php if($numPerPage == 20): ?>selected="true"<?php endif; ?>>20</option>
				<option value="50" <?php if($numPerPage == 50): ?>selected="true"<?php endif; ?>>50</option>
				<option value="100" <?php if($numPerPage == 100): ?>selected="true"<?php endif; ?>>100</option>
				<option value="150" <?php if($numPerPage == 150): ?>selected="true"<?php endif; ?>>150</option>
			</select>
			<span>条，共<?php echo ($totalCount); ?>条</span>
		</div>
		<div class="pagination" targetType="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="10" currentPage="<?php echo ($pageNum); ?>"></div>
	</div>