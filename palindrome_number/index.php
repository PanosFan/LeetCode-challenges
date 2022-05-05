<?php
class Solution
{
    function isPalindrome($x)
    {
        $str = "$x";
        $strRev = strrev($str);
        if ($str === $strRev) {
            return true;
        } else {
            return false;
        }
    }
}
// https://leetcode.com/problems/palindrome-number/