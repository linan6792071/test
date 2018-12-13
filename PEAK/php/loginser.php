<?php
	header("content-type:text/html;charset=utf-8");
	$users = $_GET["username"];
	$pwds = $_GET["password"];
	if($users=="linan"&&$pwds=="123456"){
		echo 0;
	}else{
		echo 1;
	}
	?>