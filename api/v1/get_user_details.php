<?php
include 'config/connection.php';

try{
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['uid'])){

    $uid = $_POST['uid'];

    $getUser = "SELECT * FROM users WHERE uid = '$uid'";
    $getUserRes = mysqli_query($con,$getUser);

    if ($getUserRes && mysqli_num_rows($getUserRes) > 0) {
        $userData = mysqli_fetch_assoc($getUserRes);
        echo json_encode($userData);
    } else {
        echo json_encode(array("response" => "User not found", "code" => 404));
    }


}else{
    echo json_encode(array("response" => "Invalid Request","code"=>400));

}
}catch(Exception $e){
    echo json_encode(array("response" => $e->getMessage(),"code"=>$e->getCode()));
}

?>