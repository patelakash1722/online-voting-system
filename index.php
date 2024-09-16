<html>
    <head>
        <title>Online voting system - Home</title>
        <link rel="stylesheet" href="css/stylesheet.css">
		
    </head>
	
    <body>
	<style>
	body{
		background-image:url('64.jpg');
		background-size:cover;
		background-color:;
	}
	.aa{
		
		padding: 10px;
              border-radius: 5px;
              border: 2px solid black;
			  background-color:white;
	}
	h1{
		color:white;
		text-align:center;
		 background-color:black;
	}
	h2{
		
		color:white;
		text-align:center;
		 background-color:;
	}
	
	#back-button {
  float: left;
  margin-left: 20px;
  margin-top: 20px;
  padding: 5px;
  font-size: 15px;
  background-color: #3498db;
  color: white;
  border-radius: 5px;
}
	</style>
	    <a href="routes/first.php"><button id="back-button"> Back</button></a>
        
            <center>
            <div id="headerSection">
            <h1>Online Voting System</h1>  
            </div>
            <hr>
          
            <div id="loginSection">
                <h2>Login</h2>
                <form action="api/login.php" method="POST">
                    <input type="number" name="mob" placeholder="Enter mobile" required><br><br>
                   <b> <input type="password" name="pass" placeholder="Enter password" required><br><br></b>
                    <select name="role" style="width: 15%; border: 2px solid black">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select><br><br>                  
                    <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
                 <b class="aa" >New user? </b><a class="aa"href="routes/register.php">Register here</a>
                </form>
            </div>
       
            </center> 
    </body>
</html>