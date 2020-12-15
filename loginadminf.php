
<?php include('connect.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet" type="text/css" href="loginuser.css">
</head>
<body>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="leaderboard.php">Leaderboard</a></li>
        <li><a href="loginuserf.php" >User Login</a></li>
        <li><a href="signupf.php">User Sign-Up</a></li>
        
        <li style="float:right"><a href="loginadminf.php" class="active">Admin Login</a></li>
    </ul>
</nav>
<center>
  <div id="heading">
  	<h2>Admin Login</h2>
  </div>
</center>

<center>
	<div id="main" class="container" style="width:450px ;text-align:left">
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
  	<!-- <p>
  		Not an Admin Yet? <a href="signupf.php">Sign Up</a>
  	</p> -->
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