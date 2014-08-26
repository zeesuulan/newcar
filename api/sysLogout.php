<?php 
	require '../lib/config.php';

	unset($_SESSION['username']);
	session_destroy();

	returns("", 0);
	