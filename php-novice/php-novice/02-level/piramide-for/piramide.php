<?php

echo "Hoeveel stapels wil je hebben?" . PHP_EOL;
$stapels = readline() . PHP_EOL;

for ($i = 0; $i < $stapels; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo PHP_EOL;
}

?>