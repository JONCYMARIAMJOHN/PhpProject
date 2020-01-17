<!DOCTYPE html>
<html>
	<head>
		<title>facultyhome</title>
		<link rel="stylesheet" href="css/style.css">
		<style>
		</style>  
	</head>
	<body class="bi">
		
		<div class="display">
		<div class="navbar">
			<h1><u>FACULTY</u></h1>
			<ul>
				<li> <a href="facultyhome.php">Home</a> </li>
				<li>
						<a href="fac_profile.php">My profile</a>
				</li>
				<li> <a href="">Student Details</a>
					<div class="submenu">
						<ul>
							<li><a href="view_student.php">Personal details</a></li>
							<li><a href="view_studattndc.php">Attendance</a></li>
							<li><a href="view_mark.php">Mark</a></li>
						</ul>

					</div>
				</li>

				<li> <a href="login.php">Logout</a></li>
				
			</ul>
		</div>
		<div>
		<?php
		session_start();
		
		$var=$_SESSION['Fid'];
		echo $var;
		?>
			
		</div>
	</div>
	</body>
</html>
		