<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="quespage.js"></script>
    <style>
        body{background-color: #ccffff;}
    </style>
    <title>Login Successful!</title>
  </head>
  <body>
<?php	
session_start();
require("connect.php");

if (isset($_POST['login_user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $errors=array();
    if (empty($username)) {
        array_push($errors, "Username is required");
        echo "<b><div><br><br><br><br><br><br><br><br><br><br><center><h1><big>Enter Username!!\n</big></h1></center></div></b>";
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
        echo "<b><div><br><br><br><br><br><br><br><br><br><br><center><h1><big>Enter Password!!</big></h1></center></div></b>";
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM userinfo WHERE username='$username' AND password='$password'";
        $results = mysqli_query($connect, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = 1;
          echo "<div><br><br><br><br><br><br><br><br><br><br><center><h1><big>You are logged in!</big></h1></center></div>";
          echo "<center><large><a href='quiztopics.php'> Take a quiz? </a></large><center>";
          
        }else {
            array_push($errors, "Wrong username/password ");
            echo "Wrong username/password!";
        }
    }

    
  }
  
?>
</body>
</html>