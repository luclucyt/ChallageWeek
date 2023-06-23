<?php
    $server = "localhost";
    $username = "LucasDatabase123";
    $password = "LucasDatabase123";
    $database = "kaas123";

    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }