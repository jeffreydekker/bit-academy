<?php


function prijs($taarten)
{
    if ($taarten >= 0 ) {
        return 5 * $taarten;
    } else {
        throw new Exception("Het aantal taarten moet minstens 1 zijn");
        // 0 taarten??
    }
}

$aantal = readline("Hoeveel taarten wil je kopen?");

try {
    $totaal = prijs($aantal);
    echo "Dat kost dan " . prijs($aantal) . " euro" . PHP_EOL;
} catch (Exception) {
    echo "Je moest minstens 0 taarten kiezen.";
}
