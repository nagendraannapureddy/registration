<?php
if(isset($_POST["Submit1"])){

 $name=$_POST['fullname'];
 
 $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $company=$_POST['company'];
$servername = "localhost";
$username = "root";
$password = "Raju@1234";
$dbname = "test";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	
}
$sql = "INSERT INTO  form (name,email,mobile,company)
VALUES ('$name', '$email', '$mobile','$company')";
if ($conn->query($sql) === TRUE) {
	

   header("Location: thankyou.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration for Webinar on Database Best Practiciesin AWS Cloud</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
<style>
.im
{
width:50%;
margin-left: 126px !important;
}

@media (max-width: 640px) and (min-width: 320px){
    .im{
        width: 50%;
    margin-left: 53px !important;
    }
}
</style>


</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Registration for Webinar on Database Best Practiciesin AWS Cloud</h2>
<img src= "../application/images/amazon_aurora.png" class="im">

                        <div class="form-group">

                            <input type="text" class="form-input"  name="fullname" id="fullname" placeholder=" Name" required >
                        </div>
						<!--<div class="form-group">
                            <input type="text" class="form-input" name="title" id="title" placeholder=" Title" required >
                        </div>-->
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  required >
                        </div>
						 <div class="form-group">
						 <input type="text" class="form-input" name="mobile" id="mobile" placeholder="Mobile" pattern="^\d{10}$" required>
</div>                     
					 <!-- <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                        </div>-->
						  <div class="form-group">
                            <input type="text" class="form-input" name="company" id="company" placeholder="Company" required >
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span style="
    border: 1px solid #8a8383;
"><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="Submit1" id="submit" class="form-submit" value="Submit"/>
                        </div>
                    </form>
                    
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>