<?php	

require("connect.php");

if (isset($_POST['login_admin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $errors=array();
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
        echo "Enter Password!!!";
    }
  
    if (count($errors) == 0) {
        // $password = md5($password);
        $query = "SELECT * FROM admininfo WHERE username='$username' AND password='$password'";
        $results = mysqli_query($connect, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: adminfunctionalities.php');
        }else {
            array_push($errors, "Wrong username/password ");
            echo "You have entered a wrong username/password!";
        }
    }
  }
  
?>