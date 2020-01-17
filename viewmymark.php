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
			<h1>My Marks</h1><br><br><br>
			<table>
				<thead>
					<tr>
						<th>AssessmentNo</th>
						<th>Subject1</th>
						<th>Subject2</th>
						<th>Subject3</th>
					</tr>
				</thead>
				<tbody>
					
					
					<?php
					require_once 'connection.php';
					session_start();
					$var=$_SESSION['Sid'];
					$sql="select * from assessment where Sid=$var";
			 		$result=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_assoc($result))
					{
				?>
				<tr>
						<td><?php echo $row['Assmnt_name'];?></td>
						<td><?php echo $row['Sub1'];?></td>
						<td><?php echo $row['Sub2'];?></td>
						<td><?php echo $row['Sub3'];?></td>
						</tr>
				<?php
					}
				?>
					
				
				</tbody>

				<tbody>

				</tbody>
			</table>
		</div>
	</div>
	</body>
</html>
		