<?php
	include "../presets.php";
	
	$stud_id=$_POST['stud_id'];
	$exam_id=$_POST['exam_id'];
	$stud_id1=$_POST['stud_id1'];
	$exam_id1=$_POST['exam_id1'];
	
	$add1 =" INSERT INTO `registration`(`exam_id`, `stud_id`) VALUES ('$exam_id','$stud_id')";
	$add2 = " DELETE from `request` WHERE stud_id='$stud_id1' and exam_id='$exam_id1'";
	
	if(mysqli_query($connection,$add1)){
	if(mysqli_query($connection,$add2)){
		echo "<script>
					alert('Sucessfully Accepted');
					window.location.href='request.php';
			  </script>";
		exit;
	}else{
		echo "<script>
					alert('Error');
					window.location.href='request.php';
			  </script>";
		exit;
	}
	}else{
		echo "<script>
					alert('Already Registered');
					window.location.href='request.php';
			  </script>";
		exit;
	}
?>