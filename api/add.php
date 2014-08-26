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
