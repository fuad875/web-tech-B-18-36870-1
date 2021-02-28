<!DOCTYPE HTML>  
<html>
<head>

</head>
<body>  

<?php

$cpassword="old";
$npassword=$rpassword="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(isset($_POST['submit'])){
    $npassword=$_POST['npassword'];
    $rpassword=$_POST['rpassword'];
    if($cpassword!=$_POST['cpassword']){
      $errmsg="old password not same";
    }else{
      if($npassword==$rpassword){
        $errmsg="Valid";
      }else{
        $errmsg="NOT CONFIRM";
      }
    }
  }
 

 }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<fieldset>
<legend>CHANGE PASSWORD</legend>

  
  Current Password:<input type="password" name="cpassword" placeholder="Enter current password">
  
  <br><br>

  New Password: <input type="password" name="npassword" placeholder="Enter New password">

  <br><br>

  Retype New Password: <input type="password" name="rpassword" placeholder="Retype password">
  <br><br>

 
  <input type="submit" name="submit" value="Submit">  

  <br><br>
  <fieldset>
</form>

<?php
echo "<h2>Input:</h2>";
if(isset($errmsg))
{
  echo $errmsg;
  echo "<br>";
}
echo $npassword;
echo "<br>";
echo $rpassword;
echo"<br>";

?>

</body>
</html>