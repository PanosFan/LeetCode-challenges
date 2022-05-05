<?php
class Solution
{

    function removeDuplicates(&$nums)
    {
        $countArr = count($nums);
        for ($i = 0; $i < $countArr; $i++) {
            if ($i == $countArr - 1) break;
            if ($nums[$i] === $nums[$i + 1]) {
                unset($nums[$i]);
            }
        }
        return count($nums);
    }
}
// https://leetcode.com/problems/remove-duplicates-from-sorted-array/