<?php


// functies gebruiken we om code te recyclen en minder vaak dezelfde code te herhalen
function som($a, $b)
{
     return $a + $b;
}

$getal_1 = readline("Wat is het eerste getal?") . PHP_EOL;
$getal_2 = readline("Wat is het tweede getal?") . PHP_EOL;

echo "De som is " . som($getal_1, $getal_2) . PHP_EOL;

