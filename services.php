<?php
session_start();
$_SESSION['current_session'] = "services";  
include 'header.php';
include 'common/connection.php';
 ?>
<!--================================
=            Page Title            =
=================================-->
<head>
<style>
		 body {
            background: white;
            font-family: Arial, sans-serif;
			)	
        
		.images-container{
			display: flex;
			flex-wrap: wrap;
			justify-content: space-around;
			padding: 10px;
		}
		.image-container-inner{
			width: 200px;
			margin: 10px;
			background-color: #fff;
			border-radius: 15px;
			box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.3);
			overflow: hidden;
			text-align: center;
		}
		.section {
            padding: 20px;
            transition: transform 0.3s;
        }
		.section:hover {
            transform: scale(1.25);
        }
		.image{
			max-width: 100%; 
			border-radius: 15px 15px 0px 0px;
			
		}
		.p{
			padding: 10px; 
			color: #084595; 
			background: #FEC93B; 
			border-radius: 0 0 15px 15px; 
			margin: 0;
		}
		.h3{
			padding: 10px; 
			color: #084595;
			font-weight: 100px;
			text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
			border-radius: 0 0 15px 15px; 
			margin: 0;
			height: 80px;
			text-align: center;
		}
		.fullscreen-image {
    cursor: pointer;
  }
	</style>
</head>
    <div style="text-align: center; padding: 20px;">
        <h2 style="color: #FEC93B; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); font-weight: bold;">Our Services</h2>
        <p style="color: white; font-size: 20px;">Explore our collection of world best industries.</p>
    </div>
	
	<div class="images-container">
   
        <!-- You can repeat the following div 30 times with different images and descriptions -->
		<?php 

				try{
					$getServicesSql = "select * from services where status = true";
					$result = mysqli_query($conn,$getServicesSql);


				while($service = $result->fetch_assoc()){
					echo '
					<div class="section">
					<div class="image-container-inner">
						<h3 class="h3">'.$service['name'].'</h3>
						<img 
						src=services/images/'.$service['image'].' 
						class="image"
						alt="Full-Screen Image"
						onclick=toggleFullscreen(this)>
						</div>
						</div>';
				}
					}
				catch(Exception $e){
				echo '<script>alert(' + $e->getMessage() + ';</script>';
				}
			
		
		?>
		</div>


		 <script>
    function toggleFullscreen(image) {
      if (image.requestFullscreen) {
        image.requestFullscreen();
      } else if (image.mozRequestFullScreen) { // Firefox
        image.mozRequestFullScreen();
      } else if (image.webkitRequestFullscreen) { // Chrome, Safari, and Opera
        image.webkitRequestFullscreen();
      } else if (image.msRequestFullscreen) { // IE/Edge
        image.msRequestFullscreen();
      }
    }
  </script>

		


        <!-- Repeat the above div structure for the remaining 29 images and descriptions -->


<!--============================
=            Footer            =
=============================-->
<?php include 'footer.php';?>