<?php
class Solution
{

    function moveZeroes(&$nums)
    {
        foreach ($nums as $k => $v) {
            if ($v == 0) {
                unset($nums[$k]);
                array_push($nums, 0);
            }
        }
        $nums = array_values($nums); //to reindex the array
    }
}

//https://leetcode.com/problems/move-zeroes/