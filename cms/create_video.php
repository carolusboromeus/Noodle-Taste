<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Enter New Food video</title>
        <meta charset="utf-8">
        <meta name="viewport" video="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            function Konfirm_Simpan()
            {
            if (confirm('Yakin simpan video ini?'))
                return true;
            else 
                return false;	  
            }
        </script>
    </head>
    <?php

        session_start();
        if (empty($_SESSION['isLoggedin']))
                header("location: logout.php");
        require_once "connection.php";
            $sql = "SELECT * FROM tb_video order by video_id desc  limit 1 ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0)
            {
                $row=mysqli_fetch_assoc($result);
                $video_id = $row['video_id']+1; 
            }
            else
            { 
                $video_id = 1;
            }
        
    ?> 
    <body>  
        <div class="container border ">
        <h3 style="text-align:center;margin-top:5px">Enter New Food video</h3><br>
            <form action="save_video.php" method="post" onSubmit="return Konfirm_Simpan()" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-sm-12">                              
                        <label for="member_id">Video ID:</label>
                        <input type="text" class="form-control" placeholder="Enter video id" id="video_id" name="video_id" value="<?php 
                            echo $video_id;?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <label for="first_name">Video Title:</label>
                        <input type="text" class="form-control" placeholder="Enter video title" id="video_title" name="video_title" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <label for="last_name">Video Detail </label>
                        <textarea class="form-control" placeholder="Enter video detail" id="video_detail" name="video_detail" ></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <label for="password">Select File JPG/PNG/GIF to Upload</label>
                        <input type="file" name="fileImageToUpload" id="fileImageToUpload" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <label for="email">Select File MP4 to Upload</label>
                        <input type="file" name="fileMP4ToUpload" id="fileMP4ToUpload" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12"> 
                        <button type="submit" class="btn btn-danger">Submit</button>
                        <a href="list_video.php"><button type="button" class="btn btn-secondary">Cancel</button></a>
                    </div>
                </div>
            </form> 
        </div>
    </body>
</html>
