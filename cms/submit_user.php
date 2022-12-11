<?php
    session_start();
    require_once "connection.php";
    $first=$_POST['first_name'];
    $last=$_POST['last_name'];
    $email= $_POST['email'];
    $password = md5(trim($_POST['password']));
    $sSQL=" insert into tb_member (first_name,last_name,email,password)
            values ('$first','$last','$email','$password')";
		  
    if (mysqli_query($conn,  $sSQL)) 
    {
	    header("location:list_user.php");
		exit();
    }	
    else
       echo "Error: " . $sSQL . "<br>" . mysqli_error($conn);	  
    mysqli_close($conn); 
?>



