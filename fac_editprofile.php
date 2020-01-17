<!DOCTYPE html>
<html>
	<head>
		<title>facultyhome</title>
		<link rel="stylesheet" href="css/style.css">
		<style>
		table,th,td{background-color:grey;text-align:center;padding:10px;}
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

				<li> <a href="fac_appliedleave.php">Leave</a></li>
				<li> <a href="login.php">Logout</a></li>
				
			</ul>
		</div>
 <div>
			<form action="signup1.php" method="post">
				<?php
					require_once 'connection.php';
					session_start();
					$var=$_SESSION['Fid'];
					$sql="select * from faculty where Fid=$var";
					$result=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_assoc($result))
					{
				?>
			<h1>EDIT PROFILE</h1><br>
			
<table>

    <tr>
        
    </tr>
	<tr>
        <td>Name</td><td><input type="text" name="name" value="<?php echo $row['Name'];?>"></td>
    </tr>
    <tr>
        <td>Address</td><td><input type="text" name="address" value="<?php echo $row['Address'];?>"></td>
    </tr>
 
    <tr>
        <td>Gender</td><td><input type="text" name="gender" value="<?php echo $row['Gender'];?>"></td>
    </tr>
    <tr>
        <td>Qualification</td><td><input type="text" name="qualification" value="<?php echo $row['Qualification'];?>"></td>
    </tr>
    <tr>
        <td>Mobile</td><td><input type="text" name="mobile" value="<?php echo $row['Mobileno'];?>"></td>
    </tr>
    <tr>
        <td>Batch in charge</td><td><input type="text" name="batch" value="<?php echo $row['BatchInCharge'];?>"></td>
    </tr>
    <tr>
        <td>Email</td><td><input type="text" name="email" value="<?php echo $row['Emailid'];?>"></td>
    </tr>
	<tr>
        <td>Username</td><td><input type="text" name="username" value="<?php echo $row['Username'];?>"></td>
    </tr>
    <tr>
        <td>Password</td><td><input type="text" name="password" value="<?php echo $row['Password'];?>"></td>
    </tr>
</table>
			<?php
					}
				?>
<br>
            <input type="submit" value="Save" name="editfac" class="button"><br><br>
</form>
        </div>
	</div>
	</body>
</html>
		