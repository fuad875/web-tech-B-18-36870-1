<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location: ../index.php');
	}

    require_once('../models/adminService.php');
    $userInformation = getUsersInformation($_SESSION['username']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smart Restaurant</title>
    <link rel="stylesheet" href="../assets/css/admin/style.css">
</head>
<body>
    <!-- Navbar -->
    <ul class="navbar">
        <li class="navbar-list">
            <a href="admin_home.php"><img src=" " alt="Logo" class="logo"></a>
        </li>
        <li class="navbar-list right">
            <a href="../php/logout.php">Logout</a>
        </li>
        <li class="navbar-list right">
            <a href="about.html" target="_blank">About</a>
        </li>
    </ul>
    <!-- Navbar end -->
                
    <!-- Sidebar -->
    <ul class="sidebar" >
        <li class="sidebar-list"><a href="admin_home.php">Home</a></li>
    
        <li class="sidebar-list"><a class="active" href="admin_edit_clientInfo.php">Edit Staff info</a></li>
       
        <li class="sidebar-list"><a href="admin_check_clientInfo.php">Check Staff info</a></li>
      
        <li class="sidebar-list"><a href="admin_create_notice.php">Create Notice</a></li>
    </ul>
    <!-- Sidebar end -->
     
    <!-- container -->
    <div class="container">
        <form action="../php/admin_clientInfo_delete.php" method="post">
            <p class="table-header">Edit Staff info</p>
            <table border="1" width="100%" id="table">     
                <tr><th>Staff ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Update</th>
                <th>Delete</th></tr>   
                <?php updateClientInfo();?>           
            </table>                
        </form>            
    </div>
    <!-- container end -->  
       
</body>
</html>