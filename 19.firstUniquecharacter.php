<?php

/*  Given a string s, find the first non-repeating character in it and return its index. If it does not exist, return -1. 
Example 1:

Input: s = "leetcode"
Output: 0
Example 2:

Input: s = "loveleetcode"
Output: 2
Example 3:

Input: s = "aabb"
Output: -1  */
class Solution {

/**
 * @param String $s
 * @return Integer
 */
function firstUniqChar($s) {
    $result = -1;

    $charCountMap = [];
    $lengthS = strlen($s);

    for ($i = 0; $i < $lengthS; $i++) {
            $charCountMap[$s[$i]]++;
    }

    for ($i = 0; $i < $lengthS; $i++) {
            if( 1 ===$charCountMap[$s[$i]]) {
                $result = $i;
                break;
            }
    }
    return $result;
}
}