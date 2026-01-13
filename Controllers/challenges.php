<?php

 $challenges = json_decode(
        file_get_contents('https://dummyjson.com/posts?limit=150'),
        true
    )['posts'];

    
    if( !file_exists("Models/bdd.json") ){
        $bdd = fopen("Models/bdd.json", "w");
        fwrite($bdd, json_encode(["posts"=>$challenges, "date"=>date("Ymd")]));
        fclose($bdd);
    }
    

    ob_start();
    for ($i=0; $i < count($challenges) ; $i++) { 
       getComposant('card-1.php', [
            'title'=>$challenges[$i]['title'],
            'content'=>substr($challenges[$i]['body'], 0, 150)." [...]",
            'img'=>'https://picsum.photos/200/'.(300+$i),
            'level' => $challenges[$i]['tags'][0],
            'url'=>homeUrl().'challenges/detail-challenge/?id='.($i+1)
        ]);
    }

    $cards = ob_get_clean();



return[
    'title' => 'Tous les challenges',
    'challenges' =>$cards
];