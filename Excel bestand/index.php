<?php

$csv = "C:/xampp/tmp/gegevens.csv";

function vraag($t) {
    echo $t . ": ";
    return trim(fgets(STDIN));
}

$naam = vraag("Naam");
$email = vraag("Email");
$leeftijd = vraag("Leeftijd");
$opmerking = vraag("Opmerking");

$f = fopen($csv, "a");

fputcsv($f, [$naam, $email, $leeftijd, $opmerking]);
fclose($f);

echo "Opgeslagen in $csv\n";