<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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
      border-radius: 20px;
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
      font-family: Poppins, sans-serif;
      border-radius: 30%;
    }

    p {
      font-size: 20px;
      color: blue;
      text-align: center;
      font-family: Poppins, sans-serif;
      border-radius: 30%;
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
    }

    .card-header {
      color: #fffff;
      font-family: Poppins, sans-serif;
      border-radius: 30%;
      font-size: 16px;
    }

    .video-section {
      align-self: start;
      border-radius: 100px;
      padding: 20px;
      text-align: center;
      display: inline-block;
    }

    .video-container {
      margin: 0 auto;
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

    /* Custom CSS for Download Button */
    .download-btn {
      display: inline-block;
      background-color: #28a745;
      color: white;
      padding: 12px 24px;
      font-size: 18px;
      border-radius: 30px;
      transition: background-color 0.3s ease;
      text-align: center;
      text-decoration: none;
    }

    .download-btn:hover {
      background-color: #218838;
    }
  </style>
</head>

<body>
<section class="section justify-content-center m-2">
  <div class="container-investor">
    <div class="row">
      <div class="col-md-2"></div>

      <div class="col-md-8">
        <div class="video-container">
          <video border-radius="50px" width="auto" height="auto" autoplay loop muted>
            <source src="video/Intro_Gi1.mp4" type="video/mp4">
          </video>
        </div>
      </div>

      <div class="col-md-2"></div>
    </div>

    <!-- Download App Button -->
    <div class="row mt-4">
      <div class="col text-center">
        <a href="https://play.google.com/store/apps/details?id=com.gi1.gi1infoapp" class="download-btn">Download Our Android App</a>
      </div>
    </div>
  </div>
</section>
</body>
</html>
