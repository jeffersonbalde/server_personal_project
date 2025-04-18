<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO Users (name, email, phone) VALUES (?, ?, ?)";
    $params = array($name, $email, $phone);
    $stmt = sqlsrv_query($conn, $query, $params);

    if ($stmt) {
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "error", "message" => sqlsrv_errors()]);
    }
}

?>