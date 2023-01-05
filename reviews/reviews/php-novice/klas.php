<?php

$aantal = readline("Wie zit er in de klas? ");

$aantal = explode(' ', $aantal);


echo "De studenten in de klas zijn:" . PHP_EOL;

foreach ($aantal as $naam) {
    echo $naam . PHP_EOL;
}

?>
