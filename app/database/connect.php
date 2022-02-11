<?php

    function connect()
    {
        $conn = new mysqli("localhost", "root", "", "cinemas");

        if (!$conn) die("Database connection failed");

        return $conn;
    }

    $conn = connect();

    if (!$conn) die("Under Construction!");

