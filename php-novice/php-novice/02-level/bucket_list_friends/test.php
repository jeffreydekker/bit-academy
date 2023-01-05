<?php

$persoon = [
    "voornaam" =>"Claude", 
    "achternaam" =>"Shannon", 
    "geboorteDatum" => 2001
];

echo $persoon["geboorteDatum"];

foreach ($persoon as $data=>$value) {
    echo "Van deze persoon weten we dat hun $gegeven $waarde is" . PHP_EOL;
}
?>