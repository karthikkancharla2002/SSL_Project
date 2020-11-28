<?php

@$username = $_POST['user'];
@$password = $_POST['pass'];

@$usern = 'eval';
@$passw = 'eva';

if($username && $password)
{
if($username == $usern && $passw == $password)
{
  echo "Authentication Successful";
  
  header("Location: http://localhost/album.php");
}
else {
  echo "Authentication failed, Please try again.";
}
}
?>
