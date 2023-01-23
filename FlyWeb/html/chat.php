<?php 

	session_start();
	if(!isset($_SESSION['unique_id'])){
		header("Location:sign-in.php");
	}



	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,inital-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>My App | Coding Yasin</title>
	<link rel="stylesheet" href="../css/chat1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

</head>
<body>









	<div class="wrapper">
		
		<section class="chat-area">
			<header>
				<?php 

				include "../php/db.php";

				$user_id=mysqli_real_escape_string($conn,$_GET['user_id']);

				$sql="SELECT * FROM users WHERE unique_id={$user_id} ";
				$query1=mysqli_query($conn,$sql);
				if (mysqli_num_rows($query1)>0) {
					$row=mysqli_fetch_assoc($query1);	

				}


				?>









				<a href="./users.php" style="margin-right: 8px;"><i class="fas fa-arrow-left"></i></a>
				<img src="../images/<?php echo $row['img']; ?>" alt="">
				<div class="details" style="margin-left: 10px;">
					<span><?php echo $row['fname']." ".$row['lname']; ?></span>
					<p><?php echo $row['status']; ?></p>

				</div>

			</header>
			<div class="chat-box">
				
				
				
				
			</div>
			<form action="#" class="typing-area" autocomplete="off">
				<input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>"  hidden>
				<input type="text" name="message" class="inpu" placeholder="Type a message..">
				<button type="submit" class="buto"><i style="font-size: 20px" class="fab fa-telegram-plane"></i>
				</button>
			</form>

		</section>







	</div>

<script src="../js/chat1.js"></script>
</body>
</html>