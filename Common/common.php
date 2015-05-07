<?php
/*无限分类*/
function genCate($data, $pid =0, $level = 0,$keyword)
{
if($level ==10)break;
$l        = str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;", $level);
$l        = $l.'└';
static $arrcat  = array();
$arrcat   =empty($level) ? array() :$arrcat;
foreach($data as $k => $row)
	{
	if($row['pid']==$pid)
		{
		$row[$keyword]  = $l.$row[$keyword];
		$row['level']   =$level;
		$arrcat[]     = $row;
		genCate($data,$row['id'], $level+1,$keyword);
		}
	}
	return $arrcat;
}
//设置用户COOKIE
function setUserCookie($user){
	cookie('HD_ID',base64_encode($user['id']));
	cookie('HD_NICKNAME',base64_encode($user['nickname']));
	cookie('HD_USERNAME',base64_encode($user['username']));
	cookie('HD_IMAGE',base64_encode($user['image']));
}
//注销用户COOKIE
function delUserCookie(){
	cookie('HD_ID',NULL);
	cookie('HD_NICKANME',NULL);
	cookie('HD_USERNAME',NULL);
	cookie('HD_IMAGE',NULL);
}
//检查用户是否登录
function checkUserLoginState()
{
	if(!cookie('HD_ID')){
		redirect(U('Index/index'));
	}
}
//获取登录用户ID
function getLoginUserId(){
	return base64_decode(cookie('HD_ID'));
}

?>