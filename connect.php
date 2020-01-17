<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="attendencedb";
	$conn1=new mysqli($servername,$username,$password,$dbname);
	if($conn1->connect_error){
		die("connection failed:".$conn1->connect_error);
	}
	//echo "connected successfully";
?>