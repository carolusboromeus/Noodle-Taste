<?php
    session_start();
    if (empty($_SESSION['isLoggedin']))
        header("location: logout.php");
	    require_once "connection.php";
        $video_id = $_GET['video_id'];
        $video_file = trim($_GET['video_file']);
        $video_image = trim($_GET['video_image']);

	if (!empty($video_file))
	     unlink("../video/".$video_file);
		 
	if (!empty($video_image))
	     unlink("../images/".$video_image);

	//unlink($remove);

	$sql= " DELETE FROM tb_video
            WHERE video_id='$video_id'";
 	if (mysqli_query($conn, $sql)) 
    {
        header("location: list_video.php");
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);	
?> 