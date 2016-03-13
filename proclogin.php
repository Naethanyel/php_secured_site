<?php
require('config.php');

$enteredusername = $_POST['theusername'];
$enteredpassword = $_POST['thepassword'];
$sqluser = "SELECT * FROM users WHERE username = '$enteredusername'";
$sqlpass = "SELECT * FROM users WHERE password = '$enteredpassword'";



if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
else{
	$resultuser = mysqli_query($conn, $sqluser);
	$resultpass = mysqli_query($conn, $sqlpass);
	$userrowcount = mysqli_num_rows($resultuser);
	$passrowcount = mysqli_num_rows($resultpass);

	if(($resultuser === FALSE || $userrowcount === 0)||($resultpass === FALSE || $passrowcount === 0)) { 
		header('Location: login.html');
	}	
	else {
		//echo $userrowcount;
		session_start();
		$_SESSION['username'] = $enteredusername;
		header('Location: kilo/index.php');
	}
}
mysqli_close($conn);
?>