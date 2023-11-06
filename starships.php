<?php
session_start();
$_SESSION['current_session'] = "starships";  
include 'header.php'; ?>

<!--================================
=            Stars             =
=================================-->
<style>
  .stars-section {
    background: linear-gradient(to right, #084595, #FEC93B);
    border-radius: 15px;
    padding: 20px;
    text-align: center;
  }


  .star-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin-top: 20px;
  }
  .star:hover {
            transform: scale(1.25);
        }

  .star {
    flex: 0 0 calc(20% - 20px);
    border-radius: 50%;
    background: #FFFFFF;
    padding: 10px;
    text-align: center;
    color: #FFFFFF;
    margin: 10px;
    transition: transform 0.3s;
  }

  .star:nth-child(2n) {
    background: #FFFFFF;
    color: #084595;
  }
  .p{
		padding: 10px; 
		color: #084595; 
		background: #FEC93B; 
		border-radius: 0 0 15px 15px; 
		margin: 0;
	}
</style>
</head>
<body>
  <div class="stars-section">
    <h2 style="color: white; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Gi1 Stars</h2>
    <p class="p" >"Elevate your experience across all platforms as a
eminent 'Gi1' Star Member, where you can select
your preferred starship & get all benefits in a
single plan."</p>

    <div class="star-container">
      <div class="star">
        <img src="stars\VIBGYOR.png" alt="Star 1" width="100">
        <p class="P" style="color:#084595 ;">Contact 'Gi1' today and let us bring the magic of technology to your fingertips. Reach out to us and discover 
        how we can make your digital dreams come true.</p>
      </div>

      <div class="star">
        <img src="stars\GOLDEN.png" alt="Star 2" width="100">
        <p class="P" style="color:#084595 ;">Contact 'Gi1' today and let us bring the magic of technology to your fingertips. Reach out to us and discover 
        how we can make your digital dreams come true.</p>
      </div>

      <div class="star">
        <img src="stars\SILVER.png" alt="Star 3" width="100">
        <p class="P" style="color:#084595 ;">Contact 'Gi1' today and let us bring the magic of technology to your fingertips. Reach out to us and discover 
        how we can make your digital dreams come true.</p>
      </div>

      <div class="star">
        <img src="stars\BLUE.png" alt="Star 4" width="100">
        <p class="P" style="color:#084595 ;">Contact 'Gi1' today and let us bring the magic of technology to your fingertips. Reach out to us and discover 
        how we can make your digital dreams come true.</p>
      </div>

      <div class="star">
        <img src="stars\BLACK.png" alt="Star 5" width="100">
        <p class="P" style="color:#084595 ;">Contact 'Gi1' today and let us bring the magic of technology to your fingertips. Reach out to us and discover 
        how we can make your digital dreams come true.</p>
      </div>
    </div>
  </div>
</body>
</html>


<!--================================
=            end stars            =
=================================-->


  <!-- ======= Pricing Section ======= -->
  <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 class="h2" style="color: #fff;">Subscription Plan</h2>
          <p class="p" style="color:#084595 ;">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Free Plan</h3>
              <h4><sup>$</sup>0<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Business Plan</h3>
              <h4><sup>$</sup>29<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Developer Plan</h3>
              <h4><sup>$</sup>49<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


<?php include 'footer.php';?>