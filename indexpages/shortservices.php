
<style>
	body {
		margin: 0;
		padding: 0;
		font-family: Avenir Next, sans-serif;
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

	.container-investor {
		background-color: #ffffff;
		border-radius: 15px;
		margin-top: 10px;
		margin-bottom: 10px;
		padding: 20px;
	}

	.pdf-container {
		margin-top: 10px;
		border-radius: 15px;
		padding: 20px;
	}

	h1 {
		font-weight: bold;
		text-align: center;
		color: #084595;
	}

	h2 {
		font-size: 30px;
		color: #ffffff;
		text-align: left;
		font-family: Poppins, sans-serif;

	}
	h4 {
		font-size: 30px;
		color: #084595;
		text-align: center;
		font-family: Poppins, sans-serif;

	}

	.pdf-preview {
		width: 100%;
		max-width: 300px;

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
		border-radius: 30%;
		background: #FFFFFF;
		padding: 10px;
		text-align: center;
		color: #FFFFFF;
		margin: 10px;
		transition: transform 0.3s;
		border: 1px solid #333;
	}

	.star:nth-child(2n) {
		background: #FFFFFF;
		color: #084595;
	}

	.p-star {
		padding: 10px;
		color: #084595;
		margin: 0;
		overflow: hidden;
	}
	#mainDiv {
		position: relative;
		width: 100%;
		color: #fff;
		text-align: center;
		padding: 20px;
		font-family: Poppins, sans-serif;
	}
	.cards-section {
        max-width: 100%;
        padding: 50px 0;
    }
    .card {
        border-radius: 20px;
        border: 20px;
        max-width: 150%;
        background-color: #084595;
        color: #FFFFFF;
        margin-bottom: 20px;
    }
    .card-header {
        background-color: #FEC93B;
        border-radius: 30px;
        border-bottom: none;
        padding: 10px;
		font-family: Avenir Next, sans-serif;
        text-align: center;
        font-weight: bold;
        
    }
	.sec-header {
        background: linear-gradient(135deg,  #084595, #FEC93B); /* Gradient background */
        border-radius: 15px;
        border-bottom: none;
        padding: 10px;
		font-family: Avenir Next, sans-serif;
        text-align: center;
        font-weight: bold;
        
    }
    .card-body {
        padding: 20px;
		max-width: 100%;
		font-family: Poppins, sans-serif;
		color:white;
		
       
    }
	.card-body .list-item {
	}
	ul{
		list-style-type: none; /* Remove default bullets */
		font-family: Poppins, sans-serif;
	}
	.card-body li {
            color: white; /* Set text color to white */
			font-weight: normal;	
			text-align: left;
			font-size: 20px; /* Set text size to 16 pixels */
			font-family: Poppins, sans-serif;
			display: flex; /* Use flexbox for layout */
            align-items: center; /* Align items vertically */
            padding: 10px; /* Adjust padding as needed */
        }
	.card-body  li img {
            width: 1em; /* Set width of the image to match text size */
            height: 1em; /* Set height of the image to match text size */
            margin-right: 10px; /* Add spacing between image and text */
			font-family: Poppins, sans-serif;
			filter: invert(100%); /* Invert the color of the image to white */
        }

</style>


<section class="section justify-content-center m-2">
	<div class="container-investor">
		<div class="sec-header">
			<h2 class="text-center" >Our Services</h2>
		</div>
		<div class="row">
			<div align="center" class="col-md-4">
				<div class="pdf-container">
				<div class="card">
                    <div class="card-header">
                        <h4 >Top Industries</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                        <li><img src="images/icons/Social Media.png" alt="Icon">Gi1 Media</li>
                        <li><img src="images/icons/E-commerce.png" alt="Icon">Gi1 Mall</li>
                        <li><img src="images/icons/Video.png" alt="Icon">Gi1 Video Hub</li>
                        <li><img src="images/icons/Editing.png" alt="Icon">Gi1 Edits</li>
                        <li><img src="images/icons/Game.png" alt="Icon">Gi1 Game Zone</li>
                        <li><img src="images/icons/Social Media.png" alt="Icon">Gi1 Beauty</li>
                        <li><img src="images/icons/Social Media.png" alt="Icon">Gi1 Travels</li>
                        <li><img src="images/icons/Music.png" alt="Icon">Gi1 Podcasts</li>
                        <li><img src="images/icons/Education.png" alt="Icon">Gi1 Classes</li>
                        <li><img src="images/icons/Hiring.png" alt="Icon">Gi1 Hiring</li>
                        </ul>
                    </div>
                </div>


					


				</div>
			</div>

			<div align="center" class="col-md-4">
				<div class="pdf-container">
				<div class="card">
                    <div class="card-header">
                        <h4>Main Platforms<h4>
                    </div>
                    <div class="card-body">
                        <ul>
                        <li><img src="images/icons/Game.png" alt="Icon">Gi1 Health</li>
                        <li><img src="images/icons/Memes.png" alt="Icon">Gi1 Memes</li>
                        <li><img src="images/icons/Trading.png" alt="Icon">Gi1 Trading</li>
                        <li><img src="images/icons/Language.png" alt="Icon">Gi1 Languages</li>
                        <li><img src="images/icons/Sport.png" alt="Icon">Gi1 Kids Zone</li>
                        <li><img src="images/icons/Real estate.png" alt="Icon">Gi1 Estate</li>
                        <li><img src="images/icons/Sport.png" alt="Icon">Gi1 Sports</li>
                        <li><img src="images/icons/Freelance.png" alt="Icon">Gi1 Freelance</li>
                        <li><img src="images/icons/Comady.png" alt="Icon">Gi1 Comady</li>
                        <li><img src="images/icons/News.png" alt="Icon">Gi1 News</li>
                        </ul>
                    </div>
                </div>


					

				</div>
			</div>
			<div align="center" class="col-md-4">
				<div class="pdf-container">
				<div class="card">
                    <div class="card-header">
                        <h4>Other Services</h4>
                    </div>
                    <div class="card-body">
					<ul>
                        <li><img src="images/icons/Sharing.png" alt="Icon">Gi1 Sharing</li>
                        <li><img src="images/icons/Legal & consult.png" alt="Icon">Gi1 Legal</li>
                        <li><img src="images/icons/PDF & Doc.png" alt="Icon">Gi1 Docs</li>
                        <li><img src="images/icons/Education.png" alt="Icon">Gi1 Book Store</li>
                        <li><img src="images/icons/Food recipe.png" alt="Icon">Gi1 Reciepes</li>
                        <li><img src="images/icons/Caller Detail.png" alt="Icon">Gi1 Caller</li>
                        <li><img src="images/icons/Metaverse.png" alt="Icon">Gi1 A.I.</li>
                        <li><img src="images/icons/App lock.png" alt="Icon">Gi1 App Locks</li>
                        <li><img src="images/icons/Metaverse.png" alt="Icon">Gi1 Multiverse</li>
						<li><img src="images/icons/Education.png" alt="Icon">Gi1 Notes</li>
                        </ul>
                    </div>
                </div>
					

				</div>
			</div>

		</div>
		<div id="mainDiv">
	<a class="btn btn-primary" onclick="location.href='services.php'">View More</a>

		</div>
		
</section>
















