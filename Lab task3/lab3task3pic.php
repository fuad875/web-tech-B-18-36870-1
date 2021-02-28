<!DOCTYPE html>
<html>

<body>

<?php
if(isset($_POST['Submit']))
{ 
$filepath = "images/" . $_FILES["file"]["name"];

if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
{
echo "<img src=".$filepath." height=200 width=300 />";
} 
else 
{
echo "Error !!";
}
} 
?>

<form action=" " enctype="multipart/form-data" method="post">
<fieldset>
<legend>PROFILE PICTURE</legend>
<input type="file" name="file">
<br><br>
<input type="submit" value="submit" name="Submit"> <br/>

</fieldset>
</form>


</body>
</html>