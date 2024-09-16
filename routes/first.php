<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="css/bootstrap.css">

 <center>	<h1>online voting System</h1><br></center>
<hr>
</head>
<center>
<body>
	<style>
		body{
			background-image: url('64.jpg');
			background-size: cover;
		
		}
		#loginbtn {
                   padding: 5px;
                   font-size: 20px;
                   background-color: black;
                   color: white;
                   border-radius: 5px;
				   text-align:center;
				   cursor:pointer;
				   
                }
				h1{
		color:white;
		text-align:center;
		 background-color:black;
	}
	</style>
	
	

	<form action="" method="POST">
		<input type="submit" name="admin_login" id="loginbtn" value="Admin Login" required  class="btn btn-primary"><br><br>
		<input type="submit" name="user_login" id="loginbtn" value="user Login" required class="btn btn-warning">
	</form>
	<?php
		if(isset($_POST['admin_login'])){
			header("Location: admin.php");
		}
		if(isset($_POST['user_login'])){
			header("Location: ../");
		}
	?>
	</center>
</body>
</center>
</html>