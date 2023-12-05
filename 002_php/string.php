<?php

/**
 * strrev — 文字列を逆順にする
 */
$number = 12321;
$reverse_number = (int)strrev($number);
var_dump($number === $reverse_number); // => bool(true)
