<?php


require_once('../controller/databaseConnect.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Users</title>
</head>

<body>
    
    <center>
        
        <h1>Create User</h1>
        
        <form action="createUsers.php" method="post">
            
            Name : <input type="text" name="username"><br><br>
            Password : <input type="password" name="password"><br><br>
            email : <input type="email" name="email">
            <h4>User Type:</h4>
            Admin <input type="radio" name="radio" value="admin"> <br>
            staff <input type="radio" name="radio" value="staff"> <br> <br>
            
            <input type="submit" name="create" value="Create User">
            
        </form>
        
    </center>
    
</body>
</html>


<?php

if(isset($_REQUEST['create'])){
    
    if(empty($_REQUEST['username']) or empty($_REQUEST['password']) or empty($_REQUEST['email']) or empty($_REQUEST['radio'])){
        
        echo "Please Fill all the information!";
        
    }
    
    else{
        
        $conn = getConnection();
        insertUser($conn, $_REQUEST['username'], $_REQUEST['password'], $_REQUEST['email'], $_REQUEST['radio']);
        
    }
    
}

?>