<?php
class UserAction extends Action{
	/*
	 *用户分类
	 */
	public function usercategory(){
		$Usercategory = D('Usercategory');
		$this->categorydata = $Usercategory->select();
		$this->display();
	}
	/*
	 *用户分类添加
	 */
	public function addusercategory(){
		$Usercategory = D('Usercategory');
	    $this->categorydata = $Usercategory->order('pid ASC')->select();
		$this->display();
	}

	
	/*
	 *用户分类编辑
	 */
	public function categoryEdit(){
		$Usercategory = D('Usercategory');
		$this->categoryData = $Usercategory->select();
		$this->display();
	}
	/*
	 *用户
	 */
	 public function user(){
		 $User = D('User');
		 $this->userData = $User->select();
		 $this->display();
	 }
	 /*
	  *用户添加
	  */
	 public function adduser(){
		 $User = D('User');
		 $Usercategory = D('Usercategory');
		 $this->categorydata = $Usercategory->order('pid ASC')->select();
		 $this->display();
	 }
	 /*
	  *用户编辑
	  */
	  public function userEdit(){
		  $User = D('User');
		  $map['id'] = I('get.id');
		  $this->userData = $User->where($map)->find();
		  $this->display();
	  }
	  /*
	 *用户查询
	 */
	public function usersearch(){
		$User = D('User');
		$map['nickname'] = I('post.nickname');
		$this->datalist = $User->where($map)->select();
		$this->display();
	}
	  /*
	   *用户日志
	   */
	   public function userlog(){
		   $adminId = I('get.id', '', 'intval');
		   $pageNum = I('param.pageNum', 1);
		   $numPerPage = I('param.numPerPage', 20);
		   //分页处理
		   $Userlogs = D('Userlogs');
		   if($adminid){
			   $condition['adminid'] = $adminId;
		   }
		   $this->logData = $Userlogs->where($condition)->page($pageNum.','.$numPerPage)->relation(true)->order('logtime desc')->select();
		   $this->totalCount = $Userlogs->count();
		   $this->numPerPage = $numPerPage;
		   $this->pageNum = $pageNum;
		   $this->display();
	   }




}
?>