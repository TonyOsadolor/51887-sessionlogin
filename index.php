<?php

session_start();

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Side Hustle</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/styles.css">
	</head>
	<style>
        body{
            background-color: aliceblue;
        }
        .login-form{
            margin: 3% auto;
            max-width: 500px;
        }
        .btn-login{
            width: 100%;
            margin: 2% auto;
        }
        .form-body{
            background-color: #abe3e3;
            padding: 10px;
            border: 2px solid darkblue;
            text-align: center;
            font-weight: bold;
            line-height: 15px;
            border-radius: 8px;
        }
        form input{
            text-align: center;
            font-weight: bold;
        }
    </style>
	<body>
		<div class="container">
		    <div class="row">
                <div class="col-12">
                   <br>
                    <h3><center>This is a simple Assignment</center></h3>
                    <h4><center>Users will be able to Register and Login using Session Data</center></h4>
                </div>
		        <div class="col-12">
		            <div class="login-form">
		                <form action="login.php" method="post" autocomplete="off" class="form-body">
		                    <div class="form-row">
                                <div class="col-12">
                                    <h5><center>Please Login to Proceed to Your Dashboard</center></h5>
                                </div>
		                        <div class="col-12">
		                            <h4 class="label">Email:</h4>
		                            <input type="email" name="email"id="email" class="form-control" required autofocus>
		                        </div>
		                        <div class="col-12">
		                            <h4 class="label">Password:</h4>
		                            <input type="password" name="password"id="password" class="form-control" required>
		                        </div>
		                        <div class="col-12">
		                            <button class="btn btn-success btn-login" name="login" type="submit">LOGIN</button>
		                        </div>
		                        <div class="col-12">
		                            <button class="btn btn-info btn-login" data-bs-toggle="modal" data-bs-target="#signup" type="button">REGISTER</button>
		                        </div>
		                    </div>
		                </form>
		            </div>
		        </div>
		    </div>
		</div>
		
		<?php // Sign UP Modal Box?>
		<div class="modal fade" id="signup" tabindex="-1">
		    <div class="modal-dialog">
		        <div class="modal-content" style="background-color:#042904;color:white;min-width:500px;">
		            <div class="modal-body">
		                <div class="container">
		                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" autocomplete="off">
                                <legend style="border:2px solid white;border-radius:10px;padding:5px;">
                                    <div class="row g-3">
                                        <div class="form-group col-6">
                                            <span><center><b>Surname:</b></center></span>
                                            <input type="text" name="surname" class="form-control" placeholder="John" required>
                                        </div>
                                        <div class="form-group col-6">
                                            <span><center><b>Other Names:</b></center></span>
                                            <input type="text" name="othernames" class="form-control" placeholder="Kennedy Smith" required>
                                        </div>
                                        <div class="form-group col-6">
                                            <span><center><b>Phone:</b></center></span>
                                            <input type="tel" name="phone" class="form-control" placeholder="09076589732" required>
                                        </div>
                                        <div class="form-group col-6">
                                            <span><center><b>Email:</b></center></span>
                                            <input type="email" name="email" class="form-control" placeholder="example@domain.com" required>
                                        </div>
                                        <div class="form-group col-6">
                                            <span><center><b>Enter Password:</b></center></span>
                                            <input type="password" name="password1" class="form-control" placeholder="Enter New Password" required>
                                        </div>
                                        <div class="form-group col-6">
                                            <span><center><b>Repeat Password:</b></center></span>
                                            <input type="password" name="password2" class="form-control" placeholder="Confirm New Password" required>
                                        </div>
                                        <br>
                                        <div class="col-12">
                                            <button class="btn btn-primary login-btn col-12 form-control" name="signup" id="signup" type="submit">SIGN UP</button>
                                        </div>
                                    </div>
                                </legend>
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<?php // Sign UP Modal Box?>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $surname = $_POST["surname"];
    $othernames = $_POST["othernames"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];
    
    if($password1 != $password2){
        echo "<script>alert('Sorry Confirm Password Did not match!')</script>";
    }
    
    $_SESSION["surname"] = $surname;
    $_SESSION["othernames"] = $othernames;
    $_SESSION["phone"] = $phone;
    $_SESSION["email"] = $email;
    $_SESSION["password1"] = $password1;
    
    echo "<h2 class='alert alert-success text-center'> <b>$othernames</b> Your Registration was Successful!</h2>";
}
?>