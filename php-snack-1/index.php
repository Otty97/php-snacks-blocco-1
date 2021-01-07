<?php

$matches =[
    [
        'home'=>[
            'name'=>'Olimpia Milano',
            'points'=> 55
        ],
        'guest'=>[
            'name'=>'Cantù',
            'points'=> 60
        ]
    ],
    [
        'home'=>[
            'name'=>'Warrriors',
            'points'=>80
        ],
        'guest'=>[
            'name'=>'Miami',
            'points'=> 88
        ]
    ],
    [
        'home'=>[
            'name'=>'Chicago Bulls',
            'points'=> 100
        ],
        'guest'=>[
            'name'=>'Toronto ',
            'points'=> 98
        ]
    ]
];


?>
<h1><?php
for($i = 0; $i < count($matches); $i++){

echo '<p>' . $matches[$i]['home']['name'] . ' - ' . $matches[$i]['guest']['name']  . ' | ' . $matches[$i]['home']['points'] . '-' . $matches[$i]['guest']['points'] . '</p>' . PHP_EOL ;

}

?></h1>
