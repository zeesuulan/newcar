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
		}
	}else{
		Header("Location:".$SERVER_ROOT."index.php");
	}