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
				returns("", 0);
		}else{
			returns("用户名或者密码错误", -1);
		}
	}else{
		 Header("Location:".$APP_ROOT);
	}

