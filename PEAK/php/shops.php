<?php
	header("Content-type:text/html;charset=utf-8");
	$conn = mysql_connect("localhost","root","root");
	if(!$conn){
		echo "连接失败";
	}else{
		mysql_select_db("peak1",$conn);
		$sqlstr = "select * from shops";
		$result = mysql_query($sqlstr,$conn);
		mysql_query("set names 'utf8'");
		mysql_close($conn);
		$str="[";
		$query_row = mysql_fetch_array($result);//游标下移,拿出结果集中的某一行，返回值是拿到的行；
		while($query_row){
			$str = $str.'{"id":"'.$query_row[0].'","shopname":"'.$query_row[1].'","shopimg":"'.$query_row[2].'","price":"'.$query_row[3].'"}';
			$query_row = mysql_fetch_array($result);//下移
			if($query_row){	
				$str = $str.",";
			}
		}
		$str = $str."]";
		echo $str;
	}
	?>