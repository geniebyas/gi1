<?php
include 'config/connection.php';

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Retrieve the request body
        $input = file_get_contents('php://input');
        $user = json_decode($input, true);

        if ($user) {
            // Extract user details
            $uid = $user['uid'];
            $phone = $user['phone'];
            $dob = $user['dob'];
            $gender = $user['gender'];
            $city = $user['city'];
            $bio = $user['bio'];
            $timestamp = intval($user['timestamp']);

            $updateUser = "UPDATE users SET phone = '$phone', city = '$city', bio = '$bio', timestamp = $timestamp, gender = '$gender',dob = '$dob' WHERE uid = '$uid'";
         
            if (mysqli_query($con, $updateUser)) {
                echo json_encode(array("response" => "Registration successfully", "code" => 200));
            } else {
                echo json_encode(array("response" => "Failed to insert user", "code" => 500));
            }
        } else {
            http_response_code(400);
            echo json_encode(array("response" => "Invalid data received", "code" => 400));
        }
    } else {
        http_response_code(405);
        echo json_encode(array("response" => "Method not allowed", "code" => 405));
    }
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(array("response" => $e->getMessage(), "code" => $e->getCode()));
}
?>
