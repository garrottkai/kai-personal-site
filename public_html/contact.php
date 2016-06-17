<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="author" content="Kai Garrott" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Contact | Kai Garrott</title>

		<?php require_once("php/dependencies.php");?>
		
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
			<div class="container">
			<header>
				<div class="row">
					<div class="navbar">
						<div class="navbar-inner">

								<a href="index.php"><div class="col-xs-12 col-md-4 topnav-l" >Kai Garrott</div></a>
								<ul class="nav">
									<li class="col-xs-4 col-md-2 topnav"><a href="contact.php">Contact</a></li>
									<li class="col-xs-4 col-md-2 topnav"><a href="about.php">About</a></li>
									<li class="col-xs-4 col-md-2 topnav"><a href="portfolio.php">Portfolio</a></li>
								</ul>

						</div>
					</div>
				</div> <!-- /row -->
				<hr class="topnavline">
			</header>
			<div class="container">
				<div>
					
					<!--Begin Contact Form-->
					<form id="contact-form" action="php/mailer.php" method="post">
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
						<div class="g-recaptcha" id="rct" data-sitekey="6LdOqCETAAAAABB-pUlY6mNg14XxKD0qOukq-AfT"></div>
						<div class="btns">
						<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
						<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
						</div>
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
			<div class="footer-i navbar-text"><a href="https://github.com/garrottkai" target="_blank"><img src="media/gh-light-64px.png"></a></div>
		</footer>
		</div>
	</body>
</html>