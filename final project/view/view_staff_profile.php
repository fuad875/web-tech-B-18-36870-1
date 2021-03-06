<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location: ../index.php');
	}

    if(!isset($_COOKIE['username'])){
        
        session_destroy();
        header('location: ../index.php');
    }

    require_once('../models/clientService.php');
    $userInformation = getUserInformation($_COOKIE['username']);

    

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Smart Restaurant </title>
    <script src="https://kit.fontawesome.com/c3f4e46332.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/client/navigation.css">
    <link rel="stylesheet" href="../assets/css/client/view.css">
</head>

<body>

    <div class="navbar">
        <div class="nav-logo-section">
            <a href="client_home.php"><img src="" alt="Logo" width="300px"></a>
        </div>
        <div class="nav-link-section">
            <ul>
                <li><a href="../php/logout.php"><i class="fas fa-door-open">Logout</i></a></li>
            </ul>
        </div>
    </div>


    <div class="page-navigation">

        <div class="block" style="background-color: black; height: 30px;"></div>
        <a href="view_client_profile.php">View Profile <i class="fas fa-angle-double-right"></i></a>
        <a href="edit_client_profile.php">Edit Profile <i class="fas fa-angle-double-right"></i></a>
        
        <a href="client_change_password.php">Change Password <i class="fas fa-angle-double-right"></i></a>

    </div>

    <div class="page-content">

        <h1>Profile Details</h1>
        <p>Profile ID: <?=$userInformation[0]['c_id']?></p>
        <p>Name: <?=$userInformation[0]['c_name']?></p>
        <p>Username: <?=$userInformation[0]['c_username']?></p>
        <p>Email: <?=$userInformation[0]['c_email']?></p>
        <p>Gender: <?=$userInformation[0]['c_gender']?></p>
        <p>Date of Birth: <?=$userInformation[0]['c_dob']?></p>


    </div>

</body>

</html>
