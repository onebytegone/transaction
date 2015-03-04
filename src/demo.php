<?php

/**
 * A PHP example of transactional data processing
 *
 * @copyright 2015 Ethan Smith
 */

require "require.php";

// Create state object
$stateObject = array();
$stateObject['input'] = "The quick brown fox jumped over the lazy dog";


// Define transaction process
$transactions = array();


// Execute process
$status = TransactionStatus::OK;
foreach ($transactions as $module) {
   $status = $module->execute($stateObject);

   if ($status != TransactionStatus::OK) {
      break;
   }
}


// Report final status
echo "Final Status: {$status}";
