<?php

/**
 * https://leetcode.com/problems/palindrome-number/
 * 与えられた整数が回文数であるか判定する
 */
class Solution
{

  /**
   * @param int $x
   * @return boolean
   */
  function isPalindrome($x)
  {
    $reverse_number = (int)strrev($x);
    return $x === $reverse_number;
  }
}
