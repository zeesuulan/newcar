<?php 

	$list = $D->select("car_store", [
			"[>]car_employee" => ["manager" => "id"],
		],[
			"car_store.name", "car_store.address", "car_employee.ename"
		]);

	$employee = $D->select("car_employee", [
			"ename", "id" 
		]);
