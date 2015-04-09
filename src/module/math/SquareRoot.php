<?php

/**
 *
 * NOTE: $b is not used
 *
 * @copyright 2015 Ethan Smith
 */

class SquareRoot extends Operation {
   /**
    * @param $package array
    * @return array
    */
   public function execute(&$package) {
      $package[$this->result] = sqrt($package[$this->a]);

      return TransactionStatus::OK;
   }
}

