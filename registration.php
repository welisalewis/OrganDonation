<?php


error_reporting(E_ALL ^ E_NOTICE);

session_start();

define('DB_HOST', 'localhost');
define('DB_NAME', 'organ');
define('DB_USER', 'root'); 
define('DB_PASS', '');

//echo "HIiii";

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS) or die("Failed to connect to database:".mysqli_error($con));

$db= mysqli_select_db($con, DB_NAME) or die("Failed to connect to MySql".mysqli_error($con));
echo "connected";

function register($con)
   {

      $username = $_POST['username'];
      $email = $_POST['mail'];
      $DOB = $_POST['DOB'];
      $donation = $_POST['don_type'];
      $password = $_POST['password'];
      $cpassword = $_POST['cpassword'];



       $query="INSERT INTO user(username,email,DOB,don_type,password,cpassword) VALUES ('$username','$email','$DOB','$donation','$password','$cpassword')";
      $data=mysqli_query($con,$query) or die(mysqli_error($con));
        
      if($data){
      	echo "Your registrartion is complete";
      }
  }


if(isset($_POST['Register'])){
	register($con);
}



?>