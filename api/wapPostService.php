<?php 
	require '../lib/config.php';

	$is_login = isset($_SESSION["wap_username"]);
	$has_id = isset($_SESSION["wap_user_id"]);

	if($is_login && $has_id && isset($_POST)){

		$date = $_POST['year']."-".$_POST['month']."-".$_POST['date'];
		$time = $_POST['time'];

		$book_id = $D->insert("car_booking", [
				"member_id" =>$_SESSION["wap_user_id"],
				"store_id" => $_POST['store'],
				"service_s_id" => $_POST['big_sort'],
				"service_sub_id" => $_POST['sub_sort'],
				"time_id" => $time,
				"book_date" => $date
			]);

		if($book_id){
			wapReturns(array("username"=>$_SESSION["wap_username"], "isLogin" => $is_login), 0);
		}else{
			wapReturns(array("username"=>$_SESSION["wap_username"], "isLogin" => $is_login), -1);
		}
	}else{
		wapReturns(array("username"=>"", "isLogin" => $is_login), -1);
	}
		