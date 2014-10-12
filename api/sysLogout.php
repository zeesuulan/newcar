<?php 
	require '../lib/config.php';

	unset($_SESSION['username']);
	session_destroy();

	returns(array("url" => $SERVER_ROOT), 0);
	