<?php
  require 'Models/crud.php';
  require 'functions.php';

	// $user = new User(85);
	// $user1 = new User(15);

	
	// echo $user->getAge();
	// echo $user1->getAge();

    $baseFolder = getConfig('base_folder');
	switch ($_SERVER['REQUEST_URI']) {
		case $baseFolder.'/':
			getPage('index.html');
			break;

		case $baseFolder.'/connexion/':
			getPage('login.html');
			break;
		
		default:
			echo '404';
			break;
	}