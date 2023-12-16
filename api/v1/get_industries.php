<?php
include 'config/connection.php';

try{
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $getIndustries = "SELECT * FROM industry WHERE status = ". boolval(true);
    $result = mysqli_query($con,$getIndustries);
    $industries = array();
    if($result->num_rows > 0){
    while($row = mysqli_fetch_assoc($result)){
        $industry = null;
        $industry = $row;
        $industry['status'] = boolval($row['status']);
        $industry['ispinned'] = boolval($row['ispinned']);
        $industries[] = $industry;
        }
    }
    if(sizeof($industries) > 0){
        echo json_encode($industries);
    }else{
        echo json_encode(array("response" => "No Industries Available","code" => 404));
    }
    
}else{
    echo json_encode(array("response" => "Invalid Request","code"=>400));

}
}catch(Exception $e){
    echo json_encode(array("response" => $e->getMessage(),"code"=>$e->getCode()));
}

?>