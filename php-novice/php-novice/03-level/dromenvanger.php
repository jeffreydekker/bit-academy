<?php

echo "Hoeveel vrienden zal ik vragen om hun droom?" . PHP_EOL;
$aantalVrienden = readline();
$intAantalVrienden = intval($aantalVrienden);

$array = [];

for ($i = 0; $i < $intAantalVrienden; $i++) {
    echo "Wat is jouw naam?" . PHP_EOL;
    $naam_key = readline();

    echo "Hoe veel dromen ga je opgeven?" . PHP_EOL;
    $aantalDromen = readline();
    $intAantaalDromen = intval($aantalDromen);

    for ($j = 0; $j < $intAantaalDromen; $j++) {
        echo "Wat is jouw droom?" . PHP_EOL;
        $droom_value = readline();
        $array[$naam_key][$j] = $droom_value;
    }
}

foreach ($array as $naam => $dromen) {
    foreach ($dromen as $droom) {
        echo $naam . " heeft als droom opgegeven: " . $droom . PHP_EOL;
    }
}
