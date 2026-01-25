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

     function create(string $table, array $datas):int{
          $pdo = bddConnect();
          $sql = "INSERT INTO ".$table." (".join(",",array_keys($datas)).") VALUES (".rtrim( str_repeat('?,', count($datas)), ',' ).")";
         
          $pdo->prepare($sql)->execute(array_values($datas));

          return $pdo->lastInsertId();
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

     function update(string $table, string $keys, array $values, string $conditions = "1 == 1"){

          $pdo = bddConnect();
          $sql = "UPDATE ".$table." SET ".$keys." WHERE ".$conditions;
          $pdo->prepare($sql)->execute($values);
        
     }

    

     function delete(string $table,string $keys, array $values){
        $bdd = bddConnect();
        $bdd->prepare("DELETE FROM ".$table." WHERE ".$keys)->execute($values);
     }