<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	 <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<!-- *****************************************NAVBAR STARTS HERE **************************************************-->
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="">LiveTwice!</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="">Laws</a></li>
        <li><a href="">Helplines</a></li>
        <li><a href="">Forum</a></li>
      </ul>
      
     <!--   <?php (($_SESSION[])) {?>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="">Hi <b> <?php  $_SESSION[]; ?> </b>Logout</a>
        </li>
      </ul>

      <?php }  { ?>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="">Login/Sign Up</a></li>
      </ul>
      <?php } ?>  -->
            
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- *****************************************NAVBAR ENDS HERE **************************************************-->

  <div class="login-area">
        <div class="bg-image">
            <div class="login-signup">
                <div class="container">
                    <div class="login-header">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">     <!-- 6,6,12 -->
                                <div class="login-logo">
                                    <img src="" alt="LiveTwice!" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-8">
                                <div class="login-details">
                                    <ul class="nav nav-tabs navbar-right">
                                        <li><a data-toggle="tab" href="#register">Register</a></li>
                                        <li class="active"><a data-toggle="tab" href="#login">Login</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="tab-content">
                        <? php 
                        include (registration.php);
                        ?>
                        <div id="register" class="tab-pane">
                           <div class="login-inner">
                                <div class="title">
                                    <h1>Don't have an account? <span>Create one now!</span></h1>
                                </div>
                                <div class="login-form">
                                    <form method="POST" action="">
                                        <div class="form-details">
                                            <label class="user">
                                                <input type="text" name="username" placeholder= "Name" id="username" required>
                                            </label>
                                            <label class="mail">
                                                <input type="email" name="mail" placeholder="Email Address" id="mail" required>
                                            </label>
                                            <label class="DOB">
                                                <input type="date" name="DOB" placeholder="Date of Birth" id="DOB" required>
                                            </label>
                                           
                                            <label class="don_type">
                                                <input type="don_type" name="don_type" placeholder="Donation Type- Live or Deceased " id="don_type" required>
                                         
                                            </label>

                                            <label class="pass">
                                                <input type="password" name="passsword" placeholder="Password" id="password" required>
                                            </label>
                                            <label class="pass">
                                                <input type="password" name="cpasssword" placeholder="Confirm Password" id="password" required>
                                            </label>
                                        </div>
                                        <button type="submit" class="form-btn" onsubmit="registration.php" >Register</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="login" class="tab-pane fade in active">
                            <? php
                            include(login_1.php);
                            ?>
                            <div class="login-inner">
                                <div class="title">
                                    <h1> <span>Login!</span></h1>
                                   <!-- <h3><font color="red"><a href="#register">Create an account</font></a></h3>-->
                                </div>
                                <div class="login-form">
                                    <form method="POST" action="index.php">
                                        <div class="form-details">
                                            <label class="user">
                                                <input type="text" name="username" placeholder="Username" id="username" required>
                                            </label>
                                            <label class="pass">
                                                <input type="password" name="passsword" placeholder="Password" id="password" required>
                                            </label>
                                        </div>
                                        <button type="submit" class="form-btn" value="submit">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    



 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>