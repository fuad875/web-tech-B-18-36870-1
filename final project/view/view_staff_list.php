<?php
    session_start();
    if(!isset($_SESSION['userType'])){
        header('location: ../index.php');
    }
    if(!isset($_COOKIE['userName'])){
       
        session_destroy();
        header('location: ../index.php');
    }
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smart Restaurant - Manager - Home</title>
    
</head>
<body>
    
    <table width="100%">

        <tr>

           
            <td align="right"><a href="../php/logout.php">
                    Logout
                </a>&nbsp;&nbsp;
                <a href="about.html" target="_blank">
                    About
                </a></td>

        </tr>

    </table><br><br><br>
    
     <div class="container">
        
        <u><h1>Smart Restaurant</h1></u>
        <div class="catagory">
        
        
                <h3>Welcome, Fuad</h3>
                <ul>
                    
                    <li><a href="view_client_list.php">View  client list</a></li>
                 
                    <!-- <li><a href="transaction.php">solve transaction</a></li> -->
                    
                </ul>
                </div>
        
                
                
               <h4>Client list</h4>
                <?=getClientList($_SESSION['username'])?>
                
         </div>
    
</body>
</html>