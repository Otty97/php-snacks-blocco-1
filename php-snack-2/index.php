<?php
$name = $_GET['name'];
$age =$_GET['age'];
$mail =$_GET['mail'];

if(strlen($name) > 3 && strpos($mail,"@")==true && strpos($mail,".")==true && is_numeric($age)==1){
    echo 'Accesso consentito';
}else{
    echo 'Accesso negato';
}

?>
