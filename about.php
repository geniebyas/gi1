<?php
session_start();
$_SESSION['current_session'] = "about";
include 'header.php'; ?>


<style>
  .image-container {
    margin-top: 20px;
    height: fit-content;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  li{
    font-size: small;
  }

  .image-logo {
    max-width: 50%;
    max-height: 50%;
    border-radius: 20px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  }

  .row-aboutus {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding: 10px;
  }

  .image-round {
    border-radius: 10%;
    width: 50%;
    height: 180px;
    overflow: hidden;
  }
</style>


<!--================================
=            Page Title            =
=================================-->
<div class="container-fluid">
  <div class="row">
    <div class="col-12 image-container">
      <img src="images/logoelevated.jpg" alt="Logo" class="image-logo">
    </div>
  </div>
  <h3 class="text-center" style="
			color: #ffffff;
			font-weight: 100px;
			text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
			border-radius: 0 0 15px 15px; 
			margin: 0;">Gi1 Super App</h3>
</div>


<!-- <section class="section">

    <style>
        .video-section {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            /* background-color: #3498db; */
        }

        .video-container {
            max-width: 80%;
            border-radius: 20px;
            overflow: hidden;
            position: relative;
        }

        video {
            width: 100%;
            height: auto;
            display: block;
        }
    </style>

    <div class="video-section">
        <div class="video-container">
            <video autoplay loop muted>
                <source src="video\Intro_Gi1.mp4" type="video/mp4">
            </video>
        </div>
    </div>
</section> -->

<div class="section">
<div class="col">
  <div class="row row-aboutus">
    <div class="col-md-6">
      <div class="btn btn-primary m-3">Share Review</div>
    </div>
    <div class="col-md-6">
      <div class="btn btn-primary m-3">Join Community</div>
    </div>
  </div>
  <h5 style="font-weight:100px;color:#ffffff;">'Gi1' is the definitive 1-stop solution, offering everything for everyone in just 1 virtual mall of apps.</h3>
</div>
</div>



<div class="section m-2">
<div class="section-title">
      <h2>Gi1 PitchDeck</h2>
    </div>
  <object data="materials/Gi1pitchdeck2023.pdf" width="100%" height="600px"="application/pdf">
    <h2 style="color: white;" class="section-title">Click here to view <a href="materials/Gi1pitchdeck2023.pdf" style="color:darkgoldenrod;">Gi1 PitchDeck</a></h2>
  </object>
</div>

<!--====  End of Section comment  ====-->


<div class="section">
  <div class="col-12">
    <div class="section-title">
      <h2>More From Us...</h2>
    </div>
    <div class="row m-3 justify-content-center">
      <div class="card col-md-3 m-2 hover-zoom" onclick="location.href='starships.php'">
        <div class="card-body">
          <img src="stars/VIBGYOR.png" alt="Star" class="image-about">
        </div>
        <div class="card-footer">
          <h3>Starships</h3>
        </div>
      </div>
      <div class="card col-md-3 m-2 hover-zoom " onclick="location.href='services.php'">
        <div class="card-body ">
          <img src="images/services.png" alt="Star" class="image-about">
        </div>
        <div class="card-footer">
          <h3>Services</h3>
        </div>
      </div>

      <div class="card col-md-3 m-2 hover-zoom" onclick="location.href='career.php'">
        <div class="card-body">
          <img src="images/career.jpg" alt="career" class="image-about">
        </div>
        <div class="card-footer">
          <h3>Career</h3>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="section">

  <h2 class="section-title">Gi1 Squad</h2>

  <div class="row m-2 justify-content-center">

    <div class="col-md-3 m-1">
      <div class="card">
        <div class="card-header hover-zoom">
          <img src="images/team/saad.jpg" alt="MSD" class="image-round">
        </div>
        <div class="card-body">
          <h3>MSD (Muhammad Saad)</h3>
          <h5>Founder & CEO</h5>
          <ul style="text-align:left;">
            <li>A dynamic 20-year-old founder, entrepreneur, and aspiring lawyer hailing from Gujarat.</li>
            <li>Previously served as an operating executor in a water conditioner startup.</li>
            <li>Devoting the last 4 years to developing and refining a visionary idea, after a strategic pivot from my previous startup.</li>
            <li>Have versatile skill set in business, entrepreneurship, communication, management, legal and consulting abilities.</li>
          </ul>
        </div>
        <div class="card-footer justify-content-center">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/aa/LinkedIn_2021.svg/200px-LinkedIn_2021.svg.png" alt="Linkedin" onclick="location.href='https://www.linkedin.com/in/muhammad-saad-msd-b373821a5'">
        </div>
      </div>
    </div>

    <div class="col-md-3 m-1">
      <div class="card">
        <div class="card-header hover-zoom">
          <img src="images/team/shakil.png" alt="Shakil" class="image-round">
        </div>
        <div class="card-body">
          <h3>MuhammadShakil Patel</h3>
          <h5>CTO</h5>
          <ul style="text-align:left;">
            <li>Dedicated Software Developer based in Gujarat, with a strong passion for coding and technology.</li>
            <li>Currently a final year student pursuing a Bachelor's in Computer Applications (BCA), with a focus on software development.</li>
            <li>Successfully created and deployed over 15 live Android applications and websites.</li>
            <li>Proficient in a wide range of programming languages, expertise in more than 12 languages, ensuring versatility in handling diverse projects.</li>
          </ul>
        </div>
        <div class="card-footer justify-content-center">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/aa/LinkedIn_2021.svg/200px-LinkedIn_2021.svg.png" alt="Linkedin" onclick="location.href='https://www.linkedin.com/in/muhammadshakil-mustak-75775623a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app'">
        </div>
      </div>
    </div>

    <div class="col-md-3 m-1">
      <div class="card">
        <div class="card-header hover-zoom">
          <img src="images/team/shakil.png" alt="Aamir" class="image-round">
        </div>
        <div class="card-body">
          <h3>Aamir Dudhwala</h3>
          <h5>COO</h5>
          <ul style="text-align:left;">
            <li>A Gujarat-based all-around professional, proficient in coding, design, and execution.</li>
            <li>Recently graduated BCA with a track record of creating numerous self-developed apps, websites, and other projects.</li>
            <li>Accomplished in building e-commerce, books store apps, and impactful social work sites. Also a perfect communicator and deal maker.</li>
            <li>Mastery in over 8 programming languages, excels as a designer, and a skilled negotiator.</li>
          </ul>
        </div>
        <div class="card-footer justify-content-center">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/aa/LinkedIn_2021.svg/200px-LinkedIn_2021.svg.png" alt="Linkedin" onclick="location.href='https://www.linkedin.com/in/aamir-dudhwala-458aa7257'">
        </div>
      </div>
    </div>

    <div class="col-md-3 m-1">
  <div class="card">
    <div class="card-header hover-zoom">
      <img src="images/team/shakil.png" alt="Sahil" class="image-round">
    </div>
    <div class="card-body">
      <h3>Sahil Patel</h3>
      <h5>CDO</h5>
      <ul style="text-align:left;">
        <li>A Gujarat-originated, multi-talented professional, excelling as a perfect designer, coder, and professional gamer.</li>
        <li>Recently graduated with a BCA degree and holds a master's in the field of designing, also a professional gamer.</li>
        <li>Gained valuable experience during a 2-year tenure as a designer in a company, delivering numerous successful projects.</li>
        <li>Proficient in over 7 programming languages, distinguished by pure designing skills, and known for silently working on impactful and dynamic designs.</li>
      </ul>
    </div>
    <div class="card-footer justify-content-center">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/aa/LinkedIn_2021.svg/200px-LinkedIn_2021.svg.png" alt="Linkedin" onclick="location.href='https://www.linkedin.com'">
        </div>
  </div>
</div>



  </div>


</div>





<!--============================
=            Footer            =
=============================-->
<?php include 'footer.php'; ?>