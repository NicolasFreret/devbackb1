<?php

     if(!isset($_GET['id'])) redirectTo('challenges/');
     

    $contents = file_get_contents('https://dummyjson.com/posts/'.$_GET['id']);
    if ($contents === false) redirectTo('404/');

    $contents = json_decode(
        $contents,
        true
    );

    return[
        'datas' => $contents,
        'title' => $contents['title']
    ];