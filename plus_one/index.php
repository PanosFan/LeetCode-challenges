<?php
class Solution
{
    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits)
    {
        if (count($digits) == 1 && $digits[0] == 9) {
            return [1, 0];
        }
        $last = count($digits) - 1;
        while ($digits[$last] == 9) {
            $digits[$last] = 0;
            $last--;
            if ($last == 0 && $digits[0] == 9) {
                $digits[$last] = 0;
                array_unshift($digits, 1);
                return $digits;
            }
        }
        $digits[$last] += 1;
        return $digits;
    }
}
// https://leetcode.com/problems/plus-one/