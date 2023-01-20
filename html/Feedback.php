<?php
  $userid = $_POST['userid'];
  $name = $_POST['name'];
  $feedback = $_POST['feedback'];

  $conn= new mysqli('localhost','root','','online examination');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }else{
      $stmt= $conn-> prepare("Insert into feedback(userid,name,feedback)values(?,?,?)");
      $stmt->bind_param("sss",$userid,$name,$feedback);
      $stmt->execute();
      echo"Feedback Successfully..";
      header("Location:home.php");

      $stmt->close();
  
    
    }
    
  
?>