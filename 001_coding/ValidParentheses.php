<?php

/**
 * https://leetcode.com/problems/valid-parentheses/
 */
class Solution
{
  /**
   * (), [], {}がセットであるか
   * @param string $s
   * @return boolean
   */
  function isValid1($s)
  {
    $characters = str_split($s); // 配列に変換
    $length = count($characters);
    $results = [];
    $result = false;

    for ($i = 0; $i < $length; $i++) {
      switch ($characters[$i]) {
        case "(":
          $result = $characters[$i + 1] === ")";
          break;
        case "[":
          $result = $characters[$i + 1] === "]";
          break;
        case "{":
          $result = $characters[$i + 1] === "}";
          break;
        default:
          $results[] = $result;
          $i++;
      }
    }

    return !in_array(0, $results, true);
  }

  /**
   * 開き括弧は正しい順序かつ同じ種類の括弧で閉じられているか
   */
  function isValid($s)
  {
    $stack = [];
    $mapping = [
      ')' => '(',
      '}' => '{',
      ']' => '[',
    ];

    $length = strlen($s);

    for ($i = 0; $i < $length; $i++) {
      $char = $s[$i];
      if (in_array($char, ['(', '{', '['])) {
        array_push($stack, $char);
      } elseif (array_key_exists($char, $mapping)) {
        $top_element = empty($stack) ? '#' : array_pop($stack);

        if ($top_element != $mapping[$char]) {
          return false;
        }
      } else {
        return false; // Invalid character
      }
    }

    return empty($stack);
  }
}
