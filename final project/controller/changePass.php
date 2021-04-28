<?php
session_start();
include('db_conn.php');

if(isset($_POST['submit'])) {

    // getting form values
    $prev = $_POST['prev'];
    $new = $_POST['new'];
    $confirm = $_POST['confirm'];


    //validating form
    if($prev == "" || $new == "" || $confirm == "") {
         echo "please enter valid information";
    }
    else {
        if(isset($_SESSION['user_name'])) {

        $uname = $_SESSION['user_name'];
        // get the user from db
        $sql = "SELECT * FROM users WHERE user_name='$uname'";

		$result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($result)) {
              $id = $row['id'];
              $password = $row['password'];

              // user:prev -> mdPass
              $mdPass = md5($prev);

              if($mdPass == $password) {


                // hashing new password
                  $userPassword = md5($new);

                  // update users password with new  one
                  $updateQuery = "UPDATE `users` SET `password` = '$userPassword' WHERE `users`.`id` = '$id'";

                  if ($conn->query($updateQuery) === TRUE) {
                      echo "Password changed successfully";
                    } else {
                        echo "IDK what happened";
                   }

              }
              else {
                  echo "Previous password is not current!";
              }

        }

    }

    else {
        // if the user is logged in
        header("Location: index.php");
    }

    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change password</title>
</head>

<body>
    <table border="1" width="100%">
        <tr>
            <td>
                <img src="https://www.kindpng.com/picc/m/72-723761_student-png-sammilani-mahavidyalaya-undergraduate-and-dummy-user.png" alt="logo" width="100px" height="100px">
            </td>

            <!-- <td align="right">
                <a href="logout.php">Logout</a>
            </td> -->
        </tr>

        <tr style="height:400px;">
            <td>
                <br>
                <b>Account</b>
                <hr>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="viewProfile.php">View Profile</a></li>
                    <li><a href="editProfile.php">Edit Profile</a></li>
                    
                    <li><a href="changePass.php">Change Password</a></li>
                    <!-- <li><a href="logout.php">Logout</a></li> -->
                </ul>
            </td>

            <td align="center">
                <h2>Change password</h2>
            <form action="" method='POST'>
            Current Password: <input type="password" name="prev" id=""> <br>
                New Password:    <input type="password" name="new" id=""> <br>
            Confirm Password:   <input type="password" name="confirm" id=""><br>
            <button name='submit' type="submit">Change My Password</button>
            </form>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center">
                Copyright &#169; 2021
            </td>
        </tr>
    </table>
</body>
</html>