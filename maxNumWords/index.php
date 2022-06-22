<?php

class Solution
{

    function mostWordsFound($sentences)
    {
        foreach ($sentences as $key => $value) {
            $sentences[$key] = count(explode(' ', $value));
        }
        return max($sentences);
    }
}

// https://leetcode.com/problems/maximum-number-of-words-found-in-sentences/