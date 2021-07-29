<?php

namespace PhpAlgorithm\Algorithm\Recursion;

class RecursionWithArray
{
  public static function arraySumRecursive(Array $array) { 
    $sum = 0; 
    array_walk_recursive($array, function($v) use (&$sum) { 
      $sum += $v; 
    }); 

    return $sum; 
  }
}