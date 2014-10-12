<?php
	

	$where = array();

	if(!isAdmin()) {
		$where['store_id'] = $_SESSION['store_id'];
		$bd_num = $D->count("car_booking", ["AND" => ["done" => "1", "store_id"=>$_SESSION['store_id']]]);
	}else{
		$s_num = $D->count("car_store");
		$bd_num = $D->count("car_booking", ["done" => "1"]);
	}

	$e_num = $D->count("car_employee",$where);
	$m_num = $D->count("car_member",$where);
	$b_num = $D->count("car_booking",$where);


