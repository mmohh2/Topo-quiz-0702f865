<?php

$array = array("Japan"=>"Tokyo", "Mexico"=>"Mexico City", "USA"=>"Washington D.C.", "India"=>"New Delhi", "Zuid-Korea"=>"Seoul", "China"=>"Peking", "Nigeria"=>"Abuja", "Argentina"=>"Buenos Aires", "Egypt"=>"Cairo", "UK"=>"London");

echo "Deze quiz is hoofdletter gevoelig" . PHP_EOL;

foreach($array as $x => $y) {
    echo "Wat is de hoofdstad van " . $x . PHP_EOL;
    $antwoord = readline();
    if ($antwoord == $y) {
        echo "Correct!" . PHP_EOL;
    } else {
        echo "Helaas, $antwoord is niet de hoofdstad van $x" . PHP_EOL;
        echo "het correcte antwoord is: $y" . PHP_EOL;
    }
}