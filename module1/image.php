<?php
	session_start();
	include "../presets.php";
	$user = $_SESSION['user'];
	
	$check=getimagesize($_FILES["photo"]["tmp_name"]);
	
	if($check == false){
		echo "<script>
					alert('Error!!!');
					window.location.href='user.php';
			  </script>";
		exit;
	}
	else{
		$image = addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));
		$sql2=$connection->prepare("UPDATE faculty_details SET photo='{$image}' WHERE username='".$user."'");
		$sql2->execute();
		$sql2->close();
		echo "<script>window.history.back()</script>";
	}
?>