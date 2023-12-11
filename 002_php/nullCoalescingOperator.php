<?php

/**
 * ?? : Null合体演算子（Null coalescing operator）
 *  変数 = isset(対象) ? 対象 : デフォルト値; 
 *  変数 = !is_null(対象) ? 対象 : デフォルト値; 
 * 
 * ??= : Null合体代入演算子（Null coalescing assignment operator）
 *  Null合体演算子と同一の結果になる操作
 */
$value_1 = 1;
$a = $value_1 ?? '初期値';
$value_1 ??= '初期値';
var_dump($a);       // => 1
var_dump($value_1); // => 1

$value_2 = 0;
$a = $value_2 ?? '初期値';
$value_2 ??= '初期値';
var_dump($a);       // => 0
var_dump($value_2); // => 0

$value_3 = "0";
$a = $value_3 ?? '初期値';
$value_3 ??= '初期値';
var_dump($a);       // => "0"
var_dump($value_3); // => "0"

$value_4 = "";
$a = $value_4 ?? '初期値';
$value_4 ??= '初期値';
var_dump($a);       // => ""
var_dump($value_4); // => ""

$value_5 = null;
$a = $value_5 ?? '初期値';
$value_5 ??= '初期値';
var_dump($a);       // => "初期値"
var_dump($value_5); // => "初期値"

$value_6;
$a = $value_6 ?? '初期値';
$value_6 ??= '初期値';
var_dump($a);       // => "初期値"
var_dump($value_6); // => "初期値"

$array_1 = [];
$a = $array_1 ?? '初期値';
$array_1 ??= '初期値';
var_dump($a);       // => []
var_dump($array_1); // => []

$array_2 = [0];
$a = $array_2 ?? '初期値';
$array_2 ??= '初期値';
var_dump($a);       // => [0]
var_dump($array_2); // => [0]
