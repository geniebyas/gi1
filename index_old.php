<?php
session_start();
$_SESSION['current_session'] = "home";
include 'header.php'; ?>
<!--=================================
=            Video Promo            =
==================================-->
<section class="section gradient-banner">
 <section id="video-section">
 <div class="video-container">
        <video id="autoplay-video" autoplay loop muted>
            <source src="https://firebasestorage.googleapis.com/v0/b/fir-login-ae61d.appspot.com/o/v1%20E%20.mp4?alt=media&token=b392ae10-b828-4541-93b6-f6a15cd506cd" type="video/mp4">
        </video> 
		</div>
		<script>
    var video = document.getElementById('autoplay-video');
    window.onscroll = function () {
        if (window.scrollY > 0) {
            video.pause();
        } else {
            video.play();
        }
    };
</script>

</section>
<!--====================================
=            Hero Section            =
=====================================-->

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
				<h1 class="text-white font-weight-bold mb-4">All In One In Gi1 </h1>
				<p class="text-white mb-5">'Gi1' is the world 1<sup>st</sup> super app with all the top & trending platforms
				 of the time in just 1 app. 
				 it's complete mall of apps with a complete A-Z bunch of all wanted industries, 
				 categories & sevices in only 1 super app.</p>
				
			</div>
			<div class="col-md-6 text-center order-1 order-md-2" class="my-div">
				<img class="img-fluid" height="550" width="300" src="images\welcome.png" alt="screenshot">
			</div>
		</div>
	</div>
</section>

<!--====  End of Hero Section  ====-->

<section class="section pt-0 position-relative pull-top">
	<div class="container">
		<div class="rounded shadow p-5 bg-white">
			<div class="row">
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
					<i class="ti-paint-bucket text-primary h1"></i>
					<h3 class="mt-4 text-capitalize h5 ">Vision</h3>
					<p class="regular text-muted">We the Gi1, will be the no. 1 or the ony 1 but we will be the 1.</p>
				</div>
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
					<i class="ti-shine text-primary h1"></i>
					<h3 class="mt-4 text-capitalize h5 ">Mission</h3>
					<p class="regular text-muted">Everything for everyone in only one super app.</p>
				</div>
				<div class="col-lg-4 col-md-12 mt-5 mt-lg-0 text-center">
					<i class="ti-thought text-primary h1"></i>
					<h3 class="mt-4 text-capitalize h5 ">Aim</h3>
					<p class="regular text-muted">To create 1 stop solution for everything, a streamlined all-in-one app hub, offering one all-inclusive mall of apps for ultimate convenience of all.</p>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- <section class="section">
	<div class="container">
		<div class="rounded shadow p-5 bg-white">
			<div class="row">
				<div class="col-lg-8 col-md-4 col-sm-2 mt-md-0 ">
					<h3 class="mt-4 text-capitalize h5 col-lg-8 col-sm-4">Benefits of All in one App</h3>
					<p class="regular text-muted"></p>
				</div>
				<img src="" alt="" class="col-lg-4 col-md-2 radius-5x">
			</div>
			<div class="btn btn-download"><a href="about.php"></a></div>
		</div>
	</div>
</section> -->

<!--==================================
=            Feature Grid            =
===================================-->

<section class="feature section pt-6">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 ml-auto align-self-center">
				<div class="feature-content">
					<!-- Feature Title -->
					<h2>Welcome to Gi1-Super App</h2>
					<!-- Feature Description -->
					<p>Introducing Gi1, the revolutionary
						super app that integrates the
						highest platforms and diverse
						industries, providing a
						comprehensive and professional
						solution for all your needs.Gi1 simplifies your all activities,
						offering seamless handling,
						enhanced user experience, and
						an efficient system, ensuring
						productivity at every step. So,
						optimize your all workflow with
						only 1 super app.</p>
				</div>
			</div>
			<div class="col-lg-6 mr-auto justify-content-center">
				<!-- Feature mockup -->
				<div class="image-content" data-aos="fade-left">
					<img class="img-fluid" src="images/wel.png" alt="ipad">
				</div>
			</div>
		</div>
	</div>
</section>
<!--==================================
=            Slider             =
===================================-->

