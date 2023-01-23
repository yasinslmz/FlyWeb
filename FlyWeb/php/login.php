<?php session_start(); ?>
<?php include "db.php"; ?>
<?php 

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (!empty($email) && !empty($password)) {

	$sql1="SELECT * From users WHERE email='{$email}'and password='{$password}' ";
	$query1=mysqli_query($conn,$sql1);
	if (mysqli_num_rows($query1)>0) {
		$row=mysqli_fetch_assoc($query1);
		$status="Active";
		$sql2="UPDATE users SET status='{$status}' WHERE unique_id={$row['unique_id']}";
		$query2=mysqli_query($conn,$sql2);
		if ($query2) {
			$_SESSION['unique_id']=$row['unique_id'];
		echo "success";
		}

	}else{
		echo "email or password is incorrect";
	}
	
}
else{
	echo "All inputs are required.";
}










 ?>