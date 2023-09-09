<?php
session_start();
$_SESSION['current_session'] = "contact";  
include 'header.php'; ?>
  <!--================================
=            Page Title            =
=================================-->

  <section class="section page-title">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 m-auto">
          <!-- Page Title -->
          <h1>Contact Us</h1>
          <!-- Page Description -->
          <p>Contact 'Gi1' today and let us bring the magic of technology to your fingertips. Reach out to us and discover how we can make your digital dreams come true.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!--====  End of Page Title  ====-->


  <!--=====================================
=            Address and Map            =
======================================-->
  <section class="address">
    <div class="container">
      <div class="row">
        <div class="col-lg align-self-center">
          <div class="block">
            <div class="address-block text-center mb-5">
              <div class="icon">
                <i class="ti-mobile"></i>
              </div>
              <div class="details">
                <h3> +917777975877</h3>
              </div>
            </div>
            <div class="address-block text-center">
              <div class="icon">
                <i class="ti-email"></i>
              </div>
              <div class="details">
                <h3>muhamadsaad777713@gmail.com</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--====  End of Address and Map  ====-->
  <section class="contact-form section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="mb-5 text-center">Drop us a mail</h2>
        </div>
        <div class="col-12">
          <form action="contact-repo.php" method="post">
            <div class="row">
              <!-- Name -->
              <div class="col-md-6 mb-2">
                <input class="form-control main" name="name" type="text" placeholder="Name" required>
              </div>
              <!-- Email -->
              <div class="col-md-6 mb-2">
                <input class="form-control main" name="email" type="email" placeholder="Your Email Address" required>
              </div>
              <!-- subject -->
              <div class="col-md-12 mb-2">
                <input class="form-control main" type="text" name="subject" placeholder="Subject" required>
              </div>
              <!-- Message -->
              <div class="col-md-12 mb-2">
                <textarea class="form-control main" name="message" rows="10" placeholder="Your Message"></textarea>
              </div>
              <!-- Submit Button -->
              <div class="col-12 text-right">
                <button class="btn btn-main-md">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!--============================
=            Footer            =
=============================-->
<?php include 'footer.php';?>