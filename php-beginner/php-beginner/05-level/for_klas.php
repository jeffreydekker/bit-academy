<?php

$klas = ["Sjonnie de Wiel", "Herman Kaal", "Henk de Steen", "Inge Kerkhoven", "Gert Kruiswijk"];

//Print alle elementen van de array $klas
$leerlingen = count($klas);
for ($i = 0; $i < $leerlingen; $i++) {
    echo $klas[$i] . PHP_EOL;
} 