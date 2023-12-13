<?php

/**
 * nullableな型
 *  パラメータや戻り値の型宣言でnullableな型指定ができる
 *  ?T は T|null に等しい
 */
function test1(?string $str)
{
  var_dump($str);
}

// dumpName();           => ArgumentCountError - 引数不足のエラー 
test1('hello world'); // => "hello world"
test1(null);          // => NULL

function test2(string $str = null)
{
  var_dump($str);
}

test2();              // => NULL - デフォルト値の指定しnull許容型を表現
test2('hello world'); // => "hello world"
test2(null);          // => NULL