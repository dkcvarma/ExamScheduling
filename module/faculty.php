<?php
	session_start();
	if(!$_SESSION['auth']) {
		header("location:main.html");
	}
	
	include "../profile_query.php";
?>

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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
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
		.file {
			visibility: hidden;
			position: absolute;
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
                <a href="" class="simple-text">
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
				<li style="display:none; margin-left:10%;" class="active"><a class="tree-toggle" href="faculty.php" style="cursor:pointer;"><i class="fa fa-user-plus"></i><p>ADD</p></a></li>
				<li style="display:none; margin-left:10%;"><a class="tree-toggle" href="assign.php" style="cursor:pointer;"><i class="fa fa-hand-o-right"></i><p>ASSIGN</p></a></li>
				<li style="display:none; margin-left:10%;"><a class="tree-toggle" href="updatedb.php" style="cursor:pointer;"><i class="fa fa-pencil"></i><p>UPDATE</p></a></li>
				<li style="display:none; margin-left:10%;"><a class="tree-toggle" href="delete.php" style="cursor:pointer;"><i class="fa fa-minus"></i><p>DELETE</p></a></li>
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
                    <a class="navbar-brand" id="head" href="#">ADD</a>
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
				<div class="row" style="margin-left:0.15%;">
				<button id="btn1" class="btn btn-default btn" style="border-radius:5px;">Faculty</button>			
				<button id="btn2" class="btn btn-default btn" style="border-radius:5px;">Student</button>
				</div>
				<div style="margin-top:1%;">
                <div id="form1" class="row" style="display:none;">
                    <div class="col-lg-4 col-md-5">
                        <div class="card card-user">
                            <div class="image">
                                <img src="assets/img/background.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                  <img class="avatar border-white" id="pic" src="../img/faculty.gif" name="photo" alt="..."/>
                                  <h4 class="title"style="font-size: 25px;">Faculty</h4>
								  <form method="POST" action="add_faculty.php" enctype="multipart/form-data">
								  <input type="file" id="img" name="photo" class="file">
									<div class="input-group col-xs-12" style="margin-top:20px;">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
											<input type="text" class="form-control input-xs" placeholder="Upload Image">
											<span class="input-group-btn">
											<button class="browse btn btn-primary btn-fill input-xs" type="button"><i class="fa fa-search"></i> Browse</button>
											</span>
									</div>
                                </div>
                                
                            </div>
                            
                            
                        </div>
                        
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="content">
							
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>ID <span style="font-size:12px; color:red">*<span/></label>
                                                <input type="text" name="id" class="form-control border-input" placeholder="ID" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Username <span style="font-size:12px; color:red">*<span/></label>
                                                <input type="text" name="username" class="form-control border-input" placeholder="Username" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input type="password" name="password" class="form-control border-input" placeholder="Password">
                                            </div>
                                        </div>
										<div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address <span style="font-size:12px; color:red">*<span/></label>
                                                <input type="email" name="email" class="form-control border-input" placeholder="Email" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
										<div class="col-md-3">
                                            <div class="form-group">
                                                <label>Department <span style="font-size:12px; color:red">*<span/></label>
                                                <input type="text" name="dept" class="form-control border-input" placeholder="Department" required>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" name="f_name" class="form-control border-input" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" name="l_name" class="form-control border-input" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address"  class="form-control border-input" placeholder="Home Address">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>State</label>
                                                <input type="text" name="state" class="form-control border-input" placeholder="State">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control border-input" placeholder="Country" value="India" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Postal Code</label>
                                                <input type="text" name="pin" class="form-control border-input" placeholder="Postal Code">
                                            </div>
                                        </div>
                                    </div>

                                   <br />
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Submit</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
				
				
				
				<div id="form2" class="row" style="display:none;">
				 <div class="col-lg-4 col-md-5">
                        <div class="card card-user">
                            <div class="image">
                                <img src="assets/img/background.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                  <img class="avatar border-white" src="../img/student.gif" alt="..."/>
                                  <h4 class="title"style="font-size: 25px;">Student</h4>
								  <form method="POST" action="add_student.php" enctype="multipart/form-data">
								  <input type="file" id="img" name="photo" class="file">
									<div class="input-group col-xs-12" style="margin-top:20px;">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text" class="form-control input-xs" placeholder="Upload Image">
									<span class="input-group-btn">
									<button class="browse btn btn-primary btn-fill input-xs" type="button"><i class="fa fa-search"></i> Browse</button>
									</span>
									</div>
                                </div>
                                
                            </div>
                            
                            
                        </div>
                        
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="content">
                                
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>ID <span style="font-size:12px; color:red">*<span/></label>
                                                <input type="text" name="id" class="form-control border-input" placeholder="ID" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Username <span style="font-size:12px; color:red">*<span/></label>
                                                <input type="text" name="username" class="form-control border-input" placeholder="Username" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input type="password" name="password" class="form-control border-input" placeholder="Password">
                                            </div>
                                        </div>
										<div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address <span style="font-size:12px; color:red">*<span/></label>
                                                <input type="email" name="email" class="form-control border-input" placeholder="Email" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
										<div class="col-md-3">
                                            <div class="form-group">
                                                <label>Department <span style="font-size:12px; color:red">*<span/></label>
                                                <input type="text" name="dept" class="form-control border-input" placeholder="Department" required>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" name="f_name" class="form-control border-input" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" name="l_name" class="form-control border-input" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address"  class="form-control border-input" placeholder="Home Address">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>State</label>
                                                <input type="text" name="state" class="form-control border-input" placeholder="State">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control border-input" placeholder="Country" value="India" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Postal Code</label>
                                                <input type="text" name="pin" class="form-control border-input" placeholder="Postal Code">
                                            </div>
                                        </div>
                                    </div>

                                   <br />
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Submit</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
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
		$(document).ready(function() {
			$('#btn1').click(function() {
				$('#form1').css("display","block");
				$('#form2').css("display","none");
				$('#head').text("ADD FACULTY");
			});
			$('#btn2').click(function() {
				$('#form2').css("display","block");
				$('#form1').css("display","none");
				$('#head').text("ADD STUDENT");
			});
		});
		$(document).on('click', '.browse', function(){
			var file = $(this).parent().parent().parent().find('.file');
			file.trigger('click');
		});
		
		$(document).on('change', '.file', function(){
			$(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
		});
    </script>
	<script type="text/javascript">
		function readURL(input){
			if(input.files && input.files[0]){
				var reader = new FileReader();
				reader.onload = function(e){
					$("#pic").attr('src',e.target.result);					
				}
				reader.readAsDataURL(input.files[0]);
			}			
		}
		$("#img").change(function() {
			readURL(this);
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
