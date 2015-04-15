<?php

/**
 * A PHP example of transactional data processing
 *
 * @copyright 2015 Ethan Smith
 */

require "require.php";

// Create state object
$stateObject = array();
$stateObject['rate'] = $_GET['rate'];
$stateObject['principal'] = $_GET['principal'];
$stateObject['compound'] = $_GET['compound'];
$stateObject['years'] = $_GET['years'];
$stateObject['1'] = 1;

// Defaults
if (count($_GET) != 4) {  // This is not a good example of a validation check
   $stateObject['rate'] = '0.01';
   $stateObject['principal'] = '2000';
   $stateObject['compound'] = '4';
   $stateObject['years'] = '10';
}


// Define transaction process
$transactions = array(
   new ToNumber('rate', 'rate'),
   new ToNumber('principal', 'principal'),
   new ToNumber('compound', 'compound'),
   new ToNumber('years', 'years'),
   new Multiply('compound', 'years', 'power'),
   new Divide('rate', 'compound', 'rate_per_period'),
   new Add('1', 'rate_per_period', 'base'),
   new Power('base', 'power', 'combined'),
   new Multiply('principal', 'combined', 'result'),
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
