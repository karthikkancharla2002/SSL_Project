
<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="quespage.js"></script>
    <link rel="stylesheet" type="text/css" href="quespage.css">
    <style>
      body{background-color: rgb(184, 247, 241);
      
      margin:20px;}
    </style>
    <title>Questions Page</title>
  </head>
  

<body>

<?php	

require("connect.php");
echo "<b>Username:</b>";
print_r($_SESSION['username']);
echo "";
$ids = array();
$randId=rand(0,11);
array_push($ids,$randId);
$topic=@$_POST['topic'];
$question = mysqli_query($connect, "SELECT * FROM $topic WHERE id = '$randId'");
while($question_row = @mysqli_fetch_assoc($question)){
  $q1 =$question_row['question'];
  $q1o1 =$question_row['option1'];
  $q1o2 =$question_row['option2'];  
  $q1o3 =$question_row['option3'];
  $q1o4 =$question_row['option4'];
  $q1Correct = $question_row['correct'];
}

while(in_array($randId, $ids)){
  $randId=rand(0, 11);
}
array_push($ids,$randId);
$question = mysqli_query($connect, "SELECT * FROM $topic WHERE id = '$randId'");
while($question_row = mysqli_fetch_assoc($question)){
  $q2 =$question_row['question'];
  $q2o1 =$question_row['option1'];
  $q2o2 =$question_row['option2'];  
  $q2o3 =$question_row['option3'];
  $q2o4 =$question_row['option4'];
  $q2Correct = $question_row['correct'];
}

while(in_array($randId, $ids)){
  $randId=rand(0, 11);
}
array_push($ids,$randId);
$question = mysqli_query($connect, "SELECT * FROM $topic WHERE id = '$randId'");
while($question_row = mysqli_fetch_assoc($question)){
  $q3 =$question_row['question'];
  $q3o1 =$question_row['option1'];
  $q3o2 =$question_row['option2'];  
  $q3o3 =$question_row['option3'];
  $q3o4 =$question_row['option4'];
  $q3Correct = $question_row['correct'];
}

while(in_array($randId, $ids)){
  $randId=rand(0, 11);
}
array_push($ids,$randId);
$question = mysqli_query($connect, "SELECT * FROM $topic WHERE id = '$randId'");
while($question_row = mysqli_fetch_assoc($question)){
  $q4 =$question_row['question'];
  $q4o1 =$question_row['option1'];
  $q4o2 =$question_row['option2'];  
  $q4o3 =$question_row['option3'];
  $q4o4 =$question_row['option4'];
  $q4Correct = $question_row['correct'];
}

while(in_array($randId, $ids)){
  $randId=rand(0, 11);
}
array_push($ids,$randId);
$question = mysqli_query($connect, "SELECT * FROM $topic WHERE id = '$randId'");
while($question_row = mysqli_fetch_assoc($question)){
  $q5 =$question_row['question'];
  $q5o1 =$question_row['option1'];
  $q5o2 =$question_row['option2'];  
  $q5o3 =$question_row['option3'];
  $q5o4 =$question_row['option4'];
  $q5Correct = $question_row['correct'];
}


echo <<<_END
<ol>
<li>

<div>
<form action='QuesVerification.php' method='POST' >

<p class="questionc" id="Q1">$q1</p>
<div>
  <input type="radio" name="q1a" id="question-1-answers-A" value="$q1o1" />
  <label for="question-1-answers-A" id="Q1A">$q1o1</label>
</div>
<div>
  <input type="radio" name="q1a" id="question-1-answers-B" value="$q1o2" />
  <label for="question-1-answers-B" id="Q1B">$q1o2</label>
</div>
<div>
  <input type="radio" name="q1a" id="question-1-answers-C" value="$q1o3" />
  <label for="question-1-answers-C" id ="Q1C">$q1o3</label>
