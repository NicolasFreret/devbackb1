<?php

   

   $User = new User();
   $res = $User->loggin(getUsers());

    
   if($res) redirectTo('mon-profil/');
   redirectTo('connexion/');


 