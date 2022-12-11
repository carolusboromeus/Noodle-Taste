<?php
    session_start();
    if (!isset( $_SESSION['isLoggedin']))
    {
        header("location:logout.php");
        exit();
    }
    require_once "connection.php";

    $member_id = $_GET['member_id'];
    $sSQL=" delete from tb_member 
            where member_id='$member_id'";
        

    if (mysqli_query($conn,  $sSQL)) 
    {
        header("location:list_user.php");
        exit();
    }	
    else
        echo "Error: " . $sSQL . "<br>" . mysqli_error($conn);
?>