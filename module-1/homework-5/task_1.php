<?php

$word = 'stalker';
$wordLength = strlen($word);
$shift = 10;
$min = ord('a');
$max = ord('z');
$lettersAmount = $max - $min + 1;

$cipheredWord = '';

for ($i = 0; $i < $wordLength; $i += 1) {
    $num = ord($word[$i]) + $shift;
    $shiftedNum = (($num - $min) % $lettersAmount) + $min;
    $letter = chr($shiftedNum);
    $cipheredWord .= $letter;
}
print_r($cipheredWord . "\n");

$decipheredWord = '';

for ($i = 0; $i < $wordLength; $i += 1) {
    $num = ord($cipheredWord[$i]) + ($lettersAmount - $shift);
    $shiftedNum = (($num - $min) % $lettersAmount) + $min;
    $letter = chr($shiftedNum);
    $decipheredWord .= $letter;
}
print_r($decipheredWord . "\n");
