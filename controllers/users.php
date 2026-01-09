<?php
    if(!$_POST) exit('Dégage');
    $users = json_decode(file_get_contents('https://api.escuelajs.co/api/v1/users'), true);
    

    $res = array_filter($users, function($user){
        return $user['email'] == $_POST['email'] && $user['password'] == $_POST['password'];
    });

 
    if($res){
        header('location: http://127.0.0.1/php/login.php?msg=success');
        exit;
    }


    // foreach ($users as $user) {
    //     if($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']){
    //         header('location: http://127.0.0.1/php/login.php?msg=success');
    //         exit;
    //     }
    // }

    header('location: http://127.0.0.1/php/login.php?msg=error');

    

