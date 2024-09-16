<?php
    include("connection.php");
	
    $id = $_POST['id'];
    $name = $_POST['name'];
    $mobile = $_POST['mob'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $add = $_POST['add'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $role = $_POST['role'];

    if($cpass!=$pass){
        echo '<script>
                alert("Passwords do not match!");
                window.location = "../routes/update.php";
            </script>';
    }
    else{
        move_uploaded_file($tmp_name,"../uploads/$image");
        $update = mysqli_query($connect, "update user SET id='$id',name='$name',mobile='$mobile',password='$pass',address='$add',photo='$image',status=0,votes=0,role='$role' where id='$id' ");
        if($update){
            echo '<script>
                    alert("update successfull!");
                    window.location = "../routes/home.php";
                </script>';
        }
    }
    
?>