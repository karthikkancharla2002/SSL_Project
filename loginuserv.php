<?php	
session_start();
require("connect.php");

if (isset($_POST['login_user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $errors=array();
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM userinfo WHERE username='$username' AND password='$password'";
        $results = mysqli_query($connect, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = 1;
          echo "You are logged in!";
          //header('location: index2.php');
        }else {
            array_push($errors, "Wrong username/password ");
            echo "Wrong username/password!";
        }
    }

    echo "
	<a href='quiztopics.php'> Take a quiz? </a>
";
  }
  
?>