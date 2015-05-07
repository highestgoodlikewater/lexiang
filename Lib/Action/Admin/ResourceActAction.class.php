<?php
class ResourceActAction extends Action{
    private $res = array();
	function _initialize(){
		$this->res['statusCode'] = '300';
		$this->res['message'] = '数据错误';
		$this->res['navTabId'] = '';
		$this->res['rel'] = '';
		$this->res['callbackType'] = 'closeCurrent';
		$this->res['forwardUrl'] = '';
	}
	/*
	 *文章分类添加
	 */
	public function addarticlecategory(){
		$Articlecategory = D('Articlecategory');
		$data = I('post.');
		if($obj = $Articlecategory->create($data)){
			if($Articlecategory->add($obj)){
				$this->res['message'] = '添加成功';
				$this->res['statusCode'] = '200';
			}else{
				$this->res['message'] = '添加失败';
			}
		}else{
			$this->res['message'] = $Articlecategory->getError();
		}
		echo json_encode($this->res);
	}
	/*
	 *文章分类删除
	 */
	public function delarticlecategory(){
		$Articlecategory = D('Articlecategory');
		$map['id'] = I('get.id', '', 'intval');
		if($Articlecategory->where($map)->delete()){
			$this->res['message'] = '删除成功';
			$this->res['statusCode'] = '200';
		}else{
			$this->res['message'] = '删除失败';
		}
	echo json_encode($this->res);
}
	/*
	 *文章添加
	 */
	public function addarticle(){
		$Article = D('Article');
		$data = I('post.');
		if($obj = $Article->create($data)){
			if($Article->add($obj)){
				$this->res['message'] = '添加成功';
				$this->res['statusCode'] = '200';
			}else{
				$this->res['messgae'] = '添加失败';
			}
		}else{
			$this->res['message'] = $Article->getError();
		}
		echo json_encode($this->res);
	}
	/*
	 *文章删除
	 */
	public function delarticle(){
		$Article = D('Article');
		$map['id'] = I('get.id', '', 'intval');
		if($Article->where($map)->delete()){
			$this->res['message'] = '删除成功';
			$this->res['statusCode'] = '200';
		}else{
			$this->res['message'] = '删除失败';
		}
		echo json_encode($this->res);
	}
	/*
	 *文章编辑
	 */
	public function editarticle(){
		$Article = D('Article');
		$data = I('post.');
		if($obj = $Article->create($data)){
			if($Article->save($obj)){
				$this->res['message'] = '修改成功';
				$this->res['statusCode'] = '200';
			}else{
				$this->res['message'] = '修改失败';
			}
		}else{
			$this->res['message'] = $Article->getError();
		}
		echo json_encode($this->res);
	}
	/*
	 *下载分类添加
	 */
	public function addresourcecategory(){
		$Resource = D('Resource');
		$data = I('post.');
		if($obj = $Resource->create($data)){
			if($resource->add($obj)){
				$this->res['message'] = '添加成功';
				$this->res['statusCode'] = '200';
			}else{
				$this->res['message'] = '添加失败';
			}
		}else{
			$this->res['message'] = $Resource->getError();
		}
		echo json_encode($this->res);
	}
	/*
	 *下载分类删除
	 */
	public function delesourcecategory(){
		$Resource = D('Resource');
		$map['id'] = I('get.id', '', 'intval');
		if($Resource->where($map)->delete()){
			$this->res['message'] = '删除成功';
			$this->res['statusCode'] = '200';
		}else{
			$this->res['message'] = '删除失败';
		}
		echo json_encode($this->res);
	}
	/*
	 *下载添加
	 */
	public function addresource(){
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();
		$upload->maxSize = 104857600;
		$upload->allowExts = array('exe', 'doc', 'chm', 'txt' ,'rar', 'zip', 'pdf', 'ppt', 'jpg');
		$upload->savePath = './Public/upload/';// 设置附件上传目录
		$upload->uploadReplace = true;//若同名则覆盖
		$upload->saveRule=time();
		if($upload->upload()){
			$info = $upload->getUploadFileInfo();
		}else{
			$this->res['error'] = $upload->getErrorMsg();
		}
		//var_dump($info);
		//die();
		$Resource = D('Resource');
		$data['categoryid'] = I('post.categoryid', '', 'intval');
		$data['title'] = I('post.title');
		$data['content'] = $info[0]['savename'];
		$data['size'] = round(intval($info[0]['size'])/1048576, 2);
		$data['state'] = I('post.state','', 'intval');
		if($obj = $Resource->create($data)){
			if($Resource->add($obj)){
				$this->res['message'] = '添加成功';
				$this->res['statusCode'] = '200';
				$this->res['forwardUrl'] = U('Admin/Index/Resource');
			}else{
				$this->res['message'] = '添加失败';
			}
		}else{
			$this->res['message'] = $Resource->getError();
		}
		echo json_encode($this->res);
	}

	public function test(){
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();
		$upload->maxSize = 3145728;
		$upload->allowExts = array('jpg', 'gif', 'png', 'jpeg');
		$upload->savePath = './Public/upload/';// 设置附件上传目录
		$upload->uploadReplace = true;//若同名则覆盖
		$upload->saveRule=time();
		if($upload->upload()){
			$info = $upload->getUploadFileInfo();
		}else{
			$this->res['error'] = $upload->getErrorMsg();
		}
		$Resource = D('Resource');
		//$data = I('post.');
		$data['content']=$_FILES['file']['name'];//$info[0]['savename'];
		$data['size'] = $_FILES['file']['size'];
		echo json_encode($data);
	}

	/*
	 *下载删除
	 */
	public function delresource(){
		$Resource = D('Resource');
		$map['id'] = I('get.id', '', 'intval');
		if($Resource->where($map)->delete()){
			$this->res['message'] = '删除成功';
			$this->res['statusCode'] = '200';
		}else{
			$this->res['message'] = '删除失败';
		}
		echo json_encode($this->res);
	}
	/*
	 *下载编辑
	 */
	public function editresource(){
		$Resource = D('Resource');
		$data = I('post.');
		if($obj = $Resource->create($data)){
			if($Resource->add($obj)){
				$this->res['message'] = '修改成功';
				$this->res['statusCode'] = '200';
			}else{
				$this->res['message'] = '修改失败';
			}
		}else{
			$this->res['message'] = $Resource->getError();
		}
		echo json_encode($this->res);
	}
}
?>