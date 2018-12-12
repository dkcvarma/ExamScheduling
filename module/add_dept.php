<?php
	include "../presets.php";
	
	$exam_dept=$_POST['exam_dept'];
	$location=$_POST['location'];
	
	$add1 = " INSERT INTO `department`(`exam_dept`, `location`) VALUES ('$exam_dept','$location')";
	
	if(mysqli_query($connection,$add1)){
		echo "<script>
					alert('Department Added');
					window.location.href='assign.php';
			  </script>";
		exit;
	}else{
		echo "<script>
					alert('Error');
					window.location.href='assign.php';
			  </script>";
		exit;
	}
?>