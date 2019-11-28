<?php
echo "Hoeveel landen ga je toevoegen?" . PHP_EOL;
$number = readline(">");

if (is_numeric($number)) {
} else {
    exit ($number . " " . "is geen getal");
}


$name = array();
$dream = array();
for ($i = 0; $i < $number; $i++) {
    echo "Welk land wil je toevoegen?" . PHP_EOL;
    $friend = readline(">");
    array_push($name, $friend);
    echo "Wat is de hoofdstad van ", $name[$i], "?" . PHP_EOL;
    $droom = readline(">");
    array_push($dream, $droom);
}

echo "De volgende landen en steden zitten in de database" . PHP_EOL;

for ($i = 0; $i < $number; $i++) {
    echo ($name[$i] . "," . $dream[$i]) . PHP_EOL;
}
