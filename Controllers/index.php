<?php
    $title = "Accueil";

$challenges = [

    [
        'title'=>'coucou 2',
        'content' => 'Des athlètes dans un fleuve pour épreuve sportive, et un requin qui a très faim... coucou',
        'img'=>'https://wp.tainix.fr/wp-content/uploads/2025/10/Bug-out-Shelter-1-2.png'
    ],
    [
        'title'=>'coucou 3',
        'content' => 'Des athlètes dans un fleuve pour épreuve sportive, et un requin qui a très faim... coucoùwkdsu',
        'img'=>'https://wp.tainix.fr/wp-content/uploads/2025/10/Bug-out-Shelter-1-1.png'
    ],
    [
        'title'=>'coucou 3',
        'content' => 'Des athlètes dans un fleuve pour épreuve sportive, et un requin qui a très faim... chips',
        'img'=>'https://wp.tainix.fr/wp-content/uploads/2025/10/Bug-out-Shelter-1-3.png'
    ]

];


ob_start();
foreach ($challenges as $value) {
    
    getComposant('card-1.php',[
        'title'=>$value['title'],
        'content' => $value['content'],
        'img'=>$value['img']
    ]);
}

$cards = ob_get_clean();