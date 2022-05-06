<?php
class Solution
{
    function maxArea($height)
    {
        $water = 0;
        $start_index = 0;
        $finish_index = count($height) - 1;
        while ($start_index < $finish_index) {
            $min = min($height[$start_index], $height[$finish_index]);
            $temp = $min * ($finish_index - $start_index);
            $water = max($water, $temp);
            if ($height[$start_index] < $height[$finish_index]) {
                $start_index++;
            } elseif ($height[$start_index] > $height[$finish_index]) {
                $finish_index--;
            } else {
                $start_index++;
                $finish_index--;
            }
        }
        return $water;
    }
}
// https://leetcode.com/problems/container-with-most-water/