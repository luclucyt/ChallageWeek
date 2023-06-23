<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "kaas123";

    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }