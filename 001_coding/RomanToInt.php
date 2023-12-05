<?php

/**
 * https://leetcode.com/problems/roman-to-integer/
 * 与えられたローマ数字を整数に変換する
 */
class Solution
{
  private const ROMAN_VALUES = [
    'I' => 1,
    'V' => 5,
    'X' => 10,
    'L' => 50,
    'C' => 100,
    'D' => 500,
    'M' => 1000,
  ];

  /**
   * for文を使用
   * @param string $s
   * @return int
   */
  function romanToInt($s)
  {

    $romans = str_split($s); // "MCMXCIV" => [M, C, M, X, C, I, V]
    $length = count($romans);
    $sum = 0;

    for ($i = 0; $i < $length; $i++) {
      $current_value = self::ROMAN_VALUES[$romans[$i]];                           // C = 100
      $next_value = ($i + 1 < $length) ? self::ROMAN_VALUES[$romans[$i + 1]] : 0; // M = 1000

      if ($current_value >= $next_value) {
        $sum += $current_value;
      } else {
        $sum += ($next_value - $current_value);
        $i++;
      }
    }

    return $sum;
  }

  /**
   * while文を使用
   * @param string $s
   * @return int
   */
  function romanToInt2($s)
  {
    $romans = str_split($s);
    $length = count($romans);
    $sum = 0;
    $i = 0;

    while ($i < $length) {
      $current_value = self::ROMAN_VALUES[$romans[$i]];
      $next_value = ($i + 1 < $length) ? self::ROMAN_VALUES[$romans[$i + 1]] : 0;

      if ($current_value >= $next_value) {
        $sum += $current_value;
      } else {
        $sum += ($next_value - $current_value);
        $i++;
      }
      $i++;
    }

    return $sum;
  }
}
