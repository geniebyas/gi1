<?php
session_start();
$_SESSION['current_session'] = "home";
include 'header.php'; ?>
<!--====================================
=            Promo Video            =
=====================================-->
<section class="section gradient-banner">

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        .video-section {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #3498db;
        }

        .video-container {
            max-width: 80%;
            border-radius: 20px;
            overflow: hidden;
            position: relative;
        }

        video {
            width: 100%;
            height: auto;
            display: block;
        }
    </style>

    <div class="video-section">
        <div class="video-container">
            <video autoplay loop muted>
                <source src="video\Intro_Gi1.mp4" type="video/mp4">
            </video>
        </div>
    </div>



</section>


    

<!--====================================
=           End Promo video            =
=====================================-->


<!--====================================
=            Hero Section            =
=====================================-->
<section class="section gradient-banner">
	<div class="shapes-container">
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
		<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="500"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"></div>
		<div class="shape" data-aos="fade-down" data-aos-duration="500" data-aos-delay="0"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="0"></div>
	</div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 order-2 order-md-1 text-center text-md-left">
				<h1 class="text-white font-weight-bold mb-4">All In One In Gi1</h1>
				<p class="text-white mb-5">'Gi1' is the world 1<sup>st</sup> super app with all the top & trending platforms
				 of the time in just 1 app. 
				 it's complete mall of apps with a complete A-Z bunch of all wanted industries, 
				 categories & sevices in only 1 super app.</p>
			</div>
			<div class="col-md-6 text-center order-1 order-md-2">
				<img class="img-fluid" height="550" width="300" src="images/phone1.png" alt="screenshot">
			</div>
		</div>
	</div>
</section>
<!--====================================
=            End Hero Section            =
=====================================-->
<!-- </section> -->
<!--====================================
=           Services Section            =
=====================================-->

<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .blog-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        .blog-item {
            width: calc(25% - 20px);
            margin: 10px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .blog-image {
            max-width: 100%;
            height: auto;
            border-radius: 10px 10px 0 0;
        }

        .blog-content {
            padding: 20px;
        }

        .blog-title {
            color: black;
            font: status-bar;
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .blog-text {
            font-size: 1.2rem;
            color: black;
            
        }

        @media (max-width: 768px) {
            .blog-item {
                width: calc(50% - 20px);
            }
        }
    </style>
	  <div style="font-family: 'Poppins', Arial, sans-serif; text-align: center;">
        <h1 style="font-size: 40px; margin: 30px 0; font-weight: bold;">Our Services</h1>
    </div>
	<section class="blog-section">
        <div class="blog-item">
            <img class="blog-image" src="images\social_media.png" alt="Blog Image 1">
            <div class="blog-content">
                <h2 class="blog-title">Gi1 SOCIAL</h2>
                <p class="blog-text">Gi1 SOCIAL, the new social world where you can get everything you had, you wanted, you need, you think
                    and also you didn't even imagine, all in just 1.</p>
            </div>
        </div>

        <div class="blog-item">
            <img class="blog-image" src="images\video_platform.jpeg" alt="Blog Image 2">
            <div class="blog-content">
                <h2 class="blog-title">Gi1 MEDIA</h2>
                <p class="blog-text">Gi1 MEDIA. The best ever, new and unique platform for every creater and user.
                    Get all the professional creating stuff and user demanded videos and be a star.</p>
            </div>
        </div>

        <div class="blog-item">
            <img class="blog-image" src="images\ecommerce.jpeg" alt="Blog Image 3">
            <div class="blog-content">
                <h2 class="blog-title">Gi1 MALL</h2>
                <p class="blog-text">Gi1 MALL. Get problem solving processes, innovated features and futuristic 3D AR technology. Unique and 1st socialized ecommerce shopping system.</p>
            </div>
        </div>

        <div class="blog-item">
            <img class="blog-image" src="images\education.jpg" alt="Blog Image 4">
            <div class="blog-content">
                <h2 class="blog-title">Gi1 EDUCATION</h2>
                <p class="blog-text">Gi1 EDUCATION.Personalization, immersive tech, microlearning, global access, and lifelong learning, making education flexible, diverse, and inclusive.</p>
            </div>
        </div>
    </section>


    <style>
        body {
            margin: 0;
            padding: 0;
        }
        #mainDiv {
            position: relative;
            width: 100%;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        #viewMore {
            position: absolute;
            top: 0;
            right: 0;
            color: #333;
            padding: 10px 15px;
            cursor: pointer;
        }
        #popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            text-align: center;
        }
        #popup-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #e74c3c;
            padding: 20px;
        }
    </style>


    <div id="mainDiv">
    <a class="nav-link btn" href="services.php">View More</a>
        
    </div>
    <div id="popup">
        <div id="popup-content">
            <h2>Coming Soon</h2>
            <button onclick="hidePopup()">Close</button>
        </div>
    </div>

    <script>
        function showPopup() {
            document.getElementById("popup").style.display = "block";
        }

        function hidePopup() {
            document.getElementById("popup").style.display = "none";
        }
    </script>


