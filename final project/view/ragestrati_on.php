<!DOCTYPE html>
<html>

<head>
	<title>Registration</title>
	<style>
		body {

			background-image: url(https://i2.wp.com/novocom.top/image/c2V0YxsLmNXN3YWxsLmNvbQ==/wp-content/uploads/2017/03/4K-Road-Marking-Trees-Wallpaper-3840x2160-380x214.jpg);
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 100% 100%;

			width: 250px;
			position: absolute;
			top: 10%;
			left: 30%;
			bottom: 30%;
			text-align: center;
		}

		.btn:hover {

			background-color: darkred;
		}

		.btn:hover {
			color: white;
		}

		.background {
			backdrop-filter: blur(6px);
			border-radius: 10px;
			border: 1px solid rgba(255, 255, 255, 0.18);
			font-weight: 500;
			width: 480px;
			color: rgb(224, 228, 17);
		}
	</style>
</head>

<body>
	<div style="justify-content: center;">
		<form method="POST" action="registration.php">
			<fieldset class="background">
				<legend style="color: darkred;"><b>REGISTRATION</b></legend>
				<table>
					<tr>
						<td>
							Name
						</td>
						<td>
							<input type="text" name="name" value="">
						</td>
					</tr>

					<tr>
						<td colspan="3">
							<hr>
						</td>
					</tr>

					<tr>
						<td>
							Email
						</td>
						<td>
							<input type="email" name="email" value="">

						</td>
					</tr>

					<tr>
						<td colspan="3">
							<hr>
						</td>
					</tr>

					<tr>
						<td>
							User Name
						</td>
						<td><input type="text" name="username" value=""></td>
					</tr>

					<tr>
						<td colspan="3">
							<hr>
						</td>
					</tr>

					<tr>
						<td>
							Password
						</td>
						<td><input type="password" name="password" value=""></td>
					</tr>

					<tr>
						<td colspan="3">
							<hr>
						</td>
					</tr>

					<tr>
						<td>
							Confirm Password
						</td>
						<td><input type="password" name="confirmPass" value="" </td>
					</tr>

					<tr>
						<td colspan="3">
							<hr>
						</td>
					</tr>

					<tr>
						<td colspan="3">
							<fieldset style="width:400px;">
								<legend>Gender</legend>
								<input type="radio" name="gender" value="male"> Male
								<input type="radio" name="gender" value="female"> Female
								<input type="radio" name="gender" value="other"> Other
							</fieldset>
						</td>
					</tr>

					<tr>
						<td colspan="3">
							<hr>
						</td>
					</tr>

					<tr>
						<td colspan="3">
							<fieldset style="width:400px;">
								<legend>Date of Birth</legend>
								<input type="number" name="dd" style="width:40px;" value=""> / <input type="number" name="mm" style="width:40px;" value=""> / <input type="number" name="yyyy" style="width:60px;" value=""> <i>(dd/mm/yyyy)</i>
						</td>
					</tr>

					<tr>
						<td colspan="3">
							<hr>
						</td>
					</tr>

					<tr>
						<td colspan="3">
							<input class="btn" type="submit" name="submit" value="Submit">

						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>
</body>


</html>

<?php

if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirmPass = $_POST['confirmPass'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$day = $_POST['dd'];
	$month = $_POST['mm'];
	$year = $_POST['yyyy'];

	if (
		$username == "" || $password == "" || $confirmPass == ""
		|| $name == "" || $email == "" || $gender == ""
		|| $day == "" || $month == "" || $year == ""
	) {

		echo  "Null Submission! ";
	} else {

		for ($itr = 0; $itr < strlen($username); $itr++) {
			if (($username[$itr] >= 'A' && $username[$itr] <= 'Z')
				|| ($username[$itr] >= 'a' && $username[$itr] <= 'z')
				|| ($username[$itr] >= 0 && $username[$itr] <= 9)
				|| ($username[$itr] === '.')
				|| ($username[$itr] === '-')
				|| ($username[$itr] === '_')
			) {
				continue;
			} else {
				echo "User Name can contain alpha numeric characters, period, dash or underscore only!";
				break;
			}
		}
		if (strlen($username) < 2) {
			echo "User Name must contain at least two (2) characters!";
		}
		if (strlen($password) < 8) {
			echo "Password must not be less than eight (8) characters!";
		}
		$flag = false;
		for ($itr = 0; $itr < strlen($password); $itr++) {
			if (($password[$itr] === '@')
				|| ($username[$itr] === '#')
				|| ($username[$itr] === '$')
				|| ($username[$itr] === '%')
			) {
				$flag = true;
				break;
			}
		}
		if ($flag == false) {
			echo "Password must contain at least one of the special characters (@, #, $, %)";
		}
		if ($password != $confirmPass) {
			echo "Passwords don't match! Try again.";
		}
	}
}
