<?php

/* Given an integer array nums, move all 0's to the end of it while maintaining the relative order of the non-zero elements.

Note that you must do this in-place without making a copy of the array.

 

Example 1:

Input: nums = [0,1,0,3,12]
Output: [1,3,12,0,0]
Example 2:

Input: nums = [0]
Output: [0]      */


$nums = [0,1,0,3,12];
    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $count = count($nums);
        foreach($nums as $k => $v) {
            if ($v == 0) {
             unset($nums[$k]);
             /*unset — Удаляет переменную*/
            }

        }
        $nums = array_pad($nums,$count,0);
        /*array_pad — Дополнить массив определённым значением до указанной длины*/
    }



    print(moveZeroes($nums));
