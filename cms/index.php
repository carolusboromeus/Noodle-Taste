<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Noodle Taste - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/alert.core.css" />
	<link rel="stylesheet" href="css/alert.lite.css" id="alertJStheme" />
    <script type="text/javascript" src="js/alert.js"></script>

</head>

<?php
    require_once "connection.php";
    if (isset($_POST['btnsubmit']))
	{
	  
	    $user_email = $_POST['user_email'];
		$user_password = md5($_POST['user_password']);
		
		$sql= "";
		$sql = " select * from tb_member where email='".$user_email."' and password='".$user_password."'";
		$result = mysqli_query($conn, $sql); 
     	if (mysqli_num_rows($result)> 0)
	 	{ 
	  		$row=mysqli_fetch_assoc($result);
	     	$username = $row['first_name']." ".$row['last_name'];
            session_start(); 
		    $_SESSION['username'] = $username;
			$_SESSION['isLoggedin']= '1'; 
			header("location: dashboard.php"); 
	    }	
	    else
        {
            echo "<script type='text/javascript' src'js/alert.js'>                
                    alertjs.show({
                                title: 'Error!',
                                text: 'Sorry your password or username is wrong',
                                from: 'left',
                                effect: 'ease-in-bounce',
                                complete: function( val ) {
                            }
                    });
             </script>";
        }	 
                           
	 
	}
?>

<body class="bg-gradient-info">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login Authenticaction</h1>
                                    </div>
                                    <form class="user" method="post" action="index.php">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="user_email" name="user_email" required aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="user_password" name="user_password" required placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" onClick="myFunction()" class="custom-control-input" id="customPassword">
                                                <label class="custom-control-label" for="customPassword">Show Password</labe>
                                            </div>
                                        </div>
                                        <!-- <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div> -->
                                        <button type="submit" name="btnsubmit" class="btn btn-info btn-user btn-block">Login</button>
                                    </form>
                                    <!--
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script>
        function myFunction() 
        {
	        var x = document.getElementById("user_password");
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

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>