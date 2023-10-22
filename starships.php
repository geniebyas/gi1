<?php
session_start();
$_SESSION['current_session'] = "starships";  
include 'header.php'; ?>

<!--================================
=            Stars             =
=================================-->

<!DOCTYPE html>
<html>
<head>
<style>
  .stars-section {
    background: linear-gradient(to right, #084595, #FEC93B);
    border-radius: 15px;
    padding: 20px;
    text-align: center;
  }

  .section-heading {
    color: #FFFFFF;
  }

  .section-description {
    color: #FFFFFF;
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
    <h2 class="section-heading">Beautiful Stars Section</h2>
    <p class="section-description">Discover the beauty of the night sky with these stunning stars.</p>

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

<?php include 'footer.php';?>