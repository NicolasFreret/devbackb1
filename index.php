<?php
  session_start();
  require 'Models/crud.php';
  require 'functions.php';

 //https://fakestoreapi.com/users
	


    $baseFolder = getConfig('base_folder');
	switch (explode('?',$_SERVER['REQUEST_URI'])[0]) {
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

		case $baseFolder.'/mes-informations/':
			getPage('infos.php');
			break;
		
		case $baseFolder.'/challenges/detail-challenge/':
			getPage('challengeDetail.php');
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
		
		case $baseFolder.'/update/':
			getController('update-user.php');
			break;
		
		default:
			header("HTTP/2.0 404 Not Found");
			getPage('404.php');
			break;
	}