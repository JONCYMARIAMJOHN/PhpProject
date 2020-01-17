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
					<h1>Leave Management</h1><br><br>
			<table>
				<thead>
					<tr>
						<th>Id</th>
						<th>Studentid</th>
						<th>Name</th>
						<th>Batch</th>
						<th>Fromdate</th>
						<th>Todate</th>
						<th>Reason</th>
						<th>Status</th>
						
						
					</tr>
				</thead>
				<tbody>
				<?php
					require_once 'connection.php';
					$sql="select * from leaves";
					$result=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_assoc($result))
					{
				?>
				<tr>
				<form action="signup1.php" method="post">
					<td><input type="text" value="<?php echo $row['id'];?>" name="id" readonly></td>
					<td><?php echo $row['Sid'];?></td>
					<td><?php echo $row['Name'];?></td>
					<td><?php echo $row['Batch'];?></td>
					<td><?php echo $row['Fromdate'];?></td>
					<td><?php echo $row['Todate'];?></td>
					<td><?php echo $row['Reason'];?></td>
					<td><?php echo $row['Status'];?></td>
					<td><input type="submit" name="approve" value="--Approve"></td>
					<td><input type="submit" name="reject" value="--Reject"></td>
					</form>
				</tr>
				<?php
					}
				?>
				</tbody>
					</table>
	<br>
			</div>
			
</div>
	</body>
</html>