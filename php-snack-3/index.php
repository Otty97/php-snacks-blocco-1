<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Leonardo Barbieri',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Leonardo Barbieri',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Leonardo Barbieri',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Leonardo Barbieri',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Leonardo Barbieri',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Leonardo Barbieri',
            'text' => 'Testo post 6'
        ]
    ],
];


?>
<h1><?php
;
foreach($posts as $key => $value){
    echo '<h1>'. $key .'<h1>';
    for($i = 0; $i < count($value); $i++){

        echo $value[$i]['title'] . ' creato da ' . $value[$i]['author'] . ' con il seguente testo: ' . $value[$i]['text'] . '<br><br>';
    }
}
?></h1>
