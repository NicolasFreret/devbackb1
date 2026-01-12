<?php
  require 'Models/crud.php';
  require 'functions.php';

	

    $baseFolder = getConfig('base_folder');
	switch ($_SERVER['REQUEST_URI']) {
		case $baseFolder.'/':
			getPage('index.php');
			break;

		case $baseFolder.'/connexion/':
			getPage('login.html');
			break;
		
		default:
			echo '404';
			break;
	}