<?php
   session_start();

    if(!isset($_SESSION['user'])){
        header('Location: http://127.0.0.1/php/login.php');
        exit;
    }

    unset($_SESSION['user']);
    header('location: http://127.0.0.1/php/login.php');