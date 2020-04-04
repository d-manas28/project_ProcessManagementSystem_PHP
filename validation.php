<?php

	session_start();
	
	//redirecting to login page, on successful registration
	
	$con = mysqli_connect('localhost','root','')  or die('Could not connect the database : Username or password incorrect');

	mysqli_select_db($con, 'userRegistration') or die('No Database Found, Or Connection Issue');
	echo 'Database Connected successfully';


	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['password'];

	$s = "select * from usertable where email = '$email' && password = '$pass'";

	$result = mysqli_query($con, $s);

	$num = mysqli_num_rows($result);

	if($num == 1){
		//email exists, move forward
		echo'<script>alert("Login Successful, Redirecting To Process Page!")</script>';
		$_SESSION['username'] = $name;
		header('location:processpage.php');
	}
	else{
		//login failed
		echo'<script>alert("Login Fail, Please Try Again!")</script>';
		header('location:account.php');
	}
?>