<?php
// Start the session
session_start();
?>

<?php include('connect.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>User Login</title>
  <link rel="stylesheet" type="text/css" href="loginuser.css">
</head>
<body>
  <center>
  <div class="header" >
  	<h2>User Login</h2>
  </div>
  </center>
  <center>
  <div class="container" style="width:450px ;text-align:left">
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
  </div>
</center>
</body>
</html>