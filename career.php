<?php
session_start();
$_SESSION['current_session'] = "career";  
include 'header.php'; ?>
  <!--================================
=            Page Title            =
=================================-->

  <section class="section page-title">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 m-auto">
          <!-- Page Title -->
          <h1><strong>Career</strong></h1>
          <!-- Page Description -->
          <p><strong>Gi1 is an innovative and fast-growing startup dedicated to Super App. We are seeking highly skilled and creative Mobile Application Developers and Website Developers to join our dynamic team and play a pivotal role in shaping our digital presence.</strong></p>
        </div>
      </div>
    </div>
  </section>

  <!--====  End of Page Title  ====-->



  <!--==================================
=            Career Promo            =
===================================-->
  <section class="section career-featured pt-0">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block">
            <!-- written-content -->
            <div class="content">
              <!-- Career heading -->
              <h2><strong>Who we're looking for</strong></h2>
              <!-- Career Description -->
              <p><strong>Develop and maintain responsive websites with a focus on user experience.Collaborate with designers to implement visually appealing web designs.Ensure the website's performance, security, and scalability.Optimize website speed and SEO.Stay up-to-date with web development trends and technologies.</strong></p>
            </div>
            <!-- Promo Video -->
            <div class="video">
              <!-- Video Thumb -->
              <img class="img-fluid shadow" src="images/thumbs/promo-video-thumbnail.jpg" alt="video-thumbnail">
              <!-- Video Button -->
              <div class="video-button video-box">
                <a href="javascript:void(0)">
                  <i class="ti-control-play" data-video="https://www.youtube.com/embed/jrkvirglgaQ?autoplay=1"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--====  End of Career Promo  ====-->

  <!--=============================
=            Gallery            =
==============================-->
  <section class="gallery">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-md-4">
          <div class="image">
            <img data-fancybox="gallery" href="images/gallery/gallery-01.jpg" class="img-fluid"
              src="images/gallery/gallery-01.jpg" alt="">
          </div>
        </div>
        <div class="col-md-4">
          <div class="image">
            <img data-fancybox="gallery" href="images/gallery/gallery-02.jpg" class="img-fluid"
              src="images/gallery/gallery-02.jpg" alt="">
          </div>
        </div>
        <div class="col-md-4">
          <div class="image">
            <img data-fancybox="gallery" href="images/gallery/gallery-03.jpg" class="img-fluid"
              src="images/gallery/gallery-03.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--====  End of Gallery  ====-->

  <!--===============================
=            Fun Facts            =
================================-->

  <!--====  End of Fun Facts  ====-->

  <!--===============================
=            Job lists            =
================================-->
  <section class="job-list section pt-0">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-10 m-auto">
          <div class="block">
            <div class="title text-center">
              <h2><strong>Job Opening</strong></h2>
            </div>
            <div>
              <p style="color: black;">
                "We are excited to announce a new job opening at our company! We are looking for a highly motivated and skilled individual to join our dynamic team. As a key member of our organization, you will have the opportunity to contribute to our mission and drive innovation in your role. If you are a dedicated professional who is passionate about making a meaningful impact and enjoys working in a collaborative and supportive environment, we encourage you to apply. This is your chance to be part of a forward-thinking company that values creativity, diversity, and excellence. Join us in shaping the future and building a rewarding career with us."
              </p>
            </div>
          </div>
            <!-- Job List -->
            <div class="job">
                            <!-- Action Button -->
              <div class="container">
                <a href="https://surveyheart.com/form/64f42247dcee497bfb1fe0b6" class="btn btn-main-sm" >Apply Now</a>
                <!-- Modal -->
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--====  End of Job lists  ====-->

  <!--============================
=            Footer            =
=============================-->
<?php include 'footer.php';?>