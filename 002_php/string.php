<?php

/**
 * strrev — 文字列を逆順にする
 */
$number = 12321;
$reverse_number = (int)strrev($number);
var_dump($number === $reverse_number); // => bool(true)

/**
 * str_split — 文字列を配列に変換する
 */
$string = "ABCDEF";
print_r(str_split($string));    // => [A, B, C, D, E, F]
print_r(str_split($string, 2)); // => [AB, CD, EF]
