<?php

// Een klant houdt op zijn computer een dagboek bij. Daarin schrijft hij al zijn geheimen op - maar er is een probleem. Hij moet de computer delen met zijn broertje, en die vindt het leven van de grote broer erg interessant. Daarom hebben we een programma voor hem geschreven dat een stuk tekst kan vercijferen. Dat wordt gedaan door te roteren in het alfabet met een bepaalde *key*. Als de key 1 is gaat A naar B, B naar C, C naar D, ... en Z naar A. Bij een key van 2 gaat A naar C, B naar D, C naar E, en Z naar B. Er staat wat voorbeeld in- en uitvoer in het bestand om het duidelijker te maken, en testen makkelijker te maken.
// Het hele stuk code is door een vermoeide programmeur geschreven zonder tussentijds te testen - wat natuurlijk niet zo'n goed idee was. Er zijn nu een aantal errors en bugs in geslopen, en we komen er niet uit. Kunnen jullie ons helpen?

/**
 * Author:      Coen Konings
 * Date:        10-01-2022
 *
 * encrypt.php:
 * Vercijfer een bericht met Caesar-encryptie. Dit werkt door een bericht over
 * het alfabet te roteren met een bepaalde waarde (de "key"). Bij een rotatie
 * van 1 wordt a bijvoorbeeld b, en bij een rotatie van 5 wordt a f. Hierbij
 * zijn keys 0 en 26 mogelijk, maar niet erg nuttig - beide vercijferen het
 * bericht door het onveranderd te laten. Verder valt misschien op dat keys die
 * niet tussen 0 en 26 liggen gelijk zijn aan andere keys: -1 doet bijvoorbeeld
 * hetzelfde als 25, en 29 hetzelfde als 3.
 *
 * Cijfers en leestekens worden in deze implementatie overgeslagen.
 *
 * Voorbeelden:
 *
 * Key = 1 of 27
 * Bericht:         alfabet
 * Vercijfering:    BMGBCFU
 *
 * Key = 25 of -1
 * Bericht:         alfabet
 * Vercijfering:    ZKEZADS
 *
 * Key = 0 of 26
 * Bericht:         alfa_bet!
 * Vercijfering:    ALFABET
 */

/**
 * Get user input. Returns an array containing the message and the key.
 */
function getInput() {
    $correct = "n";
    $message = "";
    $key = "";

    // Ask for the message.
    while ($correct !== "y") {
        $message = readline("Welk bericht wil je vercijferen? >");
        echo "Het gegeven bericht is $message" . PHP_EOL;
        // Use y for "yes" or n for "no".
        $correct = readline("Klopt dit bericht? y/n >");
    }

    // Ask for the key.
    while (!is_numeric($key)) {
        $key = readline("Welk getal wil je als key gebruiken? >");
    }

    return [$message, $key];
}


/**
 * Given a single character and a key, returns the encrypted character. Does not
 * work properly on non-alphabetic characters.
 */
function encryptCharacter($char, $key) {
    $char = strtoupper($char);
    // ASCII arithmetic
    $charNumber = ord($char) - 65;
    $charNumber += $key;
    $charNumber %= 27;

    // Negatieve modulo voorkomen
    if ($charNumber < 0) {
        $charNumber += 26;
    }

    $encrypted = chr($charNumber + 65);
    return $encrypted;
}

/**
 * Main program starts here.
 */

// Get message and key from user.
$input = getInput();
$message = $input[0];
$key = $input[1];
$key = intval($key) % 26;
$cryptograph = "";

for ($i=0; $i < strlen($message); $i++) {
    
    $char = $message[$i];

    if (!ctype_alpha($char)) {
        continue;
    }

    $encrypted = encryptCharacter($char, $key);
    $cryptograph .= $encrypted;
}
echo "Het vercijferde bericht is:" . PHP_EOL . $cryptograph . PHP_EOL;
