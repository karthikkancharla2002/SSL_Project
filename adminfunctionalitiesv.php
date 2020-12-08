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

$topicins=@$_POST["topic"];
$query="CREATE TABLE `$topicins` (
    `id` int(11) NOT NULL,
    `question` varchar(420) NOT NULL,
    `option1` varchar(120) NOT NULL,
    `option2` varchar(120) NOT NULL,
    `option3` varchar(120) NOT NULL,
    `option4` varchar(120) NOT NULL,
    `correct` varchar(120) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
  
$queryalt="ALTER TABLE `$topicins`
ADD PRIMARY KEY (`id`)";
$queryai="ALTER TABLE `$topicins`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT";
$querycommit="COMMIT";




mysqli_query($connect,$query);
mysqli_query($connect,$queryalt);
mysqli_query($connect,$queryai);
mysqli_query($connect,$querycommit);

$query2 = "SELECT * FROM topics WHERE topic='$topicins'";
$result = mysqli_query($connect, $query2);
if (mysqli_num_rows($result) == 0 && isset($topicins)) {
    mysqli_query($connect,"INSERT INTO topics (topic) VALUES ('$topicins')");
}

$query1=mysqli_query($connect,"SELECT * FROM topics");
	if(!$query1){
		echo "Failed to access the table, try going back and retry<br>";
	}
	else{
		$numrows=mysqli_num_rows($query1);
		echo "Now, the topics available are: ";
		$i=1;
		while($row=mysqli_fetch_assoc($query1)){
			//this loop runs $numrows times
			$id=$row["id"];
			$topic=$row["topic"];
			echo "<pre> $i) ID: $id <br>    Topic: $topic</pre>";
			$i++;
		}
	}



$topicinsw=@$_POST['topicname'];
$question=@$_POST['question'];
$option1=@$_POST['option1'];
$option2=@$_POST['option2'];
$option3=@$_POST['option3'];
$option4=@$_POST['option4'];
$correct=@$_POST['option_correct'];

// echo "$topicinsw $question $option1 \n";
// ('id','question', 'option1', 'option2', 'option3', 'option4', 'correct')
//$queryW= "INSERT INTO $topicinsw (question, option1, option2, option3, option4, correct) VALUES ($question, $option1, $option2, $option3, $option4, $correct)";
//$insert= mysqli_query($connect, $queryW);

//$query3 = "INSERT INTO `$topicinsw` (`id`,`question`,`option1`,`option2`,`option3`,`option4`,`correct`) VALUES ('jni2', 'jnnnonkl', 'hvuugrfbu','rxxrt','bhjhhjhj', 'vgyvguvg')";
$query3 = "INSERT INTO `$topicinsw` (`question`,`option1`,`option2`,`option3`,`option4`,`correct`) VALUES ('$question', '$option1', '$option2', '$option3', '$option4', '$correct')";
$insert= mysqli_query($connect, $query3);

//$query= "INSERT INTO cricket (question, option1, option2, option3, option4, correct) VALUES ('jni', 'jnnnonkl', 'hvuugrfbu','rxxrt','bhjhhjhj', 'vgyvguvg')";
// $query= "INSERT INTO cricket VALUES ('','$question', '$option1', '$option2', '$option3', '$option4', '$correct')";
// mysqli_query($connect, "INSERT INTO cricket VALUES ('','$question', '$option1', '$option2', '$option3', '$option4', '$correct')");

?>

</body>
</html>