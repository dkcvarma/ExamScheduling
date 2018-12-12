<?php
	include "../presets.php";
	
	$exam_id=$_POST['exam_id'];
	$add1 = " DELETE from `exam_details` WHERE exam_id='$exam_id'";
	$add2 = " DELETE from `registation1` WHERE exam_id='$exam_id'";
	$add3 = " DELETE from `registration` WHERE exam_id='$exam_id'";
	if(mysqli_query($connection,$add1)){
	if(mysqli_query($connection,$add2)){
	if(mysqli_query($connection,$add3)){
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
	}
	}
?>