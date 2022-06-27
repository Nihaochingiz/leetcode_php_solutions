<?php
 
     /* Given a binary array nums, return the maximum number of consecutive 1's in the array.*/
     class Solution {

        /**
         * @param Integer[] $nums
         * @return Integer
         */
        function findMaxConsecutiveOnes($nums) {
            $count = 0;
            $consecutiveOnes = 0;
            
            foreach($nums as $num) {
                if ($num == 1) {
                    $count += 1;
                    $consecutiveOnes = max($count, $consecutiveOnes);
                } else {
                    $count = 0;
                }
            }
            return  $consecutiveOnes;
        }
    }
?>