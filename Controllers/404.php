<?php


create('client', [
    "nom" => "Beerus",
    "prenom" => "Sama",
    "email" => "manger@gmail.com",
    "password" => "loveZeno",
    "ville" => "capsule corp."
]);

 $users = read('client',
        [
            'fields'=>'prenom, nom'
        ]
 );

 print_r($users);
    
return [
    'title' => "404"
];