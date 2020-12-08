<?php
	
// error_reporting(0);

$connect = mysqli_connect("localhost", "root", "") or die("Failed to connect to the server");



mysqli_select_db($connect, "usersquiz") or die('Failed to connect to database');


?>