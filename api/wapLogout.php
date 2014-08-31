<?php 
	require '../lib/config.php';

	unset($_SESSION['wap_username']);
	session_destroy();

	returns("", 0);
	