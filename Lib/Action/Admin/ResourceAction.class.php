<?php
class ResourceAction extends Action{

	/*
	 *文章分类
	 */
	public function articlecategory(){
		$Articlecategory = D('Articlecategory');
		$this->categorydata = $Articlecategory->order('pid ASC')->select();
		$this->display();
	}
    /*
	/*
	 *添加文章分类
	 */
	public function addarticlecategory(){
		$Articlecategory = D('Articlecategory');
		$categorydata = $Articlecategory->order('pid ASC')->select();
		$this->categorydata = genCate($categorydata, 0, 0, 'category');
		$this->display();
	}
	/*
	 *文章
	 */
	public function article(){
		$Article = D('Article');
		$this->articledata = $Article->order('ptime ASC')->select();
		$this->display();
	}
	/*
	 *添加文章
	 */
	public function addarticle(){
		$Article = D('Article');
		$Articlecategory = D('Articlecategory');
		$categorydata = $Articlecategory->select();
		$this->categorydata = genCate($categorydata, 0, 0, 'category');
		$this->display();
	}
	/*
	 *查看文章
	 */
	public function articlelist(){
		$Article = D('Article');
		$map['title'] = array('like', I('post.keywords'));
		$this->articlelist = $Article->where($map)->order('ptime ASC')->select();
		$this->display();
	}
	/*
	 *下载分类
	 */
	public function resourcecategory(){
		$Resourcecategory = D('Resourcecategory');
		$this->categorydata = $Resourcecategory->order('pid ASC')->select();
		$this->display();
	}
	/*
	 *添加下载分类
	 */
	public function addresourcecategory(){
		$Resourcecategory = D('Resourcecategory');
		$this->categorydata = $Resourcecategory->order('pid ASC')->select();
		$this->display();
	}
	/*
	 *下载
	 */
	public function resource(){
		$Resource = D('Resource');
		$this->resourceData = $Resource->order('id ASC')->select();
		$this->display();
	}
	public function test(){
		$this->display();
	}
	/*
	 *添加下载
	 */
	public function addresource(){
		$Resource = D('Resource');
		$this->display();
	}
	/*
	 *下载搜索
	 */
	public function searchresource(){
		$Resource = D('Resource');
		$this->resourcelist = $Resource->order('id ASC')->select();
		$this->display();
	}
}
?>