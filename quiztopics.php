
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="quespage.js"></script>
    <title>Questions Page</title>
  </head>
  <center>
  <h1 style="color:black;"> Select a Quiz topic from below</h1>
</center>
  <link rel="stylesheet" type="text/css" href="index.css">
<body>

<?php	

require("connect.php");

$query = mysqli_query($connect, "SELECT * FROM topics");
$topics_arr=array();
while($topics_row = mysqli_fetch_assoc($query)){
  array_push($topics_arr, $topics_row['topic']);
}

echo "<form action='quespage.php' method='POST'>";
foreach ($topics_arr as $topic) {
    echo <<<_END
    <center>
    <button name="topic" value="$topic" type="submit"> $topic </button><br>
    </center>
    _END;
}
echo "</form>";

?>

</body>
</html>