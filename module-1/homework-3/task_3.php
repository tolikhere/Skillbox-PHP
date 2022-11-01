<?php

$a = rand(1, 9);
$b = 10 * rand(1, 3);
$product = $a * $b;
$product += rand(0, 100);

var_dump($a, $b);

switch (true) {
    case $product >= 0 && $product < 100:
        echo 'меньше 100';
        break;
    case $product >= 100 && $product < 200:
        echo 'меньше 200';
        break;
    case $product >= 200 && $product < 300:
        echo $product;
        break;
    default:
        echo 'I need a job as a programmer';
}
