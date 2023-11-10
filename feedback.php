<?php
include 'common/connection.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $benefit_count = $_POST['benefit_count'];
    $fav_platform = $_POST['fav_platform'];
    $platform = $_POST['platform'];
    $msg = $_POST['msg'];

    $insertFeedback = "insert into feedback(benefit_count,fav_platform,platform,msg) values($benefit_count,'$fav_platform','$platform','$msg')";

    if(mysqli_query($conn, $insertFeedback) === FALSE){
        echo "Failed to insert feedback\nerror : ". $conn->error;
    }else{
        header("Location:index.php");
    }




}



?>