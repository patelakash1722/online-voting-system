<?php
    
   session_start();
    
   

    if(!isset($_SESSION['status'])==1){
        $status = '<b style="color: green">Voted</b>';
    }
    else{
        $status = '<b style="color: red">not Voted</b>';
    }
?>


<html>
    <head>
        <title>Online voting system - Dashboard</title>
        
    </head>
    <body>
	            <style>
	              body{
		              background-image:url('ps.JFIF');
	               	background-size:cover;
	                }
					
                 #groupSection {
                                width: 60%;
                               float: center;
                               background-color:;
                              padding: 20px;
				#logout-button{
					        padding: 5px;
                            font-size: 15px;
                            background-color:skyblue;
                            color: white;
                            border-radius: 5px;
				             }
				 }
	            </style>
        
            <center>
            <div id="headerSection">
                        <h1>Online Voting System</h1>  
						
            </div>
			
            
            
	</div>
            </center>
            <hr>

            
                <div id="groupSection">
                    <?php

                    if(isset($_SESSION['groups'])){
                        $groups = $_SESSION['groups'];
                        for($i=0; $i<count($groups); $i++){
                            ?>
                                <div style="border-bottom: 1px solid #bdc3c7; margin-bottom: 30px">
                                <img style="float: right" src="../uploads/<?php echo $groups[$i]['photo']?>" height="80" width="80">
                                <b>Group Name : </b><?php echo $groups[$i]['name']?><br><br>
                                <b>Votes :</b> <?php echo $groups[$i]['votes']?><br><br>
                                <form method="POST" action="../api/vote.php">
                                <input type="hidden" name="gvotes" value="<?php echo $groups[$i]['votes'] ?>">
                                <input type="hidden" name = "gid" value="<?php echo $groups[$i]['id'] ?>">
                                <?php

                                if($_SESSION['status']==1){
                                    ?>
                                    <button disabled style="padding: 5px; font-size: 15px; background-color: #27ae60; color: white; border-radius: 10px;" type="button">Voted</button>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button style="padding: 5px; font-size: 15px; background-color: #3498db; color: ; border-radius: 5px;" type="submit">Vote</button>
                                    <?php
                                }
                                ?>
                                </form>
                                </div>
                            <?php
                        }
                    }
                    else{
                        ?>
                            <div style="border-bottom: 1px solid #bdc3c7; margin-bottom: 10px">
                                <b>No groups available right now.</b>    
                            </div>
                        <?php
                    }  
                    ?>
					        <a href="home.php"><button id="logout-button">HOME</button></a>
                </div>
				
            
			
	  
	
    </body>
	
	</div>
</html>