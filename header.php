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
	<meta name="author" content="Gi1">
	<meta name="generator" content="Gi1">

	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet">

	<!-- Vendor CSS Files -->
	<!-- <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> -->

	<!-- Template Main CSS File -->

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
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style_1.css" rel="stylesheet">

	<style !important>
		/* Add the following styles for the sticky header */
		.sticky-wrapper {
			position: relative;
			z-index: 1000;
		}

		.sticky-nav {
			position: fixed;
			top: 0;
			width: 100%;
			background-color: white;
			/* Adjust the background color as needed */
			padding: 10px;
			z-index: 1000;
			/* Make sure the header is above other elements */
			border-bottom: 1.5px solid #d3d3d3;
		}

		.sticky-nav .navbar-brand img {
			width: 75px;
			height: 75px;
		}

		.sticky-nav .navbar-nav {
			margin-left: auto;
		}

		.sticky-nav .nav-item {
			margin-right: 20px;
		}

		.sticky-nav .nav-link {
			color: white;
			/* Adjust the link color as needed */
		}
	</style>
</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">
	<div class="sticky-wrapper">
		<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-0 py-lg-0 sticky-nav">
			<div class="container d-flex justify-content-between">
				<div class="row justify-content-between">
					<a class="col-sm-6 navbar-brand" href="index.php">
						<img src="images/websitelogo.png"
						style="width: 75px; height:75px" alt="logo">
					</a>
				<button class=" col-sm-6 navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
					aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="ti-menu"></span>
				</button>
				</div>
				
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