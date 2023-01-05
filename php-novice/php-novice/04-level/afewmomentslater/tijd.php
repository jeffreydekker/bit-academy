<?php

$input = implode(" ", $argv);
$tijd_array = (explode(" ", $input));

$tijd_totalen = array();

if ($argc > 1) {
    foreach ($tijd_array as $value) {
        $tijd_letter = substr($value, -1);
        $value = (int)substr($value, 0, -1);
        switch ($tijd_letter) {
            case "s":
                $tijd_totalen[] = $value * 1;
                break;
            case "m":
                $tijd_totalen[] = $value * 60;
                break;
            case "u":
                $tijd_totalen[] = $value * 3600;
                break;
            case "d":
                $tijd_totalen[] = $value * 86400;
                break;
            default:
                $value = $value;
        }
        $totaal = array_sum($tijd_totalen);
    }
    echo "$totaal seconden" . PHP_EOL;
} else {
    echo "Onvoldoende argumenten gevonden." . PHP_EOL;
}
