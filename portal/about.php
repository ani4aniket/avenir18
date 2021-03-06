<?php
include_once '../includes/app.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>About</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/about1.css">
  <link rel="stylesheet" type="text/css" href="assets/css/about.css">
  <link rel="icon" href="assets/img/2102-min-tiny.png" type="image/png"/>

</head>
<body>
<div id="wrapper">
        <div class="overlay"></div>

        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                       <img src="assets/img/avenir1.png">
                    </a>
                </li>
                <?php if(isset($_SESSION["username"])) { ?>
                <li>
                    <a href="#" style="text-transform: uppercase;"><em><?php echo $_SESSION["username"] ?></em></a>
                </li>
                <?php } ?>
                <li>
                    <a href="/index">Home</a>
                </li>
                <li>
                    <a href="events">Events</a>
                </li>
                <li>
                    <a href="https://www.facebook.com/phoenix.avenir">Contact Us</a>
                </li>
                <li>
                    <a href="logout">Logout</a>
                </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>


        </div>
        <!-- /#page-content-wrapper -->
<section class="team">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="col-lg-12">
          <h3 class="description">OUR TEAM</h3>
          <hr class="hr-primary"/>
          <div class="row pt-md">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="assets/img/anubhav.jpg" style="height: 206.25px;  width: 206.25px;" class="img-responsive">
                <ul class="text-center">
                  <a href="https://www.facebook.com/xprilion/"><li><i class="fa fa-facebook"></i></li></a>
                  <a href="https://www.instagram.com/xprilion/"><li><i class="fa fa-instagram"></i></li></a>
                  <a href="https://www.github.com/xprilion/"><li><i class="fa fa-github"></i></li></a>
                </ul>
              </div>
              <h1>Anubhav Singh</h1>
              <h2>Developer</h2>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="assets/img/aniket.jpg" style="height: 206.25px;  width: 206.25px;" class="img-responsive">
                <ul class="text-center">
                  <a href="https://www.facebook.com/ani4aniket/"><li><i class="fa fa-facebook"></i></li></a>
                  <a href="https://www.instagram.com/ani4aniket"><li><i class="fa fa-instagram"></i></li></a>
                  <a href="https://www.github.com/ani4aniket/"><li><i class="fa fa-github"></i></li></a>
                </ul>
              </div>
              <h1>Aniket Anand</h1>
              <h2>Developer/Designer</h2>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="assets/img/tanweer.jpg" style="height: 206.25px; width: 206.25px;" class="img-responsive">
                <ul class="text-center">
                  <a href="https://www.facebook.com/mohammed.tanweeranwar"><li><i class="fa fa-facebook"></i></li></a>
                  <a href="https://www.instagram.com/__gb_11"><li><i class="fa fa-instagram"></i></li></a>
                  <a href="https://github.com/tanweer919"><li><i class="fa fa-github"></i></li></a>
                </ul>
              </div>
              <h1>Tanweer Anwar</h1>
              <h2>Developer</h2>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="assets/img/mahesh.jpg" style="height: 206.25px; width: 206.25px;" class="img-responsive">
                <ul class="text-center">
                  <a href="https://www.facebook.com/immahesh10"><li><i class="fa fa-facebook"></i></li></a>
                  <a href="https://www.instagram.com/immahesh_10"><li><i class="fa fa-instagram"></i></li></a>
                  <a href="https://github.com/m1github"><li><i class="fa fa-github"></i></li></a>
                </ul>
              </div>
              <h1>Mahesh Kumar</h1>
              <h2>Designer</h2>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    </div>
    <footer>
    <div class="container">
        <div class="col-md-10 col-md-offset-1 text-center">

            <h6>Coded with <i class="fa fa-heart blue"></i> by <a href="http://www.phoenixnsec.org" target="_blank">Phoenix</a></h6>
        </div>
    </div>
</footer>

    <!-- /#wrapper -->
    <script src="assets/js/dash.js"></script>
</body>
</html>