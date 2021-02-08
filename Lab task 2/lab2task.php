<!DOCTYPE HTML>  
<html>
<head>

</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $dateErr =$degreeErr=$bloodgroupErr = " ";
$name = $email = $gender = $date =$degree=$bloodgroup = " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

 
  if (empty($_POST["date"])) {
    $dateErr = "Invalid URl";
  } else {
    $date = test_input($_POST["date"]);
      
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
    

  if (empty($_POST["degree"])) {
    $degree = "";
  } else {
    $degree = test_input($_POST["degree"]);
  }

  if (!empty($_POST["bloodgroup"])) {
    
    
    $bloodgroup = test_input($_POST["bloodgroup"]);
  } else {
    
    
    $bloodgroupErr = "Invalid URl";
  }

 }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation </h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

  
  Name:<input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  Date Of Birth: <input type="date" name="date">
  <span class="error"><?php echo $dateErr;?></span>
  <br><br>

  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>  

  Degree:  <input type="checkbox" name="degree" value="SSC"> SSC
			<input type="checkbox" name="degree" value="HSC"> HSC
			<input type="checkbox" name="degree" value="Bsc"> Bsc
      <input type="checkbox" name="degree" value="Msc"> Msc
      
     
  <br><br>
  Blood Group:
        <select name="bloodgroup" >
				<option value="A+">A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
				<option value="O+" >O+</option>
				<option value="O-">O-</option>
			</select>
  <span class="error">* <?php echo $bloodgroupErr ;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $date;
echo "<br>";
echo $gender;
echo "<br>";
echo $degree;
echo"<br>";
echo $bloodgroup;
?>

</body>
</html>