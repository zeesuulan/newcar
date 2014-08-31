<?php 
	require '../lib/config.php';

	$is_login = isset($_SESSION["wap_username"]);
	if($is_login){
		//需求去请求用户数据
		wapReturns(array("username"=>$_SESSION["wap_username"], "isLogin" => $is_login), 0);
	}else{
		wapReturns(array("username"=>"", "isLogin" => $is_login), 0);
	}
		