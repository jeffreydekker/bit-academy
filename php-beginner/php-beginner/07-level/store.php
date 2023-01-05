<?php

$games = [
	["Call of Duty", "Shooter", 59.95],
	["Rocket League", "Sport", 19.95],
	["Assassins Creed", "RP", 49.95],
	["DMC" , "Hack n slash", 50]
];

$title_total = 0;
$price_total = 0;
$avarage_letters = 0;
$avarage_price = 0;

foreach ($games as $game) {
	$title_total += strlen($game[0]);
	$price_total += $game[2];
}

$avarage_letters += $title_total / sizeof($games);
$avarage_price += $price_total / sizeof($games);

$avarage_letters = number_format($avarage_letters);
$avarage_price = number_format($avarage_price, 2, '.', '');

echo "Gemiddelde prijs: €$avarage_price" . PHP_EOL; 
echo "Gemiddelde aantal letters: $avarage_letters" . PHP_EOL;

?> 