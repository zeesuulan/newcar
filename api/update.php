<?php 
	require '../lib/config.php';
	if(!isset($_SESSION['username'])){
		exit;
	}

	if(isset($_POST)) {
		switch ($_POST['type']) {
			case 'member';
				updateMember($_POST);
				break;
			case 'active';
				updateActive($_POST);
				break;
			case 'notice';
				updateNotice($_POST);
				break;
			case 'bookEm';
				updateEmployee($_POST);
				break;
			case 'booking';
				updateBooking($_POST);
				break;
			case 'bookingDone';
				updateBookDone($_POST);
				break;
			default:break;
		}
	}else{
		returns("参数错误", -1);
	}

	function updateBookDone($post){
		global $D;
		$dname = "car_booking";
		if ($D->has($dname, [
				"id" => $post['id']
			])){
			$D->update($dname, [
				"done" => 1
			],  [
				"id" => $post['id']
			]);
				returns("", 0);
		}else{
			returns("订单不存在", -1);
		}
	}

	function updateBooking($post){
		global $D;
		$dname = "car_booking";
		if ($D->has($dname, [
				"id" => $post['id']
			])){
			$s = $post['status'] ? 0 : 1;
			$D->update($dname, [
				"status" => $s
			],  [
				"id" => $post['id']
			]);
				returns("", 0);
		}else{
			returns("订单不存在", -1);
		}
	}

	function updateEmployee($post){
		global $D;
		$dname = "car_booking";
		if ($D->has($dname, [
				"id" => $post['id']
			])){
			$D->update($dname, [
				"employee_id" => $post['employee']
			],  [
				"id" => $post['id']
			]);
				returns("", 0);
		}else{
			returns("订单不存在", -1);
		}
	}

	function updateActive($post){
		global $D;
		$dname = "car_active";

		if ($D->has($dname, [
				"id" => $post['id']
			])){
			$s = $post['status'] ? 0 : 1;
			$D->update($dname, [
				"status" => $s
			],  [
				"id" => $post['id']
			]);
				returns("", 0);
		}else{
			returns("活动不存在", -1);
		}
	}

	function updateNotice($post){
		global $D;
		$dname = "car_notice";

		if ($D->has($dname, [
				"id" => $post['id']
			])){
			$s = $post['status'] ? 0 : 1;
			$D->update($dname, [
				"status" => $s
			],  [
				"id" => $post['id']
			]);
				returns("", 0);
		}else{
			returns("公告不存在", -1);
		}
	}

	function updateMember($post){
		global $D;
		$dname = "car_member";

		if ($D->has($dname, [
				"id" => $post['id']
			])){
			$s = $post['status'] ? 0 : 1;
			$D->update($dname, [
				"status" => $s
			],  [
				"id" => $post['id']
			]);
				returns("", 0);
		}else{
			returns("会员不存在", -1);
		}
	}
