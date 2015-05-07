<?php
class ArticleActAction extends Action{
	private $res = array();
	function _initialize(){
		$this->res['statusCode'] = '300';
		$this->res['message'] = '数据错误';
		$this->res['navTabId'] = '';
		$this->res['rel'] = '';
		$this->res['callbackType'] = 'closeCurrent';
		$this->res['forwardUrl'] = '';
	}
	private function getArray($json){
		return json_decode(htmlspecialchars_decode($json), true);
	}
		
	/*
	 *添加文章
	 */
	public function addarticle(){
		$Article = D('Article');
		$data = I('post.');
		if($obj = $Article->create($data)){
			if($Article->add($obj)){
				$this->res['message'] = '添加成功';
				$this->res['statusCode'] = '200';
			}else{
				$this->res['message'] = '添加失败';
			}
		}else{
			$this->res['message'] = $Article->getError();
		}
		echo json_encode($this->res);
	}
}
?>
		