<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kayıt Ekranım</title>


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/kayit.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

</head>

<body>
<!-- ../php/signup.php
 -->	
	<div class="container1">
		
		<div class="leftcontent">
			<form action="#" enctype="multipart/form-data">
				
				<h1 class="head">Sign Up</h1>
				<div class="error">This is a error messahe</div>
				<div class="form-group">
					<label class="labeel" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
						<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
					</svg></label>
					<input  type="text" name="fname" placeholder="İsim" autocomplete="off" required>
				</div>
				<div class="form-group">
					<label class="labeel" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
						<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
					</svg></label>
					<input type="text" name="lname" placeholder="Soyad" required>
				</div>
				
				<div class="form-group">
					<label for="name"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
						<path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
					</svg></label>
					<input type="text" name="email" placeholder="Email"  required>
				</div>
				<div class="form-group">
					<label for="name"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar-event" viewBox="0 0 16 16">
						<path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
						<path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
					</svg></label>
					<input  type="date" name="date" >

				</div>
				<div class="form-group">
					<label for="name"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
						<path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
					</svg></label>
					<input type="Password" name="password" placeholder="Şifre" style="width: 84%;" required>
					<span class="eyes" style="position: absolute;cursor: pointer;"><i class="fas fa-eye"></i></span>
				</div>
				<div class="form-group">
					
					<input type="file" name="image"  style="width: 84%;" required>
					
				</div>

				<div class="form-group1">
					
					<input type="checkbox" name="name" style="display: inline-block;">
					<label style="font-size: 15px;padding-left: 6px" for="name">Bütün şartları kabul ediyorum.</label>
				</div>
				<div class="button">
					<input type="submit" value="Kayıt Ol" name="kayit">
				</div>

			</form>
		</div>
		<div class="rightcontent">
			<figure>
				<img src="../images/1.jpg" alt="">
			</figure>
		</div>
	</div>


	<script src="../js/show-hide.js"></script>
	<script src="../js/signup.js"></script>

</body>
</html>