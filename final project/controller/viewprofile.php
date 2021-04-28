<?php

    session_start();
    include('db_conn.php');

    if(isset($_SESSION['user_name'])) {

        $uname = $_SESSION['user_name'];
        // get the user from db
        $sql = "SELECT * FROM users WHERE user_name='$uname'";

		$result = mysqli_query($conn, $sql);


        while ($row = mysqli_fetch_array($result)) {
              $id = $row['id'];
              $user_name = $row['user_name'];
              $name = $row['name'];
        }

    }

    else {
        // if the user is logged in
        header("Location: index.php");
    }

?>


<!DOCTYPE html>
<html>

<head>
    <title>View Profile</title>
</head>

<body>
    <table border="1" width="100%">
        <tr>
            <td>
                <img src="https://c8.alamy.com/comp/2B7E25N/3d-render-of-yellow-emoji-face-with-sunglasses-and-medical-mask-protecting-from-coronavirus-2019-ncov-mers-ncov-2B7E25N.jpg" alt="logo" width="50px" height="50px">
            </td>

            <td align="right">
                Logged in as <a href="home.php">
                    <?php
                    echo $name;
                    ?>
                    <!-- | <a href="logout.php">Logout</a> -->
            </td>
        </tr>

        <tr style="height:200px;">
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

            <td>
                <fieldset>
                    <legend><b>PROFILE</b></legend>
                    <table>
                        <tr>
                            <td>
                                ID:
                                <?php
                                echo $id;
                                ?>
                            </td>

                        </tr>
                         <tr>
                            <td>
                                username:
                                <?php
                                echo $user_name;
                                ?>
                            </td>

                          </tr>
                         <tr>
                            <td>
                                Name:
                                <?php
                                echo $name;
                                ?>
                            </td>
                        </tr>

                    </table>
                </fieldset>
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