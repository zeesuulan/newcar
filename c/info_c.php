<?php 

 	if(!isset($_GET['type']) || !isset($_GET["id"])) {
		Header("Location:".$SERVER_ROOT."control.php");
 	}

 	$db_map = array(
 		"member" => "car_member",
 		"employee" => "car_employee",
 		"active" => "car_active",
 		"notice" => "car_notice",
 		"store" => "car_store",
 		"book" => "car_booking"
 		);
 	$type = $_GET['type'];
 	$id = $_GET['id'];

	if(isset($db_map[$type])) {
		$db_name = $db_map[$type];

		if($type == 'book'){
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
				 "car_booking.book_date(date)",
				 "car_booking.id(id)",
				 "car_booking.done(done)",
				 "car_booking.summary",
				],
				[
					"car_booking.id" => $id,
				]
			);
			$book = $book[0];
		}else if($type == "employee") {
			$store = $D->select("car_store", [
				"name", "id" 
			]);

			$employee = $D->get($db_name, "*", ["id[=]"=>$id]);
		}else if($type == "active"){
			$active = $D->get($db_name, "*", ["id[=]"=>$id]);
		}else if($type == "notice"){
			$notice = $D->get($db_name, "*", ["id[=]"=>$id]);
		}else if($type == "store"){
			$employee = $D->select("car_employee", [
				"ename", "id" 
			]);
			$store = $D->get($db_name, "*", ["id[=]"=>$id]);
		}else if($type == 'member'){
			$origin = $D->select("car_member_origin", [
				 "id", "name"
				]);
			$sort = $D->select("car_member_sort", [
				 "id", "sort_txt"
				]);

			$member = $D->select("car_member",[
				"[>]car_dl" => ["dl_id" => "id"],
			], [
				"car_member.id",
				"car_member.dl_id",
				"car_member.origin_id",
				"car_member.phoneNumber",
				"car_member.brand",
				"car_member.insurancePeriod",
				"car_member.insurer",
				"car_member.memberValid",
				"car_member.employee_id",
				"car_member.memberSort",
				"car_dl.name",
				"car_dl.id_num",
				"car_dl.valid_date_start",
				"car_dl.valid_date_end",
				"car_dl.dl_level",
				"car_dl.engineNumber",
				"car_dl.frameNumber",
				"car_dl.liesenceFileNumber",
				"car_dl.liesence",
				"car_dl.gender",
				"car_dl.birthday",
				"car_dl.address",
				"car_dl.nationality",
				"car_dl.firsttime",
				"car_member.member_num",
				"car_member.status"
			], ["car_member.id"=>$id]);

			$member = $member[0];

			$dl = $D->select("car_dl_level", [
				 "id", "name"
				]);
		}
	}else{
		Header("Location:".$SERVER_ROOT."index.php");
	}