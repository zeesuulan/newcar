<?php 
	require '../lib/config.php';
	if(!isset($_SESSION['username'])){
		exit;
	}

	if(isset($_POST)) {
		switch ($_POST['type']) {
			case 'employee';
				updateEmployee($_POST);
				break;
			default:break;
		}
	}else{
		returns("参数错误", -1);
	}

	function updateEmployee($post){
		global $D;
		$dname = "car_employee";

		if ($D->has($dname, [
				"id" => $post['id']
			])){
			if($D->update($dname, [
				"ename" => $post['ename'],
				"phone" => $post['phone'],
				"store_id" => $post['store_id'],
			],  [
				"id" => $post['id']
			])){
				returns("", 0);
			}else{
				var_dump($D->last_query());
				returns("操作错误", -1);
			}
		}else{
			returns("会员不存在", -1);
		}
	}
