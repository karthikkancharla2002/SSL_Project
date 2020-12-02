
<?php include('connect.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body>
  <div class="header">
  	<h2>Admin Login</h2>
  </div>
	
  <form method="post" action="loginadminv.php">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="login_admin" >Login</button>
  	</div>
  	<p>
  		Not an Admin Yet? <a href="signupf.php">Sign Up</a>
  	</p>
  </form>
</body>
</html>