<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<style>body{background-color: aliceblue;}</style>

<?php
//Starting PHP Session

session_start();


//Checking to see if the Submit Button was clicked
if(isset($_POST["login"])){
    //if it was, then Collect all the submitted Data and Store temporarily
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    
    //Calling Stored Sessions
    $storedemail = $_SESSION["email"];
    $storedpassword1 = $_SESSION["password1"];
    
    if($storedpassword1 !== $password){
        
        echo "<script>alert('Sorry, You have supplied the Wrong Password')</script>";
            
        echo "<div class='container'><div class='alert alert-danger'><center><h3>ERROR!!! WRONG PASSWORD</h3><p>Sorry, You have supplied the Wrong Password. <br>Please try again using the Right Password.<br><i>Thank You!</i></p><a href='index.php'><button class='btn btn-warning'>Back Home</button></a></center></div></div>";
        
    } else if($storedemail !== $email){
        
        echo "<script>alert('Sorry, Account with ($email) Not Found!')</script>";
        
        echo "<div class='container'><div class='alert alert-danger'><center><h3>ERROR!! ACCOUNT NOT FOUND!</h3><p>Sorry, No Account with <i>($email)</i> was found on our Database. <br>Kindly Supply the right Email.<br><i>Thank You!</i></p><a href='index.php'><button class='btn btn-warning'>Back Home</button></a></center></div></div>";
        
    } else {
        
        //If the Accounts Details match and it is not disabled, then log User in            
         echo "<script>alert('Welcome to your Dashobard')</script>";
         
         echo "<script>location.href='dashboard.php'</script>";
         
        //Storing the Session ID to be used througout, while User stays logged in
        $email = $_SESSION["email"];
        $surname = $_SESSION["surname"];
        $othernames = $_SESSION["othernames"];
        $phone = $_SESSION["phone"];
        $email = $_SESSION["email"];
        $password1 =$_SESSION["password1"];
    }
}   

?>