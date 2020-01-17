<!DOCTYPE html>
<html>
	<head>
		<title>facultyhome</title>
		<link rel="stylesheet" href="css/style.css">
		<style>
		table,th,td{border:2px solid black; border-collapse:collapse;background-color:grey;text-align:center;padding:10px;}
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
			<h1>STUDENT DETAILS</h1>
			<br><br>
			<table>
				<thead>
					<tr>
						<th>StudentId</th>
						<th>AdmNo</th>
						<th>AdmDate</th>
						<th>Name</th>
						<th>Address</th>
						<th>DOB</th>
						<th>Gender</th>
						<th>Mobile</th>
						<th>Guardian</th>
						<th>Batch</th>
						<th>Email</th>
					</tr>

				</thead>
				<tbody>
				<?php
				require_once 'connection.php';
				session_start();
					$var=$_SESSION['Fid'];
					$sql="select * from faculty where Fid=$var";
					$result=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_assoc($result))
					{
						$b=$row['BatchInCharge'];
					}
				?>
					<?php
					require_once 'connection.php';
					$sql="select * from student where Batch='".$b."'";
					$result=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_assoc($result))
					{
				?>
				<tr>
					<td><?php echo $row['Sid'];?></td>
					<td><?php echo $row['AdmissionNo'];?></td>
					<td><?php echo $row['AdmissionDate'];?></td>
					<td><?php echo $row['Name'];?></td>
					<td><?php echo $row['Address'];?></td>
					<td><?php echo $row['Dob'];?></td>
					<td><?php echo $row['Gender'];?></td>
					<td><?php echo $row['MobileNo'];?></td>
					<td><?php echo $row['Guardian'];?></td>
					<td><?php echo $row['Batch'];?></td>
					<td><?php echo $row['Emailid'];?></td>
				</tr>
				<?php
					}
				?>

				</tbody>
			</table>

		</div>
	
	</div>
	
	</body>
</html>
		