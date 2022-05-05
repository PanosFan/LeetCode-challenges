<?php
class Solution
{
  /**
   * @param String $haystack
   * @param String $needle
   * @return Integer
   */
  function strStr($haystack, $needle)
  {
    $hayLen = strlen($haystack);
    $needLen = strlen($needle);
    if ($hayLen < $needLen) return -1;
    for ($i = 0; $i < $hayLen; $i++) {
      $temp = '';
      for ($j = 0; $j < $needLen; $j++) {
        $temp = $temp . $haystack[$j + $i];
        if ($temp == $needle) {
          return $i;
        }
      }
    }
    return -1;
  }
}
// https://leetcode.com/problems/implement-strstr/