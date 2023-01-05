<?php

echo "Hoeveel stapels wil je hebben?" . PHP_EOL;
$stapels = readline() . PHP_EOL;
$star = "*";

for ($i = 0; $i < $stapels; $i++) {
    echo $star . PHP_EOL;
    $star .= '*';
}

?>