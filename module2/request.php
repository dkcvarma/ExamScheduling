<?php
	include "../presets.php";
	
	$stud_id=$_POST['stud_id'];
	$dept=$_POST['dept'];
	$exam_id = array($_POST['exam_id1'],$_POST['exam_id2']);
	foreach($exam_id as $value) {
        if($value != NULL) {
            $query = "INSERT INTO request (exam_id,stud_id,dept) VALUES('$value','$stud_id','$dept')";
            if(mysqli_query($connection,$query)) {
               echo "<script>
					alert('Request Sucessfull');
					window.location.href='registration.php';
			  </script>";
	}else{
		echo "<script>
					alert('Error');
					window.location.href='registration.php';
			  </script>";
	}
        }
    }
?>