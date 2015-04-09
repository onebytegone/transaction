<?php

/**
 *
 * @copyright 2015 Ethan Smith
 */

class ToNumber extends BaseTransaction {
   public $field = '';
   public $result = '';

   function __construct($field, $result) {
      $this->field = $field;
      $this->result = $result;
   }


   public function execute(&$package) {
      $package[$this->result] = intval($package[$this->field]);
      return TransactionStatus::OK;
   }
}

