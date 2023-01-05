<?php

$input = floatval($argv[1]);
const MONEY_UNITS = [50, 20, 10, 5, 2, 1];

if (empty($input)) {
    exit("Geen wisselgeld");
}
$remaining = $input;

$amountoftens = floor($input / 10);
$remaining = $input % 10;

if ($amountoftens != 0) {
    echo "$amountoftens x 10 euro" . PHP_EOL;
} else {
    echo "";
}

$amountoffives = floor($remaining / 5);
$remaining %= 5; // (is still three)

if ($amountoffives != 0) {
    echo "$amountoffives x 5 euro" . PHP_EOL;
} else {
    echo "";
}

$amountoftwos = floor($remaining / 2);
$remaining %= 2; 

if ($amountoftwos != 0) {
    echo "$amountoftwos x 2 euro" . PHP_EOL;
} else {
    echo "";
}

$amountofones = floor($remaining / 1);
$remaining %= 1;

if ($amountofones != 0) {
    echo "$amountofones x 1 euro" . PHP_EOL;
} else {
    echo "";
}
