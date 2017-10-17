<?php 

error_reporting(E_ALL ^ E_NOTICE);
include(login_1.php);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>LiveTwice</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        <li><a href="exp.php">Forum</a></li>
      </ul>
      
  
   <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="#">Welcome <b> <?php echo $_SESSION['login_user']; ?> </b>Logout</a>
        </li>
      </ul>
   
     
     <!--   <ul class="nav navbar-nav navbar-right">
        <li><a href="login.html">Login/Sign Up</a></li>
      </ul>  -->
     

      </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->

            

     <!-- <h2><a href = "logout.php">Sign Out</a></h2>-->
      
<!-- *****************************************NAVBAR ENDS HERE **************************************************-->



<div class="container">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel" position="absolute">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" >
      <div class="item active">
        <img src="assets/Donate-Organs.jpg"  style="width:100%;max-height: 20%;">
         <div class="container">
        <div class="carousel-caption">
          
          <p></p>
          <p align="left"><a class="btn btn-lg btn-success"  href="">Learn More!</a>
        </p>
        </div>
      </div>

      </div>

      <div class="item">
        <img src="assets/Organ.jpg"  style="width:100%;max-height:20%;">
      </div>
    
      <div class="item">
        <img src="assets/Lead-organ-donation.jpg"  style="width:100%;max-height: 20%;">
      </div>

<div class="item">
        <img src="assets/hero.png"  style="width:100%;max-height: 20%;">
      </div>

      <div class="item" >
      
        <img src="assets/organ-donation1.jpg"  style="width:100%;max-height: 20%;">
        <div class="container">
        <div class="carousel-caption">
          
          <p></p>
          <p align="right"><a class="btn btn-lg btn-danger"  href="">Register Now!</a>
        </p>
        </div>
      </div>







        
        <!--<img src="assets/vutton.png" style="width:20%;height: 10%;"class="btn btn-lg btn-primary" style=" position: absolute; top: 0;right: 0;" class="conner">-->
      
      
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</nav>


 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>