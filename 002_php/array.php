<?php

/**
 * array_reverse — 要素を逆順にした配列を返す
 */
$samples = [0, 1, 2];
print_r(array_reverse($samples)); // => [2, 1, 0]

/**
 * implode — 配列要素を文字列により連結する
 *  第一引数：連結したい文字列の配列
 *  第二引数：指定した文字列で配列の要素を連結する、デフォルトは空文字列
 */
$words = ['n', 'a', 'm', 'e'];
var_dump(implode($words));      // => string(4) "name"
var_dump(implode(",", $words)); // => string(7) "n,a,m,e"
