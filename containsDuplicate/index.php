<?php

class Solution
{
    function containsDuplicate($nums)
    {
        $count = count($nums);
        $arr = [];

        for ($i = 0; $i < $count; $i++) {
            if (isset($arr[$nums[$i]])) {
                return true;
            }
            $arr[$nums[$i]] = 1;
        }
        return false;
    }
}

//https://leetcode.com/problems/contains-duplicate/