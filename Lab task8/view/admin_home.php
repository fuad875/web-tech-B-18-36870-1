<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location: ../index.php');
	}

    require_once('../models/adminService.php');
    $userInformation = getUsersInformation($_COOKIE['username']);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smart Restaurant - Admin - Home</title>
    <link rel="stylesheet" href="../assets/css/admin/style.css">
</head>
<body>
    <!-- Navbar -->
    <ul class="navbar">
        <li class="navbar-list">
            <a href=""><img src="" alt="Logo" class="logo"></a>
        </li>
        <li class="navbar-list right">
            <a href="../php/logout.php">Logout</a>
        </li>
        <li class="navbar-list right">
            <a href="about.html" target="_blank">About</a>
        </li>
        <li class="navbar-list right">
            <span class="user-info">Welcome, <?=$userInformation[0]['a_username']?></span>
        </li>
    </ul>
    <!-- Navbar end -->
   
                    
    <!-- Sidebar -->
    <ul class="sidebar" >
        <li class="sidebar-list"><a class="active" href="admin_home.php">Home</a></li>
    
        <li class="sidebar-list"><a href="admin_edit_clientInfo.php">Edit Staff info</a></li>

        <li class="sidebar-list"><a href="admin_check_clientInfo.php">Check Staff info</a></li>
   
        <li class="sidebar-list"><a href="admin_create_notice.php">Create Notice</a></li>
    </ul>
    <!-- Sidebar end -->
  
</body>
</html>