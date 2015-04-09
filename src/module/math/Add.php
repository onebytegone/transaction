<?php

/**
 *
 * @copyright 2015 Ethan Smith
 */

class Add extends Operation {
   /**
    * @param $package array
    * @return array
    */
   public function execute(&$package) {
      $package[$this->result] = $package[$this->a] + $package[$this->b];

      return TransactionStatus::OK;
   }
}

