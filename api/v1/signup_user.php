<?php
include 'config/connection.php';

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['uid'])) {
        $uid = $_POST['uid'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $signupInsert = "INSERT INTO users (uid,name,email,pass) VALUES ('$uid', '$name', '$email', '$pass')";
        try {
            $res = mysqli_query($con, $signupInsert);
            if($res === TRUE){
            // Additional code if needed

            header('Content-Type', 'application/json');
            echo json_encode(array("response" => "User registered successfully", "code" => 200));
            }
        } catch (Exception $e) {
            header('Content-Type', 'application/json');
            echo json_encode(array("response" => $e->getMessage(), "code" => $e->getCode()));
        }
    } else {
        header('Content-Type', 'application/json');
        echo json_encode(array("response" => "Invalid Request", "code" => 400));
    }
} catch (Exception $e) {
    header('Content-Type', 'application/json');
    echo json_encode(array("response" => $e->getMessage(), "code" => $e->getCode()));
}
