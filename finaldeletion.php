
<?php
//finaldeletion.php
session_start();
	//using date to insert process with respect to time
	date_default_timezone_set('UTC');

	$con = mysqli_connect('localhost','root','') or die('Could not connect the database : Username or password incorrect');

	mysqli_select_db($con, 'processDatabase') or die('No Database Found, Or Connection Issue');


	$userid = $_SESSION['username'];
	$processName = $_POST['processname'];
	$processDate = date('d-m-y');

	echo 'Database Connected successfully';
	$s = "DELETE from processtable where username = '$userid' && processname = '$processName' && processdate = '$processDate'";
	$result = mysqli_query($con,$s);
	$num = mysqli_num_rows($result);

	if($num == 1){
		echo'<script>alert("Hmmmm! Looks Like You Are Trying To Enter Duplicate Entries...Sorry! Not Valid.")</script>';
		header('Refresh:0.5; URL=dashboard.php');	
	}

?>