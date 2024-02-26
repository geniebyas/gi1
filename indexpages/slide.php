<style>
	body {
		margin: 0;
		padding: 10px;
		background-color: #3498db;
	}

	.testimonial-section {
		width: 65%;
		overflow: hidden;
		position: relative;
		margin: auto;
	}

	.testimonial-container {
		display: flex;
		width: 100%;
		max-width: 100%;
		white-space: nowrap;
		overflow: hidden;
	}

	.testimonial {
		width: 100%;
		display: inline-block;
		text-align: center;
	}

	.testimonial img {
		width: 100%;
		height: auto;
		/* Make the height responsive */
		border-radius: 20px;
	}

	.testimonial-slider {
		width: 500%;
		white-space: nowrap;
		animation: slide 20s infinite;
	}

	@keyframes slide {
		0% {
			transform: translateX(0);
		}

		20% {
			transform: translateX(0);
		}

		25% {
			transform: translateX(-100%);
		}

		45% {
			transform: translateX(-100%);
		}

		50% {
			transform: translateX(-200%);
		}

		70% {
			transform: translateX(-200%);
		}

		75% {
			transform: translateX(-300%);
		}

		95% {
			transform: translateX(-300%);
		}

		100% {
			transform: translateX(0);
		}
	}

	.form-label h5 {
		text-align: left;
	}

	/* Media queries for smaller screens */
	@media screen and (max-width: 768px) {
		.testimonial-section {
			width: 90%;
		}

		.testimonial img {
			width: 100%;
			/* Make the image fill the container */
			max-width: none;
			/* Remove the maximum width constraint */
		}
	}
</style>

<div class="section m-1">
	<div class="testimonial-section">
		<div class="testimonial-container">
			<div class="testimonial-slider">
				<div class="testimonial">
					<img src="images\slider\slide_1.png" alt="Testimonial 1">
				</div>
				<div class="testimonial">
					<img src="images\slider\slide_4.png" alt="Testimonial 3">
				</div>
				<div class="testimonial">
					<img src="images\slider\multiverse_img.PNG" alt="Testimonial 2">
				</div>

				<div class="testimonial">
					<img src="images\slider\gi1missionaimvision.png" alt="Testimonial 4">
				</div>
				<div class="testimonial">
					<img src="images\slider\slide_2.png" alt="Testimonial 5">
				</div>
			</div>
		</div>
	</div>
</div>