<?php
 
   session_start();
   if (empty($_SESSION['isLoggedin']))
        header("location: logout.php");
 
  

  
   
	require_once "connection.php";
	include "fungsi.php";
	
	$video_file_old="";
	$video_image_old="";
	
	$video_file="";
	$video_image="";
	
	
	if (isset($_POST['video_id']))
		$video_id = $_POST['video_id'];
		
	if (isset($_POST['video_title']))
    	$video_title = $_POST['video_title'];
		
	if (isset($_POST['video_detail']))	
		$video_detail = $_POST['video_detail'];
		
	if (isset($_POST['video_file']))	
		$video_file_old = $_POST['video_file'];	
		
	if (isset($_POST['video_image']))	
		$video_image_old = $_POST['video_image'];	
		
	if (isset($_POST['video_status']))	
		$video_status = $_POST['video_status'];
		

    			
	
	// cek apakah ada file yang mau diupload atau tidak 
	
	$not_ok=1;
	
	$video_file="";
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
		
		if (!empty($video_file_old))
		     unlink("video/".$video_file_old);
		
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
		
		if (!empty($video_image_old))
		      unlink("images/".$video_image_old);
		
		$video_image=$_FILES['fileImageToUpload']['name'];
		
	}
	
	$sql="";
	$sql=" delete from tb_video where video_id='$video_id'";
	mysqli_query($conn, $sql) or die ($sql);	 	
	
	$sql="";
	
	if ($video_file=="")
	   $video_file=$video_file_old;
	
	if ($video_image=="")
	   $video_image=$video_image_old;
	
	   
	
	$sql= "INSERT INTO tb_video (video_id,video_title, video_detail,video_file,video_image,video_status)
           VALUES ('$video_id','$video_title', '$video_detail','$video_file','$video_image','$video_status')";
	
	if (mysqli_query($conn, $sql)) {
          header("location: list_video.php");
    } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

mysqli_close($conn);	   
		 
	
	
?> 