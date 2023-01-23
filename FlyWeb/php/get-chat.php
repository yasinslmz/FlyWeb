	<?php 
	session_start();
	include "./db.php";

	if(isset($_SESSION['unique_id'])) {
	
	
	
	$outgoing_id = $_SESSION['unique_id'];
    $incoming_id = mysqli_real_escape_string($conn,$_POST['incoming_id']);
	$output="";

	$sql1="SELECT * FROM messages 
	LEFT JOIN users ON users.unique_id =messages.outgoing_msg_id
	WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
                OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id";

	$query1=mysqli_query($conn,$sql1);
	

	if (mysqli_num_rows($query1)>0) {
		
		while ($row=mysqli_fetch_assoc($query1)) {
			if ($row['outgoing_msg_id'] === $outgoing_id ) { //message sender
				
			
				$output .= '<div class="chat outgoing">
							<div class="details">
								<p>'. $row['msg'] .'</p>
							</div>
							</div>';



			}else{
				$output .= '<div class="chat incoming">
					<img src="../images/'.$row['img'] .'" alt="" width="40px;">
					<div class="details1">
						<p>'. $row['msg'] .'</p>
					</div>
					</div>
				';

			}

		}
		echo $output;
	}

}else{

 header("Location:../html/sign-in.php");
}




	 ?>