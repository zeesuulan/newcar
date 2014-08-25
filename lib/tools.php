<?php 

	function setCSS($filename){
		global $VERSION, $SERVER_ROOT;
		return '<link rel="stylesheet" href="'.$SERVER_ROOT.'static/css/'.$filename.'?v='.$VERSION.'">';
	}

	function setJS($filename){
		global $VERSION, $SERVER_ROOT;
		return '<script src="'.$SERVER_ROOT.'static/js/'.$filename.'?v='.$VERSION.'"></script>';
	}

	function returns($data, $no){
		$arr = array(
			"no" => $no,
			"data" => $data
		);
		echo json_encode($arr);
	}

 ?>