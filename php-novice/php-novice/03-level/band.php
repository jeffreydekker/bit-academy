<?php

$albums = array("Citizen of Glass" => 4.5, "Night" => 9, "New Eyes" => 5, "Strange Trails" => 10);
$aantalAlbums = count($albums);
$totaalBedrag = 0;
$gemiddeldeBedrag = 0;

foreach ($albums as $album => $prijs) {
    $totaalBedrag += $prijs;
}

$gemiddeldeBedrag = $totaalBedrag / $aantalAlbums;

echo "Het albumoverzicht:" . PHP_EOL;
echo "Het totaalbedrag van alle albums is €$totaalBedrag" . PHP_EOL;
echo "De gemiddelde prijs van alle albums kost €$gemiddeldeBedrag" . PHP_EOL;
?>