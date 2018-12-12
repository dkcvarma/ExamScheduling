<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>EMS</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style>
		.modal-header, .close, .modal-head {
			background-color: #7cc67c;
			color: #f9f9f9 !important;
			text-align: center;
			padding-top: 20px;
			font-size: 30px;
			font-weight: bold;
		}
		.modal-footer {
			background-color: #f9f9f9;
		}
	</style>
</head>
<body>

<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    DKNS Software Inc.
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="fa fa-sticky-note"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li> 
                    <a href="user.php">
                        <i class="fa fa-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
				<li>
                    <a href="list.php">
                        <i class="fa fa-list"></i>
                        <p>Exam List</p>
                    </a>
                </li>
				<li><a id="man" class="tree-toggle" style="cursor:pointer;"><i class="fa fa-tasks"></i><p>Manage</p></a>
				<ul id="manu1" class="nav nav-list tree bullets" style="margin-top:-8px;">
				<li style="display:none; margin-left:10%;"><a class="tree-toggle" href="faculty.php" style="cursor:pointer;"><i class="fa fa-user-plus"></i><p>ADD</p></a></li>
				<li style="display:none; margin-left:10%;"><a class="tree-toggle" href="assign.php" style="cursor:pointer;"><i class="fa fa-hand-o-right"></i><p>ASSIGN</p></a></li>
				<li style="display:none; margin-left:10%;"><a class="tree-toggle" href="updatedb.php" style="cursor:pointer;"><i class="fa fa-pencil"></i><p>UPDATE</p></a></li>
				<li style="display:none; margin-left:10%;" class="active"><a class="tree-toggle" href="delete.php" style="cursor:pointer;"><i class="fa fa-minus"></i><p>DELETE</p></a></li>
				<li style="display:none; margin-left:10%;"><a class="tree-toggle" href="request.php" style="cursor:pointer;"><i class="fa fa-bell"></i><p>NOTIFICATIONS</p></a></li>
				</ul>								                   
				</li> 
				 	
               
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" id="head" href="#">DELETE</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-cog" style="font-size: 23px;"></i><b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a id="myBtn" href="#myModal">Change Password</a></li>
                                <li><a href="../logout.php">Logout</a></li>
                              </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
		
		 <div class="content">
		<div class="container-fluid">
		<font size="4.5">
  <ul id="myTab" class="nav nav-tabs">
    <li><a data-toggle="tab" href="#home" style="color:#000;">Faculty</a></li>
    <li><a data-toggle="tab" href="#menu1" style="color:#000;">Student</a></li>
    <li><a data-toggle="tab" href="#menu2" style="color:#000;">Allocation</a></li>
    <li><a data-toggle="tab" href="#menu3" style="color:#000;">Exam</a></li>
  </ul>
	</font>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
		<div style="margin-top:1%;">
		<form method="post">
					<!--<label>Enter the details to search</label> -->
					<input class="col-md-3" style="margin-left:20px;padding:3px;" type="text" name="fact_id" placeholder="Enter the Faculty ID/Name to delete" required>
					<input type="submit" class="btn btn-default" style="margin-left:5px;padding:3px;border-radius:0px;background-color:grey;color:#fff;" name="show" value="Show">
				</form>
				<div style="margin-left:20px;">
					<h4><?php
						error_reporting(0);
						$list = $_POST['fact_id'];
						echo $list;
					?>
					</h4>
                    <div class="col-md-12">
                        <div class="card card-plain"> 
                            <div class="content table-responsive table-full-width">
							<?php
								include "../presets.php";
								error_reporting(0);
								$fact_id = $_POST['fact_id'];
								//echo "&nbsp &nbsp &nbsp $fact_id";
								$sql1 = "SELECT id,f_name,l_name,username,password FROM faculty_details where id='$fact_id'";
								$result = mysqli_query($connection, $sql1);
								if (mysqli_num_rows($result) > 0)
								{
									 //table table-striped 
								echo "
                                <table class='table table-hover'> 
                                    <thead>
                                    	<th>First Name</th>
										<th>Last Name</th>
                                    	<th>Username</th>
										<th>Delete</th>
                                    </thead>";
                                   	while($row = $result->fetch_assoc()) {
									echo"
                                    <tbody>
										<tr><form method='post' action='deletedbf.php'>
										<td>".$row["f_name"]."</td>
										<td>".$row["l_name"]."</td>
										<td>".$row["username"]."</td>
										<td>
                                            <button class='btn btn-danger btn-fill btn-sm'><i class='fa fa-times'></button></td>
											<input type='text' name='id' value='".$fact_id."'  style='visibility:hidden;'>
											</form>
										</tr>
                                    </tbody> ";
										}
									echo "</table>";
									}
										?>	
									<?php
								include "../presets.php";
								error_reporting(0);
								$fact_id = $_POST['fact_id'];
								//echo "&nbsp &nbsp &nbsp $fact_id";
								$sql1 = "SELECT id,f_name,l_name,username,password FROM faculty_details where f_name='$fact_id'";
								$result = mysqli_query($connection, $sql1);
								if (mysqli_num_rows($result) > 0)
								{
									 //table table-striped 
								echo "
                                <table class='table table-hover'> 
                                    <thead>
                                    	<th>ID</th>
                                    	<th>Username</th>
										<th>Delete</th>
                                    </thead>";
                                   	while($row = $result->fetch_assoc()) {
									echo"
                                    <tbody>
										<tr><form method='post' action='deletedbf.php'>
										<td>".$row["id"]."</td>
										<td>".$row["username"]."</td>
										<td>
                                            <button class='btn btn-danger btn-fill btn-sm'><i class='fa fa-times'></button></td>
											<input type='text' name='id' value='".$row["id"]."'  style='visibility:hidden;'>
											</form>
										</tr>
                                    </tbody> ";
										}
									echo "</table>";
									}
										?>	
                            </div>
                        </div>
                    </div>
					</div>
                            </div>
    </div>
	
    <div id="menu1" class="tab-pane fade">
			<div style="margin-top:1%;">
				<form method="post">
					<!--<label>Enter the details to search</label> -->
					<input class="col-md-3" style="margin-left:20px;padding:3px;" type="text" name="fact_id" placeholder="Enter the Student ID/Name to delete" required>
					<input type="submit" class="btn btn-default" style="margin-left:5px;padding:3px;border-radius:0px;background-color:grey;color:#fff;" name="show" value="Show">
				</form>
				<div style="margin-left:20px;">
					<h4><?php
						error_reporting(0);
						$list = $_POST['fact_id'];
						echo $list;
					?>
					</h4>
                    <div class="col-md-12">
                        <div class="card card-plain"> 
                            <div class="content table-responsive table-full-width">
							<?php
								include "../presets.php";
								error_reporting(0);
								$fact_id = $_POST['fact_id'];
								//echo "&nbsp &nbsp &nbsp $fact_id";
								$sql1 = "SELECT id,f_name,l_name,username,password FROM student_details where id='$fact_id'";
								$result = mysqli_query($connection, $sql1);
								if (mysqli_num_rows($result) > 0)
								{
									 //table table-striped 
								echo "
                                <table class='table table-hover'> 
                                    <thead>
                                    	<th>First Name</th>
										<th>Last Name</th>
                                    	<th>Username</th>
										<th>Delete</th>
                                    </thead>";
                                   	while($row = $result->fetch_assoc()) {
									echo"
                                    <tbody>
										<tr><form method='post' action='deletedbs.php'>
										<td>".$row["f_name"]."</td>
										<td>".$row["l_name"]."</td>
										<td>".$row["username"]."</td>
										<td>
                                            <button class='btn btn-danger btn-fill btn-sm'><i class='fa fa-times'></button></td>
											<input type='text' name='id' value='".$fact_id."'  style='visibility:hidden;'>
											</form>
										</tr>
                                    </tbody> ";
										}
									echo "</table>";
									}
										?>	
									<?php
								include "../presets.php";
								error_reporting(0);
								$fact_id = $_POST['fact_id'];
								//echo "&nbsp &nbsp &nbsp $fact_id";
								$sql1 = "SELECT id,f_name,l_name,username,password FROM student_details where f_name='$fact_id'";
								$result = mysqli_query($connection, $sql1);
								if (mysqli_num_rows($result) > 0)
								{
									 //table table-striped 
								echo "
                                <table class='table table-hover'> 
                                    <thead>
                                    	<th>ID</th>
                                    	<th>Username</th>
										<th>Delete</th>
                                    </thead>";
                                   	while($row = $result->fetch_assoc()) {
									echo"
                                    <tbody>
										<tr><form method='post' action='deletedbs.php'>
										<td>".$row["id"]."</td>
										<td>".$row["username"]."</td>
										<td>
                                            <button class='btn btn-danger btn-fill btn-sm'><i class='fa fa-times'></button></td>
											<input type='text' name='id' value='".$row["id"]."'  style='visibility:hidden;'>
											</form>
										</tr>
                                    </tbody> ";
										}
									echo "</table>";
									}
										?>		
                            </div>
                        </div>
                    </div>
					</div>
                            </div>
    </div>
    <div id="menu2" class="tab-pane fade">
			<div style="margin-top:1%;">
				<form method="post">
					<!--<label>Enter the details to search</label> -->
					<input class="col-md-3" style="margin-left:20px;padding:3px;" type="text" name="fact_id" placeholder="Enter the allocation details to delete" required>
					<input type="submit" class="btn btn-default" style="margin-left:5px;padding:3px;border-radius:0px;background-color:grey;color:#fff;" name="show" value="Show">
				</form>
				<div style="margin-left:20px;">
                    <div class="col-md-12">
                        <div class="card card-plain"> 
                            <div class="content table-responsive table-full-width">
							<?php
								include "../presets.php";
								error_reporting(0);
								$fact_id = $_POST['fact_id'];
								//echo "&nbsp &nbsp &nbsp $fact_id";
								$sql1 = "SELECT exam_id, fact_id FROM registration1 where fact_id='$fact_id'";
								$result = mysqli_query($connection, $sql1);
								if (mysqli_num_rows($result) > 0)
								{
									 //table table-striped 
								echo "
                                <table class='table table-hover'> 
                                    <thead>
                                    	<th>Exam ID</th>
										<th>Faculty ID</th>
										<th>Delete</th>
                                    </thead>";
                                   	while($row = $result->fetch_assoc()) {
									echo"
                                    <tbody>
										<tr><form method='post' action='deletedbr1.php'>
										<td>".$row["exam_id"]."</td>
										<td>".$row["fact_id"]."</td>
										<td>
                                            <button class='btn btn-danger btn-fill btn-sm'><i class='fa fa-times'></button></td>
											<input type='text' name='fact_id' value='".$row["fact_id"]."'  style='visibility:hidden;'>
											<input type='text' name='exam_id' value='".$row["exam_id"]."'  style='visibility:hidden;'>
											</form>
										</tr>
                                    </tbody> ";
										}
									echo "</table>";
									}
										?>	
									<?php
								include "../presets.php";
								error_reporting(0);
								$fact_id = $_POST['fact_id'];
								//echo "&nbsp &nbsp &nbsp $fact_id";
								$sql1 = "SELECT exam_id, stud_id FROM registration where stud_id='$fact_id'";
								$result = mysqli_query($connection, $sql1);
								if (mysqli_num_rows($result) > 0)
								{
									 //table table-striped 
								echo "
                                <table class='table table-hover'> 
                                    <thead>
                                    	<th>Exam ID</th>
										<th>Student ID</th>
										<th>Delete</th>
                                    </thead>";
                                   	while($row = $result->fetch_assoc()) {
									echo"
                                    <tbody>
										<tr><form method='post' action='deletedbr.php'>
										<td>".$row["exam_id"]."</td>
										<td>".$row["stud_id"]."</td>
										<td>
                                            <button class='btn btn-danger btn-fill btn-sm'><i class='fa fa-times'></button></td>
											<input type='text' name='exam_id' value='".$row["exam_id"]."'  style='visibility:hidden;'>
											<input type='text' name='stud_id' value='".$row["stud_id"]."'  style='visibility:hidden;'>
											</form>
										</tr>
                                    </tbody> ";
										}
									echo "</table>";
									}
										?>	
									<?php
								include "../presets.php";
								error_reporting(0);
								$fact_id = $_POST['fact_id'];
								//echo "&nbsp &nbsp &nbsp $fact_id";
								$sql1 = "SELECT exam_id, fact_id FROM registration1 where exam_id='$fact_id'";
								$result = mysqli_query($connection, $sql1);
								if (mysqli_num_rows($result) > 0)
								{
									 //table table-striped 
								echo "
                                <table class='table table-hover'> 
                                    <thead>
                                    	<th>Exam ID</th>
										<th>Faculty ID</th>
										<th>Delete</th>
                                    </thead>";
                                   	while($row = $result->fetch_assoc()) {
									echo"
                                    <tbody>
										<tr><form method='post' action='deletedbr1.php'>
										<td>".$row["exam_id"]."</td>
										<td>".$row["fact_id"]."</td>
										<td>
                                            <button class='btn btn-danger btn-fill btn-sm'><i class='fa fa-times'></button></td>
											<input type='text' name='exam_id' value='".$row["exam_id"]."'  style='visibility:hidden;'>
											<input type='text' name='fact_id' value='".$row["fact_id"]."'  style='visibility:hidden;'>
											</form>
										</tr>
                                    </tbody> ";
										}
									echo "</table>";
									}
										?>	
									<?php
								include "../presets.php";
								error_reporting(0);
								$fact_id = $_POST['fact_id'];
								//echo "&nbsp &nbsp &nbsp $fact_id";
								$sql1 = "SELECT exam_id, stud_id FROM registration where exam_id='$fact_id'";
								$result = mysqli_query($connection, $sql1);
								if (mysqli_num_rows($result) > 0)
								{
									 //table table-striped 
								echo "
                                <table class='table table-hover'> 
                                    <thead>
                                    	<th>Exam ID</th>
										<th>Student ID</th>
										<th>Delete</th>
                                    </thead>";
                                   	while($row = $result->fetch_assoc()) {
									echo"
                                    <tbody>
										<tr><form method='post' action='deletedbr.php'>
										<td>".$row["exam_id"]."</td>
										<td>".$row["stud_id"]."</td>
										<td>
                                            <button class='btn btn-danger btn-fill btn-sm'><i class='fa fa-times'></button></td>
											<input type='text' name='exam_id' value='".$row["exam_id"]."'  style='visibility:hidden;'>
											<input type='text' name='stud_id' value='".$row["stud_id"]."'  style='visibility:hidden;'>
											</form>
										</tr>
                                    </tbody> ";
										}
									echo "</table>";
									}
										?>	
                            </div>
                        </div>
                    </div>
					</div>
                            </div>
 
    </div>
    <div id="menu3" class="tab-pane fade">
			<div style="margin-top:1%;">
				<form method="post">
					<!--<label>Enter the details to search</label> -->
					<input class="col-md-3" style="margin-left:20px;padding:3px;" type="text" name="fact_id" placeholder="Enter the exam details to delete" required>
					<input type="submit" class="btn btn-default" style="margin-left:5px;padding:3px;border-radius:0px;background-color:grey;color:#fff;" name="show" value="Show">
				</form>
				<div style="margin-left:20px;">
					<h4><?php
						error_reporting(0);
						$list = $_POST['fact_id'];
						echo $list;
					?>
					</h4>
                    <div class="col-md-12">
                        <div class="card card-plain"> 
                            <div class="content table-responsive table-full-width">
							<?php
								include "../presets.php";
								error_reporting(0);
								$fact_id = $_POST['fact_id'];
								//echo "&nbsp &nbsp &nbsp $fact_id";
								$sql1 = "SELECT exam_id, exam_name, exam_details.exam_dept,location,date FROM exam_details inner join department on exam_details.exam_dept=department.exam_dept where exam_id='$fact_id'";
								$result = mysqli_query($connection, $sql1);
								if (mysqli_num_rows($result) > 0)
								{
									 //table table-striped 
								echo "
                                <table class='table table-hover'> 
                                    <thead>
                                    	<th>Exam Name</th>
										<th>Exam Department</th>
                                    	<th>Date</th>
                                    	<th>Location</th>
										<th>Delete</th>
                                    </thead>";
                                   	while($row = $result->fetch_assoc()) {
									echo"
                                    <tbody>
										<tr><form method='post' action='deletedbe.php'>
										<td>".$row["exam_name"]."</td>
										<td>".$row["exam_dept"]."</td>
										<td>".$row["date"]."</td>
										<td>".$row["location"]."</td>
										<td>
                                            <button class='btn btn-danger btn-fill btn-sm'><i class='fa fa-times'></button></td>
											<input type='text' name='exam_id' value='".$row["exam_id"]."'  style='visibility:hidden;'>
											<input type='text' name='exam_name' value='".$row["exam_name"]."'  style='visibility:hidden;'>
											</form>
										</tr>
                                    </tbody> ";
										}
									echo "</table>";
									}
										?>	
									<?php
								include "../presets.php";
								error_reporting(0);
								$fact_id = $_POST['fact_id'];
								//echo "&nbsp &nbsp &nbsp $fact_id";
								$sql1 = "SELECT exam_id, exam_name, exam_details.exam_dept,location,date FROM exam_details inner join department on exam_details.exam_dept=department.exam_dept where exam_name='$fact_id'";
								$result = mysqli_query($connection, $sql1);
								if (mysqli_num_rows($result) > 0)
								{
									 //table table-striped 
								echo "
                                <table class='table table-hover'> 
                                    <thead>
                                    	<th>Exam ID</th>
										<th>Exam Department</th>
                                    	<th>Date</th>
                                    	<th>Location</th>
										<th>Delete</th>
                                    </thead>";
                                   	while($row = $result->fetch_assoc()) {
									echo"
                                    <tbody>
										<tr><form method='post' action='deletedbe.php'>
										<td>".$row["exam_id"]."</td>
										<td>".$row["exam_dept"]."</td>
										<td>".$row["date"]."</td>
										<td>".$row["location"]."</td>
										<td>
                                            <button class='btn btn-danger btn-fill btn-sm'><i class='fa fa-times'></button></td>
											<input type='text' name='exam_id' value='".$row["exam_id"]."'  style='visibility:hidden;'>
											<input type='text' name='exam_name' value='".$row["exam_name"]."'  style='visibility:hidden;'>
											</form>
										</tr>
                                    </tbody> ";
										}
									echo "</table>";
									}
										?>	
                            </div>
                        </div>
                    </div>
					</div>
                            </div>
    </div>
	
  </div>
