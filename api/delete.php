<?php 
	require '../lib/config.php';
	
	if(!isset($_SESSION['username'])){
		exit;
	}
	
	if(isset($_POST)) {
		$ids = $_POST['id'];
		switch ($_POST['type']) {
			case 'store':
				delStore($ids);
				break;
			default:break;
		}
	}else{
		returns("参数错误", -1);
	}


	function delStore($id){
		global $D;
		$dname = "car_store";

		if ($D->has($dname, [
				"id" => $id
			])){
			$last_user_id = $D->delete($dname, [
				"AND" => [
					"id" => $id
				]
			]);
				returns("", 0);
		}else{
			returns("店不存在", -1);
		}
	}
