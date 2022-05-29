<?php
class Solution
{

    function reverseString(&$s)
    {
        $count = count($s);
        for ($i = $count - 1; $i >= 0; $i--) {
            $element = $s[$i];
            unset($s[$i]);
            array_push($s, $element);
        }
    }
}

//https://leetcode.com/problems/reverse-string/submissions/