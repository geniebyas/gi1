<?php
session_start();
$_SESSION['current_session'] = "about";  
include 'header.php'; ?>


<style>
   .image-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .image {
      max-width: 100%;
      max-height: 100%;
	  border-radius: 40px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);

    }
</style>


<!--================================
=            Page Title            =
=================================--> 


<div class="container-fluid">
    <div class="row">
      <div class="col-12 image-container">
        <img src="images/logoelevated.jpg" alt="Logo" class="image">
      </div>
    </div>
  </div>

	<!--====  End of Section comment  ====-->


	<!--============================
=            Footer            =
=============================-->
<?php include 'footer.php';?>