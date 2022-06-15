<?php

class Solution
{
    function firstUniqChar($s)
    {
        $arr = [];
        for ($i = 0; $i < strlen($s); $i++) {
            if (isset($arr[$s[$i]])) {
                $arr[$s[$i]]++;
            } else {
                $arr[$s[$i]] = 1;
            }
        }
        for ($i = 0; $i < strlen($s); $i++) {
            if ($arr[$s[$i]] == 1) {
                return $i;
            }
        }
        return -1;
    }
}

// https://leetcode.com/problems/first-unique-character-in-a-string/