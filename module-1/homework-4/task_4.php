<?php

$games = [
    "first" => "Uncharted",
    "second" => "God of War",
    "third" => "Uncharted",
    "fourth" => "Jojo's Bizarre Adventure: Eyes Of Heaven",
    "fifth" => "The Witness",
];

$amount = count($games);
print_r($amount);

$flippedGames = array_flip($games);
$flippedAmount = count($flippedGames);
print_r($flippedAmount);

var_dump($amount <=> $flippedAmount);
