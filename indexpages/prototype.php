
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
		width: 50%;
		/* You can adjust the width as needed */
		margin: 0 auto;
	}
</style>
<div style="font-family: 'Poppins', Arial, sans-serif; text-align: center;">
	<h1 style="font-size: 40px; margin: 30px 0; font-weight: bold;">Prototype Video</h1>
</div>

<div class="section">
	<div class="left">
		<img class="image" class="centered-div" src="images\genie_full.png" alt="Your Image">
		<p style="color: black;" class="description">Witness the grand debut of our flagship platform’s prototype. 'Gi1’
			1<sup>st</sup> Top platform- 'Genie Media' (Social), where connections flourish and creativity soars. Behold
			the 2<sup>nd</sup> giant of Top platform- 'Genie Mall' (E-commerce), a digital mall that redefines
			convenience & satisfaction, coming soon.</p>
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