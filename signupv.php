<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="quespage.js"></script>
    <style>
        body{background-color: #ccffff;}
    </style>
    <title>Questions Page</title>
  </head>
<?php

require("connect.php");
$errors = array(); 

if (isset($_POST['signup_flag'])) {
    
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];

    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($firstname)) { array_push($errors, "Firstname is required"); }
    if (empty($lastname)) { array_push($errors, "Lastname is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($phone)) { array_push($errors, "Phone Number is required"); }
    if (empty($country)) { array_push($errors, "Country is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
        echo "Passwords do not match.";
    }
}

$query = "SELECT * FROM userinfo WHERE username='$username'";
$result = mysqli_query($connect, $query);
if (mysqli_num_rows($result) == 0 && count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database
    
  	$query = "INSERT INTO userinfo (username, firstname, lastname, email, phone, country, password)  
  			  VALUES('$username', '$firstname', '$lastname', '$email', '$phone', '$country', '$password')";
    mysqli_query($connect, $query);
    echo "<div><br><br><br><br><br><br><br><br><br><br><center><h1><big>Sign-up successful</big></h1></center></div>";
}
else{
    echo "<div><br><br><br><br><br><br><br><br><br><br><center><h1><big>ERROR!!!!!</big></h1></center></div>";
}

?>
</body>
</html>