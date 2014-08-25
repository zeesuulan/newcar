<?php 

	
	$APP_ROOT_PATH = '/newcar/';
	$SERVER_PATH = $_SERVER['DOCUMENT_ROOT'];
	$SERVER_NAME = "http://".$_SERVER['SERVER_NAME'];

	$APP_ROOT = $SERVER_PATH . $APP_ROOT_PATH;
	$SERVER_ROOT = $SERVER_NAME . $APP_ROOT_PATH;

	$DATABASE_SERVER = 'localhost';
	$DATABASE_USERNAME = 'root';
	$DATABASE_PASSWORD = '';
	$DATABASE_NAME = 'car';


	$VERSION = '1';

	function setCSS($filename){
		global $VERSION, $SERVER_ROOT;
		return '<link rel="stylesheet" href="'.$SERVER_ROOT.'static/css/'.$filename.'?v='.$VERSION.'">';
	}

	function setJS($filename){
		global $VERSION, $SERVER_ROOT;
		return '<script src="'.$SERVER_ROOT.'static/js/'.$filename.'?v='.$VERSION.'"></script>';
	}

	require $APP_ROOT."lib/medoo.php";

	$D = new medoo([
		'database_type' => 'mysql',
		'database_name' => $DATABASE_NAME,
		'server' => $DATABASE_SERVER,
		'username' => $DATABASE_USERNAME,
		'password' => $DATABASE_PASSWORD
	])
 ?>