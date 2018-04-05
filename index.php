<?php
include_once 'includes/app.php';


    error_reporting(E_ALL);
    ini_set('display_errors', 1);

?>
<!DOCTYPE html>
<html>
<head>
    <title>AVENIR 18</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="assets/css/index2.css">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/jquery.flipster.css">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="assets/img/2102-min-tiny.png">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

    <header>
    	<div class="blackdiv">
        <nav id="navs" class="navbar navbar-default" role="navigation">
            <div class="container" id="nav-pad">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" id="nn" data-toggle="collapse" data-target="#navbar-brand-centered">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand navbar-brand-centered"><a href="javascript:slide(4);"><img class="aven-logo" src="assets/img/avenir1.png"></a></div>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-brand-centered" style="margin-top: 15px;">
                    <ul class="nav navbar-nav">
                        <li><a href="portal/events#section02"><i class="fa fa-code" aria-hidden="true"></i> Cybernix</a></li>
                        <li><a href="portal/events#section03"><i class="fa fa-reddit" aria-hidden="true"></i> Robonix</a></li>
                        <li><a href="portal/events#section04"><i class="fa fa-camera-retro" aria-hidden="true"></i> Lensified</a></li>
                        <li><a href="portal/events#section05"><i class="fa fa-smile-o" aria-hidden="true"></i> Funz</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="portal/about"><i class="fa fa-users" aria-hidden="true"></i> Credits</a></li>
                        <li><a href="https://www.facebook.com/phoenix.avenir"><i class="fa fa-telegram" aria-hidden="true"></i> Contact</a></li>
                        <li><a href="#"><i class="fa fa-handshake-o" aria-hidden="true"></i> Sponsors</a></li>
                        <?php if(isset($_SESSION["username"])) { ?>
                        <li><a href="portal/dashboard"><i class="fa fa-user-circle" aria-hidden="true"></i> <?php echo $_SESSION["username"]; ?></a></li>
                        <?php } else { ?>
                        <li><a href="portal/login"><i class="fa fa-user-plus" aria-hidden="true"></i> Register/Signin</a></li>
                        <?php } ?>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        </div>
    </header>

    <div id="main">

    	<ul>
            <li>
                <div class="tpanel tpanel-default" id="cybernix">
                    <div class="tpanel-head">
                        CyberNix
                    </div>
                    <!-- <div class="tpanel-body">
                        Yahoooooo
                    </div> -->
                    <div class="tpanel-foot">
                        <a class="tbtn" href="portal/events#section02">More.. </a>
                    </div>
                </div>
            </li>
            <li>
                <div class="tpanel tpanel-default" id="robonix">
                    <div class="tpanel-head">
                        Robonix
                    </div>
                    <!-- <div class="tpanel-body">
                        Yahoooooo
                    </div> -->
                    <div class="tpanel-foot">
                        <a class="tbtn" href="portal/events#section03">More.. </a>
                    </div>
                </div>
            </li>
            <li>
                <div class="tpanel tpanel-default" id="lensified">
                    <div class="tpanel-head">
                        Lensified
                    </div>
                    <!-- <div class="tpanel-body">
                        Yahoooooo
                    </div> -->
                    <div class="tpanel-foot">
                        <a class="tbtn" href="portal/events#section04">More.. </a>
                    </div>
                </div>
            </li>
            <li>
                <div class="tpanel tpanel-default" id="ani">
                    <div class="tpanel-head">
                        Funz
                    </div>
                    <!-- <div class="tpanel-body">
                        Yahoooooo
                    </div> -->
                    <div class="tpanel-foot">
                        <a class="tbtn" href="portal/events#section05">More.. </a>
                    </div>
                </div>
            </li>
            <li>
                <div class="tpanel tpanel-default" id="homm">
                    <div class="tpanel-head">
                        Home
                    </div>
                    <!-- <div class="tpanel-body">
                        Yahoooooo
                    </div> -->
<!--                     <div class="tpanel-foot">
                        <a class="tbtn" href="">More.. </a>
                    </div> -->
                </div>
            </li>
            <li>
                <div class="tpanel tpanel-default" id="abt">
                    <div class="tpanel-head">
                        About
                    </div>
                   <!--  <div class="tpanel-body">
                        Yahoooooo
                    </div> -->
                    <div class="tpanel-foot">
                        <a class="tbtn" href="https://www.phoenixnsec.org">More.. </a>
                    </div>
                </div>
            </li>
            <li>
                <div class="tpanel tpanel-default" id="cont">
                    <div class="tpanel-head">
                        Contact
                    </div>
                    <!-- <div class="tpanel-body">
                        Yahoooooo
                    </div> -->
                    <div class="tpanel-foot">
                        <a class="tbtn" href="https://www.facebook.com/phoenix.avenir">More.. </a>
                    </div>
                </div>
            </li>
            <li>
                <div class="tpanel tpanel-default" id="spon">
                    <div class="tpanel-head">
                        Sponsors
                    </div>
                    <!-- <div class="tpanel-body">
                        Yahoooooo
                    </div> -->
                    <div class="tpanel-foot">
                        <a class="tbtn" href="#">More.. </a>
                    </div>
                </div>
            </li>
            <li>
                <div class="tpanel tpanel-register" id="regi">
                    <div class="tpanel-head">
                        Register
                    </div>
                    <!-- <div class="tpanel-body">
                        Yahoooooo
                    </div> -->
                    <div class="tpanel-foot">
                        <a class="tbtn" href="portal/login">More.. </a>
                    </div>
                </div>
            </li>
    </div>

<footer>
    <div class="footerHeader" ></div>
    <div class="container1">
		<div class="col-md-4" >
		    <h3>About us</h3>
		    <p>
		        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		    </p>
		</div>

		<div class="col-md-4">
		    <h3>Our Location </h3>
		    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.7490457344575!2d88.412595914334!3d22.47606294217284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02722b05a38e87%3A0x276c0d30e6be12ea!2sNetaji+Subhash+Engineering+College!5e0!3m2!1sen!2sin!4v1521961668479" sytle="" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col-md-4" >
		    <h3>Contact Us</h3>
		    <ul>
		        <li>Phone : 123 - 456 - 789</li>
		        <li>E-mail : info@comapyn.com</li>
		        <li>Fax : 123 - 456 - 789</li>
		    </ul>
		    <p>
		        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
		    </p>
		    <ul class="sm">
		        <li><a href="#" ><img src="https://www.facebook.com/images/fb_icon_325x325.png" class="img-responsive"></a></li>
		        <li><a href="#" ><img src="https://lh3.googleusercontent.com/00APBMVQh3yraN704gKCeM63KzeQ-zHUi5wK6E9TjRQ26McyqYBt-zy__4i8GXDAfeys=w300" class="img-responsive" ></a></li>
		        <li><a href="#" ><img src="http://playbookathlete.com/wp-content/uploads/2016/10/twitter-logo-4.png" class="img-responsive"  ></a></li>
		    </ul>
		</div>
    </div>
</footer>

    <div id="audio" style="display: none;"></div>

    <script src="assets/js/jquery.flipster.min.js"></script>

    <!-- https://github.com/TalAter/annyang/blob/master/docs/README.md -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/annyang/2.4.0/annyang.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/SpeechKITT/1.0.0/speechkitt.min.js"></script>
    <script src="assets/js/speakClient.js"></script>
    <script type="text/javascript" src="assets/js/index.js"></script>
</body>

</html>