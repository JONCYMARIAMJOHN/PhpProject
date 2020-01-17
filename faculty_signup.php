<!DOCTYPE html>
<html>
	<head>
		<title>adminhome</title>
		<link rel="stylesheet" href="css/style.css">
		<style>
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
		
		<div class="cont">
		<form action="signup1.php" method="post">
			<h1>ADD FACULTY</h1><br>
            <input type="text" placeholder="Name" name="name"class="frm" >
            <input type="text" placeholder="Address" name="address"class="frm" >
            <input type="text" placeholder="Gender" name="gender"class="frm" >
            <input type="text" placeholder="Qualification" name="qualification"class="frm" >
            <input type="text" placeholder="Mobile" name="mobile"class="frm" >
            <input type="text" placeholder="Batch in charge" name="batchincharge"class="frm" >
            <input type="text" placeholder="Email" name="email"class="frm" >
            <input type="text" placeholder="Username" name="username" class="frm">
            <input type="text" placeholder="Password" name="password" class="frm">


			
			<input type="submit" value="SignUp" class="button" name="sub">
		</form>
		</div>
		
		
		</div>
	</body>
</html>
	