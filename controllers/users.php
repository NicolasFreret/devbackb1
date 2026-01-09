<?php
    session_start();
    //On empêche toutes méthodes sauf POST
    if(!$_POST) exit('Dégage');

    //On récupère les données utilisateurs de l'api (que l'on de jsonise)
    //https://api.escuelajs.co/api/v1/users
    $users = json_decode(file_get_contents('https://api.escuelajs.co/api/v1/users'), true);


    
 
    
    foreach ($_POST as $key => $value) {
        if($key === "password" || $key === 'email'){
            if(!trim($value)){
                header('location: http://127.0.0.1/php/login.php?msg='.$key);
                exit;
            }
        }
    }
   
    
    //Je cherche en base si correspondance avec email & password dans la base utilisateurs
    $res = array_filter($users, function($user){
        return $user['email'] == $_POST['email'] && $user['password'] == $_POST['password'];
    });


 
    //Si il y a un utilisateurs, on le redirige
    if($res){
        $_SESSION['user'] = $res[0];
        // setcookie('user', serialize($res[0]), time() + 60 * 5, "/php", "", false, true);
        if($_POST['rememberme'] === 'ok'){
            setcookie('email', $_POST['email'], time() + 60 * 5, "/php");
            setcookie('password', $_POST['password'], time() + 60 * 5, "/php");
        }else if($_POST['rememberme'] !== 'ok' && (isset($_COOKIE['email']) || isset($_COOKIE['password'])) ){
             setcookie('email', $_POST['email'], time() - 10, "/php");
             setcookie('password', $_POST['password'], time() - 10, "/php");
        }

        

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

    

