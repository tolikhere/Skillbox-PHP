<?php

$text = 'Я люблю море. Я лечу на море. Я умею плавать в море. Какое чистое море! Хочу на море. Завтра поедем на море.';
$sea = 'море';
$revSeaWord = implode(array_reverse(mb_str_split($sea)));

$revSeaText = str_replace($sea, $revSeaWord, $text);
