<?php

echo "Welke operatie wil je uitvoeren? (+, -, %)" . PHP_EOL;
$operator = readline();
if ($operator != "+" || "-" || "%"){
    exit("Geen geldige operatie");
}
echo "Eerste getal?" . PHP_EOL;
$eerste_getal = readline();
echo "Tweede getal?";
$tweede_getal = readline();
if ($operator == "+"){
    echo "Het resultaat is: " . $eerste_getal + $tweede_getal . PHP_EOL;
}
elseif ($operator == "-"){
    echo "Het resultaat is: " . $eerste_getal - $tweede_getal . PHP_EOL;
}
elseif ($operator == "%"){
    echo "Het resultaat is: " . $eerste_getal - $tweede_getal . PHP_EOL;
}
?>