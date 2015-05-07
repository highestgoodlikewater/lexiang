<?php
class ArticleAction extends Action{
	public function article(){
		$Article = D('Article');
		import('ORG.Util.Page');
		$Articlecategory = D('Articlecategory');
		$map['category'] = base64_decode(I('get.category'));
		$id = $Articlecategory->where($map)->getField('id');
		$count = $Article->where('categoryid='.$id)->count();
		$Page = new Page($count,5);
		$show = $Page->show();
		$list = $Article->where('categoryid='.$id)->order('ptime')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->list = $list;
		$this->page = $show;
		$this->categorylist = $categorylist = $Articlecategory->relation(true)->select();
		/*for($i=0; $i<count($categorylist); $i++){
			$count[$i]=count($categorylist[$i]['article']['categoryid']);
		}
		echo $count[8];*/
		//die();
		$this->display();
	}
	public function writearticle(){
		$Articlecategory = D('Articlecategory');
		$this->categoryData = $Articlecategory->where('pid>0')->select();
		$this->display();
	}
	public function readarticle(){
		$Article = D('Article');
		$Articlecategory = D('Articlecategory');
		$map['id'] = I('get.id', '', 'intval');
		$this->articleData = $Article->where($map)->find();
		$this->categorylist = $Articlecategory->select();
		$this->display();
	}
}
?>