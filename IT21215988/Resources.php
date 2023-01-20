<?php
include 'config.php';
$resource_id = $_POST['resource_id'];
  $resource_name= $_POST['resource_name'];
  $resource_type = $_POST['resource_type'];
  $resource_input=$_POST['resource_input'];

  $conn= new mysqli('localhost','root','','online examination');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }else{
      $stmt= $conn-> prepare("Insert into resource(resource_id,resource_name,resource_type,resource_input)values(?,?,?,?)");
      $stmt->bind_param("ssss",$resource_id,$resource_name,$resource_type,$resource_input);
      $stmt->execute();
      echo"Feedback Successfully..";
      $stmt->close();
      $stmt->close();
    
    }
    
    if(isset($POST['submit'])){
        $resource_id = $_POST['resource_id'];
        $resource_name= $_POST['resource_name'];
        $resource_type = $_POST['resource_type'];
        $resource_input=$_POST['resource_input'];

        $sql = "INSERT INTO `resource`(`resource_id`, `resource_name`, `resource_type`, `resource_input`)
         VALUES (NULL,'$resource_id','$resource_name','$resource_type','$resource_input')";

         $result =mysqli_query($conn,$sql);

         if($result){
             header("Location: resourceaddnew.php?msg=New record created sucessfully");
         }
         else{
             echo "Failed: " . mysqli_error($conn);
         }


    }
  
?>