<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="author" content="Kai Garrott" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Portfolio | Kai Garrott</title>

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
			<div>
				<h2>Portfolio</h2>
				<a href="https://github.com/garrottkai" target="_blank"><h5>Check out my work on GitHub</h5></a>
				<div class="row">
					<div class="col-xs-12">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img class="img-c" src="../public_html/media/earth.png" alt="earth">
						</div>

						<div class="item">
							<img class="img-c" src="../public_html/media/jupiter.png" alt="jupiter">
						</div>

						<div class="item">
							<img class="img-c" src="../public_html/media/venus.png" alt="venus">
						</div>

						<div class="item">
							<img class="img-c" src="../public_html/media/neptune.png" alt="neptune">
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
						</div>
			</div>
				</div>
		</div> <!-- /sfooter-content -->
		<footer class="navbar navbar-fixed-bottom">
			<hr class="navline">
			<ul class="nav navbar-nav">
				<li class="nav-item footer-l navbar-text">&copy 2016 Kai Garrott</li>
			</ul>
			<div class="footer-i navbar-text"><a href="https://github.com/garrottkai" target="_blank"><img src="media/gh-light-64px.png"></a></div>
		</footer>
	</body>
</html>