<?php
 include_once 'config.php';
?>

<?php
	$depart=$_POST['depart'];
	$type=$_POST['type'];
	$duration=$_POST['duration'];
	$Attachment=$_POST['Attachment'];

	$sql="INSERT INTO createexam(exam_type,Duration,attachment,Department) VALUES('$type','$duration','$Attachment',  '$depart' )";

	if(mysqli_query($conn,$sql)){
		echo "<script>alert('record inserted successfully')</script>";
		header("Location:home.php");
	}
	else{
		echo "<script>alert('Error in insertion')</script>";
	}

	mysqli_close($conn);
?>