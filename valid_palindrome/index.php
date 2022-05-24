<?php

class Solution
{

    function isPalindrome($s)
    {
        $s = preg_replace("/[^a-zA-Z0-9]/", "", $s);
        $s = strtolower($s);
        if (strrev($s) !== $s) {
            return false;
        }
        return true;
    }
}

$a = new Solution;
$a->isPalindrome(
    "A man, a plan, a canal -- Panama"
);