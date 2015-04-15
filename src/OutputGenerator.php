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

      echo '<div class="clear"></div>';
      echo '</div>';
   }

   public static function printModule($module) {
      echo '<div class="module">';
      echo '<h3>Config:</h3>';
      echo self::generateTableFromArray(get_object_vars($module));
      echo '</div>';
   }

   public static function printPackage($package) {
      echo '<div class="package">';
      echo '<h3>Package:</h3>';
      echo self::generateTableFromArray($package);
      echo '</div>';
   }

   private static function generateTableFromArray($values) {
      $output = '<table>';
      $output .= '<tr><td>Field</td><td>Value</td></tr>';
      $output .= join(array_map(function ($key, $value) {
         return "<tr><td>{$key}</td><td>{$value}</td></tr>";
      }, array_keys($values), $values), "\n");
      $output .= '</table>';

      return $output;
   }
}
