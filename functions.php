<?php

require 'src/Users.php';

/**
 * Va chercher la configuration du site
 * @param $key [?string] propriété à aller chercher DEFAULT null
 * 
 * @return [string|array|int] valeur
 * 
 */
function getConfig(?string $key=null): string|array|int{
    $config = json_decode(file_get_contents('config.json'), true);
    return $key ? $config[$key] : $config;
}

/**
 * Va chercher l'url de la home
 * @return string
 */
function homeUrl(): string{
    $config = getConfig();
    return $config['base_url'].$config['base_folder'].'/';
}

/**
 * Va dans le dossier "Views" chercher une page, l'affiche.
 * @param $pageName [string] Nom du fichier à récupérer
 * @return void affiche le HTML demandé
 */
function getPage(string $pageName):void{

    if(file_exists(getConfig('controllers_folder').$pageName)) require getConfig('controllers_folder').$pageName;

    getComposant('header.php');
    require 'Views/'.$pageName;
    getComposant('footer.php');
}



function getComposant(string $composantName, array $params = []):void{
    $path = getConfig('components_folder');
    if(file_exists($path.$composantName)){
        $fields = $params;
        require $path.$composantName;
    }
}


function getController(string $pageName):void{
    $path = getConfig('controllers_folder');
    if(file_exists($path.$pageName)){
       require $path.$pageName;
    }
}


function redirectTo(?string $url = null ):never{
    $home = homeUrl();
    header('location: '.($url ?  $home.$url : $home) );
    exit;
}

