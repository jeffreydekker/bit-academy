<?php

echo "Hoe oud ben je?" . PHP_EOL;
$leeftijd = readline();
if	($leeftijd >= 16.5)
{
	echo 'Je mag beginnen met rijlessen!' . PHP_EOL;
}
else
{
	echo 'Helaas, je mag nog niet beginnen met rijlessen.';
}
?>