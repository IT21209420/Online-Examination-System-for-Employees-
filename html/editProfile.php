
<?php
	include_once 'config.php'
?>


<?php


	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$DOB=$_POST['DOB'];
	$gender=$_POST['gender'];
	$post=$_POST['post'];
	$branch=$_POST['branch'];
	$submit=$_POST['editBtn'];

	session_start();

	$username=$_SESSION['empId'];

	
	
	if($submit == 'Update')
	{
		$sql ="UPDATE users SET First_Name='$firstname',Last_Name='$lastname',DOB='$DOB',Gender='$gender',job_Role='$post',branch='$branch' WHERE login_username='$username';";

	    	if(mysqli_query($conn,$sql)){

			echo "<script>alert('record updated successfully')</script>";
			header("Location:home.php");

			
		}
		else{
			echo "<script>alert('Error in update')</script>";

		}
	
	}

    
	else if($submit == 'Delete')
	{
		$sql ="DELETE FROM users WHERE login_username='$username';";

	    if(mysqli_query($conn,$sql)){

			echo "<script>alert('record Deleted successfully')</script>";
			header("Location:logout.php");
			
		}
		else{
			echo "<script>alert('Error in delete')</script>";
		}

	}

	else if($submit == 'changed')
	{ 
	 	header("Location:profile.php");
	}
  

    mysqli_close($conn);


?>