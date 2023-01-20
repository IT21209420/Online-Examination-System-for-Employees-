<?php
 include_once 'config.php';
?>

<?php
	$name=$_POST['name'];
	$email=$_POST['email'];
	$text1=$_POST['text1'];
	



	$sql="INSERT INTO faq(admin_ID,email,description) VALUES('$name','$email','$text1')";

	if(mysqli_query($conn,$sql)){
		echo "<script>alert('record inserted successfully')</script>";
	}
	else{
		echo "<script>alert('Error in insertion')</script>";
	}
    
	mysqli_close($conn);
?>