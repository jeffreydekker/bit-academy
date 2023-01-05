<?php

echo "Hoe veel landen ga je toevoegen?" . PHP_EOL;
$aantalLanden = readline();
$intAanalLanden = intval($aantalLanden);

$landen = array();

if ($aantalLanden >= chr(49) && $aantalLanden <= chr(57)) {
    for ($i = 0; $i < $intAanalLanden; $i++) {
        echo "Welk land wil je toevoegen?" . PHP_EOL;
        $land = readline();
        echo "Wat is de hoofdstad van $land?" . PHP_EOL;
        $hoofdstad = readline();
        $landen[$land] = $hoofdstad;
    }
    echo "De volgende landen en steden zitten in de database:" . PHP_EOL;
    foreach ($landen as $land => $hoofdstad) {
        echo "$land, $hoofdstad" . PHP_EOL;
    }
} elseif ($aantalLanden == chr(48)) {
    echo "$aantalLanden is geen geldig getal. Probeer het opnieuw." . PHP_EOL;
} else {
    echo "$aantalLanden is geen geldig getal. Probeer het opnieuw." . PHP_EOL;
}
?>