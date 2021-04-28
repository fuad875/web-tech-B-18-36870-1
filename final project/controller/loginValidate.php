<?php

require_once('../models/databaseConnect.php');
require_once('../models/clientService.php');



if(isset($_REQUEST['submit'])){
    
    
    
    if(!empty($_REQUEST['username']) and !empty($_REQUEST['password'])){
     
        if(userValidate($_REQUEST['username'], $_REQUEST['password'])){
            
            if($_SESSION['userType']=="Client"){
                
               $userInformation = getUserInformation($_SESSION['username']);
                
               
                    echo "Client Valid";
             
                
                
            }
            
            elseif($_SESSION['userType']=="Admin")
                {
                    
                    echo "Admin Valid";
                    
                }

              
            
        }else{echo "Invalid credentials";}
  
    }
    
    else{
        
        echo "Missing Information";
        
    }
    
}

else{
    
    header('location: ../index.php');
    
}



?>