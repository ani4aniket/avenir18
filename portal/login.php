<!DOCTYPE html>
<html>
<head>
	<title>Register | Login</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="../assets/css/login.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../assets/img/2102-min-tiny.png" type="image/png"/>
	


</head>
<body>
<nav>
	<div class="avenlogo">
		<img src="../assets/img/avenir (1).png" style="margin-top: 20px;">
	</div>
	<div class="avenlogo">
		<img src="../assets/img/nsec logo.png" style=" height: 75px;">
	</div>
</nav>
<div class="container">
    <?php
    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    
    if(strpos($fullUrl,"signup=empty")){  ?>
        <div class="alert alert-warning alert-dismissible">
                <strong>Fileds are not set</strong> 
            </div>
            <?php
            
    }

    elseif(strpos($fullUrl,"err=1")==true){  ?>
        <div class="alert alert-warning alert-dismissible">
                <strong>Not a Valid email</strong> 
            </div>
            <?php
            //exit();
    }

    elseif(strpos($fullUrl,"err=3")==true){ ?>
        <div class="alert alert-warning alert-dismissible">
                <strong>User email Exists</strong> 
        </div>
            <?php
            //exit();
    }

    elseif(strpos($fullUrl,"err=4")==true){ ?>
        <div class="alert alert-warning alert-dismissible">
                <strong>Error: Try again later</strong> 
         </div>
            <?php
        //    exit();
    }

    elseif(strpos($fullUrl,"err=5")==true){ ?>
        <div class="alert alert-warning alert-dismissible">
                <strong>Username exists</strong> 
        </div>
            <?php
          //  exit();
    }

    elseif(strpos($fullUrl,"err=7")==true){ ?>
        <div class="alert alert-warning alert-dismissible">
                <strong>Password do not match</strong> 
        </div>
            <?php
            //exit();    

    }


   ?>
	

    <!-- form-start    -->
    <div class="row main">
    		<div class="quo">
    			<img src="../assets/img/avenir-logo-loading-animation.gif" style="display: block; margin-right: auto; margin-left: auto; ">
    			<img src="../assets/img/main_1.png" style="  width: 700px; height: 31px;">
    		</div>

				<div class="main-login main-center">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" id="login-form-link">LOG IN</a>
							</div>
							<div class="col-xs-6">
								<a href="#" class="active" id="register-form-link">REGISTER</a>
							</div>
						</div>
					
					</div>
					<form class="form-horizontal" id="register-form" method="post" action="register.do.php">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="email" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" pattern=".{5,10}" required title="5 to 10 characters"/>
								</div>
							</div>
						</div>

						<div class="form-group">
                            <label for="confirm-password" class="cols-sm-2 control-label">Confirm Password</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="confirm" id="confirmPassword"  placeholder="Re-enter your Password"/>
                                </div>
                            </div>
                        </div></br>

						<div class="form-group ">
							<input type="submit" value="Register" class="btn btn-primary btn-lg btn-block login-button"></input>
						</div>
						
					</form>
					<form class="form-horizontal" id="login-form" method="post" action="login.do.php" style="display: none;">
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<input type="submit" value="LOG IN" class="btn btn-primary btn-lg btn-block login-button"></input>
						</div>
						<div class="text-center">
							<a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
						</div>

					</form>
			</div>
	</div>

   
</div>
<script type="text/javascript" src="../assets/js/login.js"></script>


</body>
</html>