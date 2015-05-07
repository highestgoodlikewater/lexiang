<?php
class IndexAction extends Action{
	public function index(){
		$Article = D('Article');
		$Resource = D('Resource');
		//$map['id'] = array('elt', max('id'));
		$map['state'] = 1;
		$this->interestData = $Article->where($map)->limit(7)->select();
		$this->downloadData = $Resource->where("state=0")->limit(7)->select();
		//var_dump($this->datalist);
		$this->datalist = $Article->limit(20)->select();
		$this->androidData = $Article->where('categoryid=5')->limit(7)->select();
		$count = $Article->count();
		if($count>10){
		$this->latestData = $Article->limit('$count-10,$count')->select();
		}else{
			$this->latestData = $Article->limit($count)->select();
		}

		$this->phpData = $Article->where('categoryid=13')->limit(7)->select();
		$this->display();
	}
}
?>