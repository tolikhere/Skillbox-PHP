<?php

$text = 'Лето пришло';
$spaceIndex = mb_strpos($text, ' ');
print_r($spaceIndex);
$leftPart = mb_substr($text, $spaceIndex + 1);
print_r($leftPart);
