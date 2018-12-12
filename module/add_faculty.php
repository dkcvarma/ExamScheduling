<?php
	include "../presets.php";
	
	$id=$_POST['id'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$dept=$_POST['dept'];
	$f_name=$_POST['f_name'];
	$l_name=$_POST['l_name'];
	$address=$_POST['address'];
	$state=$_POST['state'];
	$pin=$_POST['pin'];
	$check=getimagesize($_FILES["photo"]["tmp_name"]);
	if($check == false){
		echo "<script>
					alert('Error!!!');
					window.location.href='faculty.php';
			  </script>";
		exit;
	}
	else{
	$image = addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));
	
	$add1 = " INSERT INTO `faculty_details`(`id`, `username`, `password`, `email`, `dept`, `f_name`, `l_name`, `address`, `state`, `pin`,`photo`) VALUES ('$id','$username','$password','$email','$dept','$f_name','$l_name','$address','$state','$pin','{$image}')";
	if(mysqli_query($connection,$add1)){
		echo "<script>
					alert('Faculty Added');
					window.location.href='faculty.php';
			  </script>";
		exit;
	}else{
		echo "<script>
					alert('Error');
					window.location.href='faculty.php';
			  </script>";
		exit;
	}
	}
?>