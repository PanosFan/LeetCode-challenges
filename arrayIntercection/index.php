<?php

class Solution
{
    function intersection($nums1, $nums2)
    {
        $result = [];
        foreach ($nums1 as $key => $value) {
            if (in_array($value, $nums2)) {
                array_push($result, $value);
            }
        }

        return array_unique($result);
    }
}

// https://leetcode.com/problems/intersection-of-two-arrays/