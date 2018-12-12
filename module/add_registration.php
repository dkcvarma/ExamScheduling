<?php
	include "../presets.php";
	
	$exam_id=$_POST['exam_id'];
	$stud_id=$_POST['stud_id'];
	
	$add1 = " INSERT INTO `registration`(`exam_id`, `stud_id`) VALUES ('$exam_id','$stud_id')";
	
	if(mysqli_query($connection,$add1)){
		echo "<script>
					alert('Assining Student Sucessfull');
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