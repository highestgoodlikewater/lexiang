<?php
return array(
	'APP_GROUP_LIST' => 'Main,Admin',
	'DEFAULT_GROUP' => 'Main',
	'DB_TYPE' => 'mysql',
	'DB_HOST' => '127.0.0.1',
	'DB_NAME' => 'hardware',
	'DB_USER' => 'root',
	'DB_PASSWORD' => '1994515',
	'DB_PORT' => 3306,
	'DB_PREFIX' => 'hd_',
	//默认参数过滤
	'DEFAULT_FILTER' => 'htmlspecialchars',
	//开启路由
	'URL_ROUTER_on' => true,
	//定义路由规则
	'URL_ROUTE_RULES' => array(
	     '/^login$/' => 'Main/User/login',
	),
);
?>