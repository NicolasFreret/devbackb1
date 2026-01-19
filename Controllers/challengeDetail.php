<?php

     if(!isset($_GET['id'])) redirectTo('challenges/');
     

    $challenges = cache('https://dummyjson.com/posts?limit=150', 'cachePosts')['posts'];

     $challenge = [ ...array_filter($challenges, function($challenge){
                return $_GET['id'] == $challenge['id'];
    })];




    $lastChallenges = [ ...array_filter($challenges, function($challenge){
                return $_GET['id'] != $challenge['id'] && (isset($_GET['filter']) && trim($_GET['filter']) ? in_array($_GET['filter'], $challenge['tags']) : 1 === 1);
    })];

    $related = array_slice($lastChallenges, count($lastChallenges) - 3, 4);


    ob_start();
    for ($i=0; $i < count($related) ; $i++) { 
       getComposant('card-1.php', [
            'title'=>$related[$i]['title'],
            'content'=>substr($related[$i]['body'], 0, 150)." [...]",
            'img'=>'https://picsum.photos/200/'.(300+$i),
            'level' => $related[$i]['tags'],
            'url'=>homeUrl().'challenges/detail-challenge/?id='.$related[$i]['id']
        ]);
    }

    $cards = ob_get_clean();


     //if ( count($challenge) === 1 ) redirectTo('404/');

    // $contents = file_get_contents('https://dummyjson.com/posts/'.$_GET['id']);
    // if ($contents === false) redirectTo('404/');

    // $contents = json_decode(
    //     $contents,
    //     true
    // );

    return[
        'datas' => $challenge[0],
        'title' => $challenge[0]['title'],
        'related' =>$cards
    ];