<?php

	session_start();
	//using date to insert process with respect to time


	$con = mysqli_connect('localhost','root','') or die('Could not connect the database : Username or password incorrect');

	mysqli_select_db($con, 'processDatabase') or die('No Database Found, Or Connection Issue');

	echo 'Database Connected successfully';

	$processDate = date('d-m-y');
	$userid = $_SESSION['username'];
	$processName = $_POST['processname'];
	$processPriority = $_POST['priority']; 
	$processTime = $_POST['quantam'];

	$s = "SELECT * from processtable where username = '$userid' && processname = '$processName' && processdate = '$processDate'";
	$result = mysqli_query($con,$s);
	$num = mysqli_num_rows($result);

	//checking if process already Exists
	if($num == 1){
		echo'<script>alert("Hmmmm! Looks Like You Are Trying To Enter Duplicate Entries...Sorry! Not Valid.")</script>';
		header('Refresh:0.5 ; URL=processpage.php');
	}
	else{
		
		$reg = "insert into processtable(username, processname,priority,processdate,quantam) values('$userid', $processName','$processPriority','$processDate','$processTime')";
		mysqli_query($con,$reg);
		echo'<script>alert("Process Added Successfully")</script>';
		header('Refresh:0.5 ; URL=processpage.php');
	}
?>