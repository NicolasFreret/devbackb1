<?php

 $users = read('villes_france_free',
        [
            'fields'=>'ville_nom, ville_departement',
            'conditions' => 'INNER JOIN departement ON ville_departement = departement_code'
        ]
 );

 print_r($users);
    
return [
    'title' => "404"
];