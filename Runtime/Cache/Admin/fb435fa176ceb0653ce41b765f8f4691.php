<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="<?php echo U('Admin/ResourceAct/addarticlecategory');?>" class="pageForm required-validate" onsubmit="return validateCallback(this)"  enctype="multipart/form-data">
		<div class="pageFormContent" layoutH="56">
            <p>
				<label>添加分类：</label>
                <select name="pid">
                 <option value="0">上级分类</option>
                <?php if(is_array($categorydata)): $i = 0; $__LIST__ = $categorydata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["category"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
			</p>
			<p>
            <label>分类名称：</label>
			<input name="category" type="text" size="30">

			</p>
            
		</div>
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">添加</button></div></div></li>
				<li>
					<div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div>
				</li>
			</ul>
		</div>
	</form>
</div>