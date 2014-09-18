<?php

	$e_num = $D->count("car_employee");
	$s_num = $D->count("car_store");
	$m_num = $D->count("car_member");
	$b_num = $D->count("car_booking");
	$bd_num = $D->count("car_booking", ["done" => "1"]);
