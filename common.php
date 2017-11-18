<?php
	function update($ques){
		$con= mysql_connect("localhost","root","");
		if(!$con){
		die("failed".mysql_error());
		}
		$db= mysql_select_db("mydb");
	$sql="INSERT INTO record (ques) VALUES ('$ques');";
	$temp=mysql_query($sql);
	return $temp;
	}
	?>