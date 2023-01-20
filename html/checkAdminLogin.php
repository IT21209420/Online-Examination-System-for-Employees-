<?php
 include 'config.php';
?>


<?php


    $adId=$_POST['adId'];
    $pwd=$_POST['pwd'];



    session_start();

    $sql="SELECT * FROM log_in WHERE login_username=? && account_type='Administrator';";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("s",$adId);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows>0)
    {
           
        while($data=$stmt_result->fetch_assoc())
        {
            if($data['login_password'] === $pwd)
            {
                echo "Login succesfully"; 
                $_SESSION['admin'] =  $adId; 
                header("Location:home.php");
            }
            else
            {
                echo "<script>alert('Invalid password')</script>";
               
            }
        }
    }

    else
    { 
         echo "<script>alert('Invalid username')</script>";
    }

    
    mysqli_close($conn);
?>