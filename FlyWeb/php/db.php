<?php 

$db_host="192.168.1.104";
$db_user="user";
$db_password="123456";
$db_name="exampledb";


$conn= mysqli_connect($db_host,$db_user,$db_password,$db_name);


$conn->set_charset("utf8");



if($conn){
	
	
}
else{
	die("Error found:".mysqli_connect_error());
}




 ?>