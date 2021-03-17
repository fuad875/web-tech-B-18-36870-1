<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XCompany Login</title>
</head>
<body>
    
    <table border="2" width="60%">

        <tr>

            <td>

                 <a href="public_home.php"><img src="gallery/logo.png" alt="Logo"></a>



            </td>


        </tr>

        <tr>
            
            <td>
                
                <form action="login.php" method="post">
                    
                    <fieldset>
                        
                        <legend><b>LOGIN</b></legend>
                        
                        User Name<input type="text" name="uname"><br><br>
                        Password<input type="password" name="password">
                        <hr>
                        <input type="checkbox" name="remember_me" value="1"> <b>Remember Me</b><br><br>
                        <input type="submit" name="submit" value="Submit"> <a href="forgot_password.php">Forgot Password</a>
                        
                    </fieldset>
                    
                </form>
                
            </td>
            
        </tr>

        <tr>

            <td colspan="2" align="center">
                <p>Copyright 2017</p>
            </td>

        </tr>

    </table>
    
</body>
</html>


<?php

if(isset($_REQUEST['submit'])){
    
    if($_REQUEST['uname']==$_COOKIE['username'] and $_REQUEST['password']==$_COOKIE['password']){
        
        if(isset($_REQUEST['remember_me'])){
            setcookie('runame', $_REQUEST['uname'], time()+86400);
            setcookie('rpassword', $_REQUEST['password'], time()+86400);
        }
        
        session_start();
        $_SESSION['uname'] = $_REQUEST['uname'];
        $_SESSION['password'] = $_REQUEST['password'];
        header('location: dashboard.php');
        
    }
    
    else{
        echo "Invalid credentials!";
    }
    
}

?>