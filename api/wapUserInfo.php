<?php 
	require '../lib/config.php';

	$is_login = isset($_SESSION["wap_username"]);
	$has_id = isset($_SESSION["wap_user_id"]);

	if($is_login && $has_id){
		//需求去请求用户数据
		$member = $D->select("car_member",[
			"[>]car_dl" => ["dl_id" => "id"],
		], [
		 "car_member.id", "car_member.origin_id", 
		 "car_dl.name", "car_dl.id_num", "car_dl.valid_date_start",
		 "car_dl.valid_date_end", "car_dl.dl_level", "car_dl.gender", "car_dl.birthday",
		 "car_dl.address", "car_dl.nationality", "car_dl.firsttime", "car_dl.liesence",
		 "car_member.member_num", "car_member.status"
		],[
			"car_member.id" => $_SESSION["wap_user_id"]
		]);

		wapReturns(array("username"=>$_SESSION["wap_username"], "member" => $member[0],  "isLogin" => $is_login), 0);
	}else{
		wapReturns(array("username"=>"", "isLogin" => $is_login), -1);
	}
		