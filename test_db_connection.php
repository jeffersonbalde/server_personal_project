<?php

$serverName = "jeffsoftware.database.windows.net";
$connectionOptions = array(
    "Database" => "jeff_software",
    "Uid" => "jeff",
    "PWD" => "jfsnvaldez@1"
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn) {
    echo "✅ Connected to Azure SQL Database!";

} else {
    echo "❌ Connection failed!<br>";
    die(print_r(sqlsrv_errors(), true));
}
?>