<div style="position: relative; margin: 0 auto; overflow: hidden;">
        <div id="carousel" style="display: flex; transition: transform 0.5s; width: 900px;">
            <div style="width: 300px; text-align: center;">
                <img src="images/slider/multiverse_img.PNG" alt="Image 1" style="max-width: 100%; max-height: 100%;">
            </div>
            <div style="width: 300px; text-align: center;">
                <img src="images/slider/multiverse_img.PNG" alt="Image 2" style="max-width: 100%; max-height: 100%;">
            </div>
            <div style="width: 300px; text-align: center;">
                <img src="images/slider/multiverse_img.PNG" alt="Image 3" style="max-width: 100%; max-height: 100%;">
            </div>
        </div>
        <button id="prev" style="position: absolute; top: 50%; left: 0; transform: translateY(-50%);">Previous</button>
        <button id="next" style="position: absolute; top: 50%; right: 0; transform: translateY(-50%);">Next</button>
    </div>

    <script>
        const carousel = document.getElementById("carousel");
        const nextButton = document.getElementById("next");
        const prevButton = document.getElementById("prev");

        let slideIndex = 0;
        const slideWidth = 300;

        function updateCarousel() {
            const offset = -slideIndex * slideWidth;
            carousel.style.transform = `translateX(${offset}px)`;
        }

        nextButton.addEventListener("click", () => {
            if (slideIndex < 2) {
                slideIndex++;
                updateCarousel();
            }
        });

        prevButton.addEventListener("click", () => {
            if (slideIndex > 0) {
                slideIndex--;
                updateCarousel();
            }
        });
    </script>
<!--==================================
=            end slider         =
===================================-->

<section class="feature section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 ml-auto justify-content-center">
				<!-- Feature Mockup -->
				<div class="image-content" data-aos="fade-right">
					<img class="img-fluid" src="images/feature/coinwish.png" alt="iphone">
				</div>
			</div>
			<div class="col-lg-6 mr-auto align-self-center">
				<div class="feature-content">
					<!-- Feature Title -->
					<h2>Genie Coins and Wishes</h2>
					<!-- Feature Description -->
					<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
						labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
						aliquip ex ea commodo consequat.</p>
				</div>
				<!-- Testimonial Quote -->
				<div class="testimonial">
					<p>
						"If crypto succeeds, it's not because it empowers better people. It's because it empowers better institutions"
					</p>
					<ul class="list-inline meta">
						<li class="list-inline-item">
							<img src="images/testimonial/vitalik_butarin.webp" alt="">
						</li>
						<li class="list-inline-item">Vitalik Buterin, Founder, Ethereum</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="feature section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 ml-auto align-self-center">
				<div class="feature-content">
					<!-- Feature Title -->
					<h2>Genie Theme and AI app Assistant</h2>
					<!-- Feature Description -->
					<p>The enchanting world of 'Gi1', is inspired by the theme of Genie and Aladdin. A place of wonder where wishes come true with the power of your own AI assistant, a moden day 'GENIE' Experience a golden era of fulfillment and wonder as 'Gi1' grants your all desires effortlessly.</p>
				</div>
				<!-- Testimonial Quote -->
				<div class="testimonial">
					<p>"In the long term, artificial intelligence and automation are going to be taking over so much of what gives humans a feeling of purpose."
					</p>
					<ul class="list-inline meta">
						<!-- <li class="list-inline-item">
							<img src="images/testimonial/feature-testimonial-thumb.jpg" alt="">
						</li> -->
						<li class="list-inline-item">-Matt Bellamy</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 mr-auto justify-content-center">
				<!-- Feature mockup -->
				<div class="image-content" data-aos="fade-left">
					<img class="img-fluid" src="images/assistant.png" alt="ipad">
				</div>
			</div>
		</div>
	</div>
</section>
<section class="feature section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 ml-auto justify-content-center">
				<!-- Feature Mockup -->
				<div class="image-content" data-aos="fade-right">
					<img class="img-fluid" src="images/chat.png" alt="iphone">
				</div> 
			</div>
			<div class="col-lg-6 mr-auto align-self-center">
				<div class="feature-content">
					<!-- Feature Title -->
					<h2>Advanced Socializing Chat Section</h2>
					<!-- Feature Description -->
					<p class="desc">Gi1 has powerful chat section with the help of AI our chat section should be more advanced and user freindly.</p>
				</div>
				<!-- Testimonial Quote -->
				<div class="testimonial">
					<p>
						"It's all about being a part of something in the community, socializing with people who share interests and coming together to help improve the world we live in."
					</p>
					<ul class="list-inline meta">
						
						<li class="list-inline-item">Zach Braff</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Feature Grid  ====-->

