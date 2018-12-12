<?php
	error_reporting(0);

	include "presets.php";

	$username = $_POST['username'];
	$email = $_POST['email'];

	$sql = "SELECT id,username,password FROM faculty_details WHERE username='$username' AND email='$email'";
		
	if($res = mysqli_query($connection,$sql)) {
		while($chk = mysqli_fetch_array($res)) {
			$id = $chk['id'];
			$username = $chk['username'];
			$password = $chk['password'];
		}
		
		require 'PHPMailer/PHPMailerAutoload.php';
		$mail = new PHPMailer();

		$mail ->IsSmtp();
		//$mail ->SMTPDebug = 4;
		$mail ->SMTPAuth = true;
		$mail ->SMTPSecure = 'ssl';
		$mail ->Host = 'smtp.gmail.com';
		$mail ->Port = 465;  // use if 465 doesn't work :587
		$mail ->IsHTML(true);
		$mail ->Username = 'dkchaitanyavarma06@gmail.com';
		$mail ->Password = '16th1965@@';
		$mail ->setFrom('dkchaitanyavarma06@gmail.com','DKNS Software Inc.');
		$mail ->Subject = 'Password Recovery';
		$mail ->Body = '<h3>DKNS Software Inc.</h3><h4>Password Recovery</h4>Id: <b>'.$id.'</b><br>Username: <b>'.$username.'</b><br>Password: <b>'.$password.'</b><br><br>Please don\'t share your password with anyone<br><br><br><p style="color:red;">This is a system generated mail...<br>so please don\'t reply to this mail</p>';
		$mail ->addReplyTo('no-reply@gmail.com','No Reply');
		$mail ->AddAddress($email);
		
		if($mail ->Send()) {
			echo "<script>
				alert('Successfully sent...Please Check your mail');
				window.location.href='main.html';
				</script>";
			
		}
		else {
			echo "<script>
				alert('Please check your details and try again/later');
				window.history.back();
				</script>";
		}
	}
	else {
		echo "<script>
				alert('Username or Email is not valid');
				window.history.back();
				</script>";
	}
?>