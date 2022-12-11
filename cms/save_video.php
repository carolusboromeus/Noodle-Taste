<?php
    require_once "connection.php";
	include "fungsi.php";
	if (isset($_POST['video_id']))
		$video_id = $_POST['video_id'];
		
	if (isset($_POST['video_title']))
    	$video_title = $_POST['video_title'];
		
	if (isset($_POST['video_detail']))	
		$video_detail = $_POST['video_detail'];
		
	// cek apakah ada file yang mau diupload atau tidak 

	$not_ok=1;
	$video_video="";
	if ($_FILES['fileMP4ToUpload']['name']!='')
	{
		$target_dir="video/";
		$message= UploadFilesFromForm($target_dir, "v", "fileMP4ToUpload");	
		
		if (substr($message,0,3)!='***')
		{
		    echo "<a href='list_video.php'>Back </a>";
		     die("<script>alert('".$message."');</script>");
			$not_ok=0;
		}   
		$video_file=$_FILES['fileMP4ToUpload']['name']; 
	}	
	
	$video_image="";
	if ($_FILES['fileImageToUpload']['name']!='')
	{
	    $target_dir="images/";	
		$message= UploadFilesFromForm($target_dir, "i", "fileImageToUpload");	
		
		if (substr($message,0,3)!='***')
		{   
            $not_ok=0;
			  	echo "<a href='list_video.php'>Back </a>";
		    die("<script>alert('".$message."');</script>");
		}
		$video_image=$_FILES['fileImageToUpload']['name'];
	}
	$sql= "INSERT INTO tb_video (video_id,video_title, video_detail,video_file,video_image)
           VALUES ('$video_id','$video_title', '$video_detail','$video_file','$video_image')";
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
		 