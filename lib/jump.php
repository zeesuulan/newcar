<?php 
	if(!isset($_SESSION['username'])){
		Header("Location:".$SERVER_ROOT."control.php");
	}