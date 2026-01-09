<?php

    if(!isset($_COOKIE['user'])){
        header('Location: http://127.0.0.1/php/login.php');
        exit;
    }

    setcookie('user', 'mSqlLkds', time() - 10, "/php", "", false, true);
    header('location: http://127.0.0.1/php/login.php');