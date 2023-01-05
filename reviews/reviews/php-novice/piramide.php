<?php

echo "Hoeveel stapels wil je hebben?" . PHP_EOL;

$aantal = readline();

for ($i = 0; $i <= $aantal; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo " * ";
    }
    echo PHP_EOL;
}

