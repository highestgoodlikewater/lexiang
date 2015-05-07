<?php
class UserlogsModel extends RelationModel{
	protected $tableName = 'userlogs';
	protected $_fields = array(
	'id', 'userid', 'logip', 'logtime', '_pk' => 'id', '_autoinc' => true	
	);
	protected $_link = array(
	'User'=>array(
	'mapping_type' => BELONGS_TO,
		'class_name' => 'User',
		'foreign_key' => 'userid',
		'mapping_name' => 'user',
	),	
	);
}
?>