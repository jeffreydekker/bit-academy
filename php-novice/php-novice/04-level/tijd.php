<?php

$eenheid = substr($argv[1], -1);
$num = (int) $argv[1];

if ($eenheid != "s") {
    if ($eenheid == "d") {
        $num = ($num * 86400);
        echo $num . "s" . PHP_EOL;
    } elseif ($eenheid == "u") {
        $num = ($num * 3600);
        echo $num . "s" . PHP_EOL;
    } elseif ($eenheid == "m") {
        $num = ($num * 60);
        echo $num . "s" . PHP_EOL;
    }
} else {
    echo $num . "s" . PHP_EOL;
}