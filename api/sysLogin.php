<?php 
	require '../lib/config.php';

	if(isset($_POST)){
		if ($D->has("car_boss", [
				"AND" => [
					"OR" => [
						"name" => $_POST['username']
					],
					"password" => $_POST['password']
				]
			])){
				$_SESSION["username"] = $_POST['username'];
				$_SESSION["admin"] = true;
				returns("", 0);
		}else if($D->has("car_store", [
			"AND" => [
				"OR" => [
					"name" => $_POST['username']
				],
				"password" => md5($_POST['password'])
			]
		])){
			$store_id = $D->select("car_store", "id", [
				"AND" => [
					"name" => $_POST['username'],
					"password" => md5($_POST['password'])
				]
			]);
			$_SESSION["username"] = $_POST['username']."门店账号";
			$_SESSION["store_id"] = $store_id[0];
			$_SESSION["admin"] = false;
			returns("", 0);
		}else{
			returns("用户名和密码不正确", -1);
		}
	}else{
		 Header("Location:".$APP_ROOT);
	}

