<?php

header("Access-Control-Allow-Origin:* ");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");

$serverName = "jeffsoftware.database.windows.net";
$connectionOptions = array(
    "Database" => "jeff_software",
    "Uid" => "jeff",
    "PWD" => "jfsnvaldez@1"
);
$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die(json_encode(['error' => 'Database connection failed']));

}