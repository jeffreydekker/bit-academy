<?php

$lijst = array('Japan' => 'Tokyo', 'Mexico' => 'Mexico Stad', 'USA' => 'Washington', 'India' => 'New Delhi', 'Zuid-Korea' => 'Seoul',
'China' => 'Peking', 'Nigeria' => 'Abuja', 'Argentina' => 'Buenos Aires', 'Egypt' => 'Cairo', 'Engeland' => 'London');
$i = 0;

foreach ($lijst as $land => $hoofdstad) {
    echo "Wat is de hoofstad van $land?" . PHP_EOL;
    $answer = readline();
    if ($answer != $hoofdstad) {
        echo "Helaas, $answer is niet de hoofdstad van $land." . PHP_EOL; 
        echo "Het correcte antwoord is: $hoofdstad" . PHP_EOL;
    } else if ($answer == $hoofdstad) {
        echo "Correct!" . PHP_EOL;
        $i++;
    }
}
echo "Je hebt $i van de 10 goed geraden!" . PHP_EOL;

?>