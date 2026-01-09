<?php
declare(strict_types=1);

    $nom = "Fréret";
    $prenom = "Nicolas";
    $age = 40;


    $notes = [1,2];
    $eleves = [
        ["nom" => "Fréret", "prenom" => "Nicolas", "age" => 40, "notes" => [12,15,8,19] ],
        ["nom" => "Frére", "prenom" => "Nicole", "age" => 30, "notes" => [12,15,18,19] ],
        ["nom" => "Dupont", "prenom" => "Nicole", "age" => 30, "notes" => [2,5,13,20] ],
        ["nom" => "Lopez", "prenom" => "Nicole", "age" => 30, "notes" => [10,11,10,9] ],
        ["nom" => "Gemini", "prenom" => "Nicole", "age" => 30, "notes" => [1,1,2,9] ],

    ];

    $o = json_decode(json_encode($eleves), FALSE);
    //$eleves[0]['nom'] = "Seulement les abonnés premium";

    //echo json_encode($eleves);

    function yep(int $somme, int $note):int{
            return $somme += $note;      
    }

    for ($i=0; $i < count($eleves); $i++) { 
        $eleve = $eleves[$i];

        // if($i != count($eleves) - 1){
        //     echo $eleve['nom'].", <br>";
        // }else{
        //     echo $eleve['nom'];
        // }

         //echo $eleve['nom'].( $i != count($eleves) - 1 ? ", <br>" : "" );

        //  $sommeNotes = 0;

        //  for ($ii=0; $ii <  count($eleve['notes']) ; $ii++) { 
            
        //     $sommeNotes += $eleve['notes'][$ii];

        //  }

        $s = array_reduce($eleve['notes'], "yep",0);

         $eleves[$i]['moyenne'] = $s / count($eleve['notes']);
         
         
        
    }

    echo json_encode(["total" => count($eleves), "eleves" => $eleves]);

    //var_dump($o[0]['nom']);

    // foreach ($eleves as $i => $eleve) {

    //     echo $eleves[$i]['nom'];
    //     echo $eleve['nom'];
    // }

    //phpinfo();

    function add( int $nb, int $nb2 ): int{
        return $nb + $nb2;
    }

    //echo add( 5, 20 );

    
   


