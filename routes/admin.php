<!DOCTYPE html>
<html>
<head>
	<title>Admin login page</title>
	
</head>
<body>
    <center>
      <style>
        body
        {
          background-image: url('64.jpg');
          background-size: cover;
          font-size: 25px;
        }
		input{
		    padding: 10px;
            border-radius: 5px;
		}
		
		.box{
				width:400px;
				height:350px;
				margin:60px auto 0;
				background: rgba(0,0,0,0.6);
				background-color:;
				text-align:center;
				padding:35px;
				border:3px solid black;
				border-radius:
			}
			
			.container{
				position: absolute;
				top:50%;
				left:50%;
				right:-50%;
				transform:translate(-50%,-50%);
			}
          .h1{
			  background-color:white;
		  }
		  
 
</style>
<div class="container">
 <div class="box">

    <b><h1 style="color:orange"><p style="color:orange">Admin Login</p></h1></b>
        <form action=""method="post">
            <input type="email" name="email" placeholder="Enter email" required><br><br>
            
            <input type="password" name="password" placeholder="Enter password"required><br><br>
       
            <input type="submit" name="submit"><br>
			<a href="first.php"<button id="back-button">back</button></a>
			
</div>
</div>
        </form><br>

        <?php
        
         if(isset($_REQUEST ['submit'])){
           $link=mysqli_connect("localhost","root","","online-voting-system");
          
          if($link){
            echo "";
          }
          else{
            echo"not connected";
          }


          $email=$_REQUEST["email"];
          $password=$_REQUEST["password"];
         $query= mysqli_query($link,"select * from  login where email='$email' && password='$password'");
         $rowcount=mysqli_num_rows($query);
         
         if($rowcount==true)
         {
             header("Location:home.php");


         }
         else{
           echo"Wrong Password !!";
         }
          }
      
    ?>
	<span><b><h3><p style="color:orange">online voting system</p></h3></b></span>
	

        
  </center>
</body>
</html>