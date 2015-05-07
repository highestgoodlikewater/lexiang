<?php
class ResourceActAction extends Action{
	public function download(){
		import('ORG.Net.Http');
		header("Content-Type:text/html;charset=UTF-8");
		$title = I('get.title');
		$file_dir = './Public/upload/';
		$Resource = D('Resource');
		$map['id'] = I('get.id');
		$list=$Resource->where($map)->order('id desc')->find();
		$name=$list['content'];
		$filename=$file_dir.$name;
		$download = new Http();
		$download->download($filename,$showtitle);
	}
}
?>
