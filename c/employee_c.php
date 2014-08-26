<?php 

	$list = $D->select("car_employee", [
			"[>]car_store" => ["store_id" => "id"],
		],[
			"car_employee.id","car_employee.ename", "car_employee.phone",  "car_employee.time", "car_store.name"
		]);

	$store = $D->select("car_store", [
			"name", "id" 
		]);