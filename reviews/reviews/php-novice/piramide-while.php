<?php

echo "Hoeveel stapels wil je hebben?" . PHP_EOL;

$aantal = readline();

$i = 1;

while ($i <= $aantal) {
    $j = 1;
    while ($j <= $i) {
        $j++;
        echo("*");
    }
    echo PHP_EOL;
    $i++;
}