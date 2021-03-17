

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XCompany Edit Profile</title>
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
              
               <form action="edit_profile.php" method="post">
                   
                   <fieldset>
                       
                       <legend><b>EDIT PROFILE</b></legend>
                       
                       Name <input type="text" name="name" value="<?=$_COOKIE['name']?>"><hr>
                       Email <input type="email" name="email"><button title="hint:Sample@example.com"><b>i</b></button><hr>
                       Gender <input type="radio" name="gender" value="Male"> Male
                            <input type="radio" name="gender" value="Female"> Female
                            <input type="radio" name="gender" value="Other"> Other
                            <hr>
                        Date of Birth  <input type="text" name="date" value="<?=$_COOKIE['date']?>"><br> (dd/mm/yyyy) <hr>
                        
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