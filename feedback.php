<?php
include 'common/connection.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $benefit_count = $_POST['benefit_count'];
    $fav_platform = $_POST['fav_platform'];
    $selectedPlatforms = isset($_POST['platform']) ? $_POST['platform'] : [];
    $msg = $_POST['msg'];
    
    // Convert the array of selected platforms into a comma-separated string
    $platformsString = implode(', ', $selectedPlatforms);
    
    $insertFeedback = "INSERT INTO feedback (benefit_count, fav_platform, platform, msg) 
                      VALUES ('$benefit_count', '$fav_platform', '$platformsString', '$msg')";
    
    if (mysqli_query($conn, $insertFeedback) === FALSE) {
        echo "Failed to insert feedback\nerror : " . $conn->error;
    } else {
        header("Location: index.php");
    }
    

}



?>