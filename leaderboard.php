<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="leaderboard.css">
    <title>Leaderboard</title>
  </head>

<body>
<center>
<h1>Leaderboard</h1>
</center>
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
    </tr>
_END;
while($ranks_row = mysqli_fetch_assoc($ranks)){
    $uname = $ranks_row['username'] ;
    $scoreval = $ranks_row['score'] ;
    // echo "$i)      $uname        $scoreval<br>";
    echo <<<_END
    
    <tr>
      <td>$i</td>
      <td>$uname</td>
      <td>$scoreval</td>
    </tr>

    

    _END;
    $i=$i+1;   
}
echo <<<_END
</table>
</center>
_END;

?>
</body>
</html>
