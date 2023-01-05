<?php

$getal = readline("Van welk getal wil je de faculteit weten?" . PHP_EOL);

$f =  1;

for ($i = 1; $i <= $getal - 1; $i++) {
    $f *= ($i + 1);
}

echo "De faculteit van $getal is $f" . PHP_EOL; 