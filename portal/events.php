<?php
include_once '../includes/app.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Events</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/css/events.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/events1.css">
  <link rel="icon" href="../assets/img/2102-min-tiny.png" type="image/png"/>
	
</head>
<body>
<div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                       <img src="../assets/img/avenir1.png">
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
                    <a href="about">Credits</a>
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
        

</div>

<section id="section01" class="demo">
  <h1>EVENTS</h1>
  <a href="#section02"><span></span><span></span><span></span></a>
</section>
<section id="section02" class="demo">
  <h1>CYBERNIX</h1>
  <a href="#section03"><span></span><span></span><span></span></a>
</section>
<section id="section03" class="demo">
  <h1>ROBONIX</h1>
  <a href="#section04"><span></span><span></span><span></span></a>
</section>
<section id="section04" class="demo">
  <h1>LENSIFIED</h1>
  <a href="#section05"><span></span><span></span><span></span></a>
</section>
<section id="section05" class="demo">
  <h1>GAMING</h1>
  <a href="#section06"><span></span><span></span><span></span></a>
</section>
<section id="section06" class="demo">
  <h1>FUNZ</h1>
  <a href="#section07"><span></span><span></span><span></span></a>
</section>
<section id="section07" class="demo">
  <h1>GENERAL</h1>
  <a href="#section08"><span></span><span></span><span></span></a>
</section>
<section id="section08" class="demo">
  <h1>NIRMAN</h1>
</section>

    <!-- /#wrapper -->
    <script src="../assets/js/events.js"></script>
</body>
</html>