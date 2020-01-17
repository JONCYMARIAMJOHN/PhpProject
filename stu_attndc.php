<!DOCTYPE html>
<html>
	<head>
		<title>adminhome</title>
		<link rel="stylesheet" href="css/style.css">
		<style>
		table,th,td{border:2px solid black; border-collapse:collapse;background-color:grey;text-align:center;padding:10px;}
		</style>  
	</head>
	<body class="bi">
		<div class="display">
		<div class="navbar">
			<h1><u>ADMIN</u></h1>
			<ul>
				<li> <a href="adminhome.php">Home</a> </li>
				<li> <a href="faculty_signup.php">Add Faculty</a> </li>
				<li> <a href="student_signup.php">Add Student</a> </li>
				<li> <a href="#">Student Details</a>
					<div class="submenu">
						<ul>
							<li><a href="stu_details.php">Personal details</a></li>
							<li><a href="stu_attndc.php">Atendance</a></li>
							<li><a href="stu_mark.php">Mark</a></li>
						</ul>

					</div>
				</li>
				<li> <a href="fac_details.php">Faculty Details</a></li>
				<li><a href="stu_leave.php">Leave Management</a></li>
					
				<li><a href="login.php">Logout</a></li>
					
			</ul>
			</div>
		<div>
			<h1>ATTENDANCE DETAILS</h1>
			<br><br>
			<table>
				<thead>
					<tr>
						<th>Date</th>
						<th>Studentid</th>
						<th>Name</th>
						<th>Batch</th>
						<th>Status_hour1</th>
						<th>Status_hour2</th>
						<th>Status_hour3</th>
						<th>Status_hour4</th>
					</tr>

				</thead>
				<tbody>
					<?php
					require_once 'connection.php';
					$sql="select * from attendance";
					$result=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_assoc($result))
					{
				?>
				<tr>
					<td><?php echo $row['Date'];?></td>
					<td><?php echo $row['Sid'];?></td>
					<td><?php echo $row['Name'];?></td>
					<td><?php echo $row['Batch'];?></td>
					<td><?php echo $row['Status_h1'];?></td>
					<td><?php echo $row['Status_h2'];?></td>
					<td><?php echo $row['Status_h3'];?></td>
					<td><?php echo $row['Status_h4'];?></td>

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
		