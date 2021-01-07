<?php
$newNumber = [];
$i = 0;
while($i < 15){
    $randomNumber = random_int(1,15);
    if(!in_array($randomNumber,$newNumber)){
        $newNumber[] = $randomNumber;
        $i++;
    }

}
var_dump($newNumber);

?>
