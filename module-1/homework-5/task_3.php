<?php

$deposit = 100000; // рубли
$interestRate = 8; // проценты %
$increasingRate = 2; // проценты %
$increasedDeposit = $deposit;
$doubledDeposit = $deposit * 2;
$year = 0;
$increasingFloatRate = $increasingRate / 100;

while ($increasedDeposit < $doubledDeposit) {
    $year += 1;
    if ($year % 3 === 0) {
        $interestRate += $interestRate * $increasingFloatRate;
    }
    $interestFloatRate = $interestRate / 100;
    $increasedDeposit += round($deposit * $interestFloatRate, 2);
}
// print_r($increasedDeposit . "\n");
print_r($year . "\n");
