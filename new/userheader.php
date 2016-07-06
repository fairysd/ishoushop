<?php
define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
include_once(ROOT_PATH .'includes/lib_clips.php');

if ($_GET['ajax'])
{
	header('Content-type:text/json'); 
    include_once(ROOT_PATH . 'includes/cls_json.php');
    $json = new JSON;
    $callback = isset($_GET['callback']) ? trim($_GET['callback']) : ''; 
    if ($_SESSION['user_id']) {
    	$user_info = get_user_default($_SESSION['user_id']);
    	$res = array("userId"=>$_SESSION['user_id'],"userInfo"=>$user_info);
    } else {
    	$res = array("userId"=>0);
    }
	die($callback . '(' . $json->encode($res) .')');
}
else if($_GET['kf'])
{
    header("Access-Control-Allow-Origin: *");
    header('Content-type:text/json'); 
    include_once(ROOT_PATH . 'includes/cls_json.php');
    $json = new JSON;
    $callback = isset($_GET['callback']) ? trim($_GET['callback']) : ''; 
    if ($_SESSION['user_id']) {
        $user_info = get_user_default($_SESSION['user_id']);
        $res = array("UserName"=>$user_info['username'],"UserMobile"=>$user_info['mobile_phone']);
    } else {
        $res = array("UserName"=>"","UserMobile"=>"");
    }
    die($callback . '(' . $json->encode($res) .')');
}
else
{
	assign_template();
	$smarty->assign('user_id', $_SESSION['user_id']);
	$smarty->assign('user_info', get_user_default($_SESSION['user_id']));

	$smarty->display('user_header.dwt');
}
?>