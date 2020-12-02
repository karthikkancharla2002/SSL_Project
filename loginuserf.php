<?php
// Start the session
session_start();
?>

<?php include('connect.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login(user)for Quiz</title>
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="loginuserv.php">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not a Member Yet? <a href="signupf.php">Sign Up</a>
  	</p>
  </form>
</body>
</html>