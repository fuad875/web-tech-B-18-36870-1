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
    <title>Smart Restaurant - Admin - Home</title>
    <link rel="stylesheet" href="../assets/css/admin/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   

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
        <li class="navbar-list right">
            <span class="user-info">Welcome, <?=$userInformation[0]['a_username']?></span>
        </li>
    </ul>
    <!-- Navbar end -->

    <!-- Sidebar -->
    <ul class="sidebar" >
        <li class="sidebar-list"><a href="admin_home.php">Home</a></li>
       
        
        <li class="sidebar-list"><a href="admin_edit_clientInfo.php">Edit Staff info</a></li>
        
        <li class="sidebar-list"><a  class="active" href="admin_check_clientInfo.php">Check Staff info</a></li>
      
        <li class="sidebar-list"><a href="admin_create_notice.php">Create Notice</a></li>
    </ul>
    <!-- Sidebar end -->
    
    <!-- container -->
    <div class="container">
        <form action="">
            <p class="table-header">Staff info</p>
            <table border="1" width="100%" id="table">
                <tr> 
                    <th>Staff ID</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                </tr>
                <?php getClientInfo(); ?>
            </table>
        </form>



  <div class="jumbotron text-center">
  <h1>Live Search Username</h1>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="search">
      <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Username</th>
          <th>Email</th>
          <th>dob</th>
          <th>Gender</th>
        </tr>
      </thead>
      <tbody id="output">
        
      </tbody>
    </table>
    </div>
    <div class="col-sm-3">
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $("#search").keypress(function(){
      $.ajax({
        type:'POST',
        url:'../models/search.php',
        data:{
          name:$("#search").val(),
        },
        success:function(data){
          $("#output").html(data);
        }
      });
    });
  });
</script>




    </div>
    <!-- container end -->
</body>
</html>