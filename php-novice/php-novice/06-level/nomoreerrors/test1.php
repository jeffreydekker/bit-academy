<?php

function verstuur_email($afzender, $inhoud)
{
    if(random_int(0, 1)) {
        throw new Exception("Je hebt even geen internet");

    }
    return true;
}

$naam = readline("Naar wie gaat de email?");
$bericht = readline("Wat is de inhoud van het bericht?");

try {
    verstuur_email($naam, $bericht);
    echo "Je mail is verzonden!";
} catch(Exception) {
    echo "Je email is niet verzonden";
}



