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
			

			<h1>Enter Attendance</h1>	<br><br>
			
				<table>
				<thead>
					<tr>
						<th>Date</th>
						<th>StudentID</th>
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
				<form action="signup1.php" method="post">
					<td><input type="text" name="date" value="<?php echo date('Y-m-d');?>"></td>
					<td><input type="text" value="<?php echo $row['Sid'];?>" name="sid"></td>
					<td><input type="text" value="<?php echo $row['Name'];?>" name="name"></td>
					<td><input type="text" value="<?php echo $row['Batch'];?>" name="batch"></td>
					<td><select name="h1">
						<option value="present">present</option>
						<option value="absent">absent</option>
					</select></td>
					<td><select name="h2">
						<option value="present">present</option>
						<option value="absent">absent</option>
					</select></td>
					<td><select name="h3">
						<option value="present">present</option>
						<option value="absent">absent</option>
					</select></td>
					<td><select name="h4">
						<option value="present">present</option>
						<option value="absent">absent</option>
					</select></td>
					<th><input type="submit" name="att" value="OK"></th>
					</form>
				</tr>
				<?php
					}
				?>
				
				</tbody>
					</table>
			<br><br><br>

	
			
		</div>
		<div>
			
		</div>
	</div>
	</body>
</html>
		