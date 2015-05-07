<?php
class CommonAction extends Action{
     public function _initialize(){
		 if(!SESSION('?ADMIN_STATE')){
			 $this->redirect('Admin/Login/index');
		 }
		 $this->webTitle = '后台管理';
	 }
}
?>