<?php

class GuessGame
{
    // delete, to ebala mono gia na min xtupaei to intelligence
    function guess()
    {
        //
    }
}

class Solution extends GuessGame
{

    function guessNumber($n)
    {
        $min = 1;
        $max = $n;
        while ($min <= $max) {
            $mid = floor(($min + $max) / 2);
            $res = $this->guess($mid);
            if ($res == 0) {
                return $mid;
            } else if ($res == 1) {
                $min = $mid + 1;
            } else {
                $max = $mid - 1;
            }
        }
    }
}
//https://leetcode.com/problems/guess-number-higher-or-lower/