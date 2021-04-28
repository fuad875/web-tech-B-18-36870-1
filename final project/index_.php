<!DOCTYPE html>
<html>

<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<form action="login.php" method="post">
		<h2>LOGIN</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>User Name</label>
		<input type="text" id='username' onkeyup='checkUsername()' name="uname" placeholder="User Name">
		<br>

		<label>Password</label>
		<input type="password" id='password' onkeyup='checkPassword()' name="password" placeholder="Password"><br>

		<button type="submit">Login</button>
		<a href="signup.php" class="ca">Create an account</a>
		<br>
		<span id='error' style="color: red; margin-left: 10px"></span>
	</form>

	<script>
		var error = document.getElementById('error');

		function checkUsername() {
			var username = document.getElementById('username');

			if (username.value.length < 5) {
				error.innerText = 'Username is TOOOO short!'
			} else {
				error.innerText = ''
			}

		}

		function checkPassword() {
			var password = document.getElementById('password');
			if (password.value.length < 5) {
				error.innerText = 'Password is TOOOO short!'
			} else {
				error.innerText = ''
			}
		}
	</script>

</body>

</html>