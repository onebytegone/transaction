<?php

/**
 * A PHP example of transactional data processing
 *
 * @copyright 2015 Ethan Smith
 */

$a = '5';
$b = '6';
$c = '1';
$a = intval($a);
$b = intval($b);
$c = intval($c);
$negB = -$b;
$fourAC = 4 * $a * $c;
$b2 = $b * $b;
$sqrtOut = sqrt($b2 - $fourAC);
$twoA = 2 * $a;
$val1 = $negB + $sqrtOut;
$val2 = $negB - $sqrtOut;
$x_1 = $val1 / $twoA;
$x_2 = $val2 / $twoA;

echo $x_1;
echo $x_2;

$x_1 = (-$b + sqrt($b*$b - 4 * $a * $c))/(2 * $a);
$x_2 = (-$b - sqrt($b*$b - 4 * $a * $c))/(2 * $a);

echo $x_1;
echo $x_2;
