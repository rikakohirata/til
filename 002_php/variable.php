<?php

/**
 * 条件判定関数
 * isset — 変数が宣言されていること、そしてnullとは異なることを検査する
 *  ・存在する && null以外の値の場合true、それ以外はfalseを返す（空はtrue）
 * empty — 変数が空であるかどうかを検査する
 *  ・存在しない || 空, 0, "0", nullの値の場合true、それ以外はfalseを返す
 *  ・変数が存在しない場合でも警告を出さない
 *  ・(!isset($var) || $var == false)と等しい
 * is_null — 変数が null かどうか調べる
 *  ・nullの場合にtrue、それ以外の場合にfalseを返す
 *  https://www.php.net/manual/ja/function.isset
 *  https://www.php.net/manual/en/function.empty.php
 *  https://www.php.net/manual/ja/function.is-null
 */
$value_1 = 1;
var_dump($value_1 ? true : false);          // => true
var_dump(isset($value_1) ? true : false);   // => true
var_dump(empty($value_1) ? true : false);   // => false
var_dump(is_null($value_1) ? true : false); // => false

$value_2 = 0;
var_dump($value_2 ? true : false);          // => false
var_dump(isset($value_2) ? true : false);   // => true
var_dump(empty($value_2) ? true : false);   // => true
var_dump(is_null($value_2) ? true : false); // => false

$value_3 = "0";
var_dump($value_3 ? true : false);          // => false
var_dump(isset($value_3) ? true : false);   // => true
var_dump(empty($value_3) ? true : false);   // => true
var_dump(is_null($value_3) ? true : false); // => false

$value_4 = "";
var_dump($value_4 ? true : false);          // => false 
var_dump(isset($value_4) ? true : false);   // => true  
var_dump(empty($value_4) ? true : false);   // => true
var_dump(is_null($value_4) ? true : false); // => false 

$value_5 = null;
var_dump($value_5 ? true : false);          // => false 
var_dump(isset($value_5) ? true : false);   // => false  
var_dump(empty($value_5) ? true : false);   // => true
var_dump(is_null($value_5) ? true : false); // => true 

$value_6;
var_dump($value_6 ? true : false);          // => false 
var_dump(isset($value_6) ? true : false);   // => false  
var_dump(empty($value_6) ? true : false);   // => true
var_dump(is_null($value_6) ? true : false); // => true 

$array_1 = [];
var_dump($array_1 ? true : false);          // => false 
var_dump(isset($array_1) ? true : false);   // => true  
var_dump(empty($array_1) ? true : false);   // => true
var_dump(is_null($array_1) ? true : false); // => false 

$array_2 = [0];
var_dump($array_2 ? true : false);          // => true 
var_dump(isset($array_2) ? true : false);   // => true  
var_dump(empty($array_2) ? true : false);   // => false
var_dump(is_null($array_2) ? true : false); // => false