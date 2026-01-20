<?php

     /**
      * @link https://phpdelusions.net/pdo_examples/
      */

     function bddConnect(){
          $servername = getConfig('bdd')['host'];
          $username = getConfig('bdd')['user'];
          $password = getConfig('bdd')['password'];
          $bddName = getConfig('bdd')['bddName'];


          try {
               return new PDO("mysql:host=$servername;dbname=".$bddName, $username, $password);
          } catch(PDOException $e) {
               echo "Connection failed: " . $e->getMessage();
          }
     }




     function getUsers(){
          return json_decode( 
               file_get_contents('https://fakestoreapi.com/users'),
               true
           );
     }

     function create(){

     }

     function read(string $table, array $_options=[]):array{
       $options = [
          "fields"=>'*',
          "conditions" => "",
          ...$_options
       ];
        $bdd = bddConnect();
        return $bdd->query("SELECT ".$options['fields']." FROM $table ".$options['conditions'])->fetchAll();
        
     }

     function update(){
        
     }

     function delete(){
        
     }