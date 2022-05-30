<?php
class Solution
{
    static function twoSum($nums, $target)
    {
        $sum = 0;
        $number1 = 0;
        for ($i = 0; $i < count($nums); $i++) {
            $number1 = $nums[$i];

            for ($j = $i + 1; $j < count($nums); $j++) {
                $sum = $number1 + $nums[$j];
                if ($sum === $target) {
                    return [$i, $j];
                }
            }
        }
    }
}
// https://leetcode.com/problems/two-sum/