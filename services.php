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
            background: linear-gradient(to bottom right, #FEC93B, #084595);
            font-family: Arial, sans-serif;
        }
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
	
   
        <!-- You can repeat the following div 30 times with different images and descriptions -->
		<?php 

				// try{
				// 	$getServicesSql = "select * from services where status = 'true'";
				// 	$result = mysqli_query($conn, $getServicesSql);

				// 	if($result->fetch_assoc()){

				// while($service = $result->fetch_assoc()){
				// 	echo '
				// 	<div class="section">
				// 	<div class="image-container-inner">
				// 		<h3 class="h3">'.$service['name'].'</h3>
				// 		<img 
				// 		src='.$service['img'].' 
				// 		class="image"
				// 		alt="Full-Screen Image"
				// 		onclick="toggleFullscreen(this)">';
				// }
				// 	}
				// }catch(Exception $e){
				// echo '<script>alert(' + $e->getMessage() + ';</script>';
				// }
			
		
		?>
		


 <div class="images-container">
		<!-- INDUSTRY-1 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">Gi1 Media</h3>
            <img 
			src="services\Gi1Media.png" 
			class="image"
			alt="Full-Screen Image"
			onclick="toggleFullscreen(this)">
			

            
        </div>
		</div>
		
		<!-- INDUSTRY-2 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">Gi1 Mall</h3>
            <img src="services\Gi1Mall.png" 
			alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>
          
        </div>
		</div>

		<!-- INDUSTRY-3 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">Gi1 VideoHub</h3>
            <img src="services\Gi1VideoHub.png" alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>
           
        </div>
		</div>

		<!-- INDUSTRY-4 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">INDUSTRY</h3>
			<img src="services\Gi1VideoHub.png" alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>           
        </div>
		</div>

		<!-- INDUSTRY-5 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">INDUSTRY</h3>
			<img src="services\Gi1VideoHub.png" alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>           
        </div>
		</div>

		<!-- INDUSTRY-6 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">INDUSTRY</h3>
			<img src="services\Gi1VideoHub.png" alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>           
        </div>
		</div>

		<!-- INDUSTRY-7 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">INDUSTRY</h3>
			<img src="services\Gi1VideoHub.png" alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>
        </div>
		</div>

		<!-- INDUSTRY-8 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">INDUSTRY</h3>
			<img src="services\Gi1VideoHub.png" alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>
        </div>
		</div>

		<!-- INDUSTRY-9-->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">INDUSTRY</h3>
			<img src="services\Gi1VideoHub.png" alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>
        </div>
		</div>

		<!-- INDUSTRY-10 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">INDUSTRY</h3>
			<img src="services\Gi1VideoHub.png" alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>
        </div>
		</div>

		<!-- INDUSTRY-11 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">INDUSTRY</h3>
			<img src="services\Gi1VideoHub.png" alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>
        </div>
		</div>

		<!-- INDUSTRY-12 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">INDUSTRY</h3>
			<img src="services\Gi1VideoHub.png" alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>
        </div>
		</div>

		<!-- INDUSTRY-13 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">INDUSTRY</h3>
			<img src="services\Gi1VideoHub.png" alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>
        </div>
		</div>

		<!-- INDUSTRY-14 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">INDUSTRY</h3>
			<img src="services\Gi1VideoHub.png" alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>
        </div>
		</div>

		<!-- INDUSTRY-15 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">INDUSTRY</h3>
			<img src="services\Gi1VideoHub.png" alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>
        </div>
		</div>

		<!-- INDUSTRY-16 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">INDUSTRY</h3>
			<img src="services\Gi1VideoHub.png" alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>
        </div>
		</div>

		<!-- INDUSTRY-17 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">INDUSTRY</h3>
			<img src="services\Gi1VideoHub.png" alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>
        </div>
		</div>

		<!-- INDUSTRY-18 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">INDUSTRY</h3>
			<img src="services\Gi1VideoHub.png" alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>
        </div>
		</div>

		<!-- INDUSTRY-19 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">INDUSTRY</h3>
			<img src="services\Gi1VideoHub.png" alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>
        </div>
		</div>

		<!-- INDUSTRY-20 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">INDUSTRY</h3>
			<img src="services\Gi1VideoHub.png" alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>
        </div>
		</div>

		<!-- INDUSTRY-21 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">INDUSTRY</h3>
			<img src="services\Gi1VideoHub.png" alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>
        </div>
		</div>

		<!-- INDUSTRY-22 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">INDUSTRY</h3>
			<img src="services\Gi1VideoHub.png" alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>
        </div>
		</div>

		<!-- INDUSTRY-23 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">INDUSTRY</h3>
			<img src="services\Gi1VideoHub.png" alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>
        </div>
		</div>

		<!-- INDUSTRY-24 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">INDUSTRY</h3>
			<img src="services\Gi1VideoHub.png" alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>
        </div>
		</div>

		<!-- INDUSTRY-25 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">INDUSTRY</h3>
			<img src="services\Gi1VideoHub.png" alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>
        </div>
		</div>

		<!-- INDUSTRY-26 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">INDUSTRY</h3>
			<img src="services\Gi1VideoHub.png" alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>
        </div>
		</div>

		<!-- INDUSTRY-27 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">INDUSTRY</h3>
			<img src="services\Gi1VideoHub.png" alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>
        </div>
		</div>

		<!-- INDUSTRY-28 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">INDUSTRY</h3>
			<img src="services\Gi1VideoHub.png" alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>
        </div>
		</div>

		<!-- INDUSTRY-29 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">INDUSTRY</h3>
			<img src="services\Gi1VideoHub.png" alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>
        </div>
		</div>

		<!-- INDUSTRY-30 -->
        <div class="section">
		<div class="image-container-inner">
			<h3 class="h3">INDUSTRY</h3>
			<img src="services\Gi1VideoHub.png" alt="Image 1" class="image"
			onclick="toggleFullscreen(this)"
			>
        </div>
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
    </div>


<!--============================
=            Footer            =
=============================-->
<?php include 'footer.php';?>