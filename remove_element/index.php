<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val)
    {
        foreach ($nums as $k => $v) {
            if ($nums[$k] === $val) {
                unset($nums[$k]);
            }
        }
        return count($nums);
    }
}
// https://leetcode.com/problems/remove-element/