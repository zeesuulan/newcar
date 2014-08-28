<?php 

	$origin = $D->select("car_member_origin", [
		 "id", "name"
		]);

	$member = $D->select("car_member",[
			"[>]car_dl" => ["dl_id" => "id"],
		], [
		 "car_member.id", "car_dl.name", "car_member.member_num"
		]);

	$dl = $D->select("car_dl_level", [
		 "id", "name"
		]);
	
