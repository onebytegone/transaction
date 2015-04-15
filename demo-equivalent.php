<?php

/**
 * A PHP example of transactional data processing
 *
 * Example: demo-equivalent.php?rate=0.01&principal=5000&compound=4&years=1
 *
 * @copyright 2015 Ethan Smith
 */

$rate = $_GET["rate"];
$principal = $_GET["principal"];
$compoundCount = $_GET["compound"];
$years = $_GET["years"];

$rate = doubleval($rate);
$principal = doubleval($principal);
$compoundCount = doubleval($compoundCount);
$years = doubleval($years);

$res = $principal * pow( 1 + $rate / $compoundCount, $compoundCount * $years );

echo "rate: {$rate}<br>";
echo "principal: {$principal}<br>";
echo "compound: {$compoundCount}<br>";
echo "years: {$years}<br>";
echo "Resulting amount: {$res}<br>";
