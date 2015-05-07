<?php
class UserActAction extends Action{
    private $res = array();
	function _initialize(){
		$this->res['statusCode'] = '300';
		$this->res['message'] = '数据错误';
		$this->res['navTabId'] = '';
		$this->res['rel'] = '';
		$this->res['callbackType'] = 'closeCurrent';
		$this->res['forwardUrl'] ='';
	}
	/*
	 *分类添加
	 */
	public function addcategory(){
		$Usercategory = D('Usercategory');
		$data = I('post.');
		if($obj = $Usercategory->create($data)){
			if($Usercategory->add($obj)){
				$this->res['message'] = '添加成功';
				$this->res['statusCode'] = '200';
			}else{
				$this->res['message'] = '添加失败';
			}
		}else{
			$this->res['message'] = $Usercategory->getError();
		}
		echo json_encode($this->res);
	}
	/*
	 *分类删除
	 */
	public function delcategory(){
		$Usercategory = D('Usercategory');
		$map['id'] = I('get.id');
		if($Usercategory->where($map)->delete()){
			$this->res['message'] = '删除成功';
			$this->res['statusCode'] = '200';
		}else{
			$this->res['message'] = '删除失败';
		}
		echo json_encode($this->res);
	}
	/*
	 *分类修改
	 */
	public function modifycategory(){
		$Usercategory = D('Usercategory');
		$data = I('post.');
		if($obj = $Usercategory->create()){
			if($Usercategory->save($obj)){
				$this->res['message'] = '修改成功';
				$this->res['statusCode'] = '200';
			}else{
				$this->res['message'] = '修改失败';
			}
		}else{
			$this->res['message'] = $Usercategory->getError();
		}
		echo json_encode($this->res);
	}
	/*
	 *用户添加
	 */
	public function adduser(){
		$User = D('User');
		$data = I('post.');
		$data['regtime'] = time();
		if($obj = $User->create($data)){
			if($User->add($obj)){
				$this->res['message'] = '添加成功';
				$this->res['statusCode'] = '200';
			}else{
				$this->res['message'] = '添加失败';
			}
		}else{
			$this->res['message'] = $User->getError;
		}
		echo json_encode($this->res);
	}
	/*
	 *用户删除
	 */
	public function deluser(){
		$User = D('User');
		$map['id'] = I('get.id');
		if($User->where($map)->delete()){
			$this->res['message'] = '删除成功';
			$this->res['statusCode'] = '200';
		}else{
			$this->res['message'] = '删除失败';
		}
		echo json_encode($this->res);
	}
	/*
	 *用户修改
	 */
	public function modifyuser(){
		$User = D('User');
		$data = I('post.');
		if($obj = $User->create($data)){
			if($User->save($obj)){
				$this->res['message'] = '修改成功';
				$this->res['statusCode'] = '200';
			}else{
				$this->res['message'] = '修改失败';
			}
		}else{
			$this->res['message'] = $this->getError();
		}
		echo json_encode($this->res);
	}
	/*
	 *用户日志删除
	 */
	public function deluserlog(){
		$Userlogs = D('Userlogs');
		$map['id'] = I('get.id');
		if($Userlogs->where($map)->delete()){
			$this->res['message'] = '删除成功';
			$this->res['statusCode'] = '200';
		}else{
			$this->res['message'] = '删除失败';
		}
		echo json_encode($this->res);
	}
}
?>