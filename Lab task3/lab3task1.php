<!DOCTYPE HTML>  
<html>
<head>

</head>
<body>  

<?php

$nameErr =$passErr= " ";
$name = $pass= " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        //if(strlen($name)<=2){
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["pass"])) {
    $emailErr = "Email is required";
  } else {
    $pass = test_input($_POST["pass"]);
    // check if e-mail address is well-formed
    //if (!filter_var($pass, FILTER_VALIDATE_EMAIL)) {
      //$passErr = "Invalid email format";
    //}
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
<legend>Log in</legend>

  
  Name:<input type="text" name="name" placeholder="enter name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  Password: <input type="password" name="pass" placeholder="enter password">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>

 
  <input type="submit" name="submit" value="Submit">  
  <br><br>
  <fieldset>
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $pass;

?>

</body>
</html>