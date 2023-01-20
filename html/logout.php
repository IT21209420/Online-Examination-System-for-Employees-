<?php

	
	session_start();

   	if(isset($_SESSION['empId'])||isset($_SESSION['admin'])||isset($_SESSION['supervisor'])) { 
        session_destroy();
        header("Location:home.php");
    }




?>