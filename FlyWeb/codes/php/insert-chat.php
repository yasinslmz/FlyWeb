<?php 
session_start();


if(isset($_SESSION['unique_id'])) {
	include_once "./db.php";
	
	
	$incoming_id=mysqli_real_escape_string($conn,$_POST['incoming_id']);
	$outgoing_id=$_SESSION['unique_id'];
	$message=mysqli_real_escape_string($conn,$_POST['message']);

	if (!empty($message)) {
			$sql1="INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg) 
							VALUES ( {$incoming_id}, {$outgoing_id}, '{$message}')";
			$query1=mysqli_query($conn,$sql1) or die(); 

	}



}else{

 header("Location:../html/sign-in.php");
}
 
?>