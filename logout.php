<?php

    include('config.php');
    
    session_start();
    
    unset($_SESSION['id']);
    unset($_SESSION['first_name']);
    unset($_SESSION['role']);
    unset($_SESSION['message']);
    unset($_SESSION['type']);

    session_destroy();

    header('location: ' . BASE_URL . '/index.php');