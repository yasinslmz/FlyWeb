<?php include "../php/header.php"; ?>
<?php
session_start(); 
if (!isset($_SESSION['unique_id'])) {
	header("Location:sign-in.php");
}


?>


<body>
	<div class="wrapper">
		
		<section class="users">
			<header  style="border-bottom:none;">

				<?php 

				include "../php/db.php";

				$sql="SELECT * FROM users WHERE unique_id={$_SESSION['unique_id']} ";
				$query1=mysqli_query($conn,$sql);
				if (mysqli_num_rows($query1)>0) {
					$row=mysqli_fetch_assoc($query1);	

				}

				?>
				<div class="content">
					<img  src="../images/<?php echo $row['img']; ?> "  alt="">
					<div class="details">
						<span style="font-family: monospace;font-size: 20px;font-weight: bold"><?php echo $row['fname']." ".$row['lname']; ?></span>
						<p style="font-family: monospace;font-size: 14px"><?php echo $row['status']; ?></p>
					</div>
				</div>
				<a href="../php/logout.php?logout_id=<?php echo $row['unique_id']?>" class="logout">Logout</a>
			</header>

			<div class="search">
			
				
				<input class="searchbar1" style="
				width:100%;
				height: 42px;
				padding: 0 12px;
				margin-right: 7px;
				border:1px solid #ccc;
				font-size: 16px;
				border-radius: 5px 0 0 5px;
				
				opacity: 1;
				
				" type="text" placeholder="Enter a name to talk..">
				<button style="width: 48px;
				height: 42px;
				border:none;
				margin-left: 1px;		
				outline: none;
				color:#333;
				background: #fff;
				border-radius: 0 5px 5px 0;
				cursor: pointer;
				font-size: 17px;"><i class="fas fa-search"></i></button>

			</div>	
			<div class="usero">
				
			</div>
			
			


		</section>







	</div>
	<script src="../js/users.js"></script>

</body>
</html>