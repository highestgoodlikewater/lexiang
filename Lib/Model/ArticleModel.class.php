<?php
class ArticleModel extends RelationModel{
	protected $tableName ='article';
	protected $fields = array(
	'id', 'categoryid', 'userid', 'title', 'content', 'ptime', 'clicks', 'downloads', 'state', '_pk' => 'id', '_autonic' =>true
	);
	protected $_link = array(
	     'articlecategory'=> array(  
          'mapping_type' => BELONGS_TO,
          'class_name' => 'Articlecategory',
          'foreign_key' => 'categoryid',
          'mapping_name' => 'articlecategory'
		  ),
		  'user' => array(
		  'mapping_type' => BELONGS_TO,
		  'class_name' => 'User',
		  'foreign_key' => 'userid',
		  'mapping_name' => 'user'
		  ),

	
	);
	protected $_auto = array(
	     array('ptime', 'time', 1, 'function'),
	);
}
?>