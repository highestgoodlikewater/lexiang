<?php
class ResourceModel extends Model{
	protected $tableName = 'resource';
	protected $fields = array(
	'id', 'categoryid', 'userid', 'title', 'content', 'size', 'ptime', 'clicks', 'downloads', 'state', '_pk' => 'id', '_autonic' => true
	);
	protected $_link = array(
	     'resourcecategory'=> array(  
          'mapping_type' => BELONGS_TO,
          'class_name' => 'Resourcecategory',
          'foreign_key' => 'categoryid',
          'mapping_name' => 'resourcecategory'
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