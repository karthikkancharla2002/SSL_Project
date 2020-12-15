<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="leaderboard.css">
    <title>Leader board</title>
  </head>

<body>
<div class="header" >  
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="leaderboard.php" class="active">Leader board</a></li>
        <li><a href="loginuserf.php" >User Login</a></li>
        <li><a href="signupf.php">User Sign-Up</a></li>
        
        <li style="float:right"><a href="loginadminf.php">Admin Login</a></li>
    </ul>
    </nav>
</div>
<center>

</div>
  <div id=heading>
  <h2>Leader board</h2>
	</div>

</center>
<div id='main'>
<?php

require("connect.php");

$ranks = mysqli_query($connect, "SELECT * FROM userinfo ORDER BY score DESC");
$i=1;
// echo "Rank     Username    Score<br>";
// echo "<hr>";


echo <<<_END
<center>
<table id="users" style="width:650px">
<tr>
      <th>Rank</th>
      <th>Username</th>
      <th>Score</th>
      <th>Country</th>
    </tr>
_END;
while($ranks_row = mysqli_fetch_assoc($ranks)){
    $uname = $ranks_row['username'] ;
    $scoreval = $ranks_row['score'] ;
    $country= $ranks_row['country'];
    // echo "$i)      $uname        $scoreval<br>";
    echo <<<_END
    
    <tr>
      <td>$i</td>
      <td>$uname</td>
      <td>$scoreval</td>
      <td>$country</td>
    </tr>

    

    _END;
    $i=$i+1;   
}
echo <<<_END
</table>
</center>
_END;

?>
</div>


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
