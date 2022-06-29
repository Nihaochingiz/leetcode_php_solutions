<?php

/*Given two integer arrays nums1 and nums2, return an array of their intersection. Each element in the result must appear as many times as it shows in both arrays and you may return the result in any order.*/


class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersect($nums1, $nums2) {
        $a1 = count($nums1);
        $a2 = count($nums2);
        $c1 = array_count_values($nums1);
        $c2 = array_count_values($nums2);
        $c = $c1;
        $other = $c2;
        if($a2>$a1){
            $c = $c2;
            $other = $c1;
        }
        $inter = [];
        foreach($c as $v => $a){
            if(isset($other[$v])){
                $inter = array_pad($inter, count($inter) + min($a, $other[$v]), $v);
            }
        }
        return $inter;
    }
}