<?php

require_once('login.php');

date_default_timezone_set("Africa/Lagos");

//Checking to see if this Session is set
if(isset($_SESSION['email'])){
    $surname = $_SESSION["surname"];
    $othernames = $_SESSION["othernames"];
    $phone = $_SESSION["phone"];
    $email = $_SESSION["email"];

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>My Side Hustle</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/styles.css">
	</head>
	<style>
        body{
            background-color: aliceblue;
        }
        .nav-tabs{
            padding: 5px;
        }
        .nav-link{
            margin-left: 5%;
            align-content: center;
        }
        .nav-item a{
            color:white;
            font-weight: bold;
            text-decoration: none;
        }
        .overlay{
           margin: 2%; 
        }
    </style>
	<body>
		<nav class="navbar navbar-dark bg-dark">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link active">Home</a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link">Logout</a>
                </li>
            </ul>
            <marquee behavior="" direction="" style="color:white;"><b><?php echo $othernames; ?></b> Welcome to your Profile</marquee>
        </nav>
		<div class="col-12">
		    <h2><center>Welcome Home</center></h2>
		</div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center">Below Are Your Basic Information</h3>
                    <table class="table table-responsive table-striped table-dark table-hover" style="margin: 2% auto;max-width:600px;padding:5px;border-radius:8px;">
                        <tr>
                            <td>Surname</td>
                            <td><b><?php echo $surname; ?></b></td>
                        </tr>
                        <tr>
                            <td>Other Names</td>
                            <td><b><?php echo $othernames; ?></b></td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td><b><?php echo $phone; ?></b></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><b><?php echo $email; ?></b></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>


<?php
    
    
}

else{
    echo "<script>alert('Please, kindly Login')</script>";
    
    echo "<script>location.href='index.php'</script>";
    
    return false;
}

?>