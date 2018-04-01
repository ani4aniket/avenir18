<?php
include_once '../includes/app.php';
if($logged) { ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	 <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../assets/css/dashboard.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
                       <img src="../assets/img/avenir (1).png">
                    </a>
                </li>
                <li>
                    <a href="#" style="text-transform: uppercase;"><em><?php echo $_SESSION["username"] ?></em></a>
                </li>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">Payments</a>
                </li>
                <li>
                    <a href="#">Contact Us</a>
                </li>
                <li>
                    <a href="#">Credits</a>
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
            <form action="generate_qr.php" method="POST">
                        <div class="evet" id="cyb">
              <figure class="snip0057 red">
          <figcaption>
          <h2>CYBER<span>NIX</span></h2>
          <p>Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis ullamcorper eum cu, an rebum nonumes liberavisse pri.</p>
          <div class="icons"><a href="#"><i class="ion-ios-home"></i></a><a href="#"><i class="ion-ios-email"></i></a><a href="#"><i class="ion-ios-telephone"></i></a></div>
          </figcaption>
          <div class="image"><img src="https://www.pixelstalk.net/wp-content/uploads/images1/Download-Desktop-Camera-Wallpaper-HD.jpg" width="440px" height="440px" alt="sample4"/></div>
          <div class="position"></div>
        </figure> 
        <ul class="chk">
          <li><div class="dropdown">
            <div class="dropbtn">ENCODING </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="ENC">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">STACK TRACE </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="STA">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">BON APETTITE </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="BON">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">WEBY-AWARD </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="WEB">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>

        </ul>
      </div>
      <div class="evet" id="lenz">
              <figure class="snip0057 red">
          <figcaption>
          <h2>LENS<span>IFIED</span></h2>
          <p>Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis ullamcorper eum cu, an rebum nonumes liberavisse pri.</p>
          <div class="icons"><a href="#"><i class="ion-ios-home"></i></a><a href="#"><i class="ion-ios-email"></i></a><a href="#"><i class="ion-ios-telephone"></i></a></div>
          </figcaption>
          <div class="image"><img src="https://www.pixelstalk.net/wp-content/uploads/images1/Download-Desktop-Camera-Wallpaper-HD.jpg" width="440px" height="440px" alt="sample4"/></div>
          <div class="position"></div>
        </figure> 
        <ul class="chk">
          <li><div class="dropdown">
            <div class="dropbtn">SPECTRUM </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="SPE">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">LENZ'S EYE </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="LEN">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">CLICK INSTANT </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="CLI">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">INSTA CLICK </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="INS">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">CINE ARTICULATE </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="CIN">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">GLIMPSE </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="GLI">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">BIOSCOPE </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="BIO">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>

        </ul>
      </div>
      <div class="evet" id="game">
              <figure class="snip0057 red">
          <figcaption>
          <h2>GAM<span>ING</span></h2>
          <p>Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis ullamcorper eum cu, an rebum nonumes liberavisse pri.</p>
          <div class="icons"><a href="#"><i class="ion-ios-home"></i></a><a href="#"><i class="ion-ios-email"></i></a><a href="#"><i class="ion-ios-telephone"></i></a></div>
          </figcaption>
          <div class="image"><img src="https://www.pixelstalk.net/wp-content/uploads/images1/Download-Desktop-Camera-Wallpaper-HD.jpg" width="440px" height="440px" alt="sample4"/></div>
          <div class="position"></div>
        </figure> 
        <ul class="chk">
          <li><div class="dropdown">
            <div class="dropbtn">FIFA 15</div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="FIF">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">NFS </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="NFS">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">DOTA 2 </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="DOT">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">CS GO </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="CSG">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>

        </ul>
      </div>
            <div class="evet" id="fun">
              <figure class="snip0057 red">
          <figcaption>
          <h2>FUN<span>Z</span></h2>
          <p>Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis ullamcorper eum cu, an rebum nonumes liberavisse pri.</p>
          <div class="icons"><a href="#"><i class="ion-ios-home"></i></a><a href="#"><i class="ion-ios-email"></i></a><a href="#"><i class="ion-ios-telephone"></i></a></div>
          </figcaption>
          <div class="image"><img src="https://www.pixelstalk.net/wp-content/uploads/images1/Download-Desktop-Camera-Wallpaper-HD.jpg" width="440px" height="440px" alt="sample4"/></div>
          <div class="position"></div>
        </figure> 
        <ul class="chk">
          <li><div class="dropdown">
            <div class="dropbtn">TREASURE HUNT</div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="TRE">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">BEG BORROW STEAL </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="BEG">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">FACE PAINTING </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="FAC">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">PAPER TREND </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="PAP">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">ENCATOLOGY </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="ENY">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>

        </ul>
      </div>
      <div class="evet" id="gen">
              <figure class="snip0057 red">
          <figcaption>
          <h2>GEN<span>ERAL</span></h2>
          <p>Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis ullamcorper eum cu, an rebum nonumes liberavisse pri.</p>
          <div class="icons"><a href="#"><i class="ion-ios-home"></i></a><a href="#"><i class="ion-ios-email"></i></a><a href="#"><i class="ion-ios-telephone"></i></a></div>
          </figcaption>
          <div class="image"><img src="https://www.pixelstalk.net/wp-content/uploads/images1/Download-Desktop-Camera-Wallpaper-HD.jpg" width="440px" height="440px" alt="sample4"/></div>
          <div class="position"></div>
        </figure> 
        <ul class="chk">
          <li><div class="dropdown">
            <div class="dropbtn">DISPUTE </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="DIS">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">CONTRIVE </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="CON">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">ARITHMOS </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="ARI">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">KNIGHTED </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="KNI">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">SUDOKU </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="SOD">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">QUIZZARD </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="QUI">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">PICTO PRESS </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="PIC">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">TECH FARE </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="TEC">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>

        </ul>
      </div>
            <div class="evet" id="rbo">
              <figure class="snip0057 red">
          <figcaption>
          <h2>ROBO<span>NIX</span></h2>
          <p>Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis ullamcorper eum cu, an rebum nonumes liberavisse pri.</p>
          <div class="icons"><a href="#"><i class="ion-ios-home"></i></a><a href="#"><i class="ion-ios-email"></i></a><a href="#"><i class="ion-ios-telephone"></i></a></div>
          </figcaption>
          <div class="image"><img src="https://www.pixelstalk.net/wp-content/uploads/images1/Download-Desktop-Camera-Wallpaper-HD.jpg" width="440px" height="440px" alt="sample4"/></div>
          <div class="position"></div>
        </figure> 
        <ul class="chk">
          <li><div class="dropdown">
            <div class="dropbtn">LINE TRACE</div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="LIN">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">BLOCK MANIA </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="BLO">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">ROBO SOCCER </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="ROB">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">TERRA RANGER </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="TER">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">ROYAL RUMBLE </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="ROY">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>

        </ul>
      </div>
      <div class="evet" id="nirman">
              <figure class="snip0057 red">
          <figcaption>
          <h2>NIR<span>MAN</span></h2>
          <p>Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis ullamcorper eum cu, an rebum nonumes liberavisse pri.</p>
          <div class="icons"><a href="#"><i class="ion-ios-home"></i></a><a href="#"><i class="ion-ios-email"></i></a><a href="#"><i class="ion-ios-telephone"></i></a></div>
          </figcaption>
          <div class="image"><img src="https://www.pixelstalk.net/wp-content/uploads/images1/Download-Desktop-Camera-Wallpaper-HD.jpg" width="440px" height="440px" alt="sample4"/></div>
          <div class="position"></div>
        </figure> 
        <ul class="chk">
          <li><div class="dropdown">
            <div class="dropbtn">BRIDGE O MANIA</div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="BRI">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">SURV O LARE </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="SUR">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">CITY PLANNING </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="CIT">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">BRICK O ARC </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="BRK">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>
          <li><div class="dropdown">
            <div class="dropbtn">CONSTRUZIONE </div>
            <div id="myDropdown" class="dropdown-content">
              <p style="padding: 5px;">Lorem ipsum dolor sit amet, vim ei summo aeque, recteque voluptatum mei ne. Quis</p>
            </div>
        </div>
        <div class="position">
            <div class="checkbox">
                <label style="font-size: 1.5em">
                  <input type="checkbox" name="events[]" value="CTZ">
                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                </label>
              </div>
          </div></li>

        </ul>
      </div>
        <figure class="snip0058">
          <h3 style="color: white;">Show the QR code and pay the registration amount in our college (Phoenix- Tech Club).</h3>
          <input type="submit" name="submit" value="submit" class="btn btn-primary">Click to generate QR</input>
        </figure>
      </div>
    	</form>
        <!-- /#page-content-wrapper -->
        
</div>
  
    <!-- Main library -->
        
    <!-- /#wrapper -->
    <script src="../assets/js/dash.js"></script>
</body>
</html>
<?php } else {
   header("Location: login");
   exit();
}
?>