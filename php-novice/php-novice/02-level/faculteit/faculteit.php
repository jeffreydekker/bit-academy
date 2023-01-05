<?php

echo "Van welk getal wil je de faculteit weten?" . PHP_EOL;
$input = readline();
$faculty = 1;

for ($i = 1; $i < $input; $i++ ) {
    $faculty = $faculty * ($i+1);
}

echo "De faculteit van $input is $faculty" . PHP_EOL;
?>