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
$output = ''; // Place to store output
foreach ($transactions as $module) {
   $status = $module->execute($stateObject);

   if ($status != TransactionStatus::OK) {
      break;
   }

   $output .= OutputGenerator::summarize($module, $stateObject);
}

// Output data
echo "<h2>Results</h2>";
echo "<table class=\"output\">";
echo "<tr><td>Item</td><td>Value</td></tr>";
echo "<tr><td>Process final status:</td><td>{$status}</td></tr>";
if ($status == TransactionStatus::OK) {
   echo "<tr><td>Initial value:</td><td>".$stateObject['principal']."</td></tr>";
   echo "<tr><td>Total after ".$stateObject['years']." years:</td><td>".$stateObject['result']."</td></tr>";
   echo "<tr><td>Rate per period:</td><td>".$stateObject['rate_per_period']."</td></tr>";
}
echo "</table>";
echo "<h2>Stages</h2>";
echo $output;
