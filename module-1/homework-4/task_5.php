<?php

$games = [
    "first" => "Uncharted",
    "second" => "God of War",
    "third" => "Uncharted",
    "fourth" => "The Witness",
    "fifth" => "Jojo's Bizarre Adventure: Eyes Of Heaven",
];

$amount = count($games);
print_r($amount);

$flippedGames = array_flip($games);
$flippedAmount = count($flippedGames);
print_r($flippedAmount);

var_dump($amount <=> $flippedAmount);

$flippedGamesValues = array_values($flippedGames);
$newList = array_merge($flippedGamesValues, ['Good grief']);

$goodGrief = array_combine($newList, array_values($games));
print_r($goodGrief);
