<?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
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
    <div>
        <?php
        foreach($db as $key => $value){
            if($key == 'teachers'){
                echo '<div class="teacher">';

            }else{
                echo '<div class="pm">';

            }
            echo '<h2>'. $key . ':</h2><br>';
            for($i = 0; $i < count($db); $i++){
                echo '<p>' . $value[$i]['name'] . $value[$i]['lastname'] . '</p><br>';
            }
            echo '</div>';
        }
        ?>

    </div>

</body>
</html>
