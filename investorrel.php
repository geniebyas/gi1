<?php
session_start();
$_SESSION['current_session'] = "investorrel";  
include 'header.php'; 
?>
<style>
        .container-inv {
            background-color: #ffffff;
            border-radius: 15px;
            margin-bottom: 10px;
            padding: 10px;
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
    <div style="height: 80px;"></div>
    <div class="container-inv m-4">
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

    <div class="container-inv m-4">
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
                    <h2>Design Document</h2>
                    <embed class="pdf-preview" src="materials\designDoc.pdf#page=1" type="application/pdf" />
                    <a href="materials\designDoc.pdf" target="_blank">Open Design Document</a>
                </div>
            </div>
            
        </div>
    </div>


<!-- Content end -->



<?php include 'footer.php';?>