<?php
class Solution
{

    function reverse($x)
    {
        if ($x < 0) $isNegative = true;
        $abs = abs($x);
        $str = "$abs";
        $str = strrev($str);
        if ((int)$str > 2147483647 || -(int) $str < -2147483647) {
            return  0;
        }
        if ($isNegative) {
            return -(int) $str;
        }
        return (int) $str;
    }
}
// https://leetcode.com/problems/reverse-integer/