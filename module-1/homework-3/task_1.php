<?php

$a = 9;
$b = 10 * rand(1, 3);

var_dump($a, $b);

if (($a * $b) < 100) {
    echo 'меньше 100';
} elseif (($a * $b) < 200) {
    echo 'меньше 200';
} else {
    echo $a * $b;
}

