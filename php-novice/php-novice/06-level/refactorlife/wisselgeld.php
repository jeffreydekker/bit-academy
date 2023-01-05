<?php

define("MONEY_UNITS", [50, 20, 10, 5, 2, 1]);
define("CENTS", [0.5, 0.2, 0.1, 0.05, 0.02, 0.01]);

$input = ($argv[1]);
if (!isset($input)) {
    exit("Geen wisselgeld");
}

$remaining = $input;

foreach (MONEY_UNITS as $euros) {
    if ($remaining >= $euros) {
        echo floor($remaining / $euros) . " x " . $euros . " euro" . PHP_EOL;
        $remaining = fmod($remaining, $euros); 
    }
}

foreach (CENTS as $centen) {
    if ($remaining >= $centen) {
        $aantal = floor($remaining / $centen);

        echo round($aantal) . " x " . round($centen * 100) . " cent" . PHP_EOL;
        $remaining = fmod($remaining, $centen);
        
        $remaining *= 100;
        $remaining = round($remaining) / 100;

        if ($remaining <= 0.05) {
            $remaining = round($remaining / 0.05) * 0.05;
        }
    }
}