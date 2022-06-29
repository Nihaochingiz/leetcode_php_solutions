<?php

/*  Write a function to find the longest common prefix string amongst an array of strings.

If there is no common prefix, return an empty string "".

 

Example 1:

Input: strs = ["flower","flow","flight"]
Output: "fl"
Example 2:

Input: strs = ["dog","racecar","car"]
Output: ""
Explanation: There is no common prefix among the input strings. */


class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $prefix = '';
        $len = count($strs);
        $ind_elem_min = 0;
        $res = true;
        $ctr = 0; 
        $min = $strs[0];
        $equals = true;
        
   
        if ($len == 1){ 
            if (empty($strs[0])) return "";
          return $strs[0];  
        } 
    
        for ($i = 0; $i < $len; $i++) { 
          for($j = 0; $j < $len; $j++) {
              if (strlen($strs[$i]) < strlen($strs[$j])) {
                  $min = $strs[$i];
                  $ind_elem_min = $i;
                  $ctr++;
              }
          }
            if ($ctr == $len - 1) break;
            $ctr = 0;
        }
    
        for ($i = 0; $i< $len; $i++) {
            if ($i == $ind_elem_min) continue; 
            
            $temp = $strs[$i];
            
            for ($j = 0; $j < strlen($temp); $j++) {
                 $prefix = substr($temp,0,strlen($min)); 
             
                
                if($prefix == $min) {
                    break;
                } else {
                    $min = substr($min,0,strlen($min) - 1); 
             
                }
            }
        }
        
        for($i =0 ; $i < $len; $i++){
            if (!str_contains($strs[$i],$prefix)){ 
              $res = false;  
            } else if ($prefix[0] != $strs[$i][0]) { 

                $res = false;
            }
        }
        echo $prefix . " ". $ind_elem_min. " ";  
        return $res == true ? $prefix : ''; 
    }
    }