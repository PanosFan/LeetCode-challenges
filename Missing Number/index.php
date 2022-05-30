<?php

class Solution
{

    function missingNumber($nums)
    {
        $arr = [];
        sort($nums);
        $count = count($nums);
        for ($i = 0; $i <= $count; $i++) {
            array_push($arr, $i);
        }
        $newCount = count($arr);
        for ($i = 0; $i < $newCount; $i++) {
            if ($nums[$i] !== $arr[$i]) return $arr[$i];
        }
    }
}

//https://leetcode.com/problems/missing-number/