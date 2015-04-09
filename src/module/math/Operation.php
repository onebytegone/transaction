<?php

/**
 *
 * @copyright 2015 Ethan Smith
 */

class Operation extends BaseTransaction {
   public $a = '';
   public $b = '';
   public $result = '';

   function __construct($a, $b, $result) {
      $this->a = $a;
      $this->b = $b;
      $this->result = $result;
   }
}

