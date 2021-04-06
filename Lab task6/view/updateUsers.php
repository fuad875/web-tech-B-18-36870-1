<?php

require_once('../controller/databaseConnect.php');


if(isset($_REQUEST['msg'])){
    
    $conn = getConnection();
    $sql = "select * from users where id = ".$_REQUEST['msg']."";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update User</title>
</head>
<body>
    
    <center>
        
        <form action="updateUsers.php?" method="post">
            
            ID : <input type="text" name="id" value="<?= $row['id'] ?>"> <br><br>
            Username: <input type="text" name="username" value="<?=$row['username'] ?>"><br><br>
            Password: <input type="password" name="password" value="<?=row['password']?>"><br><br>
            Email: <input type="email" name="email" value="<?=$row['email']?>"><br><br>
            <input type="submit" name="update" value="Update">
            
        </form>
        
    </center>
    
</body>
</html>


<?php

}

if(isset($_REQUEST['update'])){
    
    $conn = getConnection();
    updateUser($conn, $_REQUEST['id'], $_REQUEST['username'], $_REQUEST['password'], $_REQUEST['email']);
    
}
        
        
?>