<?php

// functie die de code om items aan de array die als parameter 
// wordt meegegeven herbruiken
function lijst($list)
{
    // array items opvragen
    $item = readline("Wat wil je aan je boodschappenlijst toevoegen?");
    array_push($list, $item);
    // functie die readline aan een array toevoegd
    echo "Je boodschappen lijstje bevat nu:" . PHP_EOL;
    foreach ($list as $key) { // door elk item van de $list array loopen
        // lijst afdrukken per $list array item
        echo $key . PHP_EOL;
    }
    return $list;
}
// array om naar de functie te paasen
$array = array();
// functie aanroepen met de gedefinieerde array 
$array = lijst($array);
// Deze echo moet in het midden blijven staan
echo "Bedankt voor het gebruik van de boodschappenlijst!" . PHP_EOL;
//while loop om meer items toe te voegen middels de functie
while (strtolower(substr(trim(readline("Wil je meer producten toevoegen? (y/n)")), 0, 1)) === 'y') {
    $array = lijst($array);
}