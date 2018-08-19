<?php

// 5.
$bmw = [
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => "2015"
];

$toyota = [
    "model" => "RAV4",
    "speed" => 120,
    "doors" => 5,
    "year" => "2000"
];

$opel = [
    "model" => "AstraJ",
    "speed" => 120,
    "doors" => 5,
    "year" => "2011"
];

$cars = [
    "bmw" => $bmw,
    "toyota" => $toyota,
    "opel" => $opel
];

foreach ($cars as $key => $property) {

    echo PHP_EOL.PHP_EOL;
    echo "CAR $key".PHP_EOL;

    foreach ($property as $value) {
        echo $value." ";
    }
}