<!--====================================
=            End Services Section            =
=====================================-->

<!--====================================
=            Prototype video Section            =
=====================================-->


		

<style>
        /* Container for the whole section */
        .section {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Left side container */
        .left {
            flex: 1;
            padding: 20px;
            background-color: #f0f0f0;
        }

        /* Image */
        .image {
            max-width: 100%;
            height: auto;
            display: block;
        }

        /* Image description */
        .description {
            margin-top: 10px;
            font-size: 16px;
            color: black;
        }

        /* Right side container */
        .right {
            flex: 1;
            background-color: #333;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
            position: relative;
        }

        /* Play button */
        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 36px;
            color: white;
            cursor: pointer;
        }

        /* Video */
        .video {
            width: 100%;
            height: 100%;
        }
        .centered-div {
  width: 50%; /* You can adjust the width as needed */
  margin: 0 auto;
}
    </style>
    <div style="font-family: 'Poppins', Arial, sans-serif; text-align: center;">
        <h1 style="font-size: 40px; margin: 30px 0; font-weight: bold;">Prototype Video</h1>
    </div>

    <div class="section">
        <div  class="left">
            <img class="image" class="centered-div" src="images\genie_full.png" alt="Your Image">
            <p style="color: black;" class="description">‘Presenting you the very first demo/prototype of
                 ‘Gi1’ top platform’s 1st industry ‘Genie Media’ (Social)
                  & the 2nd giant ‘Genie mall’ (E-commerce) of top platform’s is
                   coming very soon & more on.</p>
        </div>
        <div class="right">
            <div class="play-button">&#9654;</div>
            
<section class="video-promo section bg-1">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="content-block">
					<!-- Heading -->
					<h2>Watch Our Prototype Video</h2>
					<!-- Promotional Speech -->
					<!-- Popup Video -->
					<a data-fancybox href="https://youtu.be/h1PfcBpB208?si=siWhi23TwLZaav11">
						<i class="ti-control-play video"></i>
					</a>
                   
				</div>
			</div> 
		</div>
	</div>
</section>

        </div>
    </div>
    

<!--====================================
=            End prototype video Section            =
=====================================-->
<!--=================================
=            Testimonial            =
==================================-->
 
 

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .testimonial-section {
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .testimonial-container {
            display: flex;
            width: 100%;
            max-width: 100%;
            white-space: nowrap;
            overflow: hidden;
        }

        .testimonial {
            width: 100%;
            display: inline-block;
            text-align: center;
        }

        .testimonial img {
            width: 80%;
            height: 500px;
            border-radius: 20px; /* Curved corners for the image */
        }

        .testimonial-slider {
            width: 500%; /* Total width is 5 times the testimonial width */
            white-space: nowrap;
            animation: slide 20s infinite;
        }

        @keyframes slide {
            0% { transform: translateX(0); }
            20% { transform: translateX(0); }
            25% { transform: translateX(-100%); }
            45% { transform: translateX(-100%); }
            50% { transform: translateX(-200%); }
            70% { transform: translateX(-200%); }
            75% { transform: translateX(-300%); }
            95% { transform: translateX(-300%); }
            100% { transform: translateX(0); }
        }
    </style>
</head>
<body>
    <div class="testimonial-section">
        <div class="testimonial-container">
            <div class="testimonial-slider">
                <div class="testimonial">
                    <img src="images\slider\slide_1.png" alt="Testimonial 1">
                </div>
                <div class="testimonial">
                    <img src="images\slider\slide_4.png" alt="Testimonial 3">
                </div>
                <div class="testimonial">
                    <img src="images\slider\multiverse_img.PNG" alt="Testimonial 2">
                </div>
                
                <div class="testimonial">
                    <img src="images\slider\slide_3.png" alt="Testimonial 4">
                </div>
                <div class="testimonial">
                    <img src="images\slider\slide_2.png" alt="Testimonial 5">
                </div>
            </div>
        </div>
    </div>

 






<!--=================================
=            End Testimonial            =
==================================-->

<!--=================================
=            About us            =
==================================-->



    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .about-us-section {
            text-align: center;
            padding: 80px 0;
            background-color: #fff;
        }

        .about-us-image {
            width: 100%;
            max-width: 400px;
            border-radius: 20px;
        }

        .about-us-title {
            font-size: 24px;
            color: #333;
            margin: 20px 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>

    <section class="about-us-section">
        <div class="container">
        <div style="font-family: 'Poppins', Arial, sans-serif; text-align: center;">
        <h1 style="font-size: 40px; margin: 30px 0; font-weight: bold;">About Us</h1>
    </div>
            <img class="about-us-image" src="images\about\story-slider-01.jpg" alt="About Us">
            <p class="description">‘Gi1’ is the world 1st super app with al the top & trending platforms ’s a complete mall of apps as we have everything for everyone in 1. We have our own platforms from A-Z every needed apps in 1 place.</p>
        </div>
    </section>


<!--=================================
=            About us            =
==================================-->



<!--============================
=            Footer            =
=============================-->
<?php include 'footer.php'; ?>
