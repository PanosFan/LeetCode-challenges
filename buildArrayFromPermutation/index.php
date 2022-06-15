<?php

class Solution
{
    function buildArray($nums)
    {
        $arr = [];
        for ($i = 0; $i < count($nums); $i++) {
            array_push($arr, $nums[$nums[$i]]);
        }
        return $arr;
    }
}

// https://leetcode.com/problems/build-array-from-permutation/