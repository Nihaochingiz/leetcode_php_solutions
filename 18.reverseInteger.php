<?php

/*Given a signed 32-bit integer x, return x with its digits reversed. If reversing x causes the value to go outside the signed 32-bit integer range [-231, 231 - 1], then return 0.
Example 1:

Input: x = 123
Output: 321
Example 2:

Input: x = -123
Output: -321

*/

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        if($x == 0)
            return $x;
        $num = abs($x);
        $sign = $x<0 ? -1 : 1;
        $digits = array();
        while($num>0){
            array_push($digits, $num%10);
            $num = floor($num/10);
        }
        $reversedNum = 0;
        $factor = 1;
        for($i = count($digits)-1; $i>=0; --$i) {
            $reversedNum += $digits[$i]*$factor;
            $factor*= 10;
        }
        if(($sign>0 && $reversedNum > 2147483648-1) || ($sign<0 && $reversedNum >2147483648))
            return 0;
        return $sign*$reversedNum;
    }
}