<?php

class Solution
{

    function isPowerOfFour($n)
    {
        if ($n === 0) return false;
        $x = (log($n) / log(4));
        return floor($x) == $x ? true : false;
    }
}

//https://leetcode.com/problems/power-of-four/