<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" method="post" action="<?php echo U('Admin/User/userlog');?>">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" />
	<input type="hidden" name="orderField" value="<?php echo ($orderField); ?>" />
	<input type="hidden" name="orderDirection" value="<?php echo ($orderDirection); ?>" />
</form>
<div class="pageContent">
	<table class="table" width="100%" layoutH="50">
		<thead>
			<tr>
				<th width="50">日志编号</th>
				<th width="100">用户</th>
				<th width="100">用户昵称</th>
				<th width="80" >登陆地址</th>
				<th width="80" >登陆ip</th>
				<th width="130">登陆时间</th>
				<th width="70">操作</th>
			</tr>
		</thead>
		<tbody>
		<!-- 循环输出商店信息 -->
			<?php if(is_array($logData)): $i = 0; $__LIST__ = $logData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="sid_user" rel="<?php echo ($i); ?>">
				<td align="center"><?php echo ($vo["id"]); ?></td>
				<td><?php echo ($vo["user"]["username"]); ?></td>
				<td><?php echo ($vo["user"]["nickname"]); ?></td>
				<td><?php echo getLocation($vo['logip']);?></td>
				<td><?php echo ($vo["logip"]); ?></td>
				<td><?php echo (date('Y-m-d H:i', $vo["logtime"])); ?></td>
				<td>
					<a title="确定要删除该日志吗？" target="ajaxTodo" href="<?php echo U('Admin/UserAct/deluserlog', array('id'=>$vo['id']));?>" class="btnDel" >删除</a>
				</td>
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
</div>