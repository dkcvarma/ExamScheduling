<?php
	session_start();

	include "presets.php";
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = "SELECT * FROM admin_details WHERE username='$username' AND password='$password' ";
	$query1 = "SELECT * FROM faculty_details WHERE username='$username' AND password='$password'";
	$query2 = "SELECT * FROM student_details WHERE username='$username' AND password='$password'";
	$result = mysqli_query($connection,$query);
	$result1 = mysqli_query($connection,$query1);
	$result2 = mysqli_query($connection,$query2);
	$check = mysqli_fetch_array($result);
	$check1 = mysqli_fetch_array($result1);
	$check2 = mysqli_fetch_array($result2);
	
	if(isset($check)) {
		$_SESSION['auth'] = 'true';
		$_SESSION['user'] = $username;
		header("Location:../EMS/module/dashboard.php");
		exit;
	}if(isset($check1)) {
		$_SESSION['auth'] = 'true';
		$_SESSION['user'] = $username;
		
		header("Location:../EMS/module1/dashboard.php");
		exit;
	}if(isset($check2)) {
		$_SESSION['auth'] = 'true';
		$_SESSION['user'] = $username;
		header("Location:../EMS/module2/dashboard.php");
		exit;
	}else {
		//header("Location:main1.html");
		echo "<script>
			alert('Username or Password is wrong');
			window.location.href='main.html';
			</script>";
		exit;
	}
	mysqli_close($connection);
?>