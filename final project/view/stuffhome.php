<?php
session_start();
//print_r($_SESSION);
//die("akhuy");
if(isset($_SESSION['user']))
{
    //header('location:stuffhome.php');
}
else{
header('location:stufflogin.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Stuff Home</title>
  
  <style>
   body {
      font-family: Georgia, "Times New Roman", Times, serif;
      color: white;

      background: url(https://images-na.ssl-images-amazon.com/images/I/71VgmMSxYWL._SL1100_.jpg);
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
    }
	
	 .nav {
      width: 600px;
      float: right;
    }

    .nav ul {
      margin: 5px auto;
    }

    .nav ul li {
      width: 160px;
      float: left;
      text-align: center;
      padding: 10px;
	  background-color: darkslategrey;
	  opacity: 0.7;
    }

    .nav ul li a {
      text-decoration: none;
      color: orange;
    }

    .nav ul li:hover {
      background-color:burlywood;
    }

    .nav ul li a:hover {
      color: black;
    }
	
	.wel {
      width: 300px;
      height: 539px;
      background-color: darkslategrey;
      opacity: 0.7;
      padding: 55px;
    }
	
	.wel h1 {
      text-align: center;
      text-transform: uppercase;
      font-weight: 100px;
    }
	
	.but {
      width: 800px;
      float: right;
    }

    .but ul {
      margin: 200px auto;
    }

    .but ul li {
      width: 100px;
      float: left;
      text-align: center;
      padding: 100px;
	  background-color: white;
	  opacity: 0.7;
    }

    .but ul li a {
      text-decoration: none;
      color: green;
	  textsize:18;
    }

    .but ul li:hover {
      background-color: orange;
    }

    .but ul li a:hover {
      color: black;
    }


	</style>
	</head>
	
	<body>
	
	 <div class="nav">
    <ul type="none">
      <li><a href="stuffhome.php">Home</a></li>
     
      <li><a href="profile.php">Profile</a></li>
      <li><a href="logout.php">Log Out</a></li>

    </ul>
  </div>
     <div class="but">
    <ul type="none">
      <li><a href="order.php">orders</a></li>
     
      <li><a href="delevery.php">Delevery</a></li>
      

    </ul>
  </div>
  <div class="wel fade-in">
    <h1>SMART</h1>
	<h1>RESTURENT</h1>
    
  </div>
     
  
  
 
  </body>
	</html>