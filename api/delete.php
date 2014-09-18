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
			case 'book':
				delBook($ids);
				break;
			case 'employee':
				delEmployee($ids);
				break;
			case 'active':
				delActive($ids);
				break;
			case 'notice':
				delNotice($ids);
				break;
			case 'member':
				delMember($ids);
				break;
			case 'channel':
				delChannel($ids);
				break;
			case 'big_sort':
				delBigSort($ids);
				break;
			case 'sub_sort':
				delSubSort($ids);
				break;
			default:break;
		}
	}else{
		returns("参数错误", -1);
	}

	function delBook($id){
		global $D;
		$dname = "car_booking";
		if ($D->has($dname, [
				"id" => $id
			])){

			if($D->delete($dname, [
				"AND" => [
					"id" => $id
				]
			])){
				returns("", 0);
			}else{
				returns("删除失败", -1);
			}
		}else{
			returns("订单不存在", -1);
		}
	}

	function delSubSort($id) {
		global $D;
		$dname = "car_sub_sort";
		if ($D->has($dname, [
				"id" => $id
			])){

			if($D->delete($dname, [
				"AND" => [
					"id" => $id
				]
			])){
				returns("", 0);
			}else{
				returns("删除失败", -1);
			}
		}else{
			returns("子类不存在", -1);
		}
	}

	function delBigSort($id) {
		global $D;
		$dname = "car_s_sort";
		if ($D->has($dname, [
				"id" => $id
			])){

			if($D->delete($dname, [
				"AND" => [
					"id" => $id
				]
			])){
				returns("", 0);
			}else{
				returns("存在子类，不能删除", -1);
			}
		}else{
			returns("大类不存在", -1);
		}
	}

	function delChannel($id) {
		global $D;
		$dname = "car_member_origin";
		if ($D->has($dname, [
				"id" => $id
			])){
			$D->delete($dname, [
				"AND" => [
					"id" => $id
				]
			]);
				returns("", 0);
		}else{
			returns("渠道不存在", -1);
		}
	}
			
	function delMember($id) {
		global $D;
		$dname = "car_member";

		if ($D->has($dname, [
				"id" => $id
			])){
			$D->delete($dname, [
				"AND" => [
					"id" => $id
				]
			]);
				returns("", 0);
		}else{
			returns("会员不存在", -1);
		}
	} 

	function delStore($id){
		global $D;
		$dname = "car_store";

		if ($D->has($dname, [
				"id" => $id
			])){
			$D->delete($dname, [
				"AND" => [
					"id" => $id
				]
			]);
				returns("", 0);
		}else{
			returns("店不存在", -1);
		}
	}

	function delEmployee($id){
		global $D;
		$dname = "car_employee";

		if ($D->has($dname, [
				"id" => $id
			])){
			if($D->delete($dname, [
				"AND" => [
					"id" => $id
				]
			])){
				returns("", 0);
			}else{
				returns("员工为店长", -1);
			}
		}else{
			returns("员工不存在", -1);
		}
	}

	function delActive($id){
		global $D;
		$dname = "car_active";

		if ($D->has($dname, [
				"id" => $id
			])){
			$D->delete($dname, [
				"AND" => [
					"id" => $id
				]
			]);
				returns("", 0);
		}else{
			returns("活动不存在", -1);
		}
	}

	function delNotice($id){
		global $D;
		$dname = "car_Notice";

		if ($D->has($dname, [
				"id" => $id
			])){
			$D->delete($dname, [
				"AND" => [
					"id" => $id
				]
			]);
				returns("", 0);
		}else{
			returns("公告不存在", -1);
		}
	}
