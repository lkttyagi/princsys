<?php
	session_start();
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Interns- Test File</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type='text/css'>
    <!-- Theme CSS -->
    <link href="css/princsys.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/princsys.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top affix">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Internship Validation Test</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#"></a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#">Copmanies</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Cities</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<!-- Registration form -->
	
	<div class="container1">
	<form id="test" action="connect.php" enctype="multipart/form-data" method="post">
		<div class="row">
		  <h4>Personal Details</h4>
		  <div class="col-md-12">
		  <select name="" id="#input-group select it" class="input-group-icon">
			<option value="">Select</option>
			<option value="">IT</option>
			<option value="">Non-IT</option>
		  </select>
			<div class="col-md-8">				
			  <div id="#input-group"class="input-group-icon">
				<input type="text" placeholder="Full Name"  pattern="[A-Za-z ]+" maxlength="65" required  name="name" />
				<div class="input-icon"><i class="fa fa-user"></i></div>
			  </div>
			  <div id="#input-group" class="input-group-icon">
				<input type="email" placeholder="Email Adress" name="email" required />
				<div class="input-icon"><i class="fa fa-envelope"></i></div>
			  </div>
			  <div class="col-md-8" style="margin-left: -15px;">
			  <div id="#input-group" class="input-group-icon">
				<input type="mobile" placeholder="Contact Number" pattern="[0-9]+" minlength="10"
				maxlength="10" required />
				<div class="input-icon"><i class="fa fa-mobile"></i></div>
			  </div>
			  </div>
			</div>
		  </div>
		</div>
		<div class="row">
		  <div class="col-half">
			<h4>Date of Birth</h4>
				<div class="col-md-12">
					<div class="input-group">
					  <div class="col-third">
						<input type="text" placeholder="DD" pattern="[0-9]+" required />
					  </div>
					  <div class="col-third">
						<input type="text" placeholder="MM" pattern="[0-9]+" required  />
					  </div>
					  <div class="col-third">
						<input type="text" placeholder="YYYY" pattern="[0-9]+" required   />
					  </div>
					</div>
				</div>
		  </div>
		  <div class="col-half">
			<h4>Gender</h4>
				<div class="col-md-12">
				  <select name="" id="#input-group select"class="input-group-icon" type="select" >
					<option value="" required >Select</option>
					<option value="">Male</option>
					<option value="">Female</option>
				  </select>
				</div>
		  </div>
		  <div class="col-half">
			<h4>PAN/Aadhar Card Number </h4>
			  <div class="col-md-8" style="margin-left: -15px;">
			  <div id="#input-group" class="input-group-icon">
				<input type="text" placeholder="PAN/Aadhar Card Number" pattern="[A-Za-z0-9]+"
				minlength="12" maxlength="12" required />
				<div class="input-icon"><i class="fa fa-credit-card"></i></div>
			  </div>
			  </div>
		  </div>
		</div>
		<div class="row">
		  <h4>Preferred Location</h4>
		  <div class="col-md-12">
		  <div class="col-md-8">
		  <select name="" id="#input-group select"class="input-group-icon" type="select" >
			<option value="" required >Select City</option>
			<option value="">Noida</option>
			<option value="">Delhi</option>
			<option value="">Gurgaon</option>
			<option value="">Banglore</option>
			<option value="">Hyderabad</option>
			<option value="">Mumbai</option>
			<option value="">Chennai</option>
			<option value="">Pune</option>
			<option value="">Ahmedabad</option>
			<option value="">Kolkata</option>
		  </select>
		  </div>
		  </div>
		  <div class="input-group input-group-icon" style="margin-left: 40px;">
			<input type="text" placeholder="Current City"/>
		  </div>
			<h4>Upload Resume</h4>
			  <div class="col-md-8" style="margin-left: -15px;">
<!--				<form method="post" enctype="multipart/form-data" action="upload.php">-->
					<div class="container"> <br />
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading"><strong>Upload files</strong></div>
									<div class="panel-body">
										<div class="input-group file-preview">
											<input placeholder="" type="text" class="form-control file-preview-filename">
											<!-- don't give a name === doesn't send on POST/GET --> 
											<span class="input-group-btn"> 
											<!-- file-preview-clear button -->
											<button type="button" class="btn btn-default file-preview-clear" style="display:none;"> <span class="glyphicon glyphicon-remove"></span> Clear </button>
											<!-- file-preview-input -->
											<div class="btn btn-default file-preview-input"> <span class="glyphicon glyphicon-folder-open"></span> <span class="file-preview-input-title">Browse</span>
												<input type="file" name="file"/>
												<!-- rename it --> 
											</div>
<!--											<button type="button" class="btn btn-labeled btn-primary" >Upload <span class="btn-label"><i class="glyphicon glyphicon-upload"></i> </span></button>-->
											</span> 
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
<!--				</form>-->
			  </div>
		</div>					  
		<div class="row">
		  <h4>Terms and Conditions</h4>
		  <div class="input-group">
			<input type="checkbox" id="terms" required />
			<label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
		  </div>
			<div class="row" style="text-align: center;">
				<a href="invoice.php" class="btn btn-default btn-lg" style="background-color: #0bbff2; color: #fff;"><span class="network-name"><input type="submit" value="Apply" class="form-control"></span></a>
			</div>
		</div>
	</div>
	</form>
</div>
	
	<!-- ./Registration form -->

    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="text-align: center; padding-top: 30px;">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="https://www.twitter.com/" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">LinkedIn</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Princsys Inc 2017. All Rights Reserved</span>
                </div>
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
