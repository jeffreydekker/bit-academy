<?php

echo "Hoeveel vrienden zal ik vragen om hun droom?" . PHP_EOL;
$aantalVrienden = readline();
$intAantalVrienden = intval($aantalVrienden);

$vrienden = array();


if ($aantalVrienden >= chr(49) && $aantalVrienden <= chr(57)) {
    for ($i = 0; $i < $intAantalVrienden; $i++) {
        echo "Wat is jouw naam?" . PHP_EOL;
        $naam = readline();
        echo "Wat is jouw droom?" . PHP_EOL;
        $droom = readline();
        $vrienden[$naam] = $droom;
    }
    foreach ($vrienden as $naam => $droom) {
        echo "$naam heeft dit als droom: $droom" . PHP_EOL;
    }
} elseif ($aantalVrienden == chr(48)) {
    echo "$aantalVrienden is geen geldig getal. Probeer het opnieuw." . PHP_EOL;
} else {
    echo "$aantalVrienden is geen geldig getal. Probeer het opnieuw." . PHP_EOL;
}
?>