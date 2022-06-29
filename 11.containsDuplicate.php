<?php

/*  Given an integer array nums, return true if any value appears at least twice in the array, and return false if every element is distinct. */




    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    $nums = [1,2,3,1];
    class Solution {

        /**
         * @param Integer[] $nums
         * @return Boolean
         */
         function containsDuplicate($nums) {
            return count($nums) != count(array_unique($nums));
        }
    }
    
    print(containsDuplicate($nums));