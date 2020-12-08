<?php include('connect.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign Up for Quiz</title>
  <link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
	<center>
  <div class="header">
  	<h2>Sign-Up</h2>
  </div>
  <div class="container" style="width:450px ;text-align:left">
  <form method="post" action="signupv.php" >
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username">
  	</div>
    
    <div class="input-group">
  	  <label>First Name</label>
  	  <input type="text" name="firstname">
  	</div>
    
    <div class="input-group">
      <label>Last Name</label>
      <input type="text" name="lastname">
  	</div>

  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email">
  	</div>

    <div class="input-group">
  	  <label>Phone</label>
  	  <input type="number" name="phone">
  	</div>
    
    <div class="input-group">
  	  <label>Country</label>
  	  <input type="text" name="country">
  	</div>

  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>

  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>

  	<div class="input-group">
  	  <button type="submit" class="btn" name="signup_flag">Register</button>
  	</div>
  	<p>
  		Already a user? <a href="loginuserf.php">Sign in as user</a><br>
		Already an admin? <a href="loginadminf.php">Sign in as admin</a>     
  	</p>
  </form>
</div>
</center>
</body>
</html>