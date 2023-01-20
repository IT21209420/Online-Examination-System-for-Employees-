<?php

include 'connect1.php';
if(isset($_GET['deleteid']))
{
    $admin_ID=$_GET['deleteid'];
$sql="delete from `administrator` where admin_ID=$admin_ID";
$result=mysqli_query($con,$sql);

if($result){
    //echo "Delete successfull";
    header('location:AdminDU.php');
    

}else{
    die(mysqli_error($con));
}

}
?>