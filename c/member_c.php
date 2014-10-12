<?php 

	$origin = $D->select("car_member_origin", [
		 "id", "name"
		]);

	$sort = $D->select("car_member_sort", [
		 "id", "sort_txt"
		]);

	$store = $D->select("car_store",[
		"id", "name"
		]);

	// if(isAdmin()){
		$member = $D->select("car_member",[
				"[>]car_dl" => ["dl_id" => "id"],
			], [
				"car_member.id", "car_dl.name", "car_member.member_num", "car_member.status", "car_dl.liesence"
			],[
				"ORDER" => "car_member.id DESC",
			]);
	// }

	$dl = $D->select("car_dl_level", [
		 "id", "name"
		]);
	
	$employee = $D->select("car_employee", [
			"[>]car_store" => ["store_id" => "id"],
		], [
			"car_employee.ename",
			"car_employee.id", 
			"car_store.name(store_name)"
		]);