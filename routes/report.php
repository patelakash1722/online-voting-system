<!DOCTYPE html>
<html>
<head>
	<title>votter data</title>
	
</head>

<body>
<a href="home.php"><button id="logout-button">back home</button></a>
	<hr>
	<center><b><h1>online-voting-system</h1></b></center>

</hr>
<hr>
<style >
body{
  background-image: url('ps.jfif');
   background-size: cover;
    font-size: 25px;
    color:red;
    background- color:red;


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



	.tab{
		padding: 10px;
		font-size: 25px;
		background-color:white;
	}
.btn{
  background-color: skyblue;
        font-size: 20px;

}
</style>


<form action="" method="POST">
  <center>

	<table border="2px">
		<tr>
		    <th class="tab">id</th>
			<th class="tab">name</th>
			<th class="tab">mobile </th>
			<th class="tab">password</th>
			<th class="tab">address</th>
			<th class="tab">role</th>
			<th class="tab">votes</th>
			
			<th class="tab">vote_for</th>
			


		</tr>
		

		<input  class="btn" type="submit" name="Dispaly" value="Dispaly"><br><br>
        
    
</form>

  <?php  
  
$connect=mysqli_connect("localhost","root","","online-voting-system");

if($connect){
            echo "votter Detail:";
          }
          else{
            echo"not connected:";
          }

        
          if (isset($_POST['Dispaly'])){
 
             $display= ("select * from user");

               $result=mysqli_query($connect,$display);
               while($row = mysqli_fetch_array($result))
             {

          ?>
          <tr>
		  <td><?php echo $row['id'] ?></td>
          <td><?php echo $row['name'] ?></td>
          <td><?php echo $row['mobile'] ?></td>
          <td><?php echo $row['password'] ?></td>
          <td><?php echo $row['address'] ?></td>
          <td><?php echo $row['role'] ?></td>
		  <td><?php echo $row['votes'] ?></td>
		  <td><?php echo $row['vote_for'] ?></td>
		  
             </tr>


             <?php       
             }

        }
?>

       

</center>
</table>
</body>


</html>




