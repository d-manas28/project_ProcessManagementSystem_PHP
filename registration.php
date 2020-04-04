<?php

	session_start();
	
	
	

	$con = mysqli_connect('localhost','root','')  or die('Could not connect the database : Username or password incorrect');

	mysqli_select_db($con, 'userRegistration') or die('No Database Found, Or Connection Issue');
	echo 'Database Connected successfully';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['password'];

	$s = "select * from usertable where email = '$email'";

	$result = mysqli_query($con, $s);
	$num = mysqli_num_rows($result);

	if($num == 1){
		//email already exists
		echo'<script>alert("Email is already registered, Please Login")</script>';
		header('location:account2.php');
	}
	else{
		echo'<script>alert("Registration successful, Please Login Once!")</script>';
		$reg = "insert into usertable(name,email,password) values('$name','$pass')";
		mysqli_query($con,$reg);
		
	}
	//redirecting to login page, on successful registration
	header('location:account.php');
?>