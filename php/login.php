<?php
error_reporting(E_NOTICE);

session_start();

define('DB_HOST', 'localhost');
define('DB_NAME', 'organ');
define('DB_USER', 'root'); 
define('DB_PASS', '');

//echo "let,s hvvddbh";

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS) or die("Failed to connect to database:".mysqli_error($con));

$db= mysqli_select_db($con, DB_NAME) or die("Failed to connect to MySql".mysqli_error($con));
//echo "connected";



if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 


        /*if(empty(trim($_POST["username"]))){              //check for text validation
        $username_err = "Please enter a username.";
    } else{*/
      $query = "SELECT id FROM user WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$query);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);

      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");

         $_SESSION['login_user'] = $myusername;
         echo "this is working!Don't panic";
         
        // header(" location:index.php");
      }else {
         $error = "Your Login Name or Password is invalid";

      }
   }




?>