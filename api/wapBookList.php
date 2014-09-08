<?php 
	require '../lib/config.php';

	$is_login = isset($_SESSION["wap_username"]);
	$has_id = isset($_SESSION["wap_user_id"]);

	if($is_login && $has_id){
		//需求去请求用户数据
		$book = $D->select("car_booking",[
			"[>]car_store" => ["store_id" => "id"],
			"[>]car_s_sort" => ["service_s_id" => "id"],
			"[>]car_sub_sort" => ["service_sub_id" => "id"],
			"[>]car_employee" => ["employee_id" => "id"],
		], [
		 "car_store.name(store_name)",
		 "car_s_sort.sname(sort_name)",
		 "car_sub_sort.name(subsort_name)", 
		 "car_employee.ename(ename)",
		 "car_booking.time_id(time)",
		 "car_booking.book_date(date)",
		 "car_booking.id(id)",
		],[
			"AND" => [
				"car_booking.member_id" => $_SESSION["wap_user_id"],
				"car_booking.status" => "1"
			]
		]);

		if($book) {
			wapReturns(array("username"=>$_SESSION["wap_username"], "book" => $book,  "isLogin" => $is_login), 0);
		}else{
			wapReturns(array("msg" => "数据有误"), -1);
		}
	}else{
		wapReturns(array("username"=>"", "isLogin" => $is_login), -1);
	}
		