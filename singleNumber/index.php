<?php

class Solution
{

    function singleNumber($nums)
    {
        $count = count($nums);
        $map = [];
        for ($i = 0; $i < $count; $i++) {
            if (isset($map[$nums[$i]])) {
                unset($map[$nums[$i]]);
            } else {
                $map[$nums[$i]] = $nums[$i];
            }
        }
        return array_values($map)[0];
    }
}

// https://leetcode.com/problems/single-number/

