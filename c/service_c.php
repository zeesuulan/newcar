<?php 

	$sort = $D->select("car_s_sort", [
		"sname", "id"
		]);

	$sub_sort = $D->select("car_sub_sort", [
			"[>]car_s_sort" => ["sort_id" => "id"],
		], [
		"car_sub_sort.name", "car_sub_sort.id", "car_s_sort.sname"
		]);
