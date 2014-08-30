<?php 
	require '../lib/config.php';
	if(!isset($_SESSION['username'])){
		exit;
	}

	$noModify = "并未做出修改，或者操作错误~";

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
			case 'member';
				updateMember($_POST);
				break;
			default:break;
		}
	}else{
		returns("参数错误", -1);
	}

	function updateMember($post){
		global $D, $noModify;
		$dname = "car_".$post['type'];
		$dl_db = "car_dl";

		if($D->has($dname, [
				"id" => $post['id']
			])){

			$s = isset($post['status']) ? 1 : 0;

			$member = $D->update($dname, [
				"member_num" => $post['member_num'],
				"origin_id" => $post['origin_id'],
				"status" => $s,
			],  [
				"id" => $post['id']
			]);

			$dl = $D->update($dl_db, [
				"name" => $post['name'],
				"id_num" => $post['id_num'],
				"valid_date_start" => $post['valid_date_start'],
				"valid_date_end" => $post['valid_date_end'],
				"dl_level" => $post['dl_level'],
				"gender" => $post['gender'],
				"birthday" => $post['birthday'],
				"address" => $post['address'],
				"nationality" => $post['nationality'],
				"firsttime" => $post['firsttime']
			],  [
				"id" => $post['dl_id']
			]);

			if($member || $dl){
				returns("", 0);
			}else{
				returns($noModify, -1);
			}
		}else{
			returns("驾驶证员已存在", -1);
		}
	}

	function updateStore($post){
		global $D, $noModify;
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
		global $D, $noModify;
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
		global $D, $noModify;
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
		global $D, $noModify;
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
