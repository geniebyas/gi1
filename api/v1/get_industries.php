<?php
include 'config/connection.php';

try{
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $getIndustries = "SELECT * FROM industry WHERE status = true";
    $result = mysqli_query($conn,$getIndustries);
    $industries = array();
    if($result->num_rows > 0){
    while($row = mysqli_fetch_assoc($result)){
        $industries[] = $row;
    }
}
    if(sizeof($industries) > 0){
        header('Content-Type: application/json');
        echo json_encode($industries);
    }else{
        header('Content-Type: application/json');
        echo json_encode(array("response" => "No Industries Available","code" => 404));
    }
    
}else{
    header("Content-Type: application/json");
    echo json_encode(array("response" => "Invalid Request","code"=>400));

}
}catch(Exception $e){
    header("Content-Type: application/json");
    echo json_encode(array("response" => $e->getMessage(),"code"=>$e->getCode()));
}

?>