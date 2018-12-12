<?php
	include "../presets.php";
	
	$id=$_POST['id'];
	
	$add2 = " DELETE from `student_details` WHERE id='$id'";
	$add1 = " DELETE from `registration` WHERE stud_id='$id'";
	if(mysqli_query($connection,$add2)){
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
	}
?>