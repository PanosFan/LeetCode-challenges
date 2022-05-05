<?php
class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s)
    {
        //remove double spaces
        $line = preg_replace('/\s+/', ' ', $s);
        $arr = explode(" ", $line);
        $count = count($arr);
        //last element in the array can be space, so I will return the count-2 element, which can't be a space 
        //casuse I am deleting any 2nd space
        if (strlen($arr[$count - 1]) === 0) return strlen($arr[$count - 2]);
        return strlen($arr[$count - 1]);
    }
}
// https://leetcode.com/problems/length-of-last-word/