<?php

$hoofdsteden = [
    "japan" => "tokyo",
    "Mexico" => "Mexico-Stad",
    "USA" => "Washington D.C.",
    "India" => "New Delhi",
    "Zuid-Korea" => "Seoul",
    "China" => "Peking",
    "Nigeria" => "Abuja",
    "Argentinië" => "Buenos Aires",
    "Egypte" => "Cairo",
    "Engeland" => "Londen"
     
];

$goed = array ();

foreach ($hoofdsteden as $land => $hoofdstad) {
    echo "Wat is de hoofdstad van $land" . PHP_EOL;
    $input = readline("");
    if ($input === $hoofdstad) {
        echo "correct!" . PHP_EOL;
        $goed[] = $hoofdstad;
    } else {
        echo "$input is niet de hoofdstad, het antwoordt is $hoofdstad" . PHP_EOL;
    }
}

echo "je hebt er " . count($goed) . " van de 10 goed" . PHP_EOL;

?>


