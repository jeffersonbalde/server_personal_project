<?php

include 'db.php';

// Now your DB logic
$query = "SELECT * FROM Users";
$stmt = sqlsrv_query($conn, $query);

$users = [];
while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    $users[] = $row;
}

echo json_encode($users);

?>
