<?php
class ResourceAction extends Action{
	public function download(){
		$Resource = D('Resource');
		import('ORG.Util.Page');
		$count = $Resource->where('state=1')->count();
		$Page = new Page($count, 25);
		$show = $Page->show();
		$list = $Resource->where('state=1')->order('ptime')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->list = $list;
		$this->page = $show;
		$this->display();
	}
}
?>