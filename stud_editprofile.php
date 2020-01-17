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
            <h1>Edit Profile</h1>
            <form action="signup1.php" method="post">
				<?php
					require_once 'connection.php';
					session_start();
					$var=$_SESSION['Sid'];
					$sql="select * from student where Sid=$var";
			 		$result=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_assoc($result))
					{
				?>
			
			
<table>

    <tr>
        
    </tr>
	<tr>
        <td>Name</td><td><input type="text" value="<?php echo $row['Name'];?>" name="name"></td>
    </tr>
    <tr>
        <td>AdmissionNo</td><td><input type="text" value="<?php echo $row['AdmissionNo'];?>" name="admno" readonly></td>
    </tr>
 
    <tr>
        <td>AdmissionDate</td><td><input type="text" value="<?php echo $row['AdmissionDate'];?>" name="admdate" readonly></td>
    </tr>
    <tr>
        <td>Address</td><td><input type="text" value="<?php echo $row['Address'];?>" name="address"></td>
    </tr>
    <tr>
        <td>DOB</td><td><input type="text" value="<?php echo $row['Dob'];?>" name="dob"></td>
    </tr>
    <tr>
        <td>Gender</td><td><input type="text" value="<?php echo $row['Gender'];?>" name="gender"></td>
    </tr>
    <tr>
        <td>MobileNo</td><td><input type="text" value="<?php echo $row['MobileNo'];?>" name="mobile"></td>
    </tr>
	<tr>
        <td>Guardian</td><td><input type="text" value="<?php echo $row['Guardian'];?>" name="guardian"></td>
    </tr>
    <tr>
        <td>Batch</td><td><input type="text" value="<?php echo $row['Batch'];?>" name="batch"></td>
    </tr>
	<tr>
        <td>EmailId</td><td><input type="text" value="<?php echo $row['Emailid'];?>" name="email"></td>
    </tr>
	<tr>
        <td>Username</td><td><input type="text" value="<?php echo $row['Username'];?>" name="username"></td>
    </tr>
	<tr>
        <td>Password</td><td><input type="text" value="<?php echo $row['Password'];?>" name="password"></td>
    </tr>
</table>
			<?php
					}
				?>
<br>
<input type="submit" value="Save" name="editstu" class="button"><br><br>
</form>
        </div>
	</div>
	</div>
	</body>
</html>
		