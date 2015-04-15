<?php

/**
 *
 * @copyright 2015 Ethan Smith
 */

class Power extends Operation {
   /**
    * @param $package array
    * @return array
    */
   public function execute(&$package) {
      $package[$this->result] = pow($package[$this->a], $package[$this->b]);

      return TransactionStatus::OK;
   }
}

