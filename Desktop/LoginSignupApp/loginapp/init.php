<?php

$host = "localhost";
$user_name = "grv";
$user_password = "123456";
$db_name = "userdb";

$con = mysqli_connect($host,$user_name,$user_password,$db_name);

if($con)
	echo "connection success";
else
	echo "connection failed";

?>