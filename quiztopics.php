
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="quespage.js"></script>
    <title>Questions Page</title>
  </head>
  <center>
  <div id=heading>
  <h2> Select a Quiz topic from below</h2>
	</div>
  
</center>
  <link rel="stylesheet" type="text/css" href="quiztopics.css">
<body>
<div id='main'>
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
</section>

</body>
</html>