<?php

    $alunni = [
        [
            'nome' => 'Giacomo',
            'cognome' => 'Carti',
            'voti' => [
                7,
                8,
                6,
                10,
            ]

        ],
        [
            'nome' => 'Leonardi',
            'cognome' => 'Tassi',
            'voti' => [
                5,
                7,
                6,
                10,
            ]

        ],
        [
            'nome' => 'Sandra',
            'cognome' => 'Bullo',
            'voti' => [
                9,
                9,
                7,
                8,
            ]

        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$numVoti = 4;

foreach($alunni as $key => $value){
    echo '<p>Nome: ' . $value['nome'] . '<p>';
    echo '<p>Cognome: ' . $value['cognome'] . '<p>';
    $somma = 0;
    for($i = 0; $i < count($value['voti']); $i++){
        $somma += $value['voti'][$i];
    }
    $media = $somma / $numVoti;
    echo '<p>Media voti: ' . $media . '</p><br>' ;




}

?>


</body>
</html>
