<?php

$a = rand(0, 1);
var_dump($a);

$b = $a ? rand(1, 3) : null;
var_dump($b);

switch ($b) {
    case null:
        print_r("This is NULL");
        break;
    case 1:
        print_r("This is 1");
        break;
    default:
        print_r("This is {$b}");
}

print_r("\n");
var_dump(isset($b));

$c = $b ?? rand(20, 30);
print_r($c);
