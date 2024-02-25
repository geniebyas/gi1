<?php
session_start();
$_SESSION['current_session'] = "home";
include 'header.php'; ?>
<!--====================================
=            Promo Video            =
=====================================-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    body {
        background-color: #084595;
        color: #FFFFFF;
        align: center;
        font-family: Arial, sans-serif;
    }
    .video-section {
       
        align-self: start;
        border-radius: 100px;
        padding: 20px;
        text-align: center;
        display: inline-block;
       
    }
    .video-container {
        
        margin: 0 auto;/* Center the container horizontally */
        
        align-self: end;    
        overflow: hidden;
        border-radius: 20px;
    }
    .introduction-section {
        margin-top: 50px;
        padding: 50px 0;
        
    }
    .mobile-image {
        max-width: 100%;
        height: 600px;
    }
</style>

<section class="video-section d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div alig="center" class="video-container">
                    <video border-radius="50px"; width="auto" height="auto" autoplay loop muted>
                        <source src="video\Intro_Gi1.mp4" type="video/mp4">
                    </video>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="introduction-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h2 style="color:white; text-align:center;" ><strong>All In One In Gi1</strong></h2>
                <p style="color:white; text: size 30px;">'Gi1,' the world's 1<sup>st</sup> super app, embark on a revolutionary digital journey. Uniting top-tier platforms, it serves as the ultimate mall of apps, offering a comprehensive A-Z selection across industries and categories. Elevate your convenience and access all you need in a single, sophisticated app—'Gi1,' where innovation meets seamless functionality.
            </p>
            </div>
            <div class="col-md-4">
                <img src="images/phone1.png" alt="Mobile Image" class="mobile-image">
            </div>
        </div>
    </div>
</section>


<!-- Other sections of your homepage -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>





<!--====================================
=           End Promo video            =
=====================================-->

<!--====================================
=           Services Section            =
=====================================-->
<style>
    body {
        background-color: #084595;
        color: #FFFFFF;
        font-family: Arial, sans-serif;
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
        border-radius: 20px 20px 20px 20px;
        border-bottom: none;
        padding: 10px;
        text-align: center;
        font-weight: bold;
        
    }
    .card-body {
        padding: 20px;
       
    }
</style>
<div style="font-family: 'Poppins', Arial, sans-serif; text-align: center;">
    <h1 style="font-size: 40px; margin: 30px 0; font-weight: bold;">Our Services</h1>
</div>

<section class="cards-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Top Platforms</strong></h4>
                    </div>
                    <div class="card-body">
                        <ul>
                        <li style="color:white"><strong>Gi1 Media</strong></li>
                        <li style="color:white"><strong>Gi1 Mall</strong></li>
                        <li style="color:white"><strong>Gi1 Video Hub</strong></li>
                        <li style="color:white"><strong>Gi1 Edits</strong></li>
                        <li style="color:white"><strong>Gi1 Game Zone</strong></li>
                        <li style="color:white"><strong>Gi1 Beauty</strong></li>
                        <li style="color:white"><strong>Gi1 Travels</strong></li>
                        <li style="color:white"><strong>Gi1 Podcasts</strong></li>
                        <li style="color:white"><strong>Gi1 Classes</strong></li>
                        <li style="color:white"><strong>Gi1 Hiring</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Main Platforms</strong></h4>
                    </div>
                    <div class="card-body">
                        <ul>
                        <li style="color:white"><strong>Gi1 Health</strong></li>
                        <li style="color:white"><strong>Gi1 Memes</strong></li>
                        <li style="color:white"><strong>Gi1 Trading</strong></li>
                        <li style="color:white"><strong>Gi1 Languages</strong></li>
                        <li style="color:white"><strong>Gi1 Kids Zone</strong></li>
                        <li style="color:white"><strong>Gi1 Real Estate</strong></li>
                        <li style="color:white"><strong>Gi1 Sports</strong></li>
                        <li style="color:white"><strong>Gi1 Freelance</strong></li>
                        <li style="color:white"><strong>Gi1 Comedy</strong></li>
                        <li style="color:white"><strong>Gi1 News</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Others<strong></h4>
                    </div>
                    <div class="card-body">
                        <ul>
                        <li style="color:white"><strong>Gi1 Sharing</strong></li>
                        <li style="color:white"><strong>Gi1 Legal</strong></li>
                        <li style="color:white"><strong>Gi1 Docs</strong></li>
                        <li style="color:white"><strong>Gi1 Book Store</strong></li>
                        <li style="color:white"><strong>Gi1 Reciepes</strong></li>
                        <li style="color:white"><strong>Gi1 Caller</strong></li>
                        <li style="color:white"><strong>Gi1 A.I.</strong></li>
                        <li style="color:white"><strong>Gi1 App Locks</strong></li>
                        <li style="color:white"><strong>Gi1 Multiverse</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<style>
    body {
        margin: 0;
        padding: 0;
    }

    #mainDiv {
        position: relative;
        width: 100%;
        color: #fff;
        text-align: center;
        padding: 20px;
    }

    #viewMore {
        position: absolute;
        top: 0;
        right: 0;
        color: #333;
        padding: 10px 15px;
        cursor: pointer;
    }

    #popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        text-align: center;
    }

    #popup-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #e74c3c;
        padding: 20px;
    }
