<?php 

	function setCSS($filename){
		global $VERSION, $SERVER_ROOT;
		return '<link rel="stylesheet" href="'.$SERVER_ROOT.'static/css/'.$filename.'?v='.$VERSION.'">';
	}

	function setJS($filename){
		global $VERSION, $SERVER_ROOT;
		return '<script src="'.$SERVER_ROOT.'static/js/'.$filename.'?v='.$VERSION.'"></script>';
	}

	function returns($msg, $no){
		$arr = array(
			"no" => $no,
			"msg" => $msg
		);
		print_r(json_encode($arr));
		exit;
	}

