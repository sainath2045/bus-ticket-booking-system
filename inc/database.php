<?php
function initDB()
{
    $connStr = mysqli_connect("sainath.mysql.database.azure.com","sainath","","bus_ticket");
    if ($connStr->connect_error)
        die("<script>alert('Connection failed: " . $connStr->connect_error . "');</script>");
    return $connStr;
}
?>
