<?php
    session_start();
    if (!isset( $_SESSION['isLoggedin']))
    {
        header("location:logout.php");
        exit();
    }
    require_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Update Employee</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>

    <?php
        $id=$_GET['member_id'];
        
        $sSQL=" select * from tb_member where member_id='$id' limit 1";
        $result=mysqli_query($conn, $sSQL);
        if (mysqli_num_rows($result) > 0) {
            while ($row=mysqli_fetch_assoc($result))
            {
                $first_name = $row['first_name'];
                $last_name = $row['last_name'];
                $email = $row['email'];
                
            }
        }	 
    ?>  

    <body>
        <div class="container">
            <h2>Update Member User</h2>
            <form action="submit_update.php" method="post">
                <div class="form-group">
                    <label for="member_id">Member ID</label>
                    <input type="text" class="form-control" id="member_id"  name="member_id" 
                    value="<?php echo $id;?>" readonly>  
                </div>
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control" id="first_name" placeholder="Enter first name" name="first_name" 
                    value="<?php echo $first_name;?>" required>  
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Enter last name" name="last_name" 
                    value="<?php echo $last_name;?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" 
                    value="<?php echo $email;?>" required>
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
                <a href="list_user.php"><button type="button" class="btn btn-danger">Cancel</button></a>
            </form>
        </div>
    </body>
</html>