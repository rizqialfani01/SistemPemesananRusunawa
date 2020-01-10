<?php
    $conn = new mysqli("13.67.111.168", "rusunawa", "qwerty123", "rusunawa");
    if ($conn->connect_error) {
        exit('Error connecting to database');
    }
?>