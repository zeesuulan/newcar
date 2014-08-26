<?php

	$employee = $D->select("car_employee",[
		"id"]);

	$store = $D->select("car_store",[
		"id"]);

	$e_num = count($employee);
	$s_num = count($store);
