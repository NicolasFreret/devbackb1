<?php

    
 $_SESSION['user']['username'] = $_POST['username'];
 $_SESSION['user']['email'] = $_POST['email'];
 $_SESSION['user']['name']['firstname'] = $_POST['firstname'];
 $_SESSION['user']['name']['lastname'] = $_POST['lastname'];
 $_SESSION['user']['address']['city'] = $_POST['city'];

 redirectTo('mes-informations/');





    

