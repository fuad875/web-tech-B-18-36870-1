<?php
	//session_start();
	
	//if($_SESSION['status'] == "Ok"){ 
    
        if(isset($_REQUEST['hbutton']))
        {
            header('location: publicHome.php');
        }
        elseif(isset($_REQUEST['lbutton']))
        {
            header('location: login.html');
        }
        elseif(isset($_REQUEST['rbutton']))
        {
            header('location: Registration.html');
        }
        

?>

<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <table border="2" width=50% >
            <tr>
                <td align="right">
                <a href = "publicHome.php" name="hbutton">Home</a>|
                <a href = "login.php" name="lbutton">Login</a>|
                <a href = "registration.html"  name="rbutton">Registration</a>
            </td>
    
            </tr>
            <tr align="center">
                <td colspan="2" height=100px>Welcome to xCompany</td>
            </tr>
            <tr align="center">
                <td colspan>Copyright@ 2017</td>
            </tr>
        </table>
    </form>
    

</body>
</html>