</div>
</div>
	 <footer class="footer">
            <div class="container-fluid">
                
				<div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, DKNS Software Inc.
                </div>
            </div>
        </footer>


    </div>
</div>


<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

        <!-- Modal content-->
            <div class="modal-content">
                
                <div class="modal-body" style="padding:40px 50px;">
                    <form role="form" method="post" action="changepassword.php">
                        <div class="form-group">
                            <label for="usrname"> Username</label>
                            <input type="text" class="form-control" name="usr" placeholder="Enter username" required style="border: 1px solid darkgrey;">
                        </div>
                        <div class="form-group">
                            <label for="psw"> Old Password</label>
                            <input type="password" class="form-control" name="opsw" placeholder="Enter password" required style="border: 1px solid darkgrey;">
                        </div>
                        <div class="form-group">
                            <label for="psw"> New Password</label>
                            <input type="password" class="form-control" name="npsw" placeholder="Enter password" required style="border: 1px solid darkgrey;">
                        </div>
                        <div class="form-group">
                            <label for="psw"> Retype Password</label>
                            <input type="password" class="form-control" name="rpsw" placeholder="Enter password" required style="border: 1px solid darkgrey;">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-info btn-fill btn-block"> Change</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-default pull-right" data-dismiss="modal" style="color:#fff;background-color:#d9534f;border-color:#d43f3a"> Cancel</button>
                    
                </div>
            </div>      
        </div>
    </div>

</body>
    <script>
        $(document).ready(function(){
            $("#myBtn").click(function(){
                $("#myModal").modal();
            });
        });
		$(document).ready(function(){
    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
        localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = localStorage.getItem('activeTab');
    if(activeTab){
        $('#myTab a[href="' + activeTab + '"]').tab('show');
    }
});
		$(document).ready(function(){
		$("#man").click(function() {
			$("#manu1").children().css({"display": ""});		
		});
	});
	$('.tree-toggle').click(function () {
		$(this).parent().children('ul.tree').toggle(200);
	});
	$(function(){
		$('.tree-toggle').parent().children('ul.tree').toggle(200);
	})	
	 $(document).ready(function(){
            document.getElementById("man").click();
        });
    </script>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>
