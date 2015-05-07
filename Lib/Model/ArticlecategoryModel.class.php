<?php
class ArticlecategoryModel extends RelationModel{
	protected $tableName ='articlecategory';
	protected $fields = array(
	'id', 'pid', 'category', '_pk' => 'id', '_autonic' =>true
	);
	protected $_link = array(
		  'article' => array(
		  'mapping_type' => HAS_MANY,
		  'class_name' => 'Article',
		  'foreign_key' => 'categoryid',
		  'mapping_name' => 'article'
		  ),

	
	);
}
?>