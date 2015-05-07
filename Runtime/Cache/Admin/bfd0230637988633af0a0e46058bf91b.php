<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" method="post" action="<?php echo U('Admin/Message/messagecategory');?>">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" />
</form>
<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="__GROUP__/UserAct/search_category" method="post">
	<div class="searchBar">
		<ul class="searchContent">
			<li>
				<label>分类名：</label>
				<input type="text" name="category" value=""/>
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
			<li><a class="add" href="<?php echo U('Admin/User/addusercategory');?>" target="navTab"><span>添加</span></a></li>
			<li><a class="delete" href="__GROUP__/UserAct/delcategory?id={sid_user}" target="ajaxTodo" title="删除" warn="你确定要删除吗？"><span>删除</span></a></li>
			<li><a class="edit" href="__URL__/modifycategory?id={sid_user}" target="navTab" warn="你确定要修改吗？"><span>修改</span></a></li>
			<li class="line">line</li>
		</ul>
	</div>


<table class="list" width="100%" layoutH="116">

      <thead>

      <tr>

            <th width="100">编号</th>

            <th width="100">上级分类</th>

            <th width="100">分类名称</th>

      </tr>

      </thead>

      <tbody>

      <?php if(is_array($categorydata)): $i = 0; $__LIST__ = $categorydata;if( count($__LIST__)==0 ) : echo "无数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="sid_user" rel="<?php echo ($vo['id']); ?>">

                  <td><?php echo ($vo['id']); ?></td>

                  <td><?php echo ($vo['pid']); ?></td>

                  <td><?php echo ($vo['category']); ?></td>



            </tr><?php endforeach; endif; else: echo "无数据" ;endif; ?>

      </tbody>

</table>
</div>