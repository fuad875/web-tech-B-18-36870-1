<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XCompany  Profile Picture</title>
</head>
<body>
    
    <table border="2" width="60%">

        <tr>

            <td>

                 <a href="dashboard.php"><img src="gallery/logo.png" alt="Logo"></a>



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
              
              <form action="profile_picture.php" method="post">
              <fieldset>
                  
                  <legend><b>PROFILE PICTURE</b></legend>
                  
                  <img src="gallery/user.png" alt="User" height="150px" width="150px"><br>
                  <input type="file" name="image"><hr>
                  <input type="submit" name="submit" value="Submit">
                  
                  
              </fieldset>
               </form>
                
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


