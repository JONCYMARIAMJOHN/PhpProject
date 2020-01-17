<!DOCTYPE html>
<html>
	<head>
		<title>adminhome</title>
		<link rel="stylesheet" href="css/style.css">
		<style>
		table,th,td{background-color:grey;text-align:center;padding:10px;}
		</style>   
	</head>
	<body class="bi">
		<div class="display">
		<div class="navbar">
			<h1><u>STUDENT</u></h1>
			<ul>
				<li> <a href="studenthome.php">Home</a></li>
				<li> <a href="#">My Profile</a>
					<div class="submenu">
						<ul>
							<li><a href="stud_profile.php">Personal details</a></li>
							<li><a href="viewmyattndc.php">Atendance</a></li>
							<li><a href="viewmymark.php">Mark</a></li>
						</ul>
					</div>
				</li>

				<li> <a href="#">Leave</a>
					<div class="submenu">
						<ul>
							<li><a href="stud_applyleave.php">Apply Leave</a></li>
							<li><a href="stu_appliedleave.php">Applied Leave</a></li>
							
						</ul>
						</div>
				</li>
				<li><a href="login.php">Logout</a></li>
			</ul>
		</div>
			<div>
				<h1>Leave Application</h1><br><br>
				<form action="signup1.php" method="post">
				
					<table>
						
					<?php
					require_once 'connection.php';
					session_start();
					$var=$_SESSION['Sid'];
					$sql="select * from student where Sid=$var";
					$result=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_assoc($result))
					{
				?>		<tr>
							<td>Id</td>
							<td>:</td>
							<td><input type="text" name="sid" value="<?php echo $row['Sid'];?>" readonly></td>
						</tr>
						<tr>
							<td>Name</td>
							<td>:</td>
							<td><input type="text" name="name" value="<?php echo $row['Name'];?>" readonly></td>
						</tr>
						<tr>
							<td>Batch</td>
							<td>:</td>
							<td><input type="text" name="batch" value="<?php echo $row['Batch'];?>" readonly></td>
						</tr>
								<?php
					}
				?>
						</tr>
						<tr>
							<td>FromDate</td>
							<td>:</td>
							<td><input type="date" name="fromdate"></td>
						</tr>
						<tr>
							<td>ToDate</td>
							<td>:</td>
							<td><input type="date" name="todate"></td>
						</tr>
						<tr>
							<td>Reason</td>
							<td>:</td>
							<td><input type="text" name="reason"></td>
						</tr>
					</table><br><br>
					<input type="submit" name="leave" class="button" value="Submit">
				</form>
				<br><br>
				
			</div>
	</div>
	</body>
</html>
		