<?php

 $challenges = cache('https://dummyjson.com/posts?limit=150', 'cachePosts')['posts'];
 $res = null;


    if( isset($_GET['filter']) && trim($_GET['filter']) ){
        $res = array_filter($challenges, function($challenge){
            return in_array($_GET['filter'], $challenge['tags']);
        });

        $challenges = count($res) > 0 ?  [...$res] : $challenges;
    }


    

    ob_start();
    for ($i=0; $i < count($challenges) ; $i++) { 
       getComposant('card-1.php', [
            'title'=>$challenges[$i]['title'],
            'content'=>substr($challenges[$i]['body'], 0, 150)." [...]",
            'img'=>'https://picsum.photos/200/'.(300+$i),
            'level' => $challenges[$i]['tags'],
            'url'=>homeUrl().'challenges/detail-challenge/?id='.$challenges[$i]['id'].($res ? '&filter='.$_GET['filter']: "")
        ]);
    }

    $cards = ob_get_clean();



return[
    'title' => 'Tous les challenges',
    'challenges' =>$cards
];