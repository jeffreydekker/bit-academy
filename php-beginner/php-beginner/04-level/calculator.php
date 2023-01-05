<?php

echo "Welke operatie wil je uitvoeren? (+, -, %)" . PHP_EOL;
$operator = readline();
if ($operator != "+" && $operator != "-" && $operator != "%") {
    exit("Geen geldige operatie.");
}
echo "Eerste getal?" . PHP_EOL;
$eerste_getal = readline();
if ($eerste_getal != is_numeric($eerste_getal)) {
    exit("Dit is geen getal.");
}
echo "Tweede getal?" . PHP_EOL;
$tweede_getal = readline();
if ($tweede_getal != is_numeric($tweede_getal)) {
    exit("Dit is geen getal.");
}
if ($operator == "+") {
    echo "Het resultaat is: " . $eerste_getal + $tweede_getal . PHP_EOL;
} elseif ($operator == "-") {
    echo "Het resultaat is: " . $eerste_getal - $tweede_getal . PHP_EOL;
} elseif ($operator == "%") {
    echo "Het resultaat is: " . $eerste_getal % $tweede_getal . PHP_EOL;
} 
?>