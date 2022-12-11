<?php
    session_start();
    if (!isset( $_SESSION['isLoggedin']))
    {
        header("location:logout.php");
    }
    require_once "connection.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>CRUD</title>
        <meta charset="utf-8">
        <meta name="viewport" video="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
        <script>
            function Konfirmasi()
            {
                if (confirm('Yakin hapus video ini?'))
                    return true;
                else
                    return false;
            }
        </script>
    </head>
   
   <body>
        <div class="container">
            <br>
                <h2> List Video Content</h2>
            <br>
            <a href="create_video.php"><input name="btnCreate" type="button"  class="btn btn-info" value="Add Video Content"></a>
            <br>
            <br>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th>Video ID</th>
                    <th>Video Title</th>
                    <th>Video File</th>
                    <th>Video Image</th>
                    <th>Video Status</th>
                    <th>Update</th>
                    <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql=" select `video_id`, `video_title`, `video_detail`, `video_file`, `video_image`,
                            if (`video_status`=0,'Enabled','Disabled') as video_sts from tb_video order by video_id ";
                            
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) 
                        {
                            while($row = mysqli_fetch_assoc($result)) 
                            {
                                echo "<tr>";
                                echo "<td>$row[video_id]</td>";
                                echo "<td>$row[video_title]</td>";
                                echo "<td>$row[video_file]</td>";
                                echo "<td>$row[video_image]</td>";
                                echo "<td>$row[video_sts]</td>";
                                echo "<td><a href='update_video.php?video_id=$row[video_id]' class='text-black'>Update</a></td>";
                                echo "<td><a href='delete_video.php?video_id=$row[video_id]&video_file=$row[video_file]&video_image=$row[video_image]' class='text-black' onclick='return Konfirmasi();'>Delete</a></td>";
                                echo "</tr>";
                            }
                        }
                        mysqli_close($conn);
                    ?> 
                </tbody>
            </table>
        </div>
    </body>
</html>
     
