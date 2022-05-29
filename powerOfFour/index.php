<?php

class Solution
{

    function isPowerOfFour($n)
    {
        if ($n === 0) return false;
        $x = (log($n) / log(4));
        if ($x == 0) return true;
        if ((filter_var($x, FILTER_VALIDATE_INT))) return true;
        return false;
    }
}

//https://leetcode.com/problems/power-of-four/