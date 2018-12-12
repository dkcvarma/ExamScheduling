<?php
	include "../presets.php";
	
	$exam_id=$_POST['exam_id'];
	$exam_name=$_POST['exam_name'];
	$exam_dept=$_POST['exam_dept'];
	$date=$_POST['date'];
	
	$add1 = " INSERT INTO `exam_details`(`exam_id`,`exam_name`,`exam_dept`,`date`) VALUES ('$exam_id','$exam_name','$exam_dept','$date')";
	
	if(mysqli_query($connection,$add1)){
		echo "<script>
					alert('Exam Added');
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