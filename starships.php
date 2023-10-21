<?php
session_start();
$_SESSION['current_session'] = "starships";  
include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background: linear-gradient(to bottom, #084595, #FEC93B);
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        .section {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            margin: 10px;
            padding: 20px;
            width: calc(30% - 20px);
            text-align: center;
            transition: transform 0.3s;
        }

        .section:hover {
            transform: scale(1.05);
        }

        .image-container {
            border-radius: 15px;
            overflow: hidden;
            width: 300px;
            height: 200px;
            margin: 0 auto;
        }

        .image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .description {
            padding: 10px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="section">
        <div class="image-container">
            <img class="image" src="image1.jpg" alt="Image 1">
        </div>
        <div class="description">
            Description for Image 1
        </div>
    </div>
    <!-- Repeat the above section for 30 images with descriptions -->

</body>
</html>

<?php include 'footer.php';?>