<?php

$input = floatval($argv[1]);
const MONEY_UNITS = [50, 20, 10, 5, 2, 1];

if (empty($input)) {
    exit("Geen wisselgeld");
}
$remaining = $input;
foreach (MONEY_UNITS as $geldeenheid) {
    if ($remaining >= $geldeenheid) {
        $aantal = floor($remaining / $geldeenheid);
        $remaining = $remaining % $geldeenheid;
        echo "$aantal x $geldeenheid euro" . PHP_EOL;
    }
}
