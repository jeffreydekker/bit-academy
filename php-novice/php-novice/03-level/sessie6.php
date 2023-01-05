<?php

// globale variabele 
$city = "Amsterdam";
require_once 'lib/functions.php';

function greet($name, $from, $location = "@office"):string //last is a default value
{
    // functie kan $city niet zien in globale variabele in PHP zonder "global <$variable>
    global $city;
    return "Goedeavond $name $location from $city";
}

//
$greeting = greet("jeffrey", "@home");
echo "$greeting";