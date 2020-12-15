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
  <nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="leaderboard.php">Leaderboard</a></li>
        <li><a href="loginuserf.php">User Login</a></li>
        <li><a href="signupf.php" class="active">User Sign-Up</a></li>
        
        <li style="float:right"><a href="loginadminf.php">Admin Login</a></li>
    </ul>
    </nav>
  </div>

  <div id=heading>
  <h2>User Sign Up</h2>
	</div>
  
  <div id="main" class="container" style="width:450px ;text-align:left">
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
  	  <button type="submit" class="btn" name="signup_flag">Sign Up</button>
  	</div>
  	<p>
  		Already a user? <a href="loginuserf.php">Sign in as user</a><br>
		Already an admin? <a href="loginadminf.php">Sign in as admin</a>     
  	</p>
  </form>
</div>
</center>
<hr>
<section id="footer">
    <footer>
      <h3> This website is a project done for CS213-Software Systems Lab, and it is created by:  </h3>
      <center>
      <table> 
      <tr>
        <th>Nampally Pranav</th>
        <th>Karthik Kancharla</th>
        <th>T Satwik</th>
      </tr>
      <tr>
        <th>190010026</th>
        <th>190020020</th>
        <th>190030043</th>
      </tr>
      </table>
      </center>
      <hr>
      <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved</p>
    </footer>
</body>
</html>