</div>
<div>
  <input type="radio" name="q1a" id="question-1-answers-D" value="$q1o4" />
  <label for="question-1-answers-D" id="Q1D">$q1o4</label>
</div>
<input type="hidden" name="q1Correct" value="$q1Correct">

</li>


<li>


<p class="questionc" id="Q2">$q2</p>
<div>
  <input type="radio" name="q2a" id="question-2-answers-A" value="$q2o1" />
  <label for="question-2-answers-A" id="Q2A">$q2o1</label>
</div>
<div>
  <input type="radio" name="q2a" id="question-2-answers-B" value="$q2o2" />
  <label for="question-2-answers-B" id="Q2B">$q2o2</label>
</div>
<div>
  <input type="radio" name="q2a" id="question-2-answers-C" value="$q2o3" />
  <label for="question-2-answers-C" id ="Q2C">$q2o3</label>
</div>
<div>
  <input type="radio" name="q2a" id="question-2-answers-D" value="$q2o4" />
  <label for="question-2-answers-D" id="Q2D">$q2o4</label>
</div>
<input type="hidden" name="q2Correct" value="$q2Correct">

</li>
<li>

<p class="questionc" id="Q3">$q3</p>
<div>
  <input type="radio" name="q3a" id="question-3-answers-A" value="$q3o1" />
  <label for="question-3-answers-A" id="Q3A">$q3o1</label>
</div>
<div>
  <input type="radio" name="q3a" id="question-3-answers-B" value="$q3o2" />
  <label for="question-3-answers-B" id="Q3B">$q3o2</label>
</div>
<div>
  <input type="radio" name="q3a" id="question-3-answers-C" value="$q3o3" />
  <label for="question-3-answers-C" id ="Q3C">$q3o3</label>
</div>
<div>
  <input type="radio" name="q3a" id="question-3-answers-D" value="$q3o4" />
  <label for="question-3-answers-D" id="Q3D">$q3o4</label>
</div>
<input type="hidden" name="q3Correct" value="$q3Correct">

</li>
<li>

<p class="questionc" id="Q4">$q4</p>
<div>
  <input type="radio" name="q4a" id="question-4-answers-A" value="$q4o1" />
  <label for="question-4-answers-A" id="Q4A">$q4o1</label>
</div>
<div>
  <input type="radio" name="q4a" id="question-4-answers-B" value="$q4o2" />
  <label for="question-4-answers-B" id="Q4B">$q4o2</label>
</div>
<div>
  <input type="radio" name="q4a" id="question-4-answers-C" value="$q4o3" />
  <label for="question-4-answers-C" id ="Q4C">$q4o3</label>
</div>
<div>
  <input type="radio" name="q4a" id="question-4-answers-D" value="$q4o4" />
  <label for="question-4-answers-D" id="Q4D">$q4o4</label>
</div>
<input type="hidden" name="q4Correct" value="$q4Correct">

</li>
<li>

<p class="questionc" id="Q5">$q5</p>
<div>
  <input type="radio" name="q5a" id="question-5-answers-A" value="$q5o1" />
  <label for="question-5-answers-A" id="Q5A">$q5o1</label>
</div>
<div>
  <input type="radio" name="q5a" id="question-5-answers-B" value="$q5o2" />
  <label for="question-5-answers-B" id="Q5B">$q5o2</label>
</div>
<div>
  <input type="radio" name="q5a" id="question-5-answers-C" value="$q5o3" />
  <label for="question-5-answers-C" id ="Q5C">$q5o3</label>
</div>
<div>
  <input type="radio" name="q5a" id="question-5-answers-D" value="$q5o4" />
  <label for="question-5-answers-D" id="Q5D">$q5o4</label>
</div>
<input type="hidden" name="q5Correct" value="$q5Correct">
<br>
<button style="width:120px" type="submit" class="btn" name="Submit">Submit</button>


</form>
</div>
</li>
</ol>
_END;

// <input type="submit" name="Submit" value="Submit">

?>

</body>
</html>