<?php

class Solution
{

    function getConcatenation($nums)
    {
        $arr = [];
        for ($i = 0; $i < 2; $i++) {
            $arr = array_merge($arr, $nums);
        }
        return $arr;
    }
}

// https://leetcode.com/problems/concatenation-of-array/