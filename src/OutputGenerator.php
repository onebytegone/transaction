<?php

/**
 * Handles printing of state object and module. This
 * is not an ideal way to handle this logging, but
 * for the demo it works.
 *
 * @copyright 2015 Ethan Smith
 */

class OutputGenerator {
   public static function printOutput($module, $package) {
      echo '<div class="transaction-step">';

      echo "<h1>".get_class($module)."</h1>";

      self::printModule($module);
      self::printPackage($package);

      echo '</div>';
   }

   public static function printModule($module) {
      echo '<div class="module">';

      echo '</div>';
   }

   public static function printPackage($package) {
      echo '<div class="package">';
      print_r($package);
      echo '</div>';
   }
}
