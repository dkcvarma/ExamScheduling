<?php
	include "../presets.php";
	
	$id=$_POST['id'];
	$date=$_POST['date'];
	$location=$_POST['location'];
	$dept=$_POST['dept'];
	$exam_name=$_POST['exam_name'];
	
	$add2 = " UPDATE `department` SET `location`='$location' WHERE exam_dept='$dept'";
	$add1 = " UPDATE `exam_details` SET `exam_name`='$exam_name',`date`='$date' WHERE exam_id='$id'";
	
	if(mysqli_query($connection,$add2)){
	if(mysqli_query($connection,$add1)){
		echo "<script>
					alert('Sucessfully Updated');
					window.location.href='updatedb.php';
			  </script>";
		exit;
	}else{
		echo "<script>
					alert('Error');
					window.location.href='updatedb.php';
			  </script>";
		exit;
	}
	}
?>