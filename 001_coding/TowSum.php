<?php

/**
 * https://leetcode.com/problems/two-sum/description/
 * 配列内の要素の合計が指定された$targetになる2つの要素を見つける
 */
class Solution
{
  /**
   * @param int[] $nums
   * @param int $target
   * @return int[]
   */
  function twoSum($nums, $target)
  {
    $length = count($nums);
    for ($i = 0; $i < $length; $i++) {
      for ($j = $i + 1; $j < $length; $j++) {
        if ($nums[$j] == $target - $nums[$i]) {
          return [$i, $j];
        }
      }
    }
  }
}
