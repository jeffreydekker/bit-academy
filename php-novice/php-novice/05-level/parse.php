<?php

function parseToInteger($value)
{
    $int_value = intval($value);
    if ($int_value > 0) {
        return $int_value;
    } else {
        echo "Input moet een valide getal zijn" . PHP_EOL;
    }
}

// Pas de code hieronder niet aan!

echo parseToInteger(10) . PHP_EOL;
echo parseToInteger("101") . PHP_EOL;
echo parseToInteger("Hallo wereld!") . PHP_EOL;
