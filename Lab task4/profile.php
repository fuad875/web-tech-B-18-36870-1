<?php

session_start();
$name = $_COOKIE['name'];
$email = $_COOKIE['email'];
$gender = $_COOKIE['gender'];
$date = $_COOKIE['date'];
                    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XCompany - Profile</title>
</head>
<body>
    
    <table border="2" width="60%">

        <tr>

            <td>

                 <a href="dashboard.php"><img src="gallery/logo.png" alt="Logo"></a>



            </td>

            <td align="right">

                Logged in as <a href="profile.php"><?=$name?></a> |
                <a href="logout.php">Logout</a>
                

            </td>


        </tr>

        <tr>
            
            <td>
                <b>Account</b><hr>
                
                <ul>
                    
                    <a href="dashboard.php"><li>Dashboard</li></a>
                    <a href="profile.php"><li>View Profile</li></a>
                    <a href="edit_profile.php"><li>Edit Profile</li></a>
                    <a href="profile_picture.php"><li>Change Profile Picture</li></a>
                    <a href="change_password.php"><li>Change Password</li></a>
                    <a href="logout.php"><li>Logout</li></a>
                    
                </ul>
               
                
            </td>
            
            <td width=80%>
                <fieldset>
                <legend><b>PROFILE</b></legend>
                <table>
                   
                    <tr>
                        <td>
                            
                    
                    
                    
                    Name <?=$name?>
                    <hr>
                    Email <?=$email?>
                    <hr>
                    Gender<?=$gender?>
                    <hr>
                    Date of Birth: <?=$date?>
                    
                    
                    
                
                        </td>
                        
                        
                        
                        <td>
                            <img src="gallery/user.png" alt="User" height="150px" width="150px"><br>
                            <a href="profile_picture.php">Change</a>
                            
                        </td>
                    </tr>
                    <tr><td colspan="2"><hr></td></tr>
                    <tr><td colspan="2"><a href="edit_profile.php">Edit Profile</a></td></tr>
                </table>
                </fieldset>
                
            </td>
            
        </tr>

        <tr>

            <td colspan="2" align="center">
                <p>Copyright  2017</p>
            </td>

        </tr>

    </table>
    
</body>
</html>