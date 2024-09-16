<html>
 <head>
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
				input {
  padding: 10px;
  border-radius: 5px;
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
		  
           <div id="headerSection">
            <h1>admin page</h1>  
            </div>
            <hr>	
<form action="dele.php" method="POST" enctype="multipart/form-data">			
		<input type="number" name="id" placeholder="id" required>&nbsp   
		
		<button id="loginbtn" type="submit" name="Delete">delete</button><br><br>
		<a href="home.php"><input type="button"id="loginbtn" name="delete"value="back"></a>
		</form>
</body>
</center>
</html>