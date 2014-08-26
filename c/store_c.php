<?php 

	$list = $D->select("car_store", [
			"[>]car_employee" => ["manager" => "id"],
		],[
			"car_store.name", "car_store.address", "car_employee.ename"
		]);
