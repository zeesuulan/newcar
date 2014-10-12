<?php 
	
	if(!isAdmin()){
		Header("Location:".$SERVER_ROOT."control.php");
	}
	$active = $D->select("car_active", [
		"title", "content", "status", "member_price", "non_member_price", "time", "id"
		]);
	
