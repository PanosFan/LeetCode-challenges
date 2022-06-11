<?php

class Solution
{
    function merge(&$nums1, $m, $nums2, $n)
    {
        $arr = [];
        while ($m > 0 && $n > 0) {
            if ($nums1[$m - 1] > $nums2[$n - 1]) {
                array_unshift($arr, $nums1[$m - 1]);
                $m--;
            } else {
                array_unshift($arr, $nums2[$n - 1]);
                $n--;
            }
        }
        if ($n > 0) {
            $arr = array_merge(array_slice($nums2, 0, $n), $arr);
        }
        if ($m > 0) {
            $arr = array_merge(array_slice($nums1, 0, $m), $arr);
        }
        $nums1 = $arr;
    }
}

//https://leetcode.com/problems/merge-sorted-array/