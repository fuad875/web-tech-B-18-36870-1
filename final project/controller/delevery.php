<?php
session_start();

if(isset($_SESSION['user']))
{
   
}
else{
header('location:stufflogin.php');
}




?>


<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

</style>
</head>
<body>

<table id="customers">
  <tr>
    <th>No.</th>
    <th>Address</th>
	<th>contact</th>
	<th>status</th>
  </tr>
  
   <?php
  $mysqli = new mysqli("localhost","root","","Resturant");
  //$username=$_SESSION["user"];
		$result = $mysqli->query("SELECT * FROM orders ");
		$row = $result->fetch_assoc();
		
		while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["no"]. "</td><td>" . $row["address"]. "</td><td> " . $row["number"]. "</td></td>" . $row["status"]."</td></tr>";
    }
		
		
		
		
		
  ?>
 
  
</table>

</body>
</html>
