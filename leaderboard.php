<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <script type="text/javascript" src="leaderboard.js"></script> -->
    <title>Leaderboard</title>
  </head>

<body>
<?php

require("connect.php");
echo "<marquee>Leaderboard</marquee>";
$ranks = mysqli_query($connect, "SELECT * FROM userinfo ORDER BY score DESC");
$i=1;
echo "Rank     Username    Score<br>";
echo "<hr>";
while($ranks_row = mysqli_fetch_assoc($ranks)){
    $uname = $ranks_row['username'] ;
    $scoreval = $ranks_row['score'] ;
    echo "$i)      $uname        $scoreval<br>";
    $i=$i+1;   
}

?>
</body>
</html>
