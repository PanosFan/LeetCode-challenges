<?php
class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    {
        do {
            $s = str_replace(['()', '[]', '{}'], '', $s, $c);
        } while ($c);

        return empty($s);
    }
}
// https://leetcode.com/problems/valid-parentheses/