<?php 
	require '../lib/config.php';

	$is_login = isset($_SESSION["wap_username"]);
	$has_id = isset($_SESSION["wap_user_id"]);

	if($is_login && $has_id){
		//需求去请求用户数据
		$notice = $D->select("car_notice", [
			"title", "content", "time"
		],[
			"status" => 1
		]);

		wapReturns(array("username"=>$_SESSION["wap_username"], "notice" => $notice,  "isLogin" => $is_login), 0);
	}else{
		wapReturns(array("username"=>"", "isLogin" => $is_login), -1);
	}
		