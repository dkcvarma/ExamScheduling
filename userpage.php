<?php session_start(); ?>
<html>
	<head>
	<style>
		.middle {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			text-align: center;
		}
		
		.middle h1 {
			font-size: 5rem;
			text-shadow: 2px 2px #A0A0A0;
		}
	</style>
	</head>
	<body bgcolor="#E0E0E0">
		<div class="middle">
			<h1>LOGIN SUCCESSFUL
			<?php 
				echo $_SESSION['pass'];
			?>
			</h1>
		</div>
	</body>
</html>
<?php 
	session_unset();
	session_destroy();
?>