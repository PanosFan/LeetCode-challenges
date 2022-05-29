<?php
class Solution
{
    function maxProfit($prices)
    {
        $count = count($prices);
        $minPrice = $prices[0];
        $profit = 0;
        for ($i = 0; $i < $count; $i++) {
            if ($prices[$i] < $minPrice) {
                $minPrice = $prices[$i];
                continue;
            }
            if ($prices[$i] - $minPrice > $profit) $profit = $prices[$i] - $minPrice;
        }
        return $profit;
    }
}

//https://leetcode.com/problems/best-time-to-buy-and-sell-stock/