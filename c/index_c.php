<?php

	$employee = $D->select("car_employee",[
		"id"]);

	$store = $D->select("car_store",[
		"id"]);

	$member = $D->select("car_member", [
		 "id"
		]);

	$e_num = count($employee);
	$s_num = count($store);
	$m_num = count($member);
