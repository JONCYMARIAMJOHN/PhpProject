<?php
	require_once("connection.php");
	session_start();
	if(isset($_POST['sub']))
	{
		$name=$_POST['name'];
		$address=$_POST['address'];
		$gender=$_POST['gender'];
		$qualification=$_POST['qualification'];
		$mobile=$_POST['mobile'];
		$batchincharge=$_POST['batchincharge'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="INSERT INTO faculty(Name,Address,Gender,Qualification,Mobileno,BatchInCharge,Emailid,Username,Password) VALUES ('".$name."','".$address."','".$gender."','".$qualification."','".$mobile."','".$batchincharge."','".$email."','".$username."','".$password."')";
		if(!$result=$conn->query($sql))
		{
			die('error in running query['.$conn->error.']');
		}
		else
		{
			header('location:faculty_signup.php');
		}
		mysqli_close($conn);
	}
	else if(isset($_POST['stsub']))
	{
		$admno=$_POST['admno'];
		$admdate=$_POST['admdate'];
		$name=$_POST['name'];
		$address=$_POST['address'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		$mobile=$_POST['mobile'];
		$guardian=$_POST['guardian'];
		$batch=$_POST['batch'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="INSERT INTO student(AdmissionNo,AdmissionDate,Name,Address,Dob,Gender,MobileNo,Guardian,Batch,Emailid,Username,Password) VALUES ('".$admno."','".$admdate."','".$name."','".$address."','".$dob."','".$gender."','".$mobile."','".$guardian."','".$batch."','".$email."','".$username."','".$password."')";
		if(!$result=$conn->query($sql))
		{
			die('error in running query['.$conn->error.']');
		}
		else
		{
			header('location:student_signup.php');
		}
		mysqli_close($conn);
	}
	else if(isset($_POST['editfac']))
	{
		$name=$_POST['name'];
		$address=$_POST['address'];
		$gender=$_POST['gender'];
		$qualification=$_POST['qualification'];
		$mobile=$_POST['mobile'];
		$batch=$_POST['batch'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$var=$_SESSION['Fid'];
		$sql="UPDATE faculty SET Name='".$name."',Address='".$address."',Gender='".$gender."',Qualification='".$qualification."',Mobileno='".$mobile."',BatchInCharge='".$batch."',Emailid='".$email."',Username='".$username."',Password='".$password."' WHERE Fid=$var" ;
		if(!$result=$conn->query($sql))
		{
			die('error in running query['.$conn->error.']');
		}
		else
		{
			header('location:fac_profile.php');
		}
		mysqli_close($conn);
	}
	else if(isset($_POST['editstu']))
	{
		$name=$_POST['name'];
		$address=$_POST['address'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		$mobile=$_POST['mobile'];
		$guardian=$_POST['guardian'];
		$batch=$_POST['batch'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$var=$_SESSION['Sid'];
		$sql="UPDATE student SET Name='".$name."',Address='".$address."',Dob='".$dob."',Gender='".$gender."',MobileNo='".$mobile."',Guardian='".$guardian."',Batch='".$batch."',Emailid='".$email."',Username='".$username."',Password='".$password."' WHERE Sid=$var" ;
		if(!$result=$conn->query($sql))
		{
			die('error in running query['.$conn->error.']');
		}
		else
		{
			header('location:stud_profile.php');
		}
		mysqli_close($conn);
	}
	else if(isset($_POST['att']))
	{
		$date=$_POST['date'];
		$sid=$_POST['sid'];
		$name=$_POST['name'];
		$batch=$_POST['batch'];
		$h1=$_POST['h1'];
		$h2=$_POST['h2'];
		$h3=$_POST['h3'];
		$h4=$_POST['h4'];
		
		$sql="INSERT INTO attendance(Date,Sid,Name,Batch,Status_h1,Status_h2,Status_h3,Status_h4) VALUES('".$date."','".$sid."','".$name."','".$batch."','".$h1."','".$h2."','".$h3."','".$h4."')";
		if(!$result=$conn->query($sql))
		{
			die('error in running query['.$conn->error.']');
		}
		else
		{
			header('location:view_studattndc.php');
		}
		mysqli_close($conn);
	}
	else if(isset($_POST['assmnt']))
	{
		$assmnt_no=$_POST['assmnt_no'];
		$sid=$_POST['sid'];
		$name=$_POST['name'];
		$batch=$_POST['batch'];
		$sub1=$_POST['sub1'];
		$sub2=$_POST['sub2'];
		$sub3=$_POST['sub3'];
		
		$sql="INSERT INTO assessment(Assmnt_name,Sid,Name,Batch,Sub1,Sub2,Sub3) VALUES('".$assmnt_no."','".$sid."','".$name."','".$batch."','".$sub1."','".$sub2."','".$sub3."')";
		if(!$result=$conn->query($sql))
		{
			die('error in running query['.$conn->error.']');
		}
		else
		{
			header('location:view_mark.php');
		}
		mysqli_close($conn);
	}
	else if(isset($_POST['leave']))
	{
		$sid=$_POST['sid'];
		$name=$_POST['name'];
		$batch=$_POST['batch'];
		$fromdate=$_POST['fromdate'];
		$todate=$_POST['todate'];
		$reason=$_POST['reason'];
		$status="Pending";
		$sql="INSERT INTO leaves(Sid,Name,Batch,Fromdate,Todate,Reason,Status) VALUES('".$sid."','".$name."','".$batch."','".$fromdate."','".$todate."','".$reason."','".$status."')";
		if(!$result=$conn->query($sql))
		{
			die('error in running query['.$conn->error.']');
		}
		else
		{
			header('location:stud_applyleave.php');
		}
		mysqli_close($conn);
	}
	else if(isset($_POST['approve']))
	{
		$id=$_POST['id'];
		$sql="UPDATE leaves SET Status='Approved' WHERE id=$id" ;
		if(!$result=$conn->query($sql))
		{
			die('error in running query['.$conn->error.']');
		}
		else
		{
			header('location:stu_leave.php');
		}
		mysqli_close($conn);
	}
	else if(isset($_POST['reject']))
	{
		$id=$_POST['id'];
		$sql="UPDATE leaves SET Status='Rejected' WHERE id=$id" ;
		if(!$result=$conn->query($sql))
		{
			die('error in running query['.$conn->error.']');
		}
		else
		{
			header('location:stu_leave.php');
		}
		mysqli_close($conn);
	}
	
?>