<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text"
                      name="name"
                      placeholder="Name"
                     id="name" onkeyup="checkName()"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text"
                      name="name"
                     id="name" onkeyup="checkName()"
                      placeholder="Name"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text"
                      name="uname"
                    id="username" onkeyup="checkUsername()"
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text"
                      name="uname"
                    id="username" onkeyup="checkUsername()"
                      placeholder="User Name"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password"
                 name="password"
                 id="password" onkeyup="checkPassword()"
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password"
                 name="re_password"
                id="re_password" onkeyup="matchPassword()"
                 placeholder="Re_Password"><br>


     	<button type="submit">Sign Up</button>
          <a href="index.php" class="ca">Already have an account?</a>
          <div>
                <span id='error' style="color: red; margin-left: 10px"></span>
          </div>
     </form>


<script>

     var error = document.getElementById('error')

	function checkPassword() {
		var password = document.getElementById('password');
		if(password.value.length < 5) {
			error.innerText= 'Password is TOOOO short!'
		}
		else {
			error.innerText= ''
		}
	}
	function checkUsername() {
		var username = document.getElementById('username');
		if(username.value.length < 5) {
			error.innerText= 'username is TOOOO short!'
		}
		else {
			error.innerText= ''
		}
	}
	function checkName() {
		var name = document.getElementById('name');
		if(name.value.length < 5) {
			error.innerText= 'name is TOOOO short!'
		}
		else {
			error.innerText= ''
		}
	}

     function matchPassword() {
          var password = document.getElementById('password')
          var re_password = document.getElementById('re_password')

          if(password.value !== re_password.value) {
               error.innerText= 'Password does not match you duffer!'
		}
		else {
			error.innerText= ''
		}


     }

</script>

</body>
</html>