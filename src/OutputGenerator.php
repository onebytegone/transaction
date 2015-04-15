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
      echo self::summarize($module, $package);
   }

   public static function printModule($module) {
      echo self::summarizeModule($module);
   }

   public static function printPackage($package) {
      echo self::summarizePackage($package);
   }

   public static function summarize($module, $package) {
      $output = '<div class="transaction-step">';
      $output .= "<h1>".get_class($module)."</h1>";
      $output .= self::summarizeModule($module);
      $output .= self::summarizePackage($package);
      $output .= '<div class="clear"></div>';
      $output .= '</div>';
      return $output;
   }

   public static function summarizeModule($module) {
      $output = '<div class="module">';
      $output .= '<h3>Config:</h3>';
      $output .= self::generateTableFromArray(get_object_vars($module));
      $output .= '</div>';
      return $output;
   }

   public static function summarizePackage($package) {
      $output = '<div class="package">';
      $output .= '<h3>Package:</h3>';
      $output .= self::generateTableFromArray($package);
      $output .= '</div>';
      return $output;
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
