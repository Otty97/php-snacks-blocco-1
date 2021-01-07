<?php

$paragraf = "PHP diventò a questo punto sufficientemente maturo da competere con i linguaggi lato server come ASP, sviluppato da Microsoft, e cominciò ad essere usato su larga scala. La versione 4 di PHP venne lanciata nel 2000 e prevedeva notevoli migliorie[6].L'ultima versione in corso di sviluppo è la settima[7], sviluppata da un team di programmatori, che comprende ancora Lerdorf, Suraski e Gutmans.
La popolarità del linguaggio PHP è in costante crescita grazie alla sua flessibilità: nel giugno 2001 ha superato il milione di siti che lo utilizzano. Nell'ottobre 2002 più del 45% dei server Apache usava PHP[9].
Nel gennaio 2005 è stato insignito del titolo di 'Programming Language of 2004' dal TIOBE Programming Community Index[10], classifica che valuta la popolarità dei linguaggi di programmazione sulla base di informazioni raccolte dai motori di ricerca.";

$newArr = explode('.',$paragraf);
foreach($newArr as $value){
    echo '<p>' . $value . '</p>';
}

?>
