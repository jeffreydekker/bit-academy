<?php

$arr = array();

echo "hoeveel alanden wil je toevoegen?" . PHP_EOL;
$input = readline();
if (is_numeric($input)) {
    for ($i = 0; $i < ($input); $i++) {
        echo "hoe heet het land?" . PHP_EOL;
        $land = readline();

        echo "wat is de hoofdstad van $land?" . PHP_EOL;
        $hoofdstad = readline();
        $arr[$land] = $hoofdstad;
    }
    echo "de landen en hoofsteden in de database zijn:" . PHP_EOL;
    foreach ($arr as $land => $hoofdstad) {
        echo "$land, $hoofdstad" . PHP_EOL;
    }
}

?>


