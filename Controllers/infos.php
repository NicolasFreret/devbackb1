<?php

    if( !(new User())->is_user_logged_in() ) redirectTo('connexion/');

    return[
        'title' => 'Mon Profil'
    ];