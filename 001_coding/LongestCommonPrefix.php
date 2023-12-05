<?php

/**
 * https://leetcode.com/problems/longest-common-prefix/description/
 */
class Solution
{

  /**
   * 配列の要素から、共通文字列を取得
   * ["reflower","flow","flight"]　=> fl
   * @param string[] $strs 
   * @return string
   */
  function longestCommonPrefix1($strs)
  {
    $length = count($strs);
    $words = str_split($strs[0]);

    for ($i = 1; $i < $length; $i++) {
      $keyword = "";
      foreach ($words as $word) {
        $result = strpos($strs[$i], $keyword . $word);
        if ($result !== false) {
          $keyword = $keyword . $word;
        }
      }
      $words = str_split($keyword);
    }

    return implode($words);
  }

  /**
   * 配列の要素から、共通接頭辞文字列を取得
   * ["reflower","flow","flight"]　=> ""
   * @param string[] $strs 
   * @return string
   */
  function longestCommonPrefix2($strs)
  {
    $length = count($strs);
    $words = str_split($strs[0]);

    for ($i = 1; $i < $length; $i++) {
      $keyword = "";
      foreach ($words as $word) {
        $result = strpos($strs[$i], $keyword . $word);
        if ($result === 0) {
          $keyword = $keyword . $word;
        } else {
          break;
        }
      }
      $words = str_split($keyword);
    }

    return implode($words);
  }
}
