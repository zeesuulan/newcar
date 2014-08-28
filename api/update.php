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
			default:break;
		}
	}else{
		returns("参数错误", -1);
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
