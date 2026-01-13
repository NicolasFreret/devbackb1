<?php

 $challenges = json_decode(
        file_get_contents('https://dummyjson.com/posts'),
        true
    )['posts'];

    ob_start();
    for ($i=0; $i < count($challenges) ; $i++) { 
       getComposant('card-1.php', [
            'title'=>$challenges[$i]['title'],
            'content'=>substr($challenges[$i]['body'], 0, 150)." [...]",
            'img'=>'https://picsum.photos/200/30'.$i,
            'level' => $challenges[$i]['tags'][0],
            'url'=>'https://dummyjson.com/posts/12'
        ]);
    }

    $cards = ob_get_clean();



return[
    'title' => 'Tous les challenges',
    'challenges' =>$cards
];