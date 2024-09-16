<?php
 $link=mysqli_connect("localhost","root","");
 $db=mysqli_select_db($link,"online-voting-system");
          
          if($link){
            echo "connected";
          }
          else{
            echo"not connected";
          }
        
if(isset($_POST['Delete'])){

  $id = $_POST['id'];
  
          


          $sql=mysqli_query($link,"DELETE FROM user WHERE id= '$id' ");


               
                if($sql){
                  echo '<script>
                  alert("Delete sucessfuly");
                  window.location="home.php"; </script>';


                }
                else{
         
                  echo '<script>  alert("Delete not sucessfuly)";</script>';



                }
        }   


         ?>

