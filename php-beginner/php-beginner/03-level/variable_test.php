<?php

//INTEGER
$getal = 118 . PHP_EOL;

// FLOAT
$getal = 3.14 . PHP_EOL;

//STRING
$enkele_tekst = 'Stukje tekst' . PHP_EOL;
$dubbele_tekst = "Stukje tekst" . PHP_EOL;

$enkel_met_getal = 'Het getal is $getal' . PHP_EOL;
$dubbel_met_getal = "Het getal is $getal" . PHP_EOL;

// ARRAY
$lijst = array(5, 10, 1001, 14);
$ook_een_lijst = [5, 10, 1001, 14];

echo $getal;
echo $enkele_tekst;
echo $dubbele_tekst;
echo $enkel_met_getal;
echo $dubbel_met_getal;

//Een array print je niet zo: echo $lijst;, maar met de var_dump functie!
var_dump($lijst);
var_dump($ook_een_lijst);
?>