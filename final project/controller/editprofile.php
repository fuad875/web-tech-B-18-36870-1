<?php


session_start();
include('db_conn.php');

if (isset($_SESSION['user_name'])) {


    $uname = $_SESSION['user_name'];
    // get the user from db
    $sql = "SELECT * FROM users WHERE user_name='$uname'";

    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $user_name = $row['user_name'];
        $name = $row['name'];


        echo $id;
        echo $user_name;
    }
} else {
    // if the user is logged in
    header("Location: index.php");
}


if (isset($_POST['submit'])) {

    $name   = $_POST['name'];
    $user_name   = $_POST['user_name'];

    if (
        // validate user data
        $name == "" || $user_name == ""
    ) {
        echo "invalid information...please try again!";
    } else {

        // update on db

        $updateQuery = "UPDATE `users` SET `user_name` = '$user_name', `name` = '$name' WHERE `users`.`id` = '$id'";

        if ($conn->query($updateQuery) === TRUE) {

            $_SESSION['user_name'] = $user_name;
            echo "Your profile is updated successfully";
        } else {
            echo "Error on updating profile: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Profile</title>
</head>

<body>
    <table border="1" width="100%">
        <tr>
            <td>
                <img src="https://cdn5.vectorstock.com/i/thumb-large/68/34/sunglasses-emoticon-with-big-smile-vector-28136834.jpg" alt="logo" width="100px" height="50px">
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
                <form method="POST" action="editprofile.php">
                    <fieldset style="width:400px;">
                        <legend><b>EDIT PROFILE</b></legend>
                        <table>
                            <tr>
                                <td>
                                    ID
                                </td>
                                <td>
                                    <input disabled type="text" name="id" value="<?php echo $id ?>" />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Username
                                </td>
                                <td>
                                    <input type="text" name="user_name" value="<?php echo $user_name ?>" />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Name
                                </td>
                                <td>
                                    <input type="text" name="name" value="<?php echo $name ?>" />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="submit" value="Submit">
                                </td>
                            </tr>
                        </table>
                    </fieldset>
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