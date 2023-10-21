<?php
session_start();
$_SESSION['current_session'] = "investorrel";  
include 'header.php'; ?>


<!-- Content start -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to bottom right, #FEC93B, #084595);
            font-family: Arial, sans-serif;
        }
        .container {
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
    </style>
</head>
<body>
    <div class="container">
        
        <p style="color: black;" class="p"><strong>
        
Pitching you- 'Gi1,' the ultimate all-in-one super app
housing the top 30 essential platforms of our time
under one roof. It's a 1 stop solution that offers
everything you need in a single, integrated
ecosystem. With 'Gi1,' users can effortlessly
streamline their daily activities, enjoying the
convenience of accessing multiple services and
platforms all in one place. Join us on this
transformative journey as we revolutionize the
digital landscape. It’s a place where the world
converges into a single user-centric hub.

        </strong></p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div align="left" class="col-md-6">
                <div class="pdf-container">
                    <h2>PITCH DECK</h2>
                    <embed class="pdf-preview" src="materials\pdf Gi 1 pitchdeck.pdf#page=1" type="application/pdf" />
                    <a href="materials\pdf Gi 1 pitchdeck.pdf" target="_blank">Open PITCH DECK</a>
                </div>
            </div>
         
            <div align="left" class="col-md-6">
                <div class="pdf-container">
                    <h2>MOCKUP</h2>
                    <embed class="pdf-preview" src="materials\G - 1 WIREFRAME..pdf#page=1" type="application/pdf" />
                    <a href="materials\G - 1 WIREFRAME..pdf" target="_blank">Open MOCKUP</a>
                </div>
            </div>
            
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


<!-- Content end -->



<?php include 'footer.php';?>