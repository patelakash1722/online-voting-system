<html>
<html>
         <head>
           <title> admin page</title>
		</head>
<center>
<body>
   <style>
      #loginbtn {
                   padding: 5px;
                   font-size: 20px;
                   background-color: black;
                   color: white;
                   border-radius: 5px;
				   text-align:center;
				   cursor:pointer;
				   
                }
				
#logout-button {
  float: right;
  margin-right: 20px;
  margin-top: 20px;
  padding: 5px;
  font-size: 15px;
  background-color: #3498db;
  color: white;
  border-radius: 5px;
}
#headerSection {
  padding: 2px;
  font-family: Cursive;
}
	body{
		
		background-image:url("64.jpg");
		background-size:cover;
	}
	h1{
		color:white;
		text-align:center;
		 background-color:black;
	}
	
   </style>
   <div>
   <a href="first.php"><button id="logout-button">Logout</button></a>
		</div>	
   
<b> <h1> welcome to admin page</h1></b><br>
<hr>
<form action=""method="post">

      <a href="adminre.php"><input type="submit"id="loginbtn" name="register"value="register"></a>
    <br>
   <br>
         <a href="delete.php"><input type="submit"id="loginbtn" name="delete"value="Delete"></a>
   <br>
   <br>
  <a href="update.php"><input type="submit"id="loginbtn" name="update"value="update"></a>
  <br>
  <br>
   <a href="status.php"><input type="submit"id="loginbtn" name="status" value="status"></a>
   <br>
   <br>
   
   <a href="report.php"><input type="submit" id="loginbtn" name="report" value="report"></a>
   <br>
   <br>
   
</form>
<?php
  if(isset($_POST['register'])){
	  header("Location:adminre.php");
  }
  if(isset($_POST['delete'])){
	  header("Location:delete.php");
  }
    if(isset($_POST['update'])){
	  header("Location:update.php");
	}
   if(isset($_POST['status'])){
	  header("Location:status.php");
  }
  if(isset($_POST['report'])){
	  header("Location:report.php");
  }
   
?>
<span><b><h3><p style="color:orange"></p></h3></b></span>
</body>
</center>
</html>
