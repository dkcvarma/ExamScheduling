<?php
	include "../presets.php";
	
	$stud_id=$_POST['stud_id'];
	$exam_id=$_POST['exam_id'];
	
	$add2 = " DELETE from `request` WHERE stud_id='$stud_id' and exam_id='$exam_id'";
	if(mysqli_query($connection,$add2)){
		echo "<script>
					alert('Sucessfully Deleted');
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
?>