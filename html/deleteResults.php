<?php
	include_once 'config.php'
?>

<?php
$sql ="DELETE FROM users WHERE login_username='$username';";

	    if(mysqli_query($conn,$sql)){

			echo "<script>alert('record Deleted successfully')</script>";
			header("Location:logout.php");
			
		}
		else{
			echo "<script>alert('Error in delete')</script>";
		}
        
?>