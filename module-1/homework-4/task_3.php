<?php

$cartoons = [
    "a" => "American Dad!",
    "b" => "Family Guy",
    "c" => "Rick and Morthy",
];

$keys = array_keys($cartoons);
$letters = implode(' ', $keys);

echo $letters;
