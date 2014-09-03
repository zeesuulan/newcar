<?php 
	require '../lib/config.php';

	if(isset($_POST['memberNum'])){
		if ($D->has("car_member", [
				"AND" => [
					"OR" => [
						"member_num" => $_POST['memberNum']
					],
					"password" => md5($_POST['password'])
				]
			])){
				$id = $D->get("car_member", "id", ["member_num" => $_POST['memberNum']]);
				$_SESSION["wap_username"] = $_POST['memberNum'];
				$_SESSION["wap_user_id"] = $id;
				wapReturns(array("username"=>$_POST['memberNum']), 0);
		}else{
			wapReturns(array("msg" => "用户名或者密码错误"), -1);
		}
	}else{
		 Header("Location:".$APP_ROOT);
	}



