<?php

/*Given a non-empty array of integers nums, every element appears twice except for one. Find that single one.

You must implement a solution with a linear runtime complexity and use only constant extra space.   */

$nums = [2,2,1];


   
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $array = array_count_values($nums);
        return array_search(1, $array);
    }


print(singleNumber($nums));