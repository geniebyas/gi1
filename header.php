<!DOCTYPE html>
<div w3-include-html="header.html"></div>
<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Gi1 | Super App</title>

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Bootstrap App Landing Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<meta name="author" content="Themefisher">
	<meta name="generator" content="Themefisher Small Apps Template v1.0">

	<!-- theme meta -->
	<meta name="theme-name" content="small-apps" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="images/favicon.png" />

	<!-- PLUGINS CSS STYLE -->
	<link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="plugins/slick/slick.css">
	<link rel="stylesheet" href="plugins/slick/slick-theme.css">
	<link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
	<link rel="stylesheet" href="plugins/aos/aos.css">
	<link rel="stylesheet" type="text/css" href="styles.css">

	<!-- CUSTOM CSS -->
	<link href="css/style.css" rel="stylesheet">


</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">

	<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
		<div class="container">
			<a class="navbar-brand" href="index.php"><img src="images/logoelevated.jpg" style="width: 75px; height:75px" alt="logo"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="ti-menu"></span>
			</button>
			<?php
			$home = "";
			$services = "";
			$investorrel = "";
			$starships = "";
			$career = "";
			$about = "";
			$contact = "";
			$active_indicator = $_SESSION['current_session'];

			
			if ($active_indicator == "home") {
				$home = "active";
			} else {
				$home = "";
			}

			if ($active_indicator == "services") {
				$services = "active";
			} else {
				$services = "";
			}

			if ($active_indicator == "investorrel") {
				$investorrel = "active";
			} else {
				$investorrel = "";
			}

			if ($active_indicator == "starships") {
				$starships = "active";
			} else {
				$starships = "";
			}

			if ($active_indicator == "career") {
				$career = "active";
			} else {
				$career = "";
			}

			if ($active_indicator == "about") {
				$about = "active";
			} else {
				$about = "";
			}

			if ($active_indicator == "contact") {
				$contact = "active";
			} else {
				$contact = "";
			}
			?>

			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item  <?php echo $home; ?>">
						<a class="nav-link btn" href="index.php">Home</a>
					</li>
					<li class="nav-item <?php echo $services; ?>">
						<a class="nav-link btn" href="services.php">Gi1 Services</a>
					</li>
					<li class="nav-item <?php echo $investorrel; ?>">
						<a class="nav-link btn" href="investorrel.php">Investor Relation</a>
					</li>
					<li class="nav-item <?php echo $starships; ?>">
						<a class="nav-link btn" href="starships.php">Star & StarShips</a>
					</li>
					<li class="nav-item <?php echo $career; ?>">
						<a class="nav-link btn" href="career.php">Career Options</a>
					</li>
					<li class="nav-item <?php echo $about; ?>">
						<a class="nav-link" href="about.php">About Us</a>
					</li>
					<li class="nav-item <?php echo $contact; ?>">
						<a class="nav-link btn" href="contact.php">Contact Us</a>
					</li>


				</ul>
			</div>
		</div>
	</nav>
