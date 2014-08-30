<?php 
	require '../lib/config.php';
	if(!isset($_SESSION['username'])){
		exit;
	}

	$noModify = "操作错误，或者并未做出修改";

	if(isset($_POST)) {
		switch ($_POST['type']) {
			case 'employee';
				updateEmployee($_POST);
				break;
			case 'active';
				updateActive($_POST);
				break;
			case 'notice';
				updateNotice($_POST);
				break;
			case 'store';
				updateStore($_POST);
				break;
			default:break;
		}
	}else{
		returns("参数错误", -1);
	}

	function updateStore($post){
		global $D;
		$dname = "car_store";

		if ($D->has($dname, [
				"id" => $post['id']
			])){
			if($D->update($dname, [
				"name" => $post['sname'],
				"address" => $post['saddress'],
				"manager" => $post['manager']
			],  [
				"id" => $post['id']
			])){
				returns("", 0);
			}else{
				returns($noModify, -1);
			}
		}else{
			returns("门店不存在", -1);
		}
	}

	function updateNotice($post){
		global $D;
		$dname = "car_notice";

		if ($D->has($dname, [
				"id" => $post['id']
			])){
			if($D->update($dname, [
				"title" => $post['title'],
				"content" => $post['content']
			],  [
				"id" => $post['id']
			])){
				returns("", 0);
			}else{
				returns($noModify, -1);
			}
		}else{
			returns("公告不存在", -1);
		}
	}

	function updateActive($post){
		global $D;
		$dname = "car_active";

		if ($D->has($dname, [
				"id" => $post['id']
			])){
			if($D->update($dname, [
				"title" => $post['title'],
				"content" => $post['content'],
				"member_price" => $post['mp'],
				"non_member_price" => $post['nmp'],
				"time" => $post['time']
			],  [
				"id" => $post['id']
			])){
				returns("", 0);
			}else{
				returns($noModify, -1);
			}
		}else{
			returns("活动不存在", -1);
		}
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
				returns($noModify, -1);
			}
		}else{
			returns("会员不存在", -1);
		}
	}
