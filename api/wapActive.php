<?php 
	require '../lib/config.php';

	$is_login = isset($_SESSION["wap_username"]);
	$has_id = isset($_SESSION["wap_user_id"]);

	if($is_login && $has_id){
		
		$active = $D->select("car_active", [
			"title", "content", "member_price", "non_member_price", "time"
		],[
			"status" => 1
		]);

		wapReturns(array("username"=>$_SESSION["wap_username"], "active" => $active,  "isLogin" => $is_login), 0);
	}else{
		wapReturns(array("username"=>"", "isLogin" => $is_login), -1);
	}
		