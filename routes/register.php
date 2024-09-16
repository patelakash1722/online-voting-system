<html>
    <head>
        <title>Online voting system - Registratrion</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
		<script language="Javascript" type="text/javascript">    
    
function allowOnlyLetters(e, t)   
{    
   if (window.event)    
   {    
      var charCode = window.event.keyCode;    
   }    
   else if (e)   
   {    
      var charCode = e.which;    
   }    
   else { return true; }    
   if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))    
       return true;    
   else  
   {    
      alert("Please enter only alphabets");    
      return false;    
   }           
}      
</script>
    </head>
    <body>
	<style>
	body{
		background-image:url('64.jpg');
		background-size:cover;
	}
	.aa{
		
		padding: 10px;
              border-radius: 5px;
              border: 2px solid black;
			  background-color:white;
	}	
	

        #upload {
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
   }
	</style>
        <center>
            <div id="headerSection">
            <h1>Online Voting System</h1>  
            </div>
            <hr>

            <h2>Registration</h2>
                <form action="../api/register.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Name" onkeypress="return allowOnlyLetters(event,this);"required>&nbsp
                    <input type="text" name="mob" title ="Error message" pattern="[1-9]{1}[0-9]{9}" placeholder="Mobile no" required><br><br>
                    <input type="password" name="pass" placeholder="Password" required>&nbsp
                    <input  type="password" name="cpass" placeholder="Confirm Password" required><br><br>
                    <input style="width: 31%" type="text" name="add" placeholder="Address" required><br><br>
                    <div id="upload" style="width: 30%">
                        Upload image: <input type="file" id="profile" name="image" required>
                    </div><br>
                    <div id="upload" style="width: 30%">
                        Select your role:
                        <select name="role">
                            <option value="1">Voter</option>
                            <option value="2">Group</option>
                        </select><br>                   
                    </div><br>
                    <button id="loginbtn" type="submit" name="registerbtn">Register</button><br><br>
                  <b class="aa">  Already user? </b><a class="aa"href="../">Login here</a>
                </form>
            </center>
    </body>
</html>


