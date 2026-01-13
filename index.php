<?php
  session_start();
  require 'Models/crud.php';
  require 'functions.php';
	

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
			
		case $baseFolder.'/challenges/':
			getPage('challenges.php');
			break;

		case $baseFolder.'/contactez-moi/':
			getPage('contact.php');
			break;

		case $baseFolder.'/login/post/':
			getController('login-post.php');
			break;
		
		case $baseFolder.'/logout/':
			getController('logout.php');
			break;
		
		default:
			echo '404';
			break;
	}