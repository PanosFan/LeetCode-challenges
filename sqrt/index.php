<?php
class Solution
{

    function mySqrt($x)
    {
        $i = 0;
        while ($i <= $x) {
            if ($x === ($i * $i)) {
                return $i;
            }
            if (($i * $i) > $x) return $i - 1;
            $i++;
        }
    }
}
// https://leetcode.com/problems/sqrtx/