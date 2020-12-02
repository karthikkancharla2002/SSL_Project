<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="quespage.js"></script>
    <title>Questions Page</title>
  </head>
  

<?php	

require("connect.php");

$score=0;

if (@$_POST['q1a'] == $_POST['q1Correct']){
    $score=$score+1;
}
if (@$_POST['q2a'] == $_POST['q2Correct']){
    $score=$score+1;
}
if (@$_POST['q3a'] == $_POST['q3Correct']){
    $score=$score+1;
}
if (@$_POST['q4a'] == $_POST['q4Correct']){
    $score=$score+1;
}
if (@$_POST['q5a'] == $_POST['q5Correct']){
    $score=$score+1;
}
echo "Your score is $score / 5";

$un=$_SESSION['username'];
$user = mysqli_query($connect, "SELECT * FROM userinfo WHERE username='$un'");

while($user_row = mysqli_fetch_assoc($user)){
    $totalScore = $score + $user_row['score'];
    mysqli_query($connect, "UPDATE userinfo SET score='$totalScore' WHERE username='$un'");
}

?>
<br>
<a href="leaderboard.php">Click here to view Leaderboard.</a>


</body>
</html>