<?php

/**
 *
 * @copyright 2015 Ethan Smith
 */

class Divide extends Operation {
   /**
    * @param $package array
    * @return array
    */
   public function execute(&$package) {
      if ($package[$this->b] == 0) {
         return TransactionStatus::ERROR;
      }

      $package[$this->result] = $package[$this->a] / $package[$this->b];

      return TransactionStatus::OK;
   }
}

