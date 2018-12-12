<?php
	include "../presets.php";
	
	$exam_id=$_POST['exam_id'];
	$stud_id=$_POST['stud_id'];
	$add1 = " DELETE from `registration` WHERE stud_id='$stud_id' and exam_id='$exam_id'";
	if(mysqli_query($connection,$add1)){
		echo "<script>
					alert('Sucessfully Deleted');
					window.location.href='delete.php';
			  </script>";
		exit;
	}else{
		echo "<script>
					alert('Error');
					window.location.href='delete.php';
			  </script>";
		exit;
	}
?>