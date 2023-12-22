<?php

/**
 * 21. Merge Two Sorted Lists
 * https://leetcode.com/problems/merge-two-sorted-lists/
 */

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution
{
  /**
   * @param ListNode $list1
   * @param ListNode $list2
   * @return ListNode
   */
  function mergeTwoLists($list1, $list2)
  {
    $list_node = new ListNode();
    $current_list = $list_node;

    while ($list1 !== null && $list2 !== null) {
      if ($list1->val < $list2->val) {
        $current_list->next = $list1;
        $list1 = $list1->next;
      } else {
        $current_list->next = $list2;
        $list2 = $list2->next;
      }
      $current_list = $current_list->next;
    }

    if ($list1 !== null) {
      $current_list->next = $list1;
    }

    if ($list2 !== null) {
      $current_list->next = $list2;
    }

    return $list_node->next;
  }
}
