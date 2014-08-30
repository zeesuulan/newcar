<?php 

 	if(!isset($_GET['type']) || !isset($_GET["id"])) {
		Header("Location:".$SERVER_ROOT."index.php");
 	}

 	$db_map = array(
 		"member" => "car_member",
 		"employee" => "car_employee",
 		"active" => "car_active",
 		"notice" => "car_notice",
 		"store" => "car_store"
 		);
 	$type = $_GET['type'];
 	$id = $_GET['id'];

	if(isset($db_map[$type])) {
		$db_name = $db_map[$type];
		if($type == "employee") {
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

			$member = $D->select("car_member",[
				"[>]car_dl" => ["dl_id" => "id"],
			], [
			 "car_member.id", "car_member.dl_id", "car_member.origin_id", "car_dl.name",  "car_dl.id_num",  "car_dl.valid_date_start",  "car_dl.valid_date_end",  "car_dl.dl_level",  "car_dl.gender",  "car_dl.birthday",  "car_dl.address",  "car_dl.nationality",  "car_dl.firsttime", "car_member.member_num", "car_member.status"
			], ["car_member.id"=>$id]);

			$member = $member[0];

			$dl = $D->select("car_dl_level", [
				 "id", "name"
				]);
		}
	}else{
		Header("Location:".$SERVER_ROOT."index.php");
	}