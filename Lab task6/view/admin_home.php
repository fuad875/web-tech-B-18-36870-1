<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin</title>
</head>

<body>

    <h1>Welcome, Admin</h1>
    <a href="../controller/logout.php">Logout</a> <br> <br>

    <form action="admin_home.php" method="post">

        <input type="submit" name="userlist" value="Show All Users">

    </form> <br>

    <a href="createUsers.php"><input type="button" name="createUser" value="Create User"></a>
    <hr>

    <h1>User List</h1>
    <?php
    
    
    
    if(isset($_REQUEST['userlist'])){
        require_once('../controller/databaseConnect.php');
        $conn = getConnection();
        showAll($conn);
        
    }
    
    
    
    ?>


</body>

</html>


