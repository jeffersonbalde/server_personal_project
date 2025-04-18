<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    $query = "DELETE FROM Users WHERE id = ?";
    $stmt = sqlsrv_query($conn, $query, array($id));

    if ($stmt) {
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "error", "message" => sqlsrv_errors()]);
    }
}
?>