</style>


<div id="mainDiv">
    <a class="btn btn-primary" href="services.php">View More</a>

</div>
<div id="popup">
    <div id="popup-content">
        <h2>Coming Soon</h2>
        <button onclick="hidePopup()">Close</button>
    </div>
</div>

<script>
    function showPopup() {
        document.getElementById("popup").style.display = "block";
    }

    function hidePopup() {
        document.getElementById("popup").style.display = "none";
    }
</script>


<!--====================================
=            End Services Section            =
=====================================-->

<!--====================================
=            Prototype video Section            =
=====================================-->




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
        <p style="color: black;" class="description">Witness the grand debut of our flagship platform’s prototype. 'Gi1’ 1<sup>st</sup> Top platform- 'Genie Media' (Social), where connections flourish and creativity soars. Behold the 2<sup>nd</sup> giant of Top platform- 'Genie Mall' (E-commerce), a digital mall that redefines convenience & satisfaction, coming soon.</p>
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


<!--====================================
=            End prototype video Section            =
=====================================-->
<!--=================================
=            Testimonial            =
==================================-->




<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
    }

    .testimonial-section {
        width: 100%;
        overflow: hidden;
        position: relative;
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
        width: 80%;
        height: 500px;
        border-radius: 20px;
        /* Curved corners for the image */
    }

    .testimonial-slider {
        width: 500%;
        /* Total width is 5 times the testimonial width */
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
</style>
<div class="section m-5">
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

<!-- Market Research (Feedback Section) -->
<div class="section justify-content-center text-left">
    <div class="card m-3">
        <div class="card-header text-center">Market Research Form</div>
        <div class="card-body">
            <div class="col">
                <form action="feedback.php" role="form" class="php-email-form" method="post">
                    <div class="col m-2">
                        <h5 class="form-label">A> How much will 1 super app for all benefit you?(%)</h5>
                        <input type="number" name="benefit_count" placeholder="%" class="form-control" required>
                    </div>
                    <div class="col m-2">
                        <h5 class="form-label">B> Share your fav & daily using platforms</h5>
                        <input type="text" name="fav_platform" placeholder="ex. Social media, E-commerce, Editing" class="form-control" required>
                    </div>
                    <div class="col m-2">
                        <h5 class="form-label">C> Make your own all in 1 super app</h5>
                        <!-- <select name="platform" id="platform" class="form-control">
                            <option value="Gi1 Media" class="form-control">Gi1 Media</option>
                            <option value="Gi1 Mall" class="form-control">Gi1 Mall</option>
                            <option value="Gi1 Video Hub" class="form-control">Gi1 Video Hub</option>
                            <option value="Gi1 Edits" class="form-control">Gi1 Edits</option>
                            <option value="Gi1 Game Zone" class="form-control">Gi1 Game Zone</option>
                            <option value="Gi1 Beauty" class="form-control">Gi1 Beauty</option>
                            <option value="Gi1 Travels" class="form-control">Gi1 Travels</option>
                            <option value="Gi1 Podcasts" class="form-control">Gi1 Podcasts</option>
                            <option value="Gi1 Classes" class="form-control">Gi1 Classes</option>
                            <option value="Gi1 Hiring" class="form-control">Gi1 Hiring</option>
                            <option value="Gi1 Health" class="form-control">Gi1 Health</option>
                            <option value="Gi1 Memes" class="form-control">Gi1 Memes</option>
                            <option value="Gi1 Trading" class="form-control">Gi1 Trading</option>
                            <option value="Gi1 Languages" class="form-control">Gi1 Languages</option>
                            <option value="Gi1 Kids Zone" class="form-control">Gi1 Kids Zone</option>
                            <option value="Gi1 Real Estate" class="form-control">Gi1 Real Estate</option>
                            <option value="Gi1 Sports" class="form-control">Gi1 Sports</option>
                            <option value="Gi1 Freelance" class="form-control">Gi1 Freelance</option>
                            <option value="Gi1 Comedy" class="form-control">Gi1 Comedy</option>
                            <option value="Gi1 News" class="form-control">Gi1 News</option>
                            <option value="Gi1 Sharing" class="form-control">Gi1 Sharing</option>
                            <option value="Gi1 Legal" class="form-control">Gi1 Legal</option>
                            <option value="Gi1 Docs" class="form-control">Gi1 Docs</option>
                            <option value="Gi1 Book Store" class="form-control">Gi1 Book Store</option>
                            <option value="Gi1 Recipes" class="form-control">Gi1 Recipes</option>
                            <option value="Gi1 Caller" class="form-control">Gi1 Caller</option>
                            <option value="Gi1 A.I" class="form-control">Gi1 A.I</option>
                            <option value="Gi1 Notes" class="form-control">Gi1 Notes</option>
                            <option value="Gi1 App Locks" class="form-control">Gi1 App Locks</option>
                            <option value="Gi1 Multiverse" class="form-control">Gi1 Multiverse</option>

                        </select> -->
                        <input type="checkbox" name="platform[]" value="Gi1 Media" id="gi1Media">
                        <label for="gi1Media">Gi1 Media</label>

                        <input type="checkbox" name="platform[]" value="Gi1 Mall" id="gi1Mall">
                        <label for="gi1Mall">Gi1 Mall</label>

                        <input type="checkbox" name="platform[]" value="Gi1 Video Hub" id="gi1VideoHub">
                        <label for="gi1VideoHub">Gi1 Video Hub</label>

                        <!-- Repeat for other checkboxes -->

                        <input type="checkbox" name="platform[]" value="Gi1 Edits" id="gi1Edits">
                        <label for="gi1Edits">Gi1 Edits</label>

                        <input type="checkbox" name="platform[]" value="Gi1 Game Zone" id="gi1GameZone">
                        <label for="gi1GameZone">Gi1 Game Zone</label>

                        <input type="checkbox" name="platform[]" value="Gi1 Beauty" id="gi1Beauty">
                        <label for="gi1Beauty">Gi1 Beauty</label>

                        <input type="checkbox" name="platform[]" value="Gi1 Travels" id="gi1Travels">
                        <label for="gi1Travels">Gi1 Travels</label>

                        <input type="checkbox" name="platform[]" value="Gi1 Podcasts" id="gi1Podcasts">
                        <label for="gi1Podcasts">Gi1 Podcasts</label>

                        <input type="checkbox" name="platform[]" value="Gi1 Classes" id="gi1Classes">
                        <label for="gi1Classes">Gi1 Classes</label>

                        <input type="checkbox" name="platform[]" value="Gi1 Hiring" id="gi1Hiring">
                        <label for="gi1Hiring">Gi1 Hiring</label>

                        <input type="checkbox" name="platform[]" value="Gi1 Health" id="gi1Health">
                        <label for="gi1Health">Gi1 Health</label>

                        <input type="checkbox" name="platform[]" value="Gi1 Memes" id="gi1Memes">
                        <label for="gi1Memes">Gi1 Memes</label>

                        <input type="checkbox" name="platform[]" value="Gi1 Trading" id="gi1Trading">
                        <label for="gi1Trading">Gi1 Trading</label>

                        <input type="checkbox" name="platform[]" value="Gi1 Languages" id="gi1Languages">
                        <label for="gi1Languages">Gi1 Languages</label>

                        <input type="checkbox" name="platform[]" value="Gi1 Kids Zone" id="gi1KidsZone">
                        <label for="gi1KidsZone">Gi1 Kids Zone</label>

                        <input type="checkbox" name="platform[]" value="Gi1 Real Estate" id="gi1RealEstate">
                        <label for="gi1RealEstate">Gi1 Real Estate</label>

                        <input type="checkbox" name="platform[]" value="Gi1 Sports" id="gi1Sports">
                        <label for="gi1Sports">Gi1 Sports</label>

                        <input type="checkbox" name="platform[]" value="Gi1 Freelance" id="gi1Freelance">
                        <label for="gi1Freelance">Gi1 Freelance</label>

                        <input type="checkbox" name="platform[]" value="Gi1 Comedy" id="gi1Comedy">
                        <label for="gi1Comedy">Gi1 Comedy</label>

                        <input type="checkbox" name="platform[]" value="Gi1 News" id="gi1News">
                        <label for="gi1News">Gi1 News</label>

                        <input type="checkbox" name="platform[]" value="Gi1 Sharing" id="gi1Sharing">
                        <label for="gi1Sharing">Gi1 Sharing</label>

                        <input type="checkbox" name="platform[]" value="Gi1 Legal" id="gi1Legal">
                        <label for="gi1Legal">Gi1 Legal</label>

                        <input type="checkbox" name="platform[]" value="Gi1 Docs" id="gi1Docs">
                        <label for="gi1Docs">Gi1 Docs</label>

                        <input type="checkbox" name="platform[]" value="Gi1 Book Store" id="gi1BookStore">
                        <label for="gi1BookStore">Gi1 Book Store</label>

                        <input type="checkbox" name="platform[]" value="Gi1 Recipes" id="gi1Recipes">
                        <label for="gi1Recipes">Gi1 Recipes</label>

                        <input type="checkbox" name="platform[]" value="Gi1 Caller" id="gi1Caller">
                        <label for="gi1Caller">Gi1 Caller</label>

                        <input type="checkbox" name="platform[]" value="Gi1 A.I" id="gi1AI">
                        <label for="gi1AI">Gi1 A.I</label>

                        <input type="checkbox" name="platform[]" value="Gi1 Notes" id="gi1Notes">
                        <label for="gi1Notes">Gi1 Notes</label>

                        <input type="checkbox" name="platform[]" value="Gi1 App Locks" id="gi1AppLocks">
                        <label for="gi1AppLocks">Gi1 App Locks</label>

                        <input type="checkbox" name="platform[]" value="Gi1 Multiverse" id="gi1Multiverse">
                        <label for="gi1Multiverse">Gi1 Multiverse</label>

                    </div>
                    <div class="col m-2">
                        <h5 class="form-label">D> Feedback line for us</h5>
                        <textarea type="text" name="msg" placeholder="Drop any message for us" class="form-control" rows="4" required></textarea>
                    </div>
                    <div class="col m-2">
                        <input type="submit" style="width: 100%;" value="Submit" class="btn btn-success">
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>





<!--=================================
=            End Testimonial            =
==================================-->

<!--=================================
=            About us            =
==================================-->



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
        <h2 class="text-center">Investor Relation</h2>
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
        <div class="btn btn-primary m-2" onclick="location.href='investorrel.php'">View More</div>
    </div>
</section>


<section class="section justify-content-center m-2">
  <div class="container">
    <div class="row" >
      <div class="col-md-12">
        <div class="card" style="width:100%;">
          <div class="card-header">
            <h3 class="text-center">Gi1 Stars</h3>
          </div>
          <div class="star-container row m-2">
            <div class="star col-md-2">
              <img src="stars\VIBGYOR.png" alt="Star 1" width="100">
              <p class="p-star">Contact 'Gi1' today and let us bring the magic of technology to your fingertips. Reach out to us and discover 
                how we can make your digital dreams come true.</p>
            </div>

            <div class="star col-md-2">
              <img src="stars\GOLDEN.png" alt="Star 2" width="100">
              <p class="p-star">Contact 'Gi1' today and let us bring the magic of technology to your fingertips. Reach out to us and discover 
                how we can make your digital dreams come true.</p>
            </div>

            <div class="star col-md-2">
              <img src="stars\SILVER.png" alt="Star 3" width="100">
              <p class="p-star">Contact 'Gi1' today and let us bring the magic of technology to your fingertips. Reach out to us and discover 
                how we can make your digital dreams come true.</p>
            </div>

            <div class="star col-md-2">
              <img src="stars\BLUE.png" alt="Star 4" width="100">
              <p class="p-star">Contact 'Gi1' today and let us bring the magic of technology to your fingertips. Reach out to us and discover 
                how we can make your digital dreams come true.</p>
            </div>

            <div class="star col-md-2">
              <img src="stars\BLACK.png" alt="Star 5" width="100">
              <p class="p-star">Contact 'Gi1' today and let us bring the magic of technology to your fingertips. Reach out to us and discover 
                how we can make your digital dreams come true.</p>
            </div>
          </div>
            <div class="btn btn-primary m-2" onclick="location.href='starships.php'">View More</div>
</div>
      </div>
    </div>
  </div>
</section>


<section class="section justify-content-center m-2">
    <div class="card m-3">
        <div class="card-header">
            <h2 class="text-center">Careers</h2>
        </div>
      <div class="card-body" style="overflow:auto;">
        <img src="images/hiring.jpg" alt="we are hiring" class="image-fluid"
        style="height: 200px;width: 200px;">
      </div>
      <div class="card-footer justify-content-center">
      <div class="btn btn-primary m-2" onclick="location.href='career.php'">View More</div>
      </div>
    </div>

  </section>


<section class="about-us-section">
    <div class="container">
        <div style="font-family: 'Poppins', Arial, sans-serif; text-align: center;">
            <h1 style="font-size: 40px; margin: 30px 0; font-weight: bold;">About Us</h1>
        </div>
        <img class="about-us-image" src="images\about\story-slider-01.jpg" alt="About Us">
        <p class="description">Introducing 'Gi1,' the super app that brings together the apex of today's most popular 
industries into a unified digital marvel. With its delightful Genie-inspired theme, who will grant your each & every wish. Welcome the convenience of 1 stop solution for the world & be ready to be a captive by the versatility of 'Gi1,' as its ushers in a new era of streamlined accessibility and fulfils your every aspiration. Experience the future at your fingertips.</p>
    </div>
    <div class="btn btn-primary m-2" onclick="location.href='about.php'">View More</div>
</section>


<!--=================================
=            About us            =
==================================-->



<!--============================
=            Footer            =
=============================-->
<?php include 'footer.php'; ?>