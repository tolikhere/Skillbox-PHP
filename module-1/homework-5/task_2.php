<?php

$letters = ['A', 'B'];
$lettersInAutoNumber = 3;
$size = count($letters);
$autoSeries = [];
$maxSeries = count($letters) ** $lettersInAutoNumber;
$x1 = 0;
$x2 = 0;
$x3 = 0;
$autoNumbers = [];
$minAutoNum = 0;
$maxAutoNum = 999;
$increment = true;

for ($i = 1; $i <= $maxSeries; $i += 1) {
    $prefix = $letters[$x1 % $size];
    $ending = "{$letters[$x2 % $size]}{$letters[$x3 % $size]}";
    $x3 += 1; // Увеличивает разряд единиц
//    print_r($prefix . $ending . "\n");
    switch ($increment) {
        case $i % 4 === 0:
            $x1 += 1; // Увеличивает разряд сотен
        case $i % 2 === 0:
            $x2 += 1; // Увеличивает разряд десятков
    }

    for ($j = $minAutoNum; $j <= $maxAutoNum; $j += 1) {
        $autoNumber = sprintf('%s%03d%s', $prefix, $j, $ending);
//      print_r($autoNumber . ', ');
        $autoNumbers[] = $autoNumber;
    }
}

foreach ($autoNumbers as $autoNumber) {
    print_r($autoNumber . ', ');
}

$targetNumbers = [];
for ($i = 0; $i <= 9; $i += 1) {
    $targetNumbers[] = str_repeat((string) $i, 3);
}

foreach ($autoNumbers as $index => $autoNumber) {
    $number = substr($autoNumber, 1, 3);
    if (!in_array($number, $targetNumbers)) {
        unset($autoNumbers[$index]);
    }
}

print_r($autoNumbers);
