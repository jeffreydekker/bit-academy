<?php

function getInput()
{
    global $argv;
    $input = floatval($argv[1]);
    return $input;
}

function validateInput($input)
{
    if (!isset($input)) {
        exit("Geen wisselgeld");
    }
}

function getRemaining($input)
{
    $remaining = round($input * 100 / 5) * 5;
    return $remaining;
}

function wisselGeld($remaining)
{
    define("MONEY_UNITS", [50, 20, 10, 5, 2, 1, 0.5, 0.2, 0.1, 0.05]);
    
    foreach (MONEY_UNITS as $euros) {
        $euros *= 100;
        if ($remaining >= $euros) {
            $unitamount = floor($remaining / $euros);
            
            $remaining = $remaining % $euros;
            if ($euros >= 100) {
                echo $unitamount . " x " . $euros / 100 . " euro" . PHP_EOL;
            } else {
                echo $unitamount . " x " . $euros . " cent" . PHP_EOL;
            }
        }
    }
}

$input = getInput();

try {
    if (empty($argv[1])) {
        echo "Geen wisselgeld";
        exit;
    }
    if (!is_numeric($argv[1])) {
        throw new Exception("Input is geen getal");
    } 
    if ($input > 0) {
        $remaining = getRemaining($input);
        wisselGeld($remaining);
    } else {
        throw new Exception("Input moet een positief getal zijn");
    }
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}