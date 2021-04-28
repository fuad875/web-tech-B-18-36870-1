<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "dbsystem");
$sql = "SELECT * FROM client WHERE c_username LIKE '%".$_POST['name']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	<tr>
		          <td>".$row['c_id']."</td>
		          <td>".$row['c_name']."</td>
		          <td>".$row['c_username']."</td>
		          <td>".$row['c_email']."</td>
		          <td>".$row['c_dob']."</td>
				  <td>".$row['c_gender']."</td>
		        </tr>";
	}
}

else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>