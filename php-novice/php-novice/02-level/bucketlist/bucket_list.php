<?php

echo "Hoeveel activiteiten wil je toevoegen?" . PHP_EOL;
$aantalActiviteiten = readline() . PHP_EOL;
$input = [];
$intAantalActiviteiten = intval($aantalActiviteiten);

if ($aantalActiviteiten >= chr(49) && $aantalActiviteiten <= chr(57)) {
    for ($i = 0; $i < $intAantalActiviteiten; $i++) {
        echo "Wat wil je toevoegen aan je bucketlist?" . PHP_EOL;
        $input[$i] = readline() . PHP_EOL;
    }
    echo "Op jouw bucketlist staat: " . PHP_EOL;
    for ($j = 0; $j < $intAantalActiviteiten; $j++) {
        echo $input[$j];
    }
} elseif ($aantalActiviteiten == 48) {
    echo "Je mag niet 0 bucketlist items opgeven. Probeer het opnieuw." . PHP_EOL;
} else {
    echo "Input is geen nummer, probeer het opnieuw" . PHP_EOL;
}

?>