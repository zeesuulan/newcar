<?php 
	require '../lib/config.php';

	$is_login = isset($_SESSION["wap_username"]);
	$has_id = isset($_SESSION["wap_user_id"]);

	if($is_login && $has_id){
		//需求去请求用户数据
		$big_sort = $D->select("car_s_sort", [
			"sname", "id"
		]);

		$sub_sort = $D->select("car_sub_sort", [
			"name", "id", "sort_id"
		]);

		$store = $D->select("car_store", [
			"name", "id"
		]);

		wapReturns(array("username"=>$_SESSION["wap_username"], "big_sort" => $big_sort, "sub_sort" => $sub_sort, "store" => $store,  "isLogin" => $is_login), 0);
	}else{
		wapReturns(array("username"=>"", "isLogin" => $is_login), -1);
	}
		