<?php
    define('DB_HOST', 'localhost:3307');
    define('DB_USER', 'iMMo');
    define('DB_PASS', '654321');
    define('DB_NAME', 'php_basics');

    // Create connection
    $conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    // Check connection
    if($conn->connect_error) {
        die('Connection Failed' . $conn->connect_error);
    }