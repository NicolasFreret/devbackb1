<?php
    //On empêche toutes méthodes sauf POST
    if(!$_POST) exit('Dégage');

    //On récupère les données utilisateurs de l'api (que l'on de jsonise)
    //https://api.escuelajs.co/api/v1/users
    $users = json_decode(file_get_contents('https://api.escuelajs.co/api/v1/users'), true);
   
    
    //Je cherche en base si correspondance avec email & password dans la base utilisateurs
    $res = array_filter($users, function($user){
        return $user['email'] == $_POST['email'] && $user['password'] == $_POST['password'];
    });

 
    //Si il y a un utilisateurs, on le redirige
    if($res){
        setcookie('user', serialize($res[0]), time() + 60 * 5, "/php", "", false, true);
        //setcookie('email', $_POST['email'], time() + 60 * 5, "/php", "", false, true);
        header('location: http://127.0.0.1/php/login.php?msg=success');

        exit;
    }


    // foreach ($users as $user) {
    //     if($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']){
    //         header('location: http://127.0.0.1/php/login.php?msg=success');
    //         exit;
    //     }
    // }


   //Sinon, redirection avec erreur en parametre.
    header('location: http://127.0.0.1/php/login.php?msg=error');

    

