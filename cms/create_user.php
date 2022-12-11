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
    <title>Add Employee</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h2>Enter New Member User</h2>
            <form action="submit_user.php" method="post">
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control" id="first_name" placeholder="Enter first name" name="first_name" required>  
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Enter last name" name="last_name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                        <input type="checkbox" onClick="myFunction()" class="custom-control-input" id="customPassword">
                        <label class="custom-control-label" for="customPassword">Show Password</labe>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>        
                <a href="list_user.php"><button type="button" class="btn btn-danger">Cancel</button></a>      
            </form>
        </div>

        <script>
        function myFunction() 
        {
	        var x = document.getElementById("password");
  	        if (x.type === "password") 
	        {
    	        x.type = "text";
  	        }
	        else 
	        {
    	        x.type = "password";
  	        }
        }
        </script>

    </body>
</html>