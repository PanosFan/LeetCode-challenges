<?php
class Solution
{
    function isIsomorphic($s, $t)
    {
        $s_map = [];
        for ($i = 0; $i < strlen($s); $i++) {
            if (isset($s_map[$s[$i]]) && $s_map[$s[$i]] != $t[$i]) {
                return false;
            }
            $s_map[$s[$i]] = $t[$i];
        }
        if (count($s_map) != count(array_unique($s_map))) {
            return false;
        }
        return true;
    }
}

// https://leetcode.com/problems/isomorphic-strings/