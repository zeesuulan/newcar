<?php 
	require '../lib/config.php';
	if(!isset($_SESSION['username'])){
		exit;
	}

	if(isset($_POST)) {
		switch ($_POST['ftype']) {
			case 'store':
				addStore($_POST);
				break;
			case 'employee':
				addEmployee($_POST);
				break;
			case 'active':
				addActive($_POST);
				break;
			case 'notice':
				addNotice($_POST);
				break;
			default:break;
		}
	}else{
		returns("参数错误", -1);
	}


	function addStore($post){
		global $D;
		$dname = "car_".$post['ftype'];

		if (!$D->has($dname, [
				"name" => $post['sname']
			])){
			$last_user_id = $D->insert($dname, [
				"name" => $post['sname'],
				"address" => $post['saddress'],
				"manager" => $post['manager']
			]);
				returns("", 0);
		}else{
			returns("店名已存在", -1);
		}
	}

	function addEmployee($post){
		global $D;
		$dname = "car_".$post['ftype'];

		if (!$D->has($dname, [
				"phone" => $post['phone']
			])){
			$last_user_id = $D->insert($dname, [
				"ename" => $post['ename'],
				"phone" => $post['phone'],
				"store_id" => $post['store_id'],
				"time" => date("Y-m-d H:i:s")
			]);
				returns("", 0);
		}else{
			returns("员工已存在", -1);
		}
	}

	function addActive($post){
		global $D;
		$dname = "car_".$post['ftype'];

		if (!$D->has($dname, [
				"title" => $post['title']
			])){
			$last_active_id = $D->insert($dname, [
				"title" => $post['title'],
				"content" => $post['content'],
				"member_price" => $post['mp'],
				"non_member_price" => $post['nmp'],
				"time" => $post['time']
			]);
				returns("", 0);
		}else{
			returns("活动已存在", -1);
		}
	}

	function addNotice($post){
		global $D;
		$dname = "car_".$post['ftype'];

		if (!$D->has($dname, [
				"title" => $post['title']
			])){
			$last_active_id = $D->insert($dname, [
				"title" => $post['title'],
				"content" => $post['content'],
				"time" => date("Y-m-d H:i:s")
			]);
				returns("", 0);
		}else{
			returns("公告已存在", -1);
		}
	}