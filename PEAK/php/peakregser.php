<?php
   header("content-type:text/html;charset=utf-8");
   $username =$_POST["username"];
   $userpwds =$_POST["userpwds"];
   $vercode = $_POST["vercode"];
   $cfmima = $_POST["cfpwds"];
   $conn =mysql_connect("localhost","root","root");
   if(!$conn){
   	  echo "数据库连接失败";
   }else{
   	  mysql_select_db("peak",$conn);
	  $str = "select * from users where users= '$username'";
	  $result = mysql_query($str,$conn);
	  if(mysql_num_rows($result)==0){
	  	$skp = "insert into users(id,users,pwds)values(2,'$username','$userpwds')";
		mysql_query($skp,$conn);
		echo 0;
		mysql_close($conn);
	  }else{
	  	echo 1;
		mysql_close($conn);
	  }
   }
	?>