<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "db_hotel";

    $conn = new Mysqli($servername, $username, $password, $dbname);

    if($conn && $conn->connect_error) {
      echo "Connection failed: " . $conn->connect_error;
    }
?>
