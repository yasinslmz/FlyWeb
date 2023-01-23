<?php 
session_start();
include "./db.php";
 ?>

 <?php 
$outgoing_id=$_SESSION['unique_id'];
$searchTerm=mysqli_real_escape_string($conn,$_POST['searchTerm']);
$output="";


$sql="SELECT * From users WHERE NOT unique_id={$outgoing_id} AND (fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%')  ";
$query2=mysqli_query($conn,$sql);
if (mysqli_num_rows($query2)>0) {

	while ($row = mysqli_fetch_assoc($query2)) {

		$output .= '<div class="users-list">
						<div class="user">
					<div class="content">
						<div style="display: inline-block;" class="image">
						<a href="../html/chat.php?user_id='.$row['unique_id'].'"><img src="../images/'.$row['img'].'" alt=""></a>
						</div>
						<div class="details">
							<span>'.$row['fname']." ".$row['lname'].'</span>
							<p>This is a test message.</p>
						</div>
					</div>
					<div class="status-dot"><i class="fas fa-circle"></i></div>
				</div></div>';

	 	}

}else{
$output .="No user found related to your search term ";
}


echo $output;


  ?>