<!--==============================
=            Services            =
===============================-->
<section class="service section bg-gray">
	<div class="container-fluid p-0">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2>Entry barrier & our blue ocean</h2>
					<p><a href="https://themefisher.com/products/small-apps-free-app-landing-page-template/">Gi1's</a> 
						Entry barriers for our competition and Gi1 blue ocean</p>
				</div>
			</div>
		</div>
		<div class="row no-gutters">
			<div class="col-lg-6 align-self-center">
				<!-- Feature Image -->
				<div class="service-thumb left" data-aos="fade-right">
					<img class="img-fluid p-4" src="images/livedone.png" alt="iphone-ipad">
				</div>
			</div>
			<div class="col-lg-5 mr-auto align-self-center">
				<div class="service-box">
					<div class="row align-items-center">
						<div class="col-md-6 col-xs-12">
							<!-- Service 01 -->
							<div class="service-item">
								<!-- Icon -->
								<i class="ti-bookmark"></i>
								<!-- Heading -->
								<h3>First in the market early benefits.</h3>
								<!-- Description -->
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<!-- Service 01 -->
							<div class="service-item">
								<!-- Icon -->
								<i class="ti-pulse"></i>
								<!-- Heading -->
								<h3>Everything for everyone in just 1 app.</h3>
								<!-- Description -->
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<!-- Service 01 -->
							<div class="service-item">
								<!-- Icon -->
								<i class="ti-bar-chart"></i>
								<!-- Heading -->
								<h3>Fully socialized apps all industries are in social mode.</h3>
								<!-- Description -->
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<!-- Service 01 -->
							<div class="service-item">
								<!-- Icon -->
								<i class="ti-panel"></i>
								<!-- Heading -->
								<h3>Ease of use, simplicity & fast</h3>
								<!-- Description -->
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<!-- Service 01 -->
							<div class="service-item">
								<!-- Icon -->
								<i class="ti-panel"></i>
								<!-- Heading -->
								<h3>Gi1 whole multiverse of all categories</h3>
								<!-- Description -->
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<!-- Service 01 -->
							<div class="service-item">
								<!-- Icon -->
								<i class="ti-panel"></i>
								<!-- Heading -->
								<h3>new design with new user interface & experience</h3>
								<!-- Description -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Services  ====-->





<section class="section">
	<div class="container">
		<div class="rounded shadow p-5 bg-white">
			<div class="row">
				<div class="col-lg-8 col-md-6 mt-md-0 ">
					<h3 class="mt-4 text-capitalize h5 col-lg-8 col-sm-4">About Us</h3>
					<p class="regular text-muted">Introducing 'Gi1,' the super app that brings
						together the apex of today's most popular
						industries into a unified digital marvel.</p>
					<div class="btn btn-primary mt-md-4 m-2"><a href="about.php">See More</a></div>
				</div>
				<div class="card col-lg-4 col-md-6"style="background: url(images/about/story-slider-01.jpg) center/cover no-repeat;">
									<!-- <img src="images/about/story-slider-01.jpg"  alt="" class="card-img-top"/> -->
				</div>
			</div>
		</div>
	</div>
</section>



<section class="section">
	<div class="container">
		<div class="rounded shadow p-5 bg-white">
			<div class="row">
				<div class="col-lg-8 col-md-6 mt-md-0 ">
					<h3 class="mt-4 text-capitalize h5 col-lg-8 col-sm-4">Contact Us</h3>
					<p class="regular text-muted">Contact 'Gi1' today and let us bring the magic of technology to your fingertips. Reach out to us and discover how we can make your digital dreams come true.</p>
					<div class="btn btn-primary mt-md-4 m-2"><a href="contact.php">See More</a></div>
				</div>
				<div class="card col-lg-4 col-md-6"style="background: url(images/contactus/img1.webp) center/cover no-repeat;">
									<!-- <img src="images/contactus/img1.webp"  alt="" class="card-img-top"/> -->
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Video Promo  ====-->

<!--=================================
=            Testimonial            =
==================================-->
<!-- testimonial removed from here -->
<!--====  End of Testimonial  ====-->

<!-- Download section removed from here  -->

<!--============================
=            Footer            =
=============================-->
<?php include 'footer.php'; ?>