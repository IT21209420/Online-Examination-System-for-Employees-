<?php
 include 'config.php';
?>


<?php


    $empId=$_POST['empId'];
    $pwd=$_POST['pwd'];

    session_start(); 

    $sql="SELECT * FROM log_in WHERE login_username=? && account_type='user';";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("s",$empId);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows>0)
    {
        while($data=$stmt_result->fetch_assoc())
        {
            if($data['login_password'] === $pwd && $data['account_type'] === 'user' )
            {
                echo "Login succesfully"; 
                $_SESSION['empId'] = $empId; 
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