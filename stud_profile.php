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
			<form>
				<?php
					require_once 'connection.php';
					session_start();
					$var=$_SESSION['Sid'];
					$sql="select * from student where Sid=$var";
			 		$result=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_assoc($result))
					{
				?>
			<h1><?php echo $row['Name'];?></h1><br>
			
<table>

    <tr>
        
    </tr>
    <tr>
        <td>AdmissionNo</td><td>:</td><td><?php echo $row['AdmissionNo'];?></td>
    </tr>
 
    <tr>
        <td>AdmissionDate</td><td>:</td><td><?php echo $row['AdmissionDate'];?></td>
    </tr>
    <tr>
        <td>Address</td><td>:</td><td><?php echo $row['Address'];?></td>
    </tr>
    <tr>
        <td>DOB</td><td>:</td><td><?php echo $row['Dob'];?></td>
    </tr>
    <tr>
        <td>Gender</td><td>:</td><td><?php echo $row['Gender'];?></td>
    </tr>
    <tr>
        <td>MobileNo</td><td>:</td><td><?php echo $row['MobileNo'];?></td>
    </tr>
	<tr>
        <td>Guardian</td><td>:</td><td><?php echo $row['Guardian'];?></td>
    </tr>
    <tr>
        <td>Batch</td><td>:</td><td><?php echo $row['Batch'];?></td>
    </tr>
	<tr>
        <td>EmailId</td><td>:</td><td><?php echo $row['Emailid'];?></td>
    </tr>
	<tr>
        <td>Username</td><td>:</td><td><?php echo $row['Username'];?></td>
    </tr>
	<tr>
        <td>Password</td><td>:</td><td><?php echo $row['Password'];?></td>
    </tr>
</table>
			<?php
					}
				?>
<br>
<a href="stud_editprofile.php">Edit Profile</a>
</form>
        </div>
	</div>
	</body>
</html>
		