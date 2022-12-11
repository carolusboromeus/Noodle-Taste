<?php
    require_once "connection.php";
    session_start();
    $member_id = $_POST['member_id'];
    $first=$_POST['first_name'];
    $last=$_POST['last_name'];
    $email= $_POST['email'];
    
    $sSQL=" update tb_member set first_name='$first',last_name='$last',email='$email'
            where member_id='$member_id'";
        

    if (mysqli_query($conn,  $sSQL)) 
    {
        header("location:list_user.php");
        exit();
    }	
    else
        echo "Error: " . $sSQL . "<br>" . mysqli_error($conn);   
    mysqli_close($conn); 
?>