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

/**
 * strtr — 文字の変換あるいは部分文字列の置換を行う
 *  引数を2つ渡した場合、第一引数の文字列と、第二引数の配列のキーを比較し、一致したキーの値に置換する
 *  第二引数はarray(key => value)形式で渡す
 */
$s = "MCMXCIV";
$s = strtr(
  $s,
  [
    'M'  => '1000,',
    'CM' => '900,',
    'D'  => '500,',
    'CD' => '400,',
    'C'  => '100,',
    'XC' => '90,',
    'L'  => '50,',
    'XL' => '40,',
    'X'  => '10,',
    'IX' => '9,',
    'V'  => '5,',
    'IV' => '4',
    'I'  => '1,'
  ]
);
var_dump($s);
$sum = array_sum(explode(',', $s));
var_dump($sum); // => int(1994)
