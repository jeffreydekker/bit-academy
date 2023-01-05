<?php

echo "Hoeveel blokken zijn er beschikbaar voor de piramide?" . PHP_EOL;
$blokken = readline();

$rij = 0;
while ($blokken > $rij) {
    $rij += 1;
    $blokken -= $rij;
}

echo $rij;
?>