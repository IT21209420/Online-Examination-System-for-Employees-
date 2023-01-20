<?php
 include_once 'config.php';
?>

<?php
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$empId=$_POST['empId'];
	$gender=$_POST['gender'];
	$DOB=$_POST['DOB'];
	$branch=$_POST['branch'];
	$jobRole=$_POST['jobRole'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$pwd=$_POST['pwd'];
	$user='user';


	


	$sql="INSERT INTO log_in(login_username,login_password,login_email,account_type) VALUES('$empId','$pwd','$email',  '$user' )";

	if(mysqli_query($conn,$sql)){
		echo "<script>alert('record inserted successfully')</script>";
	}
	else{
		echo "<script>alert('Error in insertion')</script>";
	}

	$sql="INSERT INTO users(user_ID,First_Name,Last_Name,DOB,Gender,job_Role,branch,login_username) VALUES('$empId','$firstname','$lastname', '$DOB','$gender','$jobRole','$branch','$empId')";

	
	
	if(mysqli_query($conn,$sql)){
		echo "<script>alert('record inserted successfully')</script>";
		header("Location:userLogin.php");
	}
	else{
		echo "<script>alert('Error in insertion')</script>";
	}
	mysqli_close($conn);
?>