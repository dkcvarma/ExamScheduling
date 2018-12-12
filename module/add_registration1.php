<?php
	include "../presets.php";
	
	$exam_id=$_POST['exam_id'];
	$fact_id=$_POST['id'];
	
	$add1 = " INSERT INTO `registration1`(`exam_id`, `fact_id`) VALUES ('$exam_id','$fact_id')";
	
	if(mysqli_query($connection,$add1)){
		echo "<script>
					alert('Assining Faculty Sucessfull');
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