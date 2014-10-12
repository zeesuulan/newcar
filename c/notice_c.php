<?php 
	
	if(!isAdmin()){
		Header("Location:".$SERVER_ROOT."control.php");
	}
	
	$notice = $D->select("car_notice", [
		"title", "content", "time", "id", "status"
		]);
	
