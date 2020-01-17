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
				<h1>Enter Mark</h1><br><br>
			<table>
				<thead>
					<tr>
						<th>AssmntNo</th>
						<th>Sid</th>
						<th>Name</th>
						<th>Batch</th>
						<th>Subject1</th>
						<th>Subject2</th>
						<th>Subject3</th>
						
						
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
					<td><select name="assmnt_no">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select></td>
					<td><input type="text" value="<?php echo $row['Sid'];?>" name="sid"></td>
					<td><input type="text" value="<?php echo $row['Name'];?>" name="name"></td>
					<td><input type="text" value="<?php echo $row['Batch'];?>" name="batch"></td>
					<td><input type="text" name="sub1"></td>
					<td><input type="text" name="sub2"></td>
					<td><input type="text" name="sub3"></td>
					
					<th><input type="submit" name="assmnt" value="OK"></th>
					</form>
				</tr>
				<?php
					}
				?>
				
				</tbody>
					</table>
	<br>
	
	</div>
	</body>
</html>
		