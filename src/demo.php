<?php

/**
 * A PHP example of transactional data processing
 *
 * @copyright 2015 Ethan Smith
 */

require "require.php";

// Create state object
$stateObject = array();
$stateObject['a'] = '5';
$stateObject['b'] = '6';
$stateObject['c'] = '1';
$stateObject['0'] = 0;
$stateObject['2'] = 2;
$stateObject['4'] = 4;


// Define transaction process
$transactions = array(
   new ToNumber('a', 'a'),
   new ToNumber('b', 'b'),
   new ToNumber('c', 'c'),
   new Subtract('0', 'b', '-b'),
   new Multiply('b', 'b', 'b^2'),
   new Multiply('4', 'a', '4a'),
   new Multiply('4a', 'c', '4ac'),
   new Multiply('2', 'a', '2a'),
   new Subtract('b^2', '4ac', 'for_sqrt'),
   new SquareRoot('for_sqrt', null, 'sqrt_end'),
   new Add('-b', 'sqrt_end', 'ver_1'),
   new Subtract('-b', 'sqrt_end', 'ver_2'),
   new Divide('ver_1', '2a', 'x_1'),
   new Divide('ver_2', '2a', 'x_2'),
);


// Execute process
$status = TransactionStatus::OK;
foreach ($transactions as $module) {
   $status = $module->execute($stateObject);

   if ($status != TransactionStatus::OK) {
      break;
   }

   OutputGenerator::printOutput($module, $stateObject);
}


// Report final status
echo "Final Status: {$status}";
