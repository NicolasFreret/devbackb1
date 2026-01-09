<?php
  require 'functions.php';
    $baseFolder = getConfig('base_folder');
	switch ($_SERVER['REQUEST_URI']) {
		case $baseFolder.'/':
			getPage('index.html');
			break;

		case $baseFolder.'/contact/':
			echo 'contact';
			break;
		
		default:
			echo '404';
			break;
	}