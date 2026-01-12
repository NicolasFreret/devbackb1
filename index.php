<?php
  session_start();
  require 'Models/crud.php';
  require 'functions.php';
	$User = new User();
	echo $User->is_user_logged_in();
	

    $baseFolder = getConfig('base_folder');
	switch ($_SERVER['REQUEST_URI']) {
		case $baseFolder.'/':
			getPage('index.php');
			break;

		case $baseFolder.'/connexion/':
			getPage('login.php');
			break;
		
		case $baseFolder.'/mon-profil/':
			getPage('profil.php');
			break;

		case $baseFolder.'/contactez-moi/':
			getPage('contact.php');
			break;

		case $baseFolder.'/login/post/':
			getController('login-post.php');
			break;
		
		default:
			echo '404';
			break;
	}