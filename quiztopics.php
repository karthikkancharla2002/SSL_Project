
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="quespage.js"></script>
    <title>Questions Page</title>
  </head>
  

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
    <button name="topic" value="$topic" type="submit"> $topic </button>
    _END;
}
echo "</form>";

?>

</body>
</html>