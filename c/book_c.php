<?php 
	
	$status = array();

	if(isset($_GET['status'])) {
		$status = array("car_booking.done" => $_GET['status']);
	}

	if(!isAdmin()) {
		$status['car_booking.store_id'] = $_SESSION['store_id'];
	}


	if(count($status) > 1) {
		$status = array("AND" => $status);
	}

	$book = $D->select("car_booking",[
			"[>]car_member" => ["member_id" => "id"],
			"[>]car_store" => ["store_id" => "id"],
			"[>]car_s_sort" => ["service_s_id" => "id"],
			"[>]car_sub_sort" => ["service_sub_id" => "id"],
			"[>]car_employee" => ["employee_id" => "id"],
		], [
		 "car_member.member_num(member_num)",
		 "car_store.name(store_name)",
		 "car_s_sort.sname(sort_name)",
		 "car_sub_sort.name(subsort_name)", 
		 "car_employee.ename(ename)",
		 "car_booking.time_id(time)",
		 "car_booking.employee_id",
		 "car_booking.status",
		 "car_booking.id",
		 "car_booking.done",
		 "car_booking.book_date(date)",
		 "car_booking.id(id)",
		], $status);

	if(!$book) {
		$book = array();
	}

	$employee = $D->select("car_employee", [
			"[>]car_store" => ["store_id" => "id"],
		], [
			"car_employee.ename",
			"car_employee.id", 
			"car_store.name(store_name)"
		], [
			"car_store.id" => $_SESSION['store_id']
		]);

