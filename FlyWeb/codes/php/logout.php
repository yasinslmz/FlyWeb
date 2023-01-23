<?php
session_start(); 

if (isset($_SESSION['unique_id'])) {
	
	include "db.php";
	$logout_id=mysqli_real_escape_string($conn,$_GET['logout_id']);
	if (isset($logout_id)) { //if isset logout id 
		$status="Offline now";
		$sql="UPDATE users SET status='{$status}' WHERE unique_id='{$logout_id}'";
		$query1=mysqli_query($conn,$sql);

		if ($query1) {
			session_unset();
			session_destroy();
			header("Location:../html/sign-in.php");
		}

	}else{
		header("Location:users.php");
	}

}else{
	header("Location:sign-in.php");
}

?>