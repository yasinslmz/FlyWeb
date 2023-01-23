<?php 
session_start();
include "./db.php";
 ?>

 <?php 

$outgoing_id=$_SESSION['unique_id'];
$sql="SELECT * from users WHERE NOT unique_id={$outgoing_id}";
$query1=mysqli_query($conn,$sql);

$output = "";

if (mysqli_num_rows($query1) == 1) {

	$output .= "No users are available to chat";

}elseif(mysqli_num_rows($query1) > 0){

while ($row = mysqli_fetch_assoc($query1)) {
		$sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
                OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id} 
                OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'].'...' : $result ="No message available";
        (strlen($result) > 28) ? $msg =  substr($result, 0, 23) . '...' : $msg = $result;

        if(isset($row2['outgoing_msg_id'])){
            ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
        }else{
            $you = "";
        }

		($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";
		$output .= '<div class="users-list">
						<div class="user">
					<div class="content">
						<div style="display: inline-block;" class="image">
						<a href="../html/chat.php?user_id='.$row['unique_id'].'"><img src="../images/'.$row['img'].'" alt=""></a>
						</div>
						<div class="details">
							<a style="color:black;" href="../html/chat.php?user_id='.$row['unique_id'].'"><span style="font-size:17px;font-weight:400;">'.$row['fname']." ".$row['lname'].'</span></a>
							<p>'.$you.$msg.'</p>
						</div>
					</div>
					<div class="status-dot '.$offline.'"><i class="fas fa-circle"></i></div>
				</div>
				</div>';

	 	}
	}

	echo $output;


  ?>


				
				

				

			