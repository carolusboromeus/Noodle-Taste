<?php
    session_start();
    if (!isset( $_SESSION['isLoggedin']))
    {
        header("location:logout.php");
    }
    require_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>CRUD WITH PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
        <script>
            function konfirmasi()
            {
                if (!confirm('Yakin hapus member user ini ?'))
                    return false;
                else
                    return true;
            }
        </script>
    </head>
    <body>
        <div class="container">
            <br>
                <h2> List User Member</h2>
            <br>
            <a href="create_user.php"><button type="button" class="btn btn-info">Add Member User</button></a><br><br>
            <table class='table table-hover'>
                <thead>
                    <tr>
                        <th>Member ID</th> 
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $sSQL="";
                        $sSQL="select * from tb_member order  by member_id";
                        $result=mysqli_query($conn, $sSQL);
                        if (mysqli_num_rows($result) > 0) 
                        {
                            while ($row=mysqli_fetch_assoc($result))
                            {
                                $member_id = $row['member_id'];
                                $first_name = $row['first_name'];
                                $last_name = $row['last_name'];
                                $email= $row['email'];
                    ?>		
                                <tr>
                                    <td><?php echo $member_id;?></td>
                                    <td><?php echo  $first_name;?></td>
                                    <td><?php echo $last_name;?></td>
                                    <td><?php echo $email;?></td>
                                    <td>
                                        <?php   
                                            echo "<a href='update_user.php?member_id=$member_id'>UPDATE</a> 
                                            |   <a href='delete_user.php?member_id=$member_id' onclick='return konfirmasi();'>DELETE</a>";
                                        ?>		
                                    </td>
                                </tr>   
                    <?php	   
                            }
                        } 
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>