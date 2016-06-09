<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="author" content="Kai Garrott" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Contact | Kai Garrott</title>

		<!-- bootstrap compiled/minified css -->

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />

		<!-- FontAwesome minified -------------->

		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />

		<!-- Google fonts ---------------------->

		<link href='https://fonts.googleapis.com/css?family=Fjord+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<!-- local css ------------------------>

		<link rel="stylesheet" href="css/styles.css" type="text/css" />

		<!-- HTML5 shiv and respond.js for legacy IE support -->

		<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery for components -------------->

		<script
			src="https://code.jquery.com/jquery-2.0.0.min.js"
			integrity="sha256-1IKHGl6UjLSIT6CXLqmKgavKBXtr0/jJlaGMEkh+dhw="
			crossorigin="anonymous"></script>

		<!-- bootstrap js ----------------------->

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<!-- jQuery Form, Additional Methods, Validate -->

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<!-- JavaScript Form Validator -->

		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->

		<script src='https://www.google.com/recaptcha/api.js'></script>

	</head>
	<body class="sfooter">
		<div class="sfooter-content">
			<header>
				<div class="row">
					<div class="navbar">
						<div class="navbar-inner">
							<div class="nav">
								<a href="index.php"><div class="col-xs-12 col-md-4 topnav-l" >Kai Garrott</div></a>
								<ul class="nav">
									<li class="col-xs-12 col-md-2 active topnav"><a href="contact.php">//  Contact</a></li>
									<li class="col-xs-12 col-md-2 active topnav"><a href="about.php">//  About</a></li>
									<li class="col-xs-12 col-md-2 active topnav"><a href="portfolio.php">//  Portfolio</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div> <!-- /row -->
				<hr class="topnavline">
			</header>
			<div class="container">
				<div>
					<!--Begin Contact Form-->
					<form id="contact-form" action="php/mailer.php" method="post">
						<h3>Contact</h3>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								<input type="text" class="form-control" id="name" name="name" placeholder="Name">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<input type="email" class="form-control" id="email" name="email" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-pencil" aria-hidden="true"></i>
								</div>
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-comment" aria-hidden="true"></i>
								</div>
								<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message (2000 characters max)"></textarea>
							</div>
						</div>

						<!-- reCAPTCHA -->
						<div class="g-recaptcha" data-sitekey="6LdOqCETAAAAABB-pUlY6mNg14XxKD0qOukq-AfT"></div>

						<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
						<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
					</form>

					<!--empty area for form error/success output-->
					<div class="row">
						<div class="col-xs-12">
							<div id="output-area"></div>
						</div>
					</div>
				</div>
			</div> <!-- /container -->
		</div> <!-- /sfooter-content -->
		<footer class="navbar navbar-fixed-bottom">
			<hr class="navline">
			<ul class="nav navbar-nav">
				<li class="nav-item footer-l navbar-text">&copy 2016 Kai Garrott</li>
			</ul>
			<div class="footer-i navbar-text"><a href="https://github.com/garrottkai"><img src="media/gh-light-64px.png"></a></div>
		</footer>
	</body>
</html>