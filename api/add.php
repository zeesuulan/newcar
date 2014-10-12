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
			case 's_sort';
				addBigstore($_POST);
				break;
			case 'sub_sort';
				addSubstore($_POST);
				break;
			case 'member_origin';
				addChannel($_POST);
				break;
			case 'member';
				addMember($_POST);
				break;
			case 'member_sort';
				addMemberSort($_POST);
				break;
			default:break;
		}
	}else{
		returns("参数错误", -1);
	}

	function addMember($post){
		global $D;
		$dname = "car_".$post['ftype'];
		$dl_db = "car_dl";

		if($post['password'] != $post['confirm_password']){
				returns("两次密码不一致", -1);
		}

		if(!$D->has($dl_db, [
				"id_num" => $post['id_num']
			])){
			$dl_id = $D->insert($dl_db, [
				"name" => $post['name'],
				"id_num" => $post['id_num'],
				"valid_date_start" => $post['valid_date_start'],
				"valid_date_end" => $post['valid_date_end'],
				"dl_level" => $post['dl_level'],
				"gender" => $post['gender'],
				"liesence" => $post['liesence'],
				"birthday" => $post['birthday'],
				"address" => $post['address'],
				"nationality" => $post['nationality'],
				"engineNumber" => $post['engineNumber'],
				"frameNumber" => $post['frameNumber'],
				"liesenceFileNumber" => $post['liesenceFileNumber'],
				"firsttime" => $post['firsttime']
			]);

			if(!$D->has($dname, [
				"dl_id" => $dl_id
			])){
				if($dl_id){
					$s = $post['status'] == "on" ? 1 : 0;
					$member_id = $D->insert($dname, [
						"member_num" => $post['member_num'],
						"password" => md5($post['password']),
						"dl_id" => $dl_id,
						"origin_id" => $post['origin_id'],
						"phoneNumber" => $post['phoneNumber'],
						"brand" => $post['brand'],
						"insurer" => $post['insurer'],
						"insurancePeriod" => $post['insurancePeriod'],
						"memberValid" => $post['memberValid'],
						"memberSort" => $post['memberSort'],
						"employee_id" => $post['employee_id'],
						"store_id" => $post['store_id'],
						"status" => $s,
					]);
					if($member_id != 0) {
						returns("", 0);
					}else{
						$D->delete($dl_db, [
							"id" => $dl_id
						]);
						returns("操作失败", -1);
					}
				}else{
					returns("操作失败", -1);
				}
			}
		}else{
			returns("驾驶证员已存在", -1);
		}
	}

	function addChannel($post){
		global $D;
		$dname = "car_".$post['ftype'];

		if (!$D->has($dname, [
				"name" => $post['name']
			])){
			$D->insert($dname, [
				"name" => $post['name']
			]);
				returns("", 0);
		}else{
			returns("渠道已存在", -1);
		}
	}

	function addMemberSort($post){
		global $D;
		$dname = "car_".$post['ftype'];

		if (!$D->has($dname, [
				"sort_txt" => $post['sort_txt']
			])){
			$D->insert($dname, [
				"sort_txt" => $post['sort_txt']
			]);
				returns("", 0);
		}else{
			returns("用户类型已存在", -1);
		}
	}

	function addBigstore($post){
		global $D;
		$dname = "car_".$post['ftype'];

		if (!$D->has($dname, [
				"sname" => $post['name']
			])){
			$D->insert($dname, [
				"sname" => $post['name']
			]);
				returns("", 0);
		}else{
			returns("大类已存在", -1);
		}
	}

	function addSubstore($post){
		global $D;
		$dname = "car_".$post['ftype'];

		if (!$D->has($dname, [
				"AND" => [
					"sort_id" => $post['sort_id'],
					"name" => $post['name']
				]
			])){
			$D->insert($dname, [
				"sort_id" => $post['sort_id'],
				"name" => $post['name']
			]);
				returns("", 0);
		}else{
			returns("子类已存在", -1);
		}
	}


	function addStore($post){
		global $D;
		$dname = "car_".$post['ftype'];
		if (!$D->has($dname, [
				"name" => $post['sname']
			])){
			if($post['password'] == $post['confirm_password']){
				if($D->insert($dname, [
					"name" => $post['sname'],
					"address" => $post['saddress'],
					"password" => md5($post['password']),
					"manager" => $post['manager']
				])){
					returns("", 0);
				}else{
					returns("所有选项都需要填写", -1);
				}
			}else{
				returns("两次密码不一致", -1);
			}
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
				"id_num" => $post['id_num'],
				"eid" => $post['eid'],
				"birthday" => $post['birthday'],
				"address" => $post['address'],
				"entryTime" => $post['entryTime'],
				"entryWay" => ($post['entryWay'] != 0) ? $post['entryWay'] : "",
				"entryWayTxt" => ($post['entryWay'] == 0) ? $post['entryWayTxt'] : "",
				"department" => $post['department'],
				"position" => $post['position'],
				"emergencyContactor" => $post['emergencyContactor'],
				"emergencyContactPhone" => $post['emergencyContactPhone'],
				"status" => ($post['status'] != 0) ? $post['status'] : "",
				"statusTxt" => ($post['status'] == 0) ? $post['statusTxt'] : "",
				"store_id" => $post['store_id'],
				"time" => date("Y-m-d H:i:s")
			]);
			
			if($last_user_id){
				returns("", 0);
			}else{
				returns("员工已存在", -1);
			}
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