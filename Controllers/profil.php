<?php

    $title = "Mon profil";

    if(! (new User())->is_user_logged_in() )  {
        redirectTo('connexion/');
    }

    

