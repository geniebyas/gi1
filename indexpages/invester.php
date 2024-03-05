
<style>
	body {
		margin: 0;
		padding: 0;
		font-family: Arial, sans-serif;
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
		border: 1px solid #ddd;
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
		color: #084595;
		text-align: left;

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
</style>


<section class="section justify-content-center m-2">
	<div class="container-investor">
		<div class="card-header">
			<h2 class="text-center" >Investor Relation</h2>
		</div>
		<div class="row">
			<div align="left" class="col-md-6">
				<div class="pdf-container">
					<h2>Pitch Deck</h2>
					<embed class="pdf-preview" src="materials\pdf Gi 1 pitchdeck.pdf#page=1" type="application/pdf" />
					<a href="materials\pdf Gi 1 pitchdeck.pdf" target="_blank">Open PITCH DECK</a>
				</div>
			</div>

			<div align="left" class="col-md-6">
				<div class="pdf-container">
					<h2>Design Document</h2>
					<embed class="pdf-preview" src="materials\designDoc.pdf#page=1" type="application/pdf" />
					<a href="materials\designDoc.pdf" target="_blank">Open Design Document</a>
				</div>
			</div>

		</div>
		<div class="btn btn-primary m-2" style ="margin: auto;"onclick="location.href='investorrel.php'">View More</div>
	</div>
</section>
