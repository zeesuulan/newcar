<?php 
	require '../lib/config.php';

	unset($_SESSION['wap_username']);
	unset($_SESSION['wap_user_id']);
	session_destroy();

	returns("", 0);
	