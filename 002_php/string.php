<?php

/**
 * strpos — 文字列内の部分文字列が最初に現れる場所を見つける
 *  https://www.php.net/manual/ja/function.strpos.php
 */
$word_1 = 'abcd';
$word_2 = 'c';
$word_3 = 'e';

$result = strpos($word_1, $word_2);
var_dump($result); // => int(2) 存在する場合、見つかった位置を返す

$result = strpos($word_1, $word_3);
var_dump($result); // bool(false) 存在しない場合、falseを返す

/**
 * strrev — 文字列を逆順にする
 *  https://www.php.net/manual/ja/function.strrev.php
 */
$number = 12321;
$reverse_number = (int)strrev($number);
var_dump($number === $reverse_number); // => bool(true)

/**
 * str_split — 文字列を配列に変換する
 *  https://www.php.net/manual/ja/function.str-split
 */
$string = "ABCDEF";
print_r(str_split($string));    // => [A, B, C, D, E, F]
print_r(str_split($string, 2)); // => [AB, CD, EF]

/**
 * strtr — 文字の変換あるいは部分文字列の置換を行う
 *  https://www.php.net/manual/ja/function.strtr.